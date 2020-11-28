@extends('layouts.user')
@section('title', '勤務表')

@section('content')
       <div class="container">
           <div class="row">
               <h2>勤務表</h2>
           </div>
           <div class="row">
               <div class="col-md-4">
                       <div class="header" id="user_name"></div>
                       <span id="user_email"></span>
                       <div class="ui divided selection list">
                           <div class='item'>
                               <div class="ui blue horizontal label">開始時間</div>
                               <span id="start_time"></span>
                           </div>
                           <div class='item'>
                               <div class="ui blue horizontal label">終了時間</div>
                               <span id="end_time"></span>
                           </div>
                           <div class='item'>
                               <div class="ui blue horizontal label">休憩時間</div>
                               <span id="break_time"></span>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div id="year_first_calender_container" class="four wide column center aligned">
                               <input type="date">別の月を表示する</input>
                           </div>
                           
                           <div class="two wide column center aligned">
                               <div class="ui button fluid">
                                   <button class="ui blue button" id="today_go">出勤</button>
                               </div>
                           </div>
                           
                           <div class="two wide column center aligned">
                               <div class="ui button fluid">
                                   <button class="ui blue button" id="today_out">退勤</button>
                               </div>
                           </div>
                           
                           <div class="two wide column center aligned user_csv_container" style="padding-left:3rem;">
                               <div class="ui button fluid">
                                   <button class="ui positive button" id="user_csv_export">CSVで出力する</button>
                               </div>
                           </div>
                           
                           <table class="ui selectable celled blue table">
                               <thead>
                                   <tr>
                                       <th><a href="{{ action('User\AttendanceController@edit') }}">編集</a></th>
                                       <th>区分</th>
                                       <th>日付</th>
                                       <th>開始</th>
                                       <th>所定終了</th>
                                       <th>終了</th>
                                       <th>休憩</th>
                                       <th>実働</th>
                                       <th>時間外</th>
                                       <th>日報</th>
                                   </tr>
                             </thead>
                        </table>
                    </div>
               </div>
           </div>
       </div>
@endsection


