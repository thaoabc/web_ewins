<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $array['sub_e_learning']=DB::table('sub_e_learning')
                        ->join('e_learning','e_learning.id','=','sub_e_learning.cate_id')
                        ->select('sub_e_learning.*','e_learning.title as title','sub_e_learning.name as name')
                        ->get();
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
        return view('pages.home',$array);
    }
    public function menu()
    {
        $array['cate_new']=DB::table('cate_new')
                        ->select('cate_new.*')
                        ->get();
        return view('master-layout',$array);
    }
}
