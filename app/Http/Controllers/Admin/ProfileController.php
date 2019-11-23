<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
   public function add()
  {
      return view('admin.profile.create');
  }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
 // 以下を追記
  public function create(Request $request)
  {
      // admin/profile/createにリダイレクトする
      return redirect('admin/profile/create');
  }  
}
  {
      // admin/profile/editにリダイレクトする
      return redirect('admin/profile/edit');
  }  
