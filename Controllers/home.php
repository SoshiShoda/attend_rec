<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/records.php');
include_once('../Models/users.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}

// 勤怠実績登録
if (isset($_POST['started_at_hour']) && isset($_POST['started_at_minute']) || isset($_POST['ended_at_hour']) && isset($_POST['ended_at_minute'])) {
    $data = [
        'user_id' => $user['user_id'],
        'worked_date' => $_POST['worked_date'],
        'started_at_hour' => $_POST['started_at_hour'],
        'started_at_minute' => $_POST['started_at_minute'],
        'ended_at_hour' => $_POST['ended_at_hour'],
        'ended_at_minute' => $_POST['ended_at_minute']
    ];
    if ($data) {
        createRecord($data);
        $success_message = "<script type='text/javascript'>alert('勤怠情報を登録しました。')</script>";
        header('Location: ' . HOME_URL . 'Controllers/home.php');
        echo $success_message;
        exit;
    } else {
        echo 'エラー：正しく入力してください。';
    }
}

// 表示用変数
$view_user = $user;

include_once('../Views/home.php');