@extends('layouts.user')
@section('title', '勤務情報の編集')

@section('content')
       <div class="container">
            <div class="row">
              <h2>勤務情報の編集</h2>
                <div class="col-md-8 mx-auto">
                    @if (count($errors) > 0)
                        <ul>
                         @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                         @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label class = "col-md-10" for="puchin_time">開始時間</label>
                            <input type="time" min="00:00" max="23:59" name="punchin_time" id="punchin_time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label class="col-md-10" for="punchout_time">終了時間</label>
                            <input type="time" min="00:00" max="23:59" name="punchout_time" id="punchout_time">
                       </div>
                    </div>
                    <div class="form-group row">
                         <div class="col-md-8">
                             <label class="col-md-10" for="break_time">休憩時間</label>
                             <input type="time" min="00:00" max="03:59" name="break_time" id="break_time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                             <label class="col-md-10" for="prescribed_time">所定終了時間</label>
                             <input type="time" min="00:00" max="23:59" name="prescribed_time" id="prescribed_time">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label class="col-md-2" for="diary">日報</label>
                          <div class="col-md-10">
                             <textarea class="form-control" name="diay" id="diay"
                             rows="20"></textarea>
                        </div>
                    </div>
                   <div class="form-group row">
                   <div class="col-md-10">
                   {{ csrf_field() }}
                  <a href="{{ action('User\AttendanceController@update') }}" 
                  role="button" class="btn btn-primary">更新</a>
                  <a href="{{ action('User\AttendanceController@delete') }}" 
                  role="button" class="btn btn-primary">削除</a>
                </div>
              </div>
           </div>
         </div>
      </div>
@endsection













