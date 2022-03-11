<?php
///////////////
// recordモデル
///////////////

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
    $query = 'INSERT records (user_id, worked_date, started_at_hour, started_at_minute, ended_at_hour, ended_at_minute) VALUES (?, ?, ?, ?, ?, ?)';
    $statement = $mysqli->prepare($query);
    $statement->bind_param('isssss', $data['user_id'], $data['worked_date'], $data['started_at_hour'], $data['started_at_minute'], $data['ended_at_hour'], $data['ended_at_minute']);
    $response = $statement->execute();

    if ($response === false) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}

/**
 * record1件を取得
 *
 * @param integer $record_id
 * @return void
 */
function findRecord(int $record_id) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました：' . $mysqli->connect_error . "\n";
        exit;
    }

    $record_id = $mysqli->real_escape_string($record_id);

    $query = 'SELECT * FROM records WHERE record_id = "' . $record_id . '"';

    if ($result = $mysqli->query($query)) {
        $response = $result->fetch_array(MYSQLI_ASSOC);
    } else {
        $response = false;
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }
    $mysqli->close();
    return $response;
}

/**
 * 勤怠レコード一覧取得
 *
 * @return void
 */
function findRecords($user) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました：' . $mysqli->connect_error . "\n";
        exit;
    }

    // $user = $mysqli->real_escape_string($user['user_id']);

    // if (isset($_POST['select-month'])) {
        $selected_month = $_POST['select-month'];
    // }

    // record取得のクエリを作成
    $query = <<<SQL
        SELECT
            R.worked_date AS worked_date,
            R.started_at_hour AS started_at_hour,
            R.started_at_minute AS started_at_minute,
            R.ended_at_hour AS ended_at_hour,
            R.ended_at_minute AS ended_at_minute,
            U.user_id AS user_id
        FROM
            records AS R
            JOIN
            users AS U ON U.user_id = R.user_id
        WHERE
            DATE_FORMAT(R.worked_date, '%Y-%m') = '$selected_month'
    SQL;

    // 古い順に並び替え
    $query .= ' ORDER BY R.worked_date ASC';

    $result = $mysqli->query($query);
    if ($result) {
        $response = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        echo 'エラーメッセージ' . $mysqli->error . "\n";
    }

    $mysqli->close();
    return $response;
}

/**
 * record1件を修正するメソッド
 *
 * @param array $data
 * @return void
 */
function updateRecord(array $data) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました：' . $mysqli->connect_error . "\n";
        exit;
    }

    $data['updated_at'] = date('Y-m-s H:i:s');

    $set_columns = [];
    foreach ([
        'worked_date',
        'started_at_hour',
        'started_at_minute',
        'ended_at_hour',
        'ended_at_minute'
    ] as $column) {
        if (isset($data[$column]) && $data[$column] !== '') {
            $set_columns[] = $column . ' = "' . $mysqli->real_escape_string($data[$column]) . '"';
        }
    }

    $query = 'UPDATE records SET ' . join(',', $set_columns);
    $query .= ' WHERE user_id = "' . $data['user_id'] . '" and worked_date = "' . $data['worked_date'] . '"';

    $response = $mysqli->query($query);

    if ($response === false) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }

    $mysqli->close();
    return $response;
}

