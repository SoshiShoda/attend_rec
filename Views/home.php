<!DOCTYPE html>
<html lang="ja" class="h-100">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>勤怠管理システム | 勤怠入力画面</title>

</head>
<body class="home-body h-100">
    <?php include_once('../Views/common/header.php'); ?>
    <div class="container d-flex">
        <?php include_once('../Views/common/sidebar.php'); ?>
        <main class="col-10 p-4 container">
            <h2 class="mb-4 text-white">勤怠入力画面</h2>
            <hr>
            <p class="text-white">勤怠を入力してください。</p>
            <form action="" method="post" class="mt-3">
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">日付
                            <input type="date" class="form-control" id="date" value="<?php echo date('Y-m-d'); ?>">
                        </b>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">開始
                            <input type="time" step="1800" class="form-control">
                        </b>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">終了
                            <input type="time" step="1800" class="form-control">
                        </b>
                    </div>
                </div>
                <div class="row my-3">
                    <b class="mb-2 text-white">勤務時間</b>
                    <p class="text-white">10時間</p>
                </div>
                <p class="text-decoration-underline text-white">注意：開始時刻および終了時刻は、毎時00分か30分で入力ください。</p>
                <button type="submit" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#test-modal">記録する</button>
            </form>
        </main>
    </div>
</body>
</html>
