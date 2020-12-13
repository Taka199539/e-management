<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use App\History;
use App\Profile;

class ManagementController extends Controller
{
    
    //管理画面の表示
    public function dashboard(Request $request)
    {
        
        return view('admin/management/dashboard');
    }
    
     public function add()
    {
        return view('admin.management.resister');
    }
    
     //ユーザー情報登録画面
    public function resister(Request $request)
    {
        $profile = new Profile;
        
        $form = $request->all();
        
        $profile->user_id = $request->user()->id;
        
        //入力情報を保存
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/management/dashboard');
    }
    
    //ユーザー情報一覧
    public function information(Request $request)
    {
        
        $profiles = Profile::All();
        
        return view('admin.management.information', ['profiles' => $profiles]);
    }
    
    //ユーザー情報の削除
    public function delete()
    {
        return redirect('admin/management/dashboard');
    }

    
    //ユーザー勤務記録
    public function record(Request $request)
    {
        $attendances = Attendance::all();
        
        $histories = History::all();
        
        return view('admin.management.record', ['attendances' => $attendances, 'histories' => $histories]);
    }

}

