<?php

namespace App\Http\Controllers\frontend;
use App\models\{inforcompany,product};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function list()
    {
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.lienhe',$data);
    }
}
