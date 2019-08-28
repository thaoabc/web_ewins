<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplesController extends Controller
{

    //thông tin acconut
    public function GetProfile()
    {
        return view('pages.examples.profile');
    }

    //đăng kí thành viên
    public function GetRegister()
    {
        return view('pages.examples.register');
    }


    public function GetRegister(Request $request)
    {
        dd($request->all());
        // return view('pages.examples.register');
    }

}
