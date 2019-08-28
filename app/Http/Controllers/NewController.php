<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class NewController extends Controller
{
    public function list()
    {
        $array['new']=DB::table('new')
                        ->join('admin','admin.id','=','new.id_admin')
                        ->select('new.*','admin.name as name')
                        ->get();
        return view('admins.page.new.list',$array);
    }

    public function add()
    {
        return view('admins.page.new.add');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move('assets/img_new/',$name);
        }
        DB::table('new')->insert([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'id_admin' => 1,
            'status' => 0,
        ]);

        return redirect()->route('new.list');
    }

    public function edit($id)
    {
        $array['new']=DB::table('new')->find($id);
        return view('admins.page.new.edit',$array);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'title' => 'required|min:5',
                'summary' => 'required|min:10',
                'content' => 'required|min:20',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
            ]
        );
        $img_old=DB::table('new')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_new/'.$img_old)&&($img_old !='')){
                unlink('assets/img_new/'.$img_old);
            }
            $file->move('assets/img_new/',$name);
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

        DB::table('new')->where('id',$id)->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'image' => $name,
            'slug' => str_slug($request->title),
            'id_admin' => 1,
            'status' => $status,
        ]);

        return redirect()->route('new.list');
    }

    public function delete($id)
    {
        $img_old=DB::table('new')->find($id)->image;
        if(file_exists('assets/img_new/'.$img_old)&&($img_old !='')){
            unlink('assets/img_new/'.$img_old);
        }
        DB::table('new')->where('id',$id)->delete();
        return redirect()->route('new.list');
    }
}
