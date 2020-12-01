@extends('layouts.admin')
@section('title','ユーザー情報の登録')

@section('content')
         <div class="container">
             <div class="row">
                 <h2>ユーザー情報の登録</h2>
             </div>
             <div class="form-group row">
                            <label class="col-md-2"
                            for="name">名前</label>
                        <div class="col-md-10">
                             <input type="text" class="form-control"
                             name="gender" id="gender" value="{{ }}">
                            </div>
                        </div>
                           <div class="form-group row">
                         <form>
                            <label for="start_time">開始時間</label>
                            <input type="time" min="00:00" max="23:59" name="start_time" id="puchin_time">
                         </form>
                    <div class="form-group row">
                         <form>
                            <label for="end_time">終了時間</label>
                            <input type="time" min="00:00" max="23:59" name="end_time" id="puchout_time">
                         </form>
                    <div class="form-group row">
                         <form>
                           <label for="break_time">休憩時間</label>
                           <input type="time" min="00:00" max="03:59" name="break_time" id="break_time">
                         </form>
                   <div class="form-group row">
                        <form>
                    <label for="prescribed_time">月の労働時間</label>
                           <input type="time" min="00:00" max="23:59" name="work_month" id="work_month">
                        </form>
                    <div class="form-group row">
                            <label class="col-md-2"
                            for="time_salary">通常時給</label>
                        <div class="col-md-10">
                             <input type="text" class="form-control"
                             name="" id="gender" value="{{  }}">
                            </div>
                        </div>
                    <div class="form-group row">
                            <label class="col-md-2"
                            for="night_salary">深夜時給</label>
                        <div class="col-md-10">
                             <input type="text" class="form-control"
                             name="time_salary" id="time_salary" value="{{  }}">
                            </div>
                        </div>
                    <div class="form-group row">
                            <label class="col-md-2"
                            for="month_salary">月給</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control"
                        name="month_salary" id="month_salary" value="{{  }}">
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
                     <input type="submit" class="btn btn-primary" valeu="登録">
                     <input type="submit" class="btn btn-primary" value="削除">
                 </div>
             </div>
         </div>
@endsection

