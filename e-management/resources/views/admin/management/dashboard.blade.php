@extends('layouts.app_admin')
@section('title', 'ダッシュボード')

@section('content')
        <div class="container">
            <div class="row">
                <h2>ダッシュボード</h2>
            </div>
            <p>管理画面で操作できる機能の一覧です</p>
            <div class="row">
              <div class="column">
                <div class="center">
                    <div class="ui teal button">情報</div>
                </div>
            </div>
        <img src="https://cdn.icon-icons.com/icons2/1161/PNG/512/1487716849-user-information_81634.png">
        //アイコン画像を表示
        <div class="header">ユーザー情報</div>
        <div class="meta">
                <div class="description">ユーザー情報の閲覧ができます。</div>
            </div>
            <i class="users icon"></i>Information
        <div class="ui devider"></div>
        
        <div classs="column">
            <div class="center">
                <div class="ui teal button">登録</div>
            </div>
        </div>
        <img src="https://cdn.icon-icons.com/icons2/1161/PNG/512/1487716858-add-user_81636.png"
        //アイコン画像を表示
        <div class="header">ユーザー登録</div>
        <div class="meta">
              <div class="description">ユーザー情報の登録、編集ができます。</div>
        </div>
        <i class="user icon">Resister</i>
        <div class="ui devider"></div>
        <div class='item'>
    </div>
@endsection

