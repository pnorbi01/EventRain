<?php

const PARAMS = [
    "HOST" => 'localhost',
    "USER" => 'root',
    "PASS" => '',
    "DBNAME" => 'eventrain'
];

define("SITE", "https://localhost/EventRain/");
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "eventrain");
define("SECRET", "gfhUi34xVbds23Qgk");

$dsn = "mysql:host=".PARAMS['HOST'].";dbname=".PARAMS['DBNAME'].";charset=utf8mb4";

$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$actions = ['login', 'register', 'forget'];

$titles = [
    'events.php' => 'Events',
    'index.php' => 'Main Page',
    'admin-panel.php' => 'Admin Panel',
    'edit-profile.php' => 'Edit Profile',
    'login.php' => 'Login',
    'manage-events.php' => 'Manage Events',
    'manage-gifts.php' => 'Manage Gifts',
    'manage-users.php' => 'Manage Users',
    'register.php' => 'Register',
    'create-events.php' => 'Create Event',
    'forgot-password.php' => 'Reset Password',
    'setting-new-password.php' => 'Setting Up New Password',
    'selected-event.php' => 'More Info About Selected Event',
    'modify-selected-event.php' => 'Modify Event',
    'invite-friends-to-event.php' => 'Inviting Friend',
    'selected-invited-event.php' => 'More Info About Invited Event',
    'change-my-status.php' => 'Changing My Status',
    'invited-people.php' => 'Invited People',
    'wishlist.php' => 'Wishlist',
    'my-reserved-gifts.php' => 'My Reserved Gifts'
]; 

