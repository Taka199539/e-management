@extends('layouts.user')
@section('title', '勤務情報の編集')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @if (count($errors) > 0)
                        <ul>
                         @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                         @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                         <form>
                            <label for="start_time">開始時間</label>
                            <input type="time" min="00:00" max="23:59" name="start_time" id="start_time">
                         </form>
                    <div class="form-group row">
                         <form>
                            <label for="end_time">終了時間</label>
                            <input type="time" min="00:00" max="23:59" name="end_time" id="end_time">
                         </form>
                    <div class="form-group row">
                         <form>
                             <label for="break_time">休憩時間</label>
                             <input type="time" min="00:00" max="03:59" name="break_time" id="break_time">
                         </form>
                    <div class="form-group row">
                         <form>
                             <label for="prescribed_time">所定終了時間</label>
                             <input type="time" min="00:00" max="23:59" name="prescribed_time" id="prescribed_time">
                         </form>
                    <div class="form-group row">
                        <label class="col-md-2" for="diary">日報</label>
                          <div class="col-md-10">
                             <textarea class="form-control" name="diay" id="diay"
                             rows="20"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{ csrf_field() }}
                <div class="col-md-4">
                     <a href="{{ action('User\AttendanceController@index') }}" 
                     roll="button" class="btn btn-primary">更新</a>
                    </div>
                <div class="col-md-4">
                     <a href="{{ action('User\AttendanceController@delete') }}" 
                     roll="button" class="btn btn-primary">削除</a>
                    </div>
                 </div>
             </div>
         </div>
     </div>
@endsection




