{"filter":false,"title":"work05.js","tooltip":"/work2/work05.js","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":19},"action":"insert","lines":["//課題3. getJSON()で書き換え","(function($, window) {","    $(function() {","    alert('first');","    $('#get_bank_list').on('click', function(e) {","        alert('click');","        var url = 'https://raw.githubusercontent.com/zengin-code/source-data/master/data/banks.json';","","        $.getJSON({","        url: url,","        type: 'get',","        data: {}","        }).done(function(data, status, xhr) {","        alert('done');","        var result = JSON.stringify(data);","        $('#result').val(result);","        }).fail(function(data, status, err) {","        alert('fail');","        var result = JSON.stringify(data);","        $('#result').val(result);","        }).always(function() {","        alert('always');","        });","","        alert('under ajax');","    });","    alert('last');","    });","})(jQuery, window);"],"id":1}],[{"start":{"row":28,"column":19},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":2}]]},"ace":{"folds":[],"scrolltop":360,"scrollleft":0,"selection":{"start":{"row":29,"column":0},"end":{"row":29,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"start","mode":"ace/mode/javascript"}},"timestamp":1613288721936,"hash":"0500661575b6a01749dabbf2187dfde03b15b874"}