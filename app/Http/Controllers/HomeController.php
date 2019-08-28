<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function index()
    {
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->get();
        return view('pages.home',$array);
    }
}
