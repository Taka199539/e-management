//課題2. フォームの最後のサンプルでメールアドレスとパスワードのチェック処理を「関数」で作成し、#loginをクリックしたときに呼び出すように修正

(function($, window) {

    function emailCheck() {
        var email = $('#email').val();
        if (email == '') {
            alert('メールアドレスを入力してください');
        } else if (email.indexOf('@') < 0) {
            alert('メールアドレスには必ず[@]が必要です');
        }
    }

    function passwordCheck(){
        var password = $('#password').val();
        if (password == '') {
            alert(' パスワードを入力してください');
        } else if (password.length < 6) {
            alert('パスワードは6文字以上です');
        }
    }

    $('#login').on('click', function(e) {
        emailCheck();
        passwordCheck();
    });

})(jQuery, window);
