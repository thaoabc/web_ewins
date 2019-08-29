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
                'image' => 'required',
            ],
            [
                'title.required' => 'Tiêu đề là trường bắt buộc',
                'title.min' => 'Tiêu đề có ít nhất 5 ký tự',
                'summary.required' => 'Tóm tắt là trường bắt buộc',
                'summary.min' => 'Tóm tắt có ít nhất 10 ký tự',
                'content.required' => ' Nội dung là trường bắt buộc',
                'content.min' => 'Nội dung có ít nhất 20 ký tự',
                'image.required' => 'Ảnh là trường bắt buộc',
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

    // danh sách liên hệ
    public function list_contact(){
        $array['contact']=DB::table('contact')
                        ->select('contact.*')
                        ->get();
        return view('admins.page.contact.list',$array);
    }

    // Chuyển trang liên hệ
    public function add_contact(Request $request){
        return view('pages.lienhe');
    }

    // Tạo liên hệ
    public function insert_contact(Request $request){
        
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:10|max:10,integer',
                'name_city' => 'required',
                'address_city' => 'required',
                'content' => 'required'
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email phải đúng định dạng',
                'phone.required' => ' Số điện thoại là trường bắt buộc',
                'phone.integer' => ' Số điện thoại phải là số nguyên',
                'phone.min:10' => ' Số điện thoại phải gồm 10 số',
                'name_city.required' => 'Tên công ty là trường bắt buộc',
                'address_city.required' => 'Địa chỉ công ty là trường bắt buộc',
                'content.required' => 'Nội dung là trường bắt buộc',
            ]
        );
        DB::table('contact')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'name_city' => $request->name_city,
            'address_city' => $request->address_city,
            'content' => $request->content,
            'status' => 0
        ]);
        return redirect()->route('lienhe');
    }

    // Xóa liên hệ
    public function delete_contact($id)
    {
        DB::table('contact')->where('id',$id)->delete();
        return redirect()->route('contact.list');
    }

    // Sửa liên hệ thành đã xem
    public function edit_contact(Request $request,$id,$status){
        DB::table('contact')->where('id',$id)->update([
            'status' => $status
        ]);

        return redirect()->route('contact.list');
    }

    // Sửa liên hệ thành đã phản hồi
    public function feedback_contact(Requset $request,$id){
        DB::table('contact')->where('id',$id)->update([
            'status' => 2
        ]);

        return redirect()->route('contact.list');
    }

    // danh sách cố vấn
    public function list_adviser(){
        $array['adviser']=DB::table('adviser')
                        ->select('adviser.*')
                        ->get();
        return view('admins.page.adviser.list',$array);
    }

    // chuyển trang thêm cố vấn
    public function add_adviser()
    {
        return view('admins.page.adviser.add');
    }

    // Thêm cố vấn
    public function insert_adviser(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'image' => 'required|image',
                'position' => 'required',
                'information' => 'required'
            ],
            [
                'name.required' => 'Tên đề là trường bắt buộc',
                'image.required' => 'Ảnh là trường bắt buộc',
                'image.image' => 'Bắt buộc phải là ảnh',
                'position.required' => ' Chức vụ là trường bắt buộc',
                'information.integer' => ' Thông tin là trường bắt buộc'
            ]
        );

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
    
            $file->move('assets/img_adviser/',$name);
        }

        DB::table('adviser')->insert([
            'name' => $request->name,
            'image' => $name,
            'position' => $request->position,
            'information' => $request->information
        ]);
        return redirect()->route('adviser.list');
    }

    // xóa cố vấn
    public function delete_adviser($id)
    {
        $img_old=DB::table('adviser')->find($id)->image;
        if(file_exists('assets/img_adviser/'.$img_old)&&($img_old !='')){
            unlink('assets/img_adviser/'.$img_old);
        }
        DB::table('adviser')->where('id',$id)->delete();
        return redirect()->route('adviser.list');
    }

    public function edit_adviser($id)
    {
        $array['adviser']=DB::table('adviser')->find($id);
        return view('admins.page.adviser.edit',$array);
    }

    public function update_adviser(Request $request,$id)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'image' => 'required|image',
            'position' => 'required',
            'information' => 'required'
        ],
        [
            'name.required' => 'Tên đề là trường bắt buộc',
            'image.required' => 'Ảnh là trường bắt buộc',
            'image.image' => 'Bắt buộc phải là ảnh',
            'position.required' => ' Chức vụ là trường bắt buộc',
            'information.integer' => ' Thông tin là trường bắt buộc'
        ]
        );
        
        $img_old=DB::table('adviser')->find($id)->image;

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            if(file_exists('assets/img_adviser/'.$img_old)&&($img_old !='')){
                unlink('assets/img_adviser/'.$img_old);
            }
            $file->move('assets/img_adviser/',$name);
        }
        else{
            $name=$img_old;
        }

        DB::table('adviser')->where('id',$id)->update([
            'name' => $request->name,
            'image' => $name,
            'position' => $request->position,
            'information' => $request->information
        ]);

        return redirect()->route('adviser.list');
    }
}
