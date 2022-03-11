// record一覧で任意の月を選択すると非同期でその月のrecordを表示する関数を作成
window.addEventListener('DOMContentLoaded', function () {
    const select_month = document.getElementById('select-month');
    // var revised_month = $(this).data('change-month');

    document.getElementById('select-month').onchange = function () {
        // jQueryのajax通信を利用
        $.ajax({
            type: 'POST',
            url: 'record-ajax.php',
            data: $('#select-month').val('revised_month')
        })
            .done(() => {
                ('#js-ajax-record').html();
            })
            .fail(() => {
                alert('処理中にエラーが発生しました。');
            });
    }
});
