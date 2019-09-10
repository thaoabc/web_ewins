<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\{inforcompany,product,elearning,subelearning,cate_new,talentwins,service};
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['banner']=DB::table('banner')
                        ->select('banner.*')
                        ->get();
        $array['subelearnings']=DB::table('sub_e_learning')
                        ->select('sub_e_learning.*')
                        ->get();
        $array['elearnings']=DB::table('e_learning')
                        ->select('e_learning.*')
                        ->get();
        $array['infocompany']=DB::table('infor_company')
                        ->select('infor_company.*')
                        ->get();
        $array['product']=DB::table('product')->paginate(9);
        $array['new1']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->skip(0)
                        ->take(3)
                        ->get();
        $array['new2']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->skip(3)
                        ->take(3)
                        ->get();
         $array['new3']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->skip(6)
                        ->take(3)
                        ->get();
        $array['new4']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->skip(9)
                        ->take(3)
                        ->get();
                        $array['infocompany']=inforcompany::all();
                        $array['product']=product::all();
                        $array['elearning']=elearning::all();
                        $array['subelearnings']=subelearning::all();
                        $data['talentwins']=talentwins::all();
        return view('pages.home',$array);
    }
    public function menu()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        return view('master-layout',$array);
    }



    public function list()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.lienhe',$data);
    }


    public function talenwin()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentwins',$data);
    }



    public function trainghiem()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.traiNghiem',$data);
    }

    public function about()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.gioithieu',$data);
    }

    public function news()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tinTuc',$data);
    }


    public function service()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        $data['service']=service::all();
        return view('pages.dichvu',$data);
    }


    public function newchitiet()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.tintucchitiet',$data);
    }

    public function talenchitiet()
    {
        $data['talentwins']=talentwins::all();
        $data['cate_new']=cate_new::all();
        $data['infocompany']=inforcompany::all();
        $data['product']=product::all();
        return view('pages.talentchitiet',$data);
    }

    public function product()
    {
        $talentwins=talentwins::all();
        $cate_new=cate_new::all();
        $infocompany=inforcompany::all();
        $product=DB::table('product')->paginate(9);
        return view('pages.traiNghiem',compact('talentwins','cate_new','infocompany','product'));
    }



}
