@extends('master-layout')


@section('content')

<!-- ##### Tin Tuc  ##### -->
<section class="blog-area blog-page section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="tt-1">
                    TALEN TWINS
                </div>
                <div class="sp-1"></div>
            </div>
        </div>

        <div class="mt-5">
            <div class="codongs-tt-title" onclick="myFunction()">
                <div style="padding:10px; color: white">Talent wins <i class="fa fa-angle-down" aria-hidden="true"
                        style="font-size: 14px"></i></div>
            </div>
            <ul class="nav nav-tabs codongs-tt">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" style="font-size: 18px">Talent Wins
                        Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1" style="font-size: 18px">Talent Wins Solution</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2" style="font-size: 18px">Talent Wins Academy</a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane  active" id="home">
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="{{ route('talentchitiet') }}" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="#" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane  fade" id="menu1">
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="#" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="#" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane  fade" id="menu2">
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="#" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2 mb-2 " data-aos="fade-up" data-aos-delay="300">
                        <div class="single-blog-area mb-100 wow fadeInUp row">
                            <div class="col-md-4 p-3"><img style="height: 237px;"
                                    src="http://trinam.com.vn/Data/Portals/0/Users/1/Images/2016.12.29/thu-tuong-2-nuoc-va-dai-dien-fpt-gti-tai-buoi-ky-ket.jpg"
                                    alt=""></div>

                            <div class="blog-content col-md-8">
                                <a href="#" class="blog-headline">
                                    <h5>Bài học kinh doanh sâu sắc rút ra từ cuốn sách được cả Bill Gates và Warren
                                        Buffett khen là 'tuyệt vời nhất'</h5>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="#">09/18/2019</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="#">Art &amp; Design</a>
                                </div>
                                <p> E-learning giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning
                                    giải pháp đã giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã
                                    giành Giải Nhất Nhân Tài Đất Việt cho giải pháp E-learning giải pháp đã giành Giải
                                    Nhất Nhân Tài Đất Việt cho giải pháp...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>


</section>




@endsection
