<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chat;

class GamemeetingController extends Controller
{
    //
    public function add()
    {
        return view ('admin.gamemeeting.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Chat::$rules);
      
        $chat = new Chat;
        $form = $request->all();
      
        unset($form['_token']);
        unset($form['image']);
      
        $chat -> fill($form);
        $chat -> save();
        return redirect('admin/gamemeeting/create');
    }
    
    public function index (Request $request)
    {
        $cond_title = $request->cond_title;
        if($cond_title !='') {
            $post = Chat::where('title', $cond_title)->get();
        } else {
            $posts = Chat::all();
        }
        return view ('admin.gamemeeting.index', ['posts' => $posts, 'cond_title' =>$cond_title]);
    }
    
     public function profileedit(Request $request)
    {
        return redirect('admin/gamemeeting/profileedit');
    }
    
     public function delete(Request $request)
    {
        return redirect('admin/gamemeeting/delete');
    }
}

