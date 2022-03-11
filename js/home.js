// 勤怠入力が正しく行われると「登録完了しました」とメッセージがでる関数を作成

const create_record_btn = document.getElementById('create-record-btn');
create_record_btn.addEventListener('click', function(){
    alert('登録しました。');
})