$messages = [
    'login.php' => [
        1 => ['style' => 'danger', 'text' =>'Please fill all required fields correctly.'],
        2 => ['style' => 'danger', 'text' => 'Wrong username or password.'],
        3 => ['style' => 'success', 'text' => 'Your account has been activated successfully.'],
        4 => ['style' => 'danger', 'text' => 'Your account is activated already.'],
        5 => ['style' => 'danger', 'text' => 'Something went wrong while activating your account.'],
        6 => ['style' => 'success', 'text' => 'Your password has been changed successfully.'],
        7 => ['style' => 'danger', 'text' => 'Your account is not active, check your email.'],
        8 => ['style' => 'danger', 'text' => 'Your token for reseting password expired.'],
        9 => ['style' => 'danger', 'text' => 'Something went wrong while reseting your password.'],
        10 => ['style' => 'danger', 'text' => 'Your account has been banned permanently.']
        
    ],
    'register.php' => [
        1 => ['style' => 'danger', 'text' => 'Please fill all required fields correctly.'],
        2 => ['style' => 'danger', 'text' =>'Password must be at least 7 characters long.'],
        3 => ['style' => 'danger', 'text' => 'This username is already exists.'],
        4 => ['style' => 'danger', 'text' => 'Invalid e-mail address.'],
        5 => ['style' => 'danger', 'text' => 'Passwords do not match.'],
        6 => ['style' => 'danger', 'text' => 'Something went wrong, try a bit later.'],
        7 => ['style' => 'success', 'text' => 'Registered successfully, check your e-mail and verify your account.'],
        8 => ['style' => 'danger', 'text' => 'This email is already in use.']
    ],
    'forgot-password.php' => [
        1 => ['style' => 'danger', 'text' => 'Email does not exist.'],
        2 => ['style' => 'success', 'text' => 'Recovery email has been sent successfully.'],
        3 => ['style' => 'danger', 'text' => 'Invalid email address.']
    ],
    'setting-new-password.php' => [
        1 => ['style' => 'danger', 'text' => 'Passwords do not match.'],
        2 => ['style' => 'danger', 'text' => 'Something went wrong!.'],
        3 => ['style' => 'danger', 'text' => 'Password must be at least 7 characters long.']
    ],
    'edit-profile.php' => [
        1 => ['style' => 'success', 'text' => 'Changes have been saved successfully.'],
        2 => ['style' => 'danger', 'text' => 'Something went wrong, while updating your datas, please try again.'],
        3 => ['style' => 'danger', 'text' => 'No changes have been made.'],
        4 => ['style' => 'danger', 'text' => 'New passwords do not match.'],
        5 => ['style' => 'danger', 'text' => 'New password must be at least 7 characters long.'],
        6 => ['style' => 'danger', 'text' => 'You entered wrong old password.'],
        7 => ['style' => 'success', 'text' => 'Your password have been changed successfully.'],
        8 => ['style' => 'danger', 'text' => 'No changes have been made at password area.'],
        9 => ['style' => 'danger', 'text' => 'Something went wrong, while updating your password, please try again.'],
        10 => ['style' => 'danger', 'text' => 'No file has been choosen.'],
        11 => ['style' => 'danger', 'text' => 'Error occurred during file upload! Please, try later.'],
        12 => ['style' => 'danger', 'text' => 'File was not uploaded with HTTP POST.'],
        13 => ['style' => 'danger', 'text' => 'File was not uploaded because it is too big.'],
        14 => ['style' => 'danger', 'text' => 'File was not uploaded.'],
        15 => ['style' => 'success', 'text' => 'Your profile picture has been updated successfully.'],
        16 => ['style' => 'success', 'text' => 'Please upload only JPEG or PNG file.']
    ],
    'create-events.php' => [
        1 => ['style' => 'danger', 'text' => 'Something went wrong, while creating event, please try again.'],
        2 => ['style' => 'danger', 'text' => 'Please fill all required fields correctly.']
    ],
    'events.php' => [
        1 => ['style' => 'success', 'text' => 'You have deleted event successfully.'],
        2 => ['style' => 'danger', 'text' => 'Something went wrong, while deleting event, please try again.'],
        3 => ['style' => 'success', 'text' => 'You have created event successfully.'],
        4 => ['style' => 'success', 'text' => 'Event has been updated successfully.'],
        5 => ['style' => 'danger', 'text' => 'Something went wrong, while updating event, please try again.'],
        6 => ['style' => 'success', 'text' => 'You joined the party successfully.'],
        7 => ['style' => 'danger', 'text' => 'Something went wrong, while joining party, please try again.'],
        8 => ['style' => 'success', 'text' => 'You quitted the party successfully..'],
        9 => ['style' => 'danger', 'text' => 'Something went wrong, while quiting party, please try again.'],
    ],
    'invite-friends-to-event.php' => [
        1 => ['style' => 'success', 'text' => 'You have invited your friend successfully.'],
        2 => ['style' => 'danger', 'text' => 'Something went wrong, while inviting your friend, please try again.'],
        3 => ['style' => 'danger', 'text' => 'Please fill all required fields correctly.'],
        4 => ['style' => 'danger', 'text' => 'This user is already invited, reminder sent.']
    ],
    'modify-selected-event.php' => [
        1 => ['style' => 'danger', 'text' => 'No changes have been made.']
    ],
    'manage-users.php' => [
        1 => ['style' => 'success', 'text' => 'User has been banned successfully.'],
        2 => ['style' => 'success', 'text' => 'User has been unbanned successfully.'],
    ],
    'manage-events.php' => [
        1 => ['style' => 'success', 'text' => 'Event has been inactivated successfully.'],
        2 => ['style' => 'success', 'text' => 'Event has been activated successfully.'],
        3 => ['style' => 'success', 'text' => 'Event has been deleted successfully, email sent to organizer.']
    ],
    'change-my-status.php' => [
        1 => ['style' => 'success', 'text' => 'Your status has been changed successfully.'],
        2 => ['style' => 'danger', 'text' => 'No change has been made.'],
        3 => ['style' => 'danger', 'text' => 'Something went wrong, while updating your status, please try again.']
    ],
    'invited-people.php' => [
        1 => ['style' => 'success', 'text' => 'User has been deleted from this event successfully.'],
        2 => ['style' => 'danger', 'text' => 'Something went wrong, while deleting your friend, please try again.']
    ],
    'wishlist.php' => [
        1 => ['style' => 'success', 'text' => 'Gift has been reserved successfully.'],
        2 => ['style' => 'success', 'text' => 'Gift has been removed successfully.'],
        3 => ['style' => 'danger', 'text' => 'Something went wrong, while removing your gift, please try again.'],
        4 => ['style' => 'danger', 'text' => 'Something went wrong, while reserving your gift, please try again.'],
        5 => ['style' => 'danger', 'text' => 'You can not bring more than one gift.']
    ],
    'manage-gifts.php' => [
        1 => ['style' => 'success', 'text' => 'Gift has been deleted successfully, email sent to organizer.']
    ],
];

?>