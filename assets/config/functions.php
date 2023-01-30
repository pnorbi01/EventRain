<?php
require_once("config.php");
require_once("mail/mail.php");

function getCurrentPage(): string
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

/**
 * Function redirects user to given url
 *
 * @param string $url
 */
function redirection($url)
{
    header("Location:$url");
    exit();
}

function isAuthenticated() {
    return isset($_SESSION['username']) && isset($_SESSION['id_user']);
}

/**
 * Function checks that login parameters exists in users_web table
 *
 * @param string $username
 * @param string $password
 * @return array
 */
function checkUserLogin($username, $enteredPassword)
{
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT user_id, password, active, email FROM users 
            WHERE username = :username LIMIT 0,1";

    $query = $pdo->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    $data = [];

    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            if($result["active"] == 0) {
                redirection(SITE."login.php?m=7");
            }
            if($result["active"] == -1){
                redirection(SITE."login.php?m=10");
            }
            $data['id_user'] = (int)$result['user_id'];
            $registeredPassword = $result['password'];
            $data['email'] = $result['email'];
        }

        if (!password_verify($enteredPassword, $registeredPassword)) {
            $data = [];
        }
    }
    return $data;

}


/**
 * Function checks that user exists in users table
 *
 * @param $username
 * @return bool
 */
function existsUser($username)
{
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT user_id FROM users
            WHERE username = :username AND (registration_expires> now() OR active ='1')";

    $query = $pdo->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0)
        return true;
    else
        return false;
}

function existsEmail($email)
{
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT user_id FROM users
            WHERE email = :email";

    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0)
        return true;
    else
        return false;
}



/**
 * Function registers user and returns id of created user
 *
 * @param $username
 * @param $password
 * @param $firstname
 * @param $lastname
 * @param $email
 * @param $code
 * @return int
 */
function registerUser($username, $password, $firstname, $lastname, $email, $token)
{
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, password, firstname, lastname, email, token, registration_expires, active)
             VALUES (:username, :password, :firstname, :lastname, :email, :token, DATE_ADD(now(),INTERVAL 1 DAY), 0)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':password', $passwordHashed, PDO::PARAM_STR);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':token', $token, PDO::PARAM_STR);


    $query->execute();

    return $pdo->lastInsertId();

}

/**
 * Function creates code with given length and returns it
 *
 * @param $length
 * @return string
 */
function createCode($length)
{
    $down = 97;
    $up = 122;
    $i = 0;
    $code = "";


    $div = mt_rand(3, 9);

    while ($i < $length) {
        if ($i % $div == 0)
            $character = strtoupper(chr(mt_rand($down, $up)));
        else
            $character = chr(mt_rand($down, $up));
        $code .= $character;
        $i++;
    }
    return $code;
}

/**
 * Function tries to send email with activation code
 *
 * @param $username
 * @param $email
 * @param $code
 * @return bool
 */
function sendData($username, $email, $token)
{
    $url = SITE."active.php?token=$token";
    $body = "Dear $username,";
    $body .= "<br>To activate your account click on <a href='".$url."'>this</a> link.";
    return sendMail($email, "Registration", $body);
}

/**
 * Function inserts data in database for e-mail sending failure
 *
 * @param $id_user_web
 */
function addEmailFailure($id_user_web)
{
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "INSERT INTO user_email_failures (user_id) VALUES (:id)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id_user_web, PDO::PARAM_INT);

    $query->execute();
}

function insertToken($id, $token) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "INSERT INTO forgotten_passwords (user_id, token) VALUES (:id, :token)";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->bindParam(':token', $token, PDO::PARAM_STR);

    $query->execute();
}

function sendPasswordRecoveryEmail($username, $email, $token)
{
    $url = SITE . "setting-new-password.php?token=$token";
    $body = "Dear $username,";
    $body .= "<br>Click on <a href='".$url."'>this</a> link to reset your password.";
    return sendMail($email, "Forgotten password", $body);
}

