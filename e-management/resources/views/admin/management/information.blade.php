extends('layouts.admin')
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
                           <th width="10%">ID</th>
                           <th width="20%">名前</th>
                           <th width="50%">開始時間</th>
                           <th width="10%">終了時間</th>
                           <th width="10%">休憩時間</th>
                           <th width="20%">月の労働時間</th>
                           <th width="50%">通常時給</th>
                           <th width="10%">深夜時給</th>
                           <th width="50%">月給</th>
                           <th width="10%">勤務形態</th>
                           </tr>
                        </thead>
                <div class="col-md-4">
                   <a href="{{ action('Admin\ManagementController@delete') }}" 
                   roll="button" class="btn btn-primary">削除</a>
                </div>
            </div>
        </div>
@endsection
