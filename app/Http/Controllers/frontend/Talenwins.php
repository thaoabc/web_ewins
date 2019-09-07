<?php

namespace App\Http\Controllers\frontend;
use App\models\{inforcompany,product};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Talenwins extends Controller
{
    public function talenwin()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentwins',$data);
    }



    public function trainghiem()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.traiNghiem',$data);
    }

    public function about()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.gioithieu',$data);
    }
}
