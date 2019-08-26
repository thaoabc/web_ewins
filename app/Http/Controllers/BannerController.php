<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class BannerController extends Controller
{
    public function list()
    {
        $array['banner']=DB::table('banner')
                        ->join('new','new.id','=','banner.id_new')
                        ->select('banner.*','banner.id as id_banner','new.title')
                        ->get();
        return view('admins.page.banner.list',$array);
    }

    public function add()
    {
        $array['new']=DB::table('new')->get();
        return view('admins.page.banner.add',$array);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('assets/img_banner/',$name);
        }
        DB::table('banner')->insert([
            'image' => $name,
            'id_new' => $request->id_new,
            'status' => 0,
        ]);

        return redirect()->route('banner.list');
    }

    public function edit($id)
    {
        $array['banner']=DB::table('banner')->find($id);
        $new['new']=DB::table('new')->get();
        return view('admins.page.banner.edit',$array,$new);
    }

    public function update(Request $request,$id)
    {
        $img_old=DB::table('banner')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_banner/'.$img_old)&&($img_old !='')){
                unlink('assets/img_banner/'.$img_old);
            }
            $file->move('assets/img_banner/',$name);
        }
        else{
            $name=$img_old;
        }

        if(empty($request->status)){
            $status=0;
        }
        else{
            $status=1;
        }

        DB::table('banner')->where('id',$id)->update([
            'image' => $name,
            'id_new' => $request->id_new,
            'status' => $status,
        ]);

        return redirect()->route('banner.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('banner')->find($id)->image;
        if(file_exists('assets/img_banner/'.$img_old)&&($img_old !='')){
            unlink('assets/img_banner/'.$img_old);
        }
        DB::table('banner')->where('id',$id)->delete();
        return redirect()->route('banner.list');
    }
}
