<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class BannerController extends Controller
{
    public function list()
    {
        $array['banner']=DB::table('banner')->get();
        return view('admins.page.banner.list',$array);
    }

    public function add()
    {
        $array['new']=DB::table('new')->get();
        return view('admins.page.banner.add',$array);
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'image' => 'required',
        ],
        [
            'image.required' => 'Ảnh là trường bắt buộc',
        ]);
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('assets/img_banner/',$name);
        }
        DB::table('banner')->insert([
            'image' => $name,
            'status' => 0,
        ]);

        return redirect()->route('banner.list');
    }

    public function edit($id)
    {
        $array['banner']=DB::table('banner')->find($id);
        return view('admins.page.banner.edit',$array);
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
