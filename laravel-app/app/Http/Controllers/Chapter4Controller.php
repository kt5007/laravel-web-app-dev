<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

class Chapter4Controller extends Controller
{
    public function index( )
    {
        return view('chapter4.index');
    }
    //
    public function register()
    {
        return view('chapter4.register');
    }
    public function create(Request $request, Factory $validatorFactory)
    {
        $inputs = $request->all();
        $rules = [
            'name' => ['required'],
            'age' => ['required','integer'],
        ];

        $validator = $validatorFactory->make($inputs, $rules);
        if($validator->fails()){

        }

    }
}
