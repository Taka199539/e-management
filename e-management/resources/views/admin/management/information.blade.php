@extends('layouts.app_admin')
@section('title', 'ユーザー情報')

@section('content')
        <div class="container">
             <div class="row">
                 <h2>ユーザー情報</h2>
             </div>
             <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                           <tr>
                           <th>ID</th>
                           <th>ユーザーID</th>
                           <th>名前</th>
                           <th>開始時間</th>
                           <th>終了時間</th>
                           <th>休憩時間</th>
                           <th>月の労働時間</th>
                           <th>勤務形態</th>
                           <th><a href="{{ action('Admin\ManagementController@delete') }}">削除</a></th>
                           </tr>
                        </thead>
                {{ csrf_field() }}
            </div>
        </div>
    </div>
@endsection

