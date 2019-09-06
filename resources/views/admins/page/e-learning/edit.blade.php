@extends('admins.layout.master-layout')
@section('title')
    Sửa tin e-learning
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <section class="content-header">
                <h1>
                    Sửa tin e-learning
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Sửa tin e-learning</li>
                </ol>
            </section>
            <hr>

            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                                <form role="form" method="POST" action="{{Route('e-learning.edit',['id'=>$e_learning->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>Title (*)</label>
                            <input type="text" class="form-control" placeholder="Nhập tiêu đề tin e-learning" name="title"
                                   value="{{ $e_learning->title }}">
                            <p style="color:red">{{ $errors->first('title') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Nội dung (*)</label>
                            <input type="text" class="form-control" placeholder="Nội dung" name="content"
                                   value="{{ $e_learning->content }}">
                            <p style="color:red">{{ $errors->first('content') }}</p>
                        </div>

                        <div class="form-group">
                            <label>Đăng bài</label>
                            <input type="checkbox" name="status" value="1">
                        </div>

                        {{--  <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung (*)</label>
                            <textarea name="content" rows="10" placeholder="Nhập nội dung"
                                        class="form-control">{{ old('content') }}</textarea>
                        </div>  --}}
                        <div class="form-group">
                            <label>Chọn ảnh icon</label>
                            <input type="file" id="image" name="icon" onchange="showIMG()">
                        </div>
                        <div class="form-group">
                            <div id="viewImg">

                            </div>
                        </div>
                        
                        <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                        <a href="{{Route('e-learning.list')}}"><button type="submit" class="btn btn-default">Quay lại</button></a>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </section>
            <b></b>
    </div>
</div>

<script language="JavaScript">
        CKEDITOR.replace('contentt', {
                    filebrowserBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '{{asset("")}}ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '{{asset("")}}ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });


                function showIMG() {
                    var fileInput = document.getElementById('image');
                    var filePath = fileInput.value; //lấy giá trị input theo id
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i; //các tập tin cho phép
                    //Kiểm tra định dạng
                    if (!allowedExtensions.exec(filePath)) {
                        alert('Bạn chỉ có thể dùng ảnh dưới định dạng .jpeg/.jpg/.png/.gif extension.');
                        fileInput.value = '';
                        return false;
                    } else {
                        //Image preview
                        if (fileInput.files && fileInput.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('viewImg').innerHTML = '<img style="width:100px; height: 100px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(fileInput.files[0]);
                        }
                    }
                }
    
    </script>

{{-- modal --}}

    </div>
@stop