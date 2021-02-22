//課題5. 郵便番号→住所変換で、入力する郵便番号を７桁にまとめるように修正
(function($, window) {
    $(function() {
        $('#zip1').jpostal({
        postcode : [
                '#zip1',
            ],
            address : {
                '#pref'  : '%3',
                '#city'  : '%4',
                '#street'  : '%5'
            }
        });
    });
})(jQuery, window);


//課題6. 「検索」ボタンを追加して、そのボタンを押すまでは「検索しない」ように修正
(function($, window) {
$(function() {
    $('#zip1').jpostal({
    click: '.search_btn',
    postcode : [
            '#zip1',
        ],
        address : {
            '#pref'  : '%3',
            '#city'  : '%4',
            '#street'  : '%5'
        }
    });
});
})(jQuery, window);
