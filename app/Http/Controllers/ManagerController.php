<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //index
    public function index()
    {
        return view('manager');
    }
}
