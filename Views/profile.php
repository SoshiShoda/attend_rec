<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>勤怠管理システム | 社員情報画面</title>

</head>
<body class="home-body h-100">
    <?php include_once('../Views/common/header.php'); ?>
    <div class="container d-flex">
        <?php include_once('../Views/common/sidebar.php'); ?>
        <main class="col-10 p-4 container">
            <h2 class="mb-4 text-white">社員情報</h2>
            <hr>
            <div class="table-box">
                <table class="table text-white">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">項目</th>
                            <th scope="col">情報</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="text-center" >
                        <tr>
                            <th scope="row">氏名</th>
                            <td><?php echo htmlspecialchars($view_user['family_name']); ?><?php echo htmlspecialchars($view_user['last_name']); ?></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">社員番号</th>
                            <td><?php echo htmlspecialchars($view_user['employee_id']); ?></td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">住所</th>
                            <td><?php echo htmlspecialchars($view_user['address']); ?></td>
                            <td>
                                <form action="" method="post">
                                    <button class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#js-modal">修正する</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">電話番号</th>
                            <td><?php echo htmlspecialchars($view_user['tel']); ?></td>
                            <td>
                                <form action="" method="post">
                                    <button class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#js-modal">修正する</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">メールアドレス</th>
                            <td><?php echo htmlspecialchars($view_user['email']); ?></td>
                            <td>
                                <form action="" method="post">
                                    <button class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#js-modal">修正する</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">パスワード</th>
                            <td>********</td>
                            <td>
                                <form action="" method="post">
                                    <button class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#js-modal">修正する</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">入社日</th>
                            <td><?php echo htmlspecialchars($view_user['joined_at']); ?></td>
                            <td>
                            </td>
                        </tr>
                        <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true" aria-labelledby="profile-modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="profile.php" method="post">
                                        <div class="modal-header">
                                            <h5 class="modal-title">社員情報を編集</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <p>氏名：<?php echo htmlspecialchars($view_user['family_name']); ?><?php echo htmlspecialchars($view_user['last_name']); ?></p>
                                                <p>社員番号：<?php echo htmlspecialchars($view_user['employee_id']); ?></p>
                                            </div>
                                            <div>>
                                                <input type="text" class="form-control mb-4" name="address" value="<?php echo htmlspecialchars($view_user['address']); ?>" maxlength="255">
                                                <input type="text" class="form-control mb-4" name="tel" value="<?php echo htmlspecialchars($view_user['tel']); ?>" maxlength="12">
                                                <input type="email" class="form-control mb-4" name="email" value="<?php echo htmlspecialchars($view_user['email']); ?>" maxlength="255" required>
                                                <input type="password" class="form-control mb-4" name="password" value="<?php echo htmlspecialchars($view_user['password']); ?>" maxlength="255" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                                <button class="btn btn-reverse" data-bs-dismiss="modal">キャンセル</button>
                                                <button class="btn" type="submit">保存する</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
