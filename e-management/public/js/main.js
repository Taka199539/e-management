/*global jQuery*/
(function($, window) {
                $(function() {
                    $('#get_attendance_start').on('click', function(e) {
                      alert('おはようございます！')
                        var url = '/user/attendance/attendance_start';
        
                        $.ajax({
                            url: url,
                            type: 'get',
                            data: {}
                        }).done(function(data, status, xhr) {
                            $('tbody.histories').append('<tr><td>' + data + '</td><td></td></tr>');
                            var result = JSON.stringify(data);
                            $('#result').val(result);
                        }).fail(function(data, status, err) {
                            var result = JSON.stringify(data);
                            $('#result').val(result);
                        }).always(function() {
                           
                        });

                    });
                    });
                })(jQuery, window);
                
                
(function($, window) {
                $(function() {
                    $('#get_attendance_end').on('click', function(e) {
                        var url = '/user/attendance/attendance_end';
        
                        $.ajax({
                            url: url,
                            type: 'get',
                            data: {}
                        }).done(function(data, status, xhr) {
                            if ('no_attendance_start' === data){
                                alert('出勤の打刻がされていません。');
                            } else {
                                $('tbody.histories tr:last td:last').text(data);
                                alert('お疲れ様でした！');
                            }
                            var result = JSON.stringify(data);
                            $('#result').val(result);
                        }).fail(function(data, status, err) {
                            var result = JSON.stringify(data);
                            $('#result').val(result);
                        }).always(function() {
                            
                        });

                     
                    });
                    });
                })(jQuery, window);
