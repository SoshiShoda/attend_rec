<?php
/////////////////////
// ユーザーデータ処理
/////////////////////

/**
 * ユーザー作成メソッド
 *
 * @param array $data
 * @return bool
 */
function createUser(array $data) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました：' . $mysqli->connect_error . "\n";
        exit;
    }

    $query = 'INSERT INTO users (family_name, last_name, employee_id, password) VALUES (?,?,?,?)';
    $statement = $mysqli->prepare($query);
    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    $statement->bind_param('ssss', $data['family_name'], $data['last_name'], $data['employee_id'], $data['password']);
    $response = $statement->execute();

    if ($response === false) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }

    $statement->close();
    $mysqli->close();

    return $response;
}

/**
 * ユーザー情報更新
 *
 * @param array $data
 * @return bool
 */
function updateUser(array $data) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗しました：' . $mysqli->connect_error . "\n";
        exitl;
    }
    $data['updated_at'] = date('Y-m-d H:i:s');

    if (isset($data['password'])) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    }

    // 更新するカラムを準備
    $set_columns = [];
    foreach ([
        'belongs_to',
        'address',
        'tel',
        'email',
        'password'
    ] as $column) {
        if (isset($data[$column]) && $data[$column] !== '') {
            $set_columns[] = $column . ' = "' . $mysqli->real_escape_string($data[$column]) . '"';
        }
    }

    $query = 'UPDATE users SET ' . join(',', $set_columns);
    $query .= ' WHERE id = "' . $mysqli->real_escape_string($data['id']) . '"';

    $response = $mysqli->query($query);
    if ($response === false) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }
    $mysqli->close();
    return $response;
}

/**
 * ユーザー情報取得、ログインチェック
 *
 * @param string $employee_id
 * @param string $password
 * @return array|false
 */
function findUserAndCheckPassword(string $employee_id, string $password) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo '接続に失敗しました：' . $mysqli->connect_error . "\n";
    };

    $employee_id = $mysqli->real_escape_string($employee_id);

    $query = 'SELECT * FROM users WHERE employee_id = "' . $employee_id . '"';
    $result = $mysqli->query($query);
    if (!$result) {
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
        $mysqli->close;
        return false;
    };

    $user = $result->fetch_array(MYSQLI_ASSOC);
    if (!$user) {
        $mysqli->close();
        return false;
    }
    if (!password_verify($password, $user['password'])) {
        $mysqli->close();
        return false;
    }

    $mysqli->close();
    return $user;
};

/**
 * ユーザーを1件取得
 *
 * @param int $user_id
 * @return array|false
 */
function findUser(int $user_id) {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) {
        echo 'MySQLの接続に失敗ました：' . $mysqli->connect_error . "\n";
        exit;
    }

    $user_id = $mysqli->real_escape_string($user_id);

    // ユーザー検索クエリを作成
    $query = <<<SQL
        SELECT
            U.id,
            U.user_id,
            U.employee_id,
            U.password,
            U.family_name,
            U.last_name,
            U.belongs_to,
            U.address,
            U.tel,
            U.email,
            U.joined_at
        FROM
            users AS U
        WHERE
            U.id = '$user_id'
    SQL;

    if ($result = $mysqli->query($query)) {
        $response = $result->fetch_array((MYSQLI_ASSOC));
    } else {
        $response = false;
        echo 'エラーメッセージ：' . $mysqli->error . "\n";
    }

    $mysqli->close();

    return $response;
};



