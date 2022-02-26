<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/records.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}

// 勤怠実績登録
if (isset($_POST['start_time_hour']) && isset($_POST['start_time_minute']) || isset($_POST['end_time_hour']) && isset($_POST['end_time_minute'])) {
    $data = [
        'user_id' => $user['user_id'],
        'date' => $_POST['date'],
        'start_time_hour' => $_POST['start_time_hour'],
        'start_time_minute' => $_POST['start_time_minute'],
        'end_time_hour' => $_POST['end_time_hour'],
        'end_time_minute' => $_POST['end_time_minute']
    ];
    createRecord($data);
    header('Location: ' . HOME_URL . 'Controllers/record.php');
    exit;
}


// 表示用変数
$view_user = $user;

include_once('../Views/home.php');