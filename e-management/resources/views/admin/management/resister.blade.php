@extends('layouts.app_admin')
@section('title','ユーザー情報の登録')

@section('content')
         <div class="container">
             <div class="row">
               <div class="col-md-8 mx-auto">
                 <h2>ユーザー情報の登録</h2>
                <div class="form-group row">
                            <label class="col-md-2"
                            for="name">名前</label>
                        <div class="col-md-10">
                             <input type="text" class="form-control"
                             name="name" id="name">
                            </div>
                        </div>
                        
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="start_time">開始時間</label>
                            <input type="time" min="00:00" max="23:59" name="punchin_time" id="puchin_time">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="end_time">終了時間</label>
                            <input type="time" min="00:00" max="23:59" name="punchout_time" id="puchout_time">
                        </div>
                     </div>    
                     
                    <div class="form-group row">
                        <div class="col-md-4">
                           <label for="break_time">休憩時間</label>
                           <input type="time" min="00:00" max="03:59" name="break_time" id="break_time">
                        </div>
                    </div>
                     
                   <div class="formgroup row">
                     <input type="radio" name="status" value="employee">正社員
                     <input type="radio" name="status" value="parttime employee">アルバイト
                     <input type="radio" name="status" value="contract employee">契約社員
                </div>
                
                <div class="form-group row">
                    <div class="col-md-10">
                     {{ csrf_field() }}
                     <a href="{{ action('Admin\ManagementController@update') }}" 
                  role="button" class="btn btn-primary">送信</a>
                     <a href="{{ action('Admin\ManagementController@dashboard') }}" 
                     role="button" class="btn btn-primary">管理画面に戻る</a>
                 </div>
             </div>
         </div>
    </div>
@endsection





