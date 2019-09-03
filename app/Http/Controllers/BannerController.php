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
            $str=str_random(5);
            $name_file=$str."_".$name;
            $file->move('assets/img_banner/',$name_file);
        }
        DB::table('banner')->insert([
            'image' => $name_file,
            'status' => 0,
        ]);

        return redirect()->route('banner.list');
    }

    public function update(Request $request)
    {
        $id=$request->id;
        $img_old=DB::table('banner')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            if(file_exists('assets/img_banner/'.$img_old)&&($img_old !='')){
                unlink('assets/img_banner/'.$img_old);
            }
            $file->move('assets/img_banner/',$name_file);
        }
        else{
            $name_file=$img_old;
        }

        if(empty($request->status)){
            $status=0;
        }
        else{
            $status=1;
        }

        DB::table('banner')->where('id',$id)->update([
            'image' => $name_file,
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
