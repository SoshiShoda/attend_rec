<?php
////////////////////////
// sign-upコントローラー
////////////////////////
include_once('../config.php');
include_once('../Models/users.php');
include_once('../util.php');

if (isset($_POST['family_name']) && isset($_POST['last_name']) && isset($_POST['employee_id']) && isset($_POST['password'])) {
    $data = [
        'family_name' => $_POST['family_name'],
        'last_name' => $_POST['last_name'],
        'employee_id' => $_POST['employee_id'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    $length_last_name = mb_strlen($data['family_name']);
    if ($length_last_name < 1 || $length_last_name >50) {
        $error_messages[] = '姓は50文字未満にしてください。';
    };
    $length_last_name = mb_strlen($data['family_name']);
    if ($length_last_name < 1 || $length_ >50) {
        $error_messages[] = '名は50文字未満にしてください。';
    };
    if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $error_messages[] = 'メールアドレスが不正です。';
    };

    if (createUser($data)) {
        header('Location: ' . HOME_URL . 'Controllers/sign-in.php');
        exit;
    }

}

include_once('../Views/sign-up.php');