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
                           <li class="user_name">ユーザー名</li>
                           <li class="punchin_time">開始時間</li>
                           <li class="punchout_time">終了時間</li>
                           <li class="break_time">休憩時間</li>
                       </ul>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <a href="{{ action('User\AttendanceController@add') }}"
                    role="button" class="btn btn-primary">勤務記録作成</a>
                    </div>
                    <div clss="col-md-12 mx-auto">
                      <div class="two wide column center aligned user_csv_container">
                            <button type="submit" id="user_csv_export">CSVで出力する</button>
                      </div>
                    </div>
                    <div class="col-md-4 mx-auto">
                          <div id="calender_container" class="four wide column center aligned">
                              <input type="date">別の月を表示する</input>
                           </div>
                        </div>
                       <div class="col-md-8">
                          {{ csrf_field() }}
                         
                          <a href="punchin_time"
                          role="button" class="btn btn-primary">出勤</a>
                          <a href="punchout_time"
                          role="button" class="btn btn-primary">退勤</a>
                         
                        </div>
                     </div>
                </div>
                <div class="row">
                    <div class="list-work_histories col-md-8 mx-auto">
                          <div class="row">
                          <table class="table table-light">
                            <thead>
                                <tbody>
                            <tr>
                                 <th width=10%>出勤</th>
                                 <th width=10%>退勤</th>
                            </tr>
                                </tbody>
                           </thead>
                <div class="row">
                    <div class="list-work_information col-md-12 mx-auto">
                          <div class="row">
                          <table class="table table-light">
                            <thead>
                                 <th><a href="{{ action('User\AttendanceController@edit')}}">編集</a></th>
                                 <th>日付</th>
                                 <th>休憩</th>
                                 <th>時間外</th>
                                 <th>日報</th>
                            <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
                            <td><a href="{{ action('User\AttendanceController@edit', ['id' => $attendance->id])}}">編集</a></td>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->break_time }}</td>
                            <td>{{ $attendance->out_time }}</td>
                            <td>{{ $attendance->diary }}</td>
                            </tr>
                            @endforeach
                                </tbody>
                           </thead>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
@endsection












































