<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>勤怠管理システム | アカウント作成画面</title>
</head>
<body class="sign-in-body text-center container-fluid p-0">
    <div class="contents w-100 h-100 d-flex align-items-center">
        <div class="background-image container col-5">
            <div class="sign-in-box">
                <h2 class="text-white">勤怠管理システム<br>アカウント作成</h2>
                <form action="sign-up.php" method="post">
                    <input type="text" class="form-control my-3" name="family_name" maxlength="50" placeholder="姓" required autofocus>
                    <input type="text" class="form-control my-3" name="last_name" maxlength="50" placeholder="名" required>
                    <input type="text" class="form-control my-3" name="employee_id" maxlength="254" placeholder="社員番号" required>
                    <input type="email" class="form-control my-3" name="email" maxlength="254" placeholder="会社メールアドレス" required>
                    <input type="password" class="form-control my-3" name="password" minlength="4" maxlength="254" placeholder="パスワード" required>
                    <button type="submit" class="btn btn-primary btn-lg my-3 w-100">登録する</button>
                </form>
                <p class="text-white">&copy;2022 xxx, Inc</p>
            </div>
        </div>
    </div>
</body>
</html>

