@extends('layouts.user')
@section('title', '勤務表')

@section('content')
        <div class="container">
            <div class="row">
               <h2>勤務表</h2>
            </div>
               <div class="row">
                     <div class="col-md-4 mx-auto">
                       <ul class="list-item">
                           @if(!empty($profile))
                           <li>{{ $profile->user_id }} </li>
                           <li>{{ $profile->name }}</li>
                           <li>{{ $profile->start_time }}</li>
                           <li>{{ $profile->end_time}} </li>
                           <li>{{ $profile->break_time}} </li>
                           <li>{{ $profile->status }} </li>
                           @endif
                       </ul>
                    </div>
                <div class="row">
                    <div class="col-md-4">
                    <a href="{{ action('User\AttendanceController@add') }}"
                    role="button" class="btn btn-primary">勤務記録作成</a>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <div id="calender_container" class="four wide column center aligned">
                            <input type="date" value="<?php echo date('Y-m-d');?>">本日の日付</input>
                        </div>
                    </div>
                    <div class="col-md-8">
                          {{ csrf_field() }}
                        <a href="{{ action('User\HistoryController@attendance_start') }}"
                        role="button" input type="submit" class="btn btn-primary">出勤</a>

                        <a href="{{ action('User\HistoryController@attendance_end') }}"
                        role="button" input type="submit" class="btn btn-primary">退勤</a>
                    </div>
                </div>
                <div class="list-work_histories col-md-12 mx-auto">
                          <div class="row">
                          <table class="table table-light">
                            <thead>
                                <tbody>
                            <tr> 
                                 <th width=10%>出勤</th>
                                 <th width=10%>退勤</th>
                            </tr>
                                </tbody>
                            @foreach($histories as $history)
                            <tr>
                                <td>{{ $history->attendance_start }}</td>
                                <td>{{ $history->attendance_end }}</td>
                            </tr>
                            @endforeach
                           </thead>
                <div class="row">
                    <div class="list-work_management col-md-12 mx-auto">
                          <div class="row">
                          <table class="table table-light">
                            <thead>
                                 <th>ID</th>
                                 <th>ユーザーID</th>
                                 <th>日付</th>
                                 <th>休憩</th>
                                 <th>時間外</th>
                                 <th>日報</th>
                            <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
                            <td>{{ $attendance->id }}</td>
                            <td>{{ $attendance->user_id }}</td>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->break_time }}</td>
                            <td>{{ $attendance->out_time }}</td>
                            <td>{{ $attendance->diary }}</td>
                            <td><a href="{{ action('User\AttendanceController@edit', ['id' => $attendance->id])}}">編集</a></td>
                            </tr>
                            @endforeach
                                </tbody>
                           </thead>
                        </table>
                      </div>  
                    </div>
                  </div>
               </div>
            </div>
          </div>
        </div>
@endsection













































