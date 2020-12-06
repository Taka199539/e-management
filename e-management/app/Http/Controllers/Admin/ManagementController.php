<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagementController extends Controller
{
    public function add()
    {
        return view('admin.management.dashboard');
    }
    
    //管理画面の表示
    public function dashboard()
    {
        return view('admin/management/dashboard');
    }
    
    //ユーザー情報一覧
    public function information()
    {
        return view('admin/management/information');
    }
    
    //ユーザー情報の削除
    public function delete()
    {
        return redirect('admin/management/dashboard');
    }
    
    //ユーザー情報画面
    public function resister()
    {
        return view('admin/management/resister');
    }
    
    //ユーザー登録
    public function update()
    {
        return view('admin/management/dashboard');
    }

}
