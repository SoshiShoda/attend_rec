<?php
// エラー表示設定
ini_set('display_errors', 1);

// 日本時刻適用
date_default_timezone_set('Asia/Tokyo');

// ディレクトリの定数化
define('HOME_URL', '/attendRec/');

// データベース接続情報
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'attend_rec');