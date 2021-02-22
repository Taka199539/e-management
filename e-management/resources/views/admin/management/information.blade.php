@extends('layouts.app_admin')
@section('title', 'ユーザー情報一覧')

@section('content')
        <div class="container">
             <div class="row">
                 <h2>ユーザー情報一覧</h2>
             </div>
             <div class="row">
            <div class="list-user-information col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                           <tr>
                           <th>ID</th>
                           <th>名前</th>
                           <th>開始時間</th>
                           <th>終了時間</th>
                           <th>休憩時間</th>
                           <th>勤務形態</th>
                           </tr>
                <tbody>
                    @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id }}</td>
                            <td>{{ $profile->name }}</td>
                            @if($profile->start_time)
                            <td>{{ $profile->start_time }}</td>
                            <td>{{ $profile->end_time }}</td>
                            <td>{{ $profile->break_time }}</td>
                            <td>{{ $profile->status }}</td>
                             @else
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             @endif
                            <td>
                                <form action="/admin/management/delete/{{$profile->id}}" method='GET'>
                                {{ csrf_field() }}
                                <input type="submit" name="delete" value="削除" class='btn btn-primary btn-sm btn-dell'>
                                </form>
                        </tr>
                    @endforeach
                    </tbody>
                  </thead>
                </table>
            </div>
        </div>
        {{ $profiles->links() }}
    </div>
    @section('script')
  <script>
  $(function(){
  $(".btn-dell").click(function(){
  if(confirm("本当に削除しますか？")){
  }else{
  //cancel
  return false;
  }
  });
  });
  </script>
@endsection
@endsection





