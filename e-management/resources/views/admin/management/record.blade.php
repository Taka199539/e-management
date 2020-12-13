@extends('layouts.app_admin')
@section('title', '勤務記録一覧')

@section('content')
        <div class="container">
            <div class="row">
               <h2>勤務記録一覧</h2>
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
                            @foreach($histories as $history)
                            <tr>
                                <td>{{ $history->attendance_start }}</td>
                                <td>{{ $history->attendance_end }}</td>
                            </tr>
                            @endforeach
                <div class="row">
                    <div class="list-work_information col-md-12 mx-auto">
                          <div class="row">
                          <table class="table table-light">
                            <thead>
                                 <th></th>
                                 <th>日付</th>
                                 <th>休憩</th>
                                 <th>時間外</th>
                                 <th>日報</th>
                            <tbody>
                            @foreach($attendances as $attendance)
                            <tr>
                            <td>{{ $attendance->id }}"</td>
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

