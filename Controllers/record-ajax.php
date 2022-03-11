<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/records.php');
// include_once('../Models/records-ajax.php');
include_once('../Models/users.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('HTTP/1.0 404 Not Found');
    exit;
}

if (isset($_POST['select-month'])) {
    findRecords($user);
    echo json_encode($response);
}


