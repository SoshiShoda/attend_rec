<?php
///////////////////
// 汎用的なメソッド
///////////////////

/**
 * ユーザー情報をセッションに保存
 *
 * @param array $user
 * @return void
 */
function saveUserSession(array $user) {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['USER'] = $user;
}

/**
 * ユーザー情報をセッションから削除
 *
 * @return void
 */
function deleteUserSession(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    unset($_SESSION['USER']);
}

/**
 * セッションのユーザー情報を取得
 *
 * @return array|false
 */
function getUserSession(){
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['USER'])) {
        return false;
    }
    $user = $_SESSION['USER'];
    return $user;
}