<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __cunstruct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
        return view('admin.index');
    }
}
