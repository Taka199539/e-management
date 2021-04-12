@extends('layouts.user')
@section('title', '勤務表')

@section('content')
        <div class="container">
            <div class="row">
               <h2>勤務表</h2>
            </div>
            <div class="row">
                    <div class="col-md-4 mx-auto">
                      <section>
                       <h3>従業員ステータス</h3>
                       <ul class="profile_list">
                           @if(!empty($profile))
                           <li>開始時間 : {{ $profile->start_time }}</li>
                           <li>終了時間 : {{ $profile->end_time}} </li>
                           <li>休憩時間 : {{ $profile->break_time}} </li>
                           <li>勤務形態 : {{ $profile->status }} </li>
                           @endif
                       </ul>
                       </section>
                    </div>
                <div class="row">
                    <div class="col-md-4">
                    <a href="{{ action('User\AttendanceController@add') }}"
                    role="button" class="btn btn-primary">勤務記録作成</a>
                    </div>
                    <div class='col-md-8'>
                     <div class="form-group row">
                     <form action={{ action('User\AttendanceController@index')}} method="GET">
                     <input type="date" name="from"value="{{ $from_date }}"  placeholder="from_date">
                     <span class="mx-6 text-grey">~</span>
                     <input type="date" name="until" value="{{ $until_date }}" placeholder="until_date">
                     {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" name='index'value="検索">
                    </form>
                     </div>
                    </div>
                    <div class="col-md-8">
                          {{ csrf_field() }}
                        <input type="submit" id='get_attendance_start'  value='出勤' class="btn btn-primary">

                        <input type="submit" id='get_attendance_end' value='退勤' class="btn btn-primary">
                    </div>
                </div>
                <div class="list-work_histories col-md-12 mx-auto">
                        <div class="row">
                          <table class="table table-light">
                            <thead>
                               <tr> 
                                 <th width=10%>出勤</th>
                                 <th width=10%>退勤</th>
                               </tr>
                            </thead>
                            <tbody class="histories">
                            @foreach($histories as $history)
                              <tr>
                                <td>{{ $history->attendance_start }}</td>
                                <td>{{ $history->attendance_end }}</td>
                              </tr>
                            @endforeach
                           </tbody>
                         </table>
                     </div>
                </div>
                <div class="row">
                    <div class="list-work_management col-md-12 mx-auto">
                        <div class="row">
                        <table class="table table-light">
                            <thead>
                                 <th>日付</th>
                                 <th>休憩</th>
                                 <th>時間外</th>
                                 <th>日報</th>
                            <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
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
@endsection














































