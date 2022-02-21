<?php

include_once('../config.php');
include_once('../util.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}


// TODO:勤務実績登録

// 表示用変数
$view_user = $user;

include_once('../Views/home.php');