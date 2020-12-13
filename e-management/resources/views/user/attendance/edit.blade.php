@extends('layouts.user')
@section('title', '勤務情報の編集')

@section('content')
       <div class="container">
            <div class="row">
              <h2>勤務情報の編集</h2>
               <form action="{{ action('User\AttendanceController@update') }}"
                 method="post" enctype="multipart/form-data">
                <div class="col-md-8 mx-auto">
                    <div class="form-group row">
                            <label class="col-md-10" for="date">日付</label>
                        <div class="col-md-12 mx-auto">
                            <input type="date" name="date" id="date" value="{{ $attendance_form->date }}">
                        </div>
                    </div>
                    <div class="form-group row">
                             <label class="col-md-12" for="break_time">休憩時間</label>
                        <div class="col-md-10">
                             <input type="time" min="00:00" max="03:59" name="break_time" id="break_time" value="{{ $attendance_form->break_time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                             <label class="col-md-12" for="out_time">時間外</label>
                        <div class="col-md-10">
                             <input type="time" min="00:00" max="23:59" name="out_time" id="out_time" value="{{ $attendance_form->out_time }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                            <label class="col-md-10" for="diary">日報</label>
                            
                    <div class="col-md-10">
                            <textarea class="form" name="diary" id="diary" values="{{ $attendance_form->diary }}" rows="20"></textarea>
                         </div>
                    </div>
                   <div class="form-group row">
                   <div class="col-md-10">
                   <input type="hidden" name="id" value="{{ $attendance_form->id }}">
                   {{ csrf_field() }}
                  <input type="submit"role="button"
                  class="btn btn-primary" value="更新">
                  </form>
                </div>
              </div>
           </div>
         </div>
      </div>
@endsection














