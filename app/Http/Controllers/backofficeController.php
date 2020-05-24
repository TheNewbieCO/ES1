<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backofficeController extends Controller
{
    public function index()
    {        
        return view('layouts.mainAdmin');
    }
}
