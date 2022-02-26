<?php

// TODO : 勤務時刻入力

/**
 * 勤怠レコードを作成
 *
 * @param array $data
 * @return bool
 */
function createRecord(array $data) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました' . $mysqli->connect_error . "\n";
    };
    $query = 'INSERT records (user_id, date, start_time_hour, start_time_minute, end_time_hour, end_time_minute) VALUES (?, ?, ?, ?, ?, ?)';
    $statement = $mysqli->prepare($query);
    $statement->bind_param('isssss', $data['user_id'], $data['date'], $data['start_time_hour'], $data['start_time_minute'], $data['end_time_hour'], $data['end_time_minute']);
    $response = $statement->execute();

    if ($response === false) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}
