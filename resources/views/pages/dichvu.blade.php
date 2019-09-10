
@extends('master-layout')

@section('content')
   <section style="padding-top:100px" id="dv">
       <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="tt-1">
                    DỊCH VỤ E-LEARNING
                </div>
                <div class="sp-1"></div>
                </div>
            </div>
            @foreach($service as $value)
                <div class="row mt-5">
                    <div class="col-12 col-md-4" data-aos="fade-right">
                        <div class="thumbnail">
                            <img src="https://omt.vn/wp-content/uploads/2014/05/omt-logo-final1-409x230.jpg" alt="" style="width:80%;height: 80%">
                        </div>
                    </div>
                    <div class="col-12 col-md-8" data-aos="fade-left" data-aos-delay="100">
                        <div>
                            <h6>
                                <a href=""style="font-size: 22px">{{$value->name}}</a>
                            </h6>
                            <small><i class='far fa-calendar-alt'></i> &nbsp;(Ngày:
                                23/06/2018)</small>
                            <p>Đã từ lâu các nhà tâm lý học phát triển các bộ công cụ bằng bảng hỏi để kiểm tra một số khả năng, tiềm năng của con người như khả năng xử lý con số, sử dụng ngôn ngữ, thông minh...</p>
                                <a href=""
                                class="btn btn-outline-success btn-sm">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

                <hr>

       </div>
   </section>
@endsection