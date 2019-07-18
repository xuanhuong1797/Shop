<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
        // todo
        return view('admin.index');
    }
    public function showUser(){
        // todo
        return view('admin.users.show');
    }
}
