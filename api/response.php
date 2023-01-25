<?php

function sendUnauthorizedResponse() {
    header('Content-Type: application/json; charset=utf-8');
    header("HTTP/1.1 401 Unauthorized");
    $response["message"] = "Unauthorized";
    echo json_encode($response);
    exit;
}

function sendBadRequestResponse() {
    header('Content-Type: application/json; charset=utf-8');
    header("HTTP/1.1 400 Bad request");
    $response["message"] = "Bad request";
    echo json_encode($response);
    exit;
}

function sendOkResponse($response) {
    header('Content-Type: application/json; charset=utf-8');
    header("HTTP/1.1 200 OK");
    echo json_encode($response);
    exit;
}

function sendServerErrorResponse($response) {
    header("HTTP/1.1 500 Server error");
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);
    exit;
}

function sendNotFoundResponse() {
    header('Content-Type: application/json; charset=utf-8');
    header("HTTP/1.1 404 Not found");
    $response["message"] = "Not found";
    echo json_encode($response);
    exit;
}