function sendFriendInvitation($email, $eventName)
{
    $url = SITE . "index.php";
    $user = $_SESSION["username"];
    $body = "Dear, <strong>User</strong>";
    $body .= "<br><br>You got event invitation from: <strong>$user</strong>";
    $body .= "<br>Event's name: <strong>$eventName</strong>";
    $body .= "<br><br>Visit our <strong><a href='".$url."'>site</a></strong> to get more informations about the upcoming event!";
    return sendMail($email, "Event Invitation", $body);
}

function sendFriendInvitationReminder($email, $eventName)
{
    $url = SITE . "index.php";
    $user = $_SESSION["username"];
    $body = "Dear, <strong>User</strong>";
    $body .= "<br><br>You got event invitation reminder from: <strong>$user</strong>";
    $body .= "<br>Event's name: <strong>$eventName</strong>";
    $body .= "<br>Hurry up to not miss this event!";
    $body .= "<br><br>Visit our <strong><a href='".$url."'>site</a></strong> to get more informations about the upcoming event!";
    return sendMail($email, "Event Invitation Reminder", $body);
}

function sendDeletedEventEmail($email, $eventName, $organizer)
{
    $body = "Dear, <strong>$organizer</strong>";
    $body .= "<br><br>Your event has been deleted permanently, because it was against our rules!";
    $body .= "<br>Deleted event: <strong>$eventName</strong>";
    $body .= "<br><br>If you do not agree please contact our Support!";
    return sendMail($email, "Deleted Event", $body);
}

function sendDeletedGiftEmail($email, $eventName, $organizer, $gift)
{
    $body = "Dear, <strong>$organizer</strong>";
    $body .= "<br><br>Your gift (<strong>$gift</strong>) has been deleted permanently from event (<strong>$eventName</strong>)!";
    $body .= "<br>Our Support came to this decision, because your gift was against our rules!";
    $body .= "<br><br>If you do not agree please contact our Support!";
    return sendMail($email, "Deleted Gift", $body);
}


function deleteToken($token) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "DELETE FROM forgotten_passwords WHERE token = :token";

    $query = $pdo->prepare($sql);
    $query->bindParam(':token', $token, PDO::PARAM_STR);

    $query->execute();
}

function isAdmin($id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT level FROM users WHERE user_id = :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        return $result["level"] == "admin";
    }
    else {
        return false;
    }
}

function banUser($user_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE users SET active = :active WHERE user_id = $user_id";

    $active = -1;

    $query = $pdo->prepare($sql);
    $query->bindParam(':active', $active, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        echo "manage-users.php?m=1";
    }
}

function unbanUser($user_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE users SET active = :active WHERE user_id = $user_id";

    $active = 1;

    $query = $pdo->prepare($sql);
    $query->bindParam(':active', $active, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        echo "manage-users.php?m=2";
    }
}

function setInactive($event_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE events SET event_active = :active WHERE event_id = $event_id";

    $active = "inactive";

    $query = $pdo->prepare($sql);
    $query->bindParam(':active', $active, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        echo "manage-events.php?m=1";
    }
}

function setActive($event_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "UPDATE events SET event_active = :active WHERE event_id = $event_id";

    $active = "active";

    $query = $pdo->prepare($sql);
    $query->bindParam(':active', $active, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        echo "manage-events.php?m=2";
    }
}

function deleteEvent($event_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $selectedEventSql = "SELECT * FROM events, users WHERE events.event_id = :id AND events.user_id = users.user_id";

    $selectedEventQuery = $pdo->prepare($selectedEventSql);
    $selectedEventQuery->bindParam(':id', $event_id, PDO::PARAM_INT);
    $selectedEventQuery->execute();
    $selectedEventResult = $selectedEventQuery->fetch();

    if ($selectedEventQuery->rowCount() == 1) {
        $eventName = $selectedEventResult["event_name"];
        $organizer = $selectedEventResult["username"];
        $email = $selectedEventResult["email"];
    }

    $sql = "DELETE FROM events WHERE event_id = :event_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $query->execute();

    if ($query->rowCount() > 0) {
        sendDeletedEventEmail($email, $eventName, $organizer);
        echo "manage-events.php?m=3";
    }
}

