<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/records.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}

// 表示用変数
$view_user = $user;

include_once('../Views/record.php');