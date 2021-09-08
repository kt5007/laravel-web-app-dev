<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testMiddlewareController extends Controller
{
    public function index()
    {
        return view('test_middleware.index');
    }

    public function post(Request $request)
    {
        
    }
}
