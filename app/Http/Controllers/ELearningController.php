<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ELearningController extends Controller
{
    public function list()
    {
        $array['e_learning']=DB::table('e_learning')->get();
        return view('admins.page.e-learning.list',$array);
    }

    public function add()
    {
        return view('admins.page.e-learning.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'content' => 'required|min:20',
                'icon' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
                'icon.required' => 'Ảnh là trường bắt buộc',
            ]
        );

        if ($request->hasFile('icon')) {
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;

            $file->move('assets/img_icon/',$name_file);
        }
        DB::table('e_learning')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'icon' => $name_file,
            'status' => 0,
        ]);

        return redirect()->route('e-learning.list');
    }

    public function edit($id)
    {
        $array['e_learning']=DB::table('e_learning')->find($id);
        return view('admins.page.e-learning.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );
        $img_old=DB::table('e_learning')->find($id)->icon;

        if($request->hasFile('icon')){
            $file=$request->file('icon');
            $name=$file->getClientOriginalName();
            $str=str_random(5);
            $name_file=$str."_".$name;
            if(file_exists('assets/img_icon/'.$img_old)&&($img_old !='')){
                unlink('assets/img_icon/'.$img_old);
            }
            $file->move('assets/img_icon/',$name_file);
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

        DB::table('e_learning')->where('id',$id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'icon' => $name_file,
            'status' => $status,
        ]);

        return redirect()->route('e-learning.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('e_learning')->find($id)->icon;
        if(file_exists('assets/img_icon/'.$img_old)&&($img_old !='')){
            unlink('assets/img_icon/'.$img_old);
        }
        DB::table('e_learning')->where('id',$id)->delete();
        return redirect()->route('e-learning.list');
    }

   
}
