//課題1. イベントを学習したときのサンプルで画面のどこをクリックしても「ここをクリック」という文字列「だけ」を赤くするように修正
(function($, window) {
    $(function() {
    $('body').on('click', function() {
        $(this).css({'color': 'red'});
    });
    });
})(jQuery, window);
