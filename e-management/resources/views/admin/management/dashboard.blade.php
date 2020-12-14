@extends('layouts.app_admin')
@section('title', 'ダッシュボード')

@section('content')
        <div class="container">
            <div class="row">
             <h2>勤務記録一覧</h2>
            </div>
             <p>管理者が使用できる機能の一覧です。</p>
        </div>
        <ul class="box-list">
            <li>
                <div><img src="https://cdn.icon-icons.com/icons2/7/PNG/128/addusergroup_1251.png"></div>
                <h2><a href="{{ action('Admin\ManagementController@add') }}">ユーザー情報登録</a></h2>
                <p>ユーザー情報の登録ができます。</p>
            </li>
            <li>
               <div><img src="https://cdn.icon-icons.com/icons2/7/PNG/128/book_1426.png"></div>
               <h2><a href="{{ action('Admin\ManagementController@information') }}">ユーザー情報一覧</a></h2>
               <p>ユーザー情報の閲覧、削除ができます。</p>
            </li>
            <li>
               <div><img src="https://cdn.icon-icons.com/icons2/7/PNG/128/list_notes_930.png"></div>
               <h2><a href="{{ action('Admin\ManagementController@record') }}">勤務記録一覧</a></h2>
               <p>ユーザーの勤務記録一覧です。</p>
            </li>
        </ul>
@endsection
