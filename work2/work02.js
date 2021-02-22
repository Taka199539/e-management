(function($, window) {
    $(function() {
        //課題1. <h2>を非表示ではなく削除する。
        $('h2').remove();
        //課題2. #indexにtext()メソッドとhtmlメソッド(パラメータ無し)を実行し、違いを比較。
        $('#index').text();
        //課題3. ul#indexの最後に<li>メソッド</li>を追加
        $('#index').append('<li>メソッド</li>');
        //課題4. ul#indexの子要素<li>それぞれ文字列の長さをalertする
        $('#index').find('li').each(function() {
            alert($(this).text().length + '文字');
        });
        //課題5. 4でalertではなく、各文字列の最後にその長さを追加
        $('#index').find('li').each(function() {
            var count = ($(this).text().length);
            $(this).append(count);
        });
    });
})(jQuery, window);
