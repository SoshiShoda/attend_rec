<?php
////////////////////////
// sign-inコントローラー
////////////////////////
include_once('../config.php');
include_once('../Models/users.php');
include_once('../util.php');

// ⓵ユーザーが社員番号(employee_id)とパスワードを入力
// ⓶ログインチェック実行
// ⓷-1 ログインに成功した場合
// ⓷-1-1 ユーザー情報をセッションに保存
// ⓷-1-2 ホーム画面(home.php=勤怠入力画面)に遷移
// ⓷-2 ログインに失敗した場合
// ⓷-2-1 ログイン結果をfalseとする。

$try_login_result = null;

if (isset($_POST['employee_id']) && isset($_POST['password'])) {
    $user = findUserAndCheckPassword($_POST['employee_id'], $_POST['password']);
    if ($user) {
        saveUserSession($user);
        header('Location: ' . HOME_URL . 'Controllers/home.php');
        exit;
    } else {
        $try_login_result = false;
    }
};

// 画面表示用の変数
$view_try_login_result = $try_login_result;

// 画面表示
include_once('../Views/sign-in.php');