<?php

if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0) {
    header('Location: https://'.$_SERVER['HTTP_HOST']);
    exit;
}

error_log('======== POST =========');
error_log(print_r($_POST, true));
error_log('======== INPUT =========');
error_log(file_get_contents("php://input"));
error_log('=====================');
