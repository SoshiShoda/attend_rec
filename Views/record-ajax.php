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