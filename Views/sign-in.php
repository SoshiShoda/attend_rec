<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>勤怠管理システム | ログイン画面</title>
</head>
<body class="sign-in-body text-center container-fluid p-0">
    <div class="contents w-100 h-100 d-flex align-items-center">
        <div class="background-image container col-5">
            <div class="sign-in-box">
                <h2 class="text-white">勤怠管理システム<br>ログイン</h2>
                <form action="sign-in.php" method="post">

                    <?php if (isset($view_try_login_result) && $view_try_login_result === false) : ?>
                        <div class="alert-warning" role="alert">
                            ログインに失敗しました。社員番号、パスワードが正しいかご確認ください。
                        </div>
                    <?php endif; ?>

                    <input type="text" class="form-control my-3" name="employee_id" placeholder="社員番号" required autofocus>
                    <input type="password" class="form-control my-3" name="password" placeholder="パスワード" required>
                    <button type="submit" class="btn btn-primary btn-lg my-3 w-100">ログイン</button>
                </form>
                <p class="text-white">&copy;2022 xxx, Inc</p>
            </div>
        </div>
    </div>
</body>
</html>