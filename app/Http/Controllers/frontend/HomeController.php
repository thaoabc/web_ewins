<?php

namespace App\Http\Controllers\frontend;
use App\models\{adviser,banner};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $data['adviser']=adviser::all();
        $data['banner']=banner::all();
        return view('pages.home',$data);
    }
}
