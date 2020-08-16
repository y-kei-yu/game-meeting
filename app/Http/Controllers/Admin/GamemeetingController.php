<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamemeetingController extends Controller
{
    //
    public function add()
    {
        return view ('admin.gamemeeting.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/gamemeeting/create');
    }
}

