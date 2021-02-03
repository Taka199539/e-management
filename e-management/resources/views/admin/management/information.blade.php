@extends('layouts.app_admin')
@section('title', 'ユーザー情報')

@section('content')
        <div class="container">
             <div class="row">
                 <h2>ユーザー情報</h2>
             </div>
             <div class="row">
            <div class="list-user-information col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                           <tr>
                           <th>ID</th>
                           <th>名前</th>
                           <th>開始時間</th>
                           <th>終了時間</th>
                           <th>休憩時間</th>
                           <th>勤務形態</th>
                           </tr>
                {{ csrf_field() }}
                <tbody>
                    @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}</td>
                            <td>{{ $profile->name }}</td>
                            @if($profile->start_time)
                            <td>{{ $profile->start_time }}</td>
                            <td>{{ $profile->end_time }}</td>
                            <td>{{ $profile->break_time }}</td>
                            <td>{{ $profile->status }}</td>
                             @else
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             @endif
                            <td><a href="{{ action('Admin\ManagementController@delete', ['id' => $profile->id]) }}">削除</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                  </thead>
                </table>
            </div>
        </div>
    </div>
@endsection



