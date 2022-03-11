<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/records.php');
include_once('../Models/records-ajax.php');
include_once('../Models/users.php');



// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}

$view_records = findRecords($user);


// if (isset($_POST['select-month'])) {
//     exec('findRecords($user) > /dev/null &');
//     // findRecords($user);
// }

if (isset($_POST['worked_date']) && isset($_POST['started_at_hour']) && isset($_POST['started_at_minute']) && isset($_POST['ended_at_hour']) && isset($_POST['ended_at_minute'])) {
    $data = [
        'user_id' => $user['user_id'],
        'worked_date' => $_POST['worked_date'],
        'started_at_hour' => $_POST['started_at_hour'],
        'started_at_minute' => $_POST['started_at_minute'],
        'ended_at_hour' => $_POST['ended_at_hour'],
        'ended_at_minute' => $_POST['ended_at_minute'],
    ];

    if (updateRecord($data)) {
        $records = findRecords($user['user_id']);
        saveUserSession($user);
        header('Location: ' . HOME_URL . 'Controllers/record.php');
        exit;
    }
}




// 表示用変数
// $view_try_register_record = $try_register_record;
$view_user = $user;

include_once('../Views/record.php');