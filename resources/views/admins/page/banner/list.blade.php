@extends('admins.layout.master-layout')
@section('title')
Danh sách banner
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Danh sách banner
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Danh sách banner</li>
            </ol>
        </section>
        <hr>

        <section class="content">
            <div class="row">
                <div class="box-header">
                    <a href="{{route('banner.add')}}" class="btn btn-primary">Thêm banner</a>
                </div>
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">Ảnh</th>
                                        <th class="col-md-2">Tiêu đề</th>
                                        <th class="col-md-2">Nội dung</th>
                                        <th class="col-md-2">Link</th>
                                        <th class="col-md-2">Trạng thái</th>
                                        <th class="col-md-3">Hành động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banner as $value)
                                    <tr class="odd gradeX">
                                        <td><img width="100px" src="{{asset('assets/img_banner/'.$value->image)}}"></td>
                                        <td>{{$value->title}}</td>
                                        <td><p style="height: 200px; overflow: auto">{{$value->content}}</p></td>
                                        <td></td>
                                        <td>{{$value->link}}</td>
                                        
                                        <td>{{$value->status}}</td>
                                        <td>
                                            <a class="btn btn-default" href="{{Route('banner.edit',['id'=> $value->id]) }}"
                                                title="Edit"><i class="fas fa-pencil-ruler"></i> Sửa</a>
                                            <a href="{{Route('banner.delete',['id'=> $value->id]) }}"
                                                class="btn btn-danger" onclick="return confirmAction()">Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</div>

<script language="JavaScript">
    function confirmAction() {
        return confirm("Bạn có chắc chắn không ?")
    }

</script>

{{-- modal --}}
<div class="container container-fluid">
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

<<<<<<< HEAD
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Thông tin người dùng banner</h2>
                    {{-- <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button> --}}
                </div>
=======
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($banner as $value)
                                                    <tr class="odd gradeX" align="center">
                                                        <td><img width="100px" src="images/{{ $value->image }}"></td>
                                                        <td>{{$value->status}}</td>
                                                        <td>

                                                            <a class="btn btn-danger"
                                                               href="{{ url('admin/banner/delete/'.$value->id) }}"
                                                               onclick="return confirm('Hành động sẽ xóa banner này! bạn có muốn tiếp tục?')">Xóa</a>
                                                            <a class="btn btn-default" id="show" onclick="edit({{$value->id}})"
                                                              ><i class="fas fa-pencil-ruler"></i>Sửa</a>
                                                            {{--  @if($value->active==1)
                                                                <a class="btn btn-info"
                                                                   href="{{ url('admin/service/setactive-cate/'.$value->id.'/0') }}"
                                                                   onclick="return confirm('Hành động sẽ ẩn Sản Phẩm này! bạn có muốn tiếp tục?')">Ẩn</a>
                                                            @else
                                                                <a class="btn btn-warning"
                                                                   href="{{ url('admin/service/setactive-cate/'.$value->id.'/1') }}"
                                                                   onclick="return confirm('Hành động sẽ hiển thị Sản Phẩm mục này! bạn có muốn tiếp tục?')">Hiển
                                                                    thị</a>
>>>>>>> 39766b6d20eed8bc9a87a672f09c3c98dd73ed9e

                <!-- Modal body -->
                <div class="modal-body" id="cont">

                </div>


                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>
@stop
