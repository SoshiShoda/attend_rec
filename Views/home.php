<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <?php include_once('../Views/common/head.php'); ?>
    <title>Document</title>
</head>
<body class="h-100">
    <?php include_once('../Views/common/header.php'); ?>
    <div class="container d-flex">
    <?php include_once('../Views/common/sidebar.php'); ?>
        <main class="col-10 p-4">
            <h2 class="mb-4 text-primary text-white" id="h2" >勤怠入力</h2>
            <p class="text-white fw-bold fs-5" id="note" >【注意】<br>記録済みの勤怠を修正する場合は「勤怠照会」→該当する日の「修正する」から修正してください。<br>このページから修正を試みるとエラーになります。</p>
            <form action="home.php" method="post" class="mt-3">
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">日付
                            <input type="date" class="form-control" name="worked_date" id="worked_date" value="<?php echo date('Y-m-d'); ?>"  required>
                        </b>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">開始</b>
                        <div class="d-flex">
                            <input type="number" class="form-control-sm col-3" min="0" max="24" id="start-time-hour" name="started_at_hour" required>
                            <p class="text-white fs-5 my-auto">時</p>
                            <input type="number" class="form-control-sm col-3" step="30" min="15" max="45" id="start-time-minute" name="started_at_minute" required>
                            <p class="text-white fs-5 my-auto">分</p>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-3">
                        <b class="text-white">終了</b>
                        <div class="d-flex">
                            <input type="number" class="form-control-sm col-3" min="0" max="24" id="end-time-hour" name="ended_at_hour" required>
                            <p class="text-white fs-5 my-auto">時</p>
                            <input type="number" class="form-control-sm col-3" step="30" min="15" max="45" id="end-time-minute" name="ended_at_minute" required>
                            <p class="text-white fs-5 my-auto">分</p>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <b class="mb-2 text-white">勤務時間</b>
                    <p class="text-white">10時間</p>
                </div>
                <p class="text-decoration-underline text-white">注意：開始時刻および終了時刻は、毎時15分か45分で入力ください。</p>
                <button type="submit" class="btn btn-primary btn-lg" id="create-record-btn">記録する</button>
            </form>
        </main>
        <script src="../js/home.js"></script>
</body>
</html>