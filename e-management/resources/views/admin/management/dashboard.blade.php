@extends('layouts.app_admin')
@section('title', 'ダッシュボード')

@section('content')
        <div class="container">
            <div class="row">
             <h2>管理画面</h2>
            </div>
             <p>管理者が使用できる機能の一覧です。</p>
        </div>
        <ul class="box-list">
            <li>
                <div><img src="https://i.gyazo.com/f9e0a3373d541afc5de5a07e4dfc2ddf.png"></div>
                <h2 class="feature"><a href="{{ action('Admin\ManagementController@add') }}">ユーザー情報登録</a></h2>
                <p class="center">ユーザー情報の登録ができます。</p>
            </li>
            <li>
               <div><img src="https://i.gyazo.com/39fe6515b28b8a65aefc247b748f746e.png"></div>
               <h2 class="feature"><a href="{{ action('Admin\ManagementController@information') }}">ユーザー情報一覧</a></h2>
               <p class="center">ユーザー情報の閲覧、削除ができます。</p>
            </li>
            <li>
               <div><img src="https://i.gyazo.com/07a3eb23a84d775fca4c4419c5aa328c.png"></div>
               <h2 class="feature"><a href="{{ action('Admin\ManagementController@record') }}">勤務記録一覧</a></h2>
               <p class="center">ユーザーの勤務記録一覧が閲覧できます。</p>
            </li>
             <li>
                <div><img src="https://i.gyazo.com/beea41ad9d25a4cc9410c7fff225f88f.png"></div>
                <h2 class="feature"><a href="{{ route('register') }}">ユーザー新規登録</a></h2>
                <p class="center">ユーザーの新規登録ができます。</p>
            </li>
        </ul>
@endsection


