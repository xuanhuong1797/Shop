<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        // todo
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('admin.index');
    }
}
