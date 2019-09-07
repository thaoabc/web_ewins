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

    public function news()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tinTuc',$data);
    }


    public function service()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.dichvu',$data);
    }


    public function newchitiet()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tintucchitiet',$data);
    }

    public function talenchitiet()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentchitiet',$data);
    }

}
