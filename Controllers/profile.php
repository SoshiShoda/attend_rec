<?php

include_once('../config.php');
include_once('../util.php');
include_once('../Models/users.php');

// ログインチェック
$user = getUserSession();
if (!$user) {
    header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
}

// ユーザー情報更新
if (isset($_POST['address']) || isset($_POST['tel']) || isset($_POST['email']) || isset($_POST['password'])) {
    $data = [
        'user_id' => $user['user_id'],
        'address' => $_POST['address'],
        'tel' => $_POST['tel'],
        'email' => $_POST['email'],
    ];

    if (isset($_POST['password']) && $_POST['password'] !== '') {
        $data['password'] = $_POST['password'];
    }

    if (updateUser($data)) {
        // 更新後のユーザー情報をセッションに保存しなおす
        $user = findUser($user['user_id']);
        saveUserSession($user);
    };

    // リロード
    header('Location: ' . HOME_URL . 'Controllers/profile.php');
    exit;

}


// 表示用変数
$view_user = $user;

include_once('../Views/profile.php');