function deleteGift($gift_id) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $selectedGiftSql = "SELECT * FROM gifts, events, users WHERE gifts.gift_id = :id AND gifts.event_id = events.event_id AND events.user_id = users.user_id";

    $selectedGiftQuery = $pdo->prepare($selectedGiftSql);
    $selectedGiftQuery->bindParam(':id', $gift_id, PDO::PARAM_INT);
    $selectedGiftQuery->execute();
    $selectedGiftResult = $selectedGiftQuery->fetch();

    if ($selectedGiftQuery->rowCount() == 1) {
        $gift = $selectedGiftResult["name"];
        $eventName = $selectedGiftResult["event_name"];
        $email = $selectedGiftResult["email"];
        $organizer = $selectedGiftResult["username"];
    }

    $sql = "DELETE FROM gifts WHERE gift_id = :gift_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':gift_id', $gift_id, PDO::PARAM_INT);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo "manage-gifts.php?m=1";
        sendDeletedGiftEmail($email, $eventName, $organizer, $gift);
    }
}

function getIpAddress(): string
{

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        $ip = "unknown";
    }

    return $ip;
}

function getCountryCode(string $ipAddress):array
{
    $url = "https://api.country.is/$ipAddress";
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    $result = json_decode($response, true);

    return $result;
}

function insertIntoGiftsTable ($event_id, $name) {

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "INSERT INTO gifts (event_id, name) VALUES (:event_id, :name)";
    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $query->bindParam(':name', $name, PDO::PARAM_STR);

    $query->execute();
}

function checkIfAlreadyInvited ($event_id, $email) {

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT * FROM invitations, events WHERE invitations.event_id = :event_id AND events.event_id = invitations.event_id AND invitations.invited_user_email = :email";
    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $event_id, PDO::PARAM_INT);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();
    
    if($query->rowCount() > 0) {
        return $result["event_name"];
    }

    return null;
}

function dataExists($selectField, $selectTable, $whereFields, $whereValues): bool {

    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT $selectField FROM $selectTable";

    $where = " WHERE $whereFields[0] = :$whereFields[0] AND $whereFields[1] = :$whereFields[1]";

    $sql .= $where;

    $query = $pdo->prepare($sql);
    $query->bindParam(":$whereFields[0]", $whereValues[0], PDO::PARAM_INT);
    $query->bindParam(":$whereFields[1]", $whereValues[1], PDO::PARAM_STR);

    $query->execute();

    return $query->rowCount() > 0 ? true : false;
}

function isClosed($eventId) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT event_close FROM events WHERE event_id = :id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $eventId, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        $eventClose = date('F j, Y, g:i A', strtotime($result["event_close"]));
        if(date('F j, Y, g:i A') > $eventClose) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }
}

function isOwner($eventId, $user) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT * FROM events WHERE event_id = :event_id AND user_id = :user_id";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $query->bindParam(':user_id', $user, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        return true;
    }
    else {
        return false;
    }
}

function isGoing($eventId, $email){
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $sql = "SELECT event_id, invited_user_email, status FROM invitations WHERE event_id = :event_id AND invited_user_email = :email";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        if($result["status"] == "accepted" || $result["status"] == "joined"){
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }

}

function isValidEvent($eventId) {
    global $dsn, $pdoOptions;
    $pdo = connectDatabase($dsn, $pdoOptions);

    $active = "active";

    $sql = "SELECT event_id, event_active FROM events WHERE event_id = :event_id AND event_active = :event_active";

    $query = $pdo->prepare($sql);
    $query->bindParam(':event_id', $eventId, PDO::PARAM_INT);
    $query->bindParam(':event_active', $active, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if ($query->rowCount() == 1) {
        return true;
    }
    else {
        return false;
    }

}