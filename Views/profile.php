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
                <table class="table table-light table-striped" style="width: 700px; min-width: 700px;">
                    <thead>
                        <tr class="text-center">
                            <th scope="col" style="width: 20%;">項目</th>
                            <th scope="col">情報</th>
                        </tr>
                        </thead>
                        <tbody class="text-center" >
                        <tr>
                            <th scope="row">氏名</th>
                            <td><?php echo htmlspecialchars($view_user['family_name']); ?><?php echo htmlspecialchars($view_user['first_name']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">社員番号</th>
                            <td><?php echo htmlspecialchars($view_user['employee_id']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">住所</th>
                            <td><?php echo htmlspecialchars($view_user['address']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">電話番号</th>
                            <td><?php echo htmlspecialchars($view_user['tel']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">メールアドレス</th>
                            <td><?php echo htmlspecialchars($view_user['email']); ?></td>
                        </tr>
                        <tr>
                            <th scope="row">パスワード</th>
                            <td>********</td>
                        </tr>
                        <tr>
                            <th scope="row">入社日</th>
                            <td><?php echo htmlspecialchars($view_user['joined_at']); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#js-modal" style="width: 700px;">社員情報を修正する</button>
            <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true" aria-labelledby="profile-modalLabel">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content p-4">
                            <form action="profile.php" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title">社員情報を編集</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <p>氏名：<?php echo htmlspecialchars($view_user['family_name']); ?><?php echo htmlspecialchars($view_user['first_name']); ?></p>
                                        <p>社員番号：<?php echo htmlspecialchars($view_user['employee_id']); ?></p>
                                        <p class="text-danger">※変更する項目のみ入力してください。</p>
                                        <span>住所</span>
                                        <input type="text" class="form-control mb-3" name="address" value="" maxlength="255">
                                        <span>電話番号</span>
                                        <input type="text" class="form-control mb-3" name="tel" placeholder="" maxlength="12">
                                        <span>メールアドレス</span>
                                        <input type="email" class="form-control mb-3" name="email" placeholder="" maxlength="255">
                                        <span>パスワード</span>
                                        <input type="password" class="form-control mb-3" name="password" placeholder="" maxlength="255">
                                </div>
                                <div class="modal-footer">
                                        <button class="btn btn-reverse btn-outline-primary" data-bs-dismiss="modal">キャンセル</button>
                                        <button class="btn btn-primary" type="submit">保存する</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
