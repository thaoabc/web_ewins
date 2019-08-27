<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TalentWinsController extends Controller
{
    public function list()
    {
        $array['talent_wins']=DB::table('talent_wins')->get();
        return view('admins.page.talent_wins.list',$array);
    }

    public function add()
    {
        return view('admins.page.talent_wins.add');
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
        DB::table('talent_wins')->insert([
            'title' =>$request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'slug' => str_slug($request->title),
            'status' => 0,
        ]);

        return redirect()->route('talent_wins.list');
    }

    public function edit($id)
    {
        $array['talent_wins']=DB::table('talent_wins')->find($id);
        return view('admins.page.talent_wins.edit',$array);
    }

    public function update(Request $request,$id)
    {
        if(empty($request->status)){
            $status=0;
        }
        else{
            $status=1;
        }

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

        DB::table('talent_wins')->where('id',$id)->update([
            'title' =>$request->title,
            'summary' => $request->summary,
            'content' => $request->content,
            'slug' => str_slug($request->title),
            'status' => 0,
        ]);

        return redirect()->route('talent_wins.list');
    }

    public function delete($id)
    {
        DB::table('talent_wins')->where('id',$id)->delete();
        return redirect()->route('talent_wins.list');
    }
}
