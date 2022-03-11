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
            <h2 class="mb-4 text-white">勤怠修正画面</h2>
            <hr>
            <form action="record.php" method="POST" class="col-5 d-flex m-2">
                <input id="select-month" type="month" class="form-control my-2" data-change-month=<?php echo date('Y-m'); ?> name="select-month" value="<?php echo date('Y-m'); ?>">
                <button type="submit" class="form-control btn-primary m-2" id="submit">表示する月を変更</button>
            </form>
            <table class="table table-sm text-white" style="width: 70%;" id="js-ajax-record">
                <thead>
                    <tr class="text-center">
                        <th scope="col">日付</th>
                        <th scope="col">開始</th>
                        <th scope="col">終了</th>
                        <th scope="col">勤務時間</th>
                        <th scope="col">修正</th>
                    </tr>
                </thead>
                <?php if(empty($view_records)): ?>
                    <p class="text-white">記録がありません。</p>
                <?php else : ?>
                    <tbody class="text-center">
                        <?php foreach($view_records as $view_record): ?>
                            <tr class="">
                                <th scope="row align-contents-center"><?php echo htmlspecialchars($view_record['worked_date']); ?></th>
                                <td><?php echo htmlspecialchars($view_record['started_at_hour']); ?>:<?php echo htmlspecialchars($view_record['started_at_minute']); ?></td>
                                <td><?php echo htmlspecialchars($view_record['ended_at_hour']); ?>:<?php echo htmlspecialchars($view_record['ended_at_minute']); ?></td>
                                <td></td>
                                <td>
                                    <form action="" method="post">
                                        <button type="button" class="form-control btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#revise-modal">修正する</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                        <!-- <tr class="fw-bold">
                        <th scope="row">合計</th>
                        <td></td>
                        <td></td>
                        <td>50時間</td>
                        <td></td> -->
                    </tr>
                </tbody>
                <?php endif; ?>
            </table>

            <!-- 勤怠修正画面（modal） -->
            <div class="modal fade" id="revise-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="record.php" method="post" class="mt-3">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">勤怠を修正する</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row my-3">
                                    <div class="col-5">
                                        <b class="">日付
                                            <input type="date" class="form-control" name="worked_date" id="worked_date" value="<?php echo date('Y-m-d'); ?>" required>
                                        </b>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-5">
                                        <b class="">開始</b>
                                        <div class="d-flex">
                                            <input type="number" class="form-control-sm col-5" min="0" max="24" name="started_at_hour" required>
                                            <p class="fs-5 my-auto">時</p>
                                            <input type="number" class="form-control-sm col-5" step="30" min="15" max="45" name="started_at_minute" required>
                                            <p class="fs-5 my-auto">分</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-5">
                                        <b class="">終了</b>
                                        <div class="d-flex">
                                            <input type="number" class="form-control-sm col-5" min="0" max="24" name="ended_at_hour" required>
                                            <p class="fs-5 my-auto">時</p>
                                            <input type="number" class="form-control-sm col-5" step="30" min="15" max="45" name="ended_at_minute" required>
                                            <p class="fs-5 my-auto">分</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <b class="mb-2">勤務時間</b>
                                    <p class="">10時間</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                                <button type="submit" class="btn btn-primary">上書きする</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../js/records.js"></script>
    <script src="../js/records-ajax.js"></script>
    <!-- <script>
        body.onload = function (){
            document.getElementById('submit').click();
        }
    </script> -->
</body>
</html>