@extends('layouts.app_admin')
@section('title','ユーザー情報の登録')

@section('content')
        <div class="container">
            <div class="row">
               <h2>ユーザー情報の登録</h2>
                <div class="col-md-8 mx-auto">
                 <form action="{{ action('Admin\ManagementController@resister') }}"
                 method="post" enctype="multipart/form-data">
                <div class="form-group row">
                        <label class="col-md-2" for="name">名前</label>
                        <div class="col-md-10">
                             <input type="text" class="form"
                             name="name" id="name">
                            </div>
                        </div>
                        
                    <div class="form-group row">
                            <label class="col-md-2" for="start_time">開始時間</label>
                        <div class="col-md-10">
                            <input type="time" min="00:00" max="23:59" name="start_time" id="start_time">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-2" for="end_time">終了時間</label>
                        <div class="col-md-10">
                            <input type="time" min="00:00" max="23:59" name="end_time" id="end_time">
                        </div>
                     </div>    
                     
                    <div class="form-group row">
                           <label class="col-md-2" for="break_time">休憩時間</label>
                        <div class="col-md-10">
                           <input type="time" min="00:00" name="break_time" id="break_time">
                        </div>
                    </div>
                     
                    <div class="form-group row">
                        <label class="col-md-2" for="status">勤務形態</label>
                        <div class="col-md-10">
                     <input type="radio" name="status" value="正社員">正社員
                     <input type="radio" name="status" value="アルバイト">アルバイト
                     <input type="radio" name="status" value="契約社員">契約社員
                        </div>
                    </div>
                
                <div class="form-group row">
                   <div class="col-md-10">
                   {{ csrf_field() }}
                  <input type="submit"role="button"
                  class="btn btn-primary" value="作成">
                  </form>
                </div>
              </div>
          </div>
       </div>
    </div>
@endsection





