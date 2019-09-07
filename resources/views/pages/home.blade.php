@extends('master-layout')


@section('content')

<!--  <div class="site-blocks-cover overlay" style="background-image: url(images/panner-1.png); " data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-6">
                <h1 style="color: #088A08 ">E-Learning Talent Wins</h1>
                <p class="mb-5" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                <div>
                  <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>   -->


<div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">

  @foreach ($banner as $row)
      
  
    <div class="site-blocks-cover overlay" style="background-image: url(images/{{ $row->image }})" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h1 style="color: #088A08 ">E-Learning Talent Wins</h1>
                            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                                assumenda ea quo cupiditate facere deleniti fuga officia.</p>
                            <div>
                                <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endforeach
    


</div>


<div class="site-section" id="about-section">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 mb-lg-0 position-relative" data-aos="fade-up" data-aos-delay="100">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/YjyNxGa0ThI" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <!-- <div class="experience">
              <span class="year">50 years</span>
              <span class="caption">of experience</span>
            </div> -->
            </div>
            <div class="col-md-6 ml-auto" data-aos="fade-up" data-aos-delay="300">

                <h2 class="section-title mb-3">Welcome To Elearning</h2>
                <p class="mb-4">E-learning là chữ viết tắt của Electronic Learning, dịch ra tiếng Việt có nghĩa là học
                    trực tuyến hay giáo dục trực tuyến.
                    E-learning là phương thức học tập thông qua một thiết bị có kế nối mạng với một máy chủ ở nơi khác
                    có lưu trữ sẵn các nội dung học tập dạng số và phần mềm cần thiết để có thể tương tác (hỏi/ yêu cầu/
                    ra đề) với học viên học trực tuyến từ xa. Giáo viên có thể truyền tải hình ảnh, âm thanh hoặc tài
                    liệu tương tác qua đường truyền băng thông rộng hoặc kết nối không dây (WiFi, WiMAX), mạng nội bộ
                    (LAN).</p>
                <p><a href="#" class="btn btn-primary " style="font-size: 18px">Đọc tiếp</a></p>
            </div>
        </div>
    </div>
</div>
<!-- ban cố vấn -->
<section class="site-section border-bottom" id="team-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="100">
          <!-- <h3 class="section-sub-title">Team</h3> -->
          <h3 class="section-title mb-3" style="font-size: 30px">BAN CỐ VẤN</h3>
        </div>

      <div class="slide-one-item home-slider owl-carousel" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
             <div class="row" >
                    @foreach($adviser as $value)
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                      <div class="person text-center">
                        <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image" class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                        <h3>{{$value->name}}</h3>
                        <p class="position text-muted">{{$value->position}}</p>
                        <p class="mb-4">{{$value->information}}</p>
                        <ul class="ul-social-circle">
                          <li><a href="#"><span class="icon-facebook"></span></a></li>
                          <li><a href="#"><span class="icon-twitter"></span></a></li>
                          <li><a href="#"><span class="icon-linkedin"></span></a></li>
                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach

                  </div>
            </div>

            <div class="container">
             <div class="row">
                    @foreach($adviser as $value)
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                      <div class="person text-center">
                        <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image" class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                        <h3>{{$value->name}}</h3>
                        <p class="position text-muted">{{$value->position}}</p>
                        <p class="mb-4">{{$value->information}}</p>
                        <ul class="ul-social-circle">
                          <li><a href="#"><span class="icon-facebook"></span></a></li>
                          <li><a href="#"><span class="icon-twitter"></span></a></li>
                          <li><a href="#"><span class="icon-linkedin"></span></a></li>
                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach

                    

                  </div>
            </div>

            <div class="container">
             <div class="row">
                    @foreach($adviser as $value)
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                      <div class="person text-center">
                        <img src="{{asset('assets/img_adviser/'.$value->image)}}" alt="Image" class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                        <h3>{{$value->name}}</h3>
                        <p class="position text-muted">{{$value->position}}</p>
                        <p class="mb-4">{{$value->information}}</p>
                        <ul class="ul-social-circle">
                          <li><a href="#"><span class="icon-facebook"></span></a></li>
                          <li><a href="#"><span class="icon-twitter"></span></a></li>
                          <li><a href="#"><span class="icon-linkedin"></span></a></li>
                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                    </div>
                    @endforeach
                    

                  </div>
            </div>

            {{-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
                      <div class="person text-center">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle w-50 mb-5" style="margin-left:80px">
                        <h3>Winston Hodson</h3>
                        <p class="position text-muted">Marketing</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste.</p>
                        <ul class="ul-social-circle">
                          <li><a href="#"><span class="icon-facebook"></span></a></li>
                          <li><a href="#"><span class="icon-twitter"></span></a></li>
                          <li><a href="#"><span class="icon-linkedin"></span></a></li>
                          <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
            </div> --}}
            
      </div>

     

     
    </div>
  </section>

<!-- <section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="section-sub-title">How it works</h3>
            <h2 class="section-title mb-3">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Innovate</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Create</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class=" box-with-humber">
              <h2 class="text-black">Scale</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et praesentium eos nulla qui commodi consectetur beatae fugiat. Veniam iste rerum perferendis.</p>
              <ul class="list-unstyled ul-check primary">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section> -->



<!-- giải pháp e-learning -->

<section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">GIẢI PHÁP ĐÀO TẠO E-LEARNING</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
        <?php $i =1; ?>
              @foreach($sub_e_learning as $e_learning)
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="800">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4"><img src="http://trinam.com.vn/images/trinam/giaiphap/ic6.png" alt="">
                    </div>
                    <div>
                        <h3>{{$i}}. {{$e_learning->title}}</h3>
                        <span><i class="fas fa-check" style="color:#61c357"></i> {{$e_learning->name}}</span>
                        <br>

                    </div>
                </div>
            </div>
            <?php $i++ ?>
            @endforeach
        </div>
    </div>
</section>


<!-- comment -->
{{-- <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-12 text-center">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3" style="font-size: 30px">PHẢN HỒI KHÁCH HÀNG</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section> --}}




<!-- tin tức -->

<section class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mb-3" style="font-size: 30px">TIN TỨC</h2>
            </div>
        </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>
            </div>


        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>
            </div>


        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>
            </div>


        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="h-entry">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.</a></h2>
                        <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span
                                class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores
                            sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>

                    </div>
                </div>
            </div>


        </div>

    </div>
</section>




<!-- <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div> -->





<section class="site-section ok" id="contact-section">
    <div class="container">
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="300">
            <div class="col-12 text-center">
                <h3 class="section-sub-title"></h3>
                <h2 class="section-title mt-0" style="font-size: 30px">LIÊN HỆ</h2>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-7 mb-5 " style="background-color: #F0FFF0; border-radius: 50px">



                <form action="#" style="padding:20px">
                    <h6 class=" text-center mt-4">Anh Chị vui lòng để lại thông tin liên hệ để được eWins tư vấn, hỗ
                        trợ!</h6>
                    <div class="form-group mb-0 mt-4">
                        <label for="email" class="font-weight-bold text-ct">Tên Công ty</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập tên Công ty..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Họ tên</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Địa chỉ Công ty</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ Công ty..."
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Số điện thoại</label>
                        <input type="email" class="form-control d-right" id="email" placeholder="Nhập số điện thoại"
                            name="email">
                    </div>
                    <div class="form-group mb-0">
                        <label for="email" class="font-weight-bold text-ct">Email</label>
                        <input type="email" class="form-control d-right" id="email" placeholder="Nhập địa chỉ email..."
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="comment" class="font-weight-bold text-ct">Nội dung</label>
                        <textarea class="form-control" rows="4" id="comment" placeholder="Nhập nội dung"
                            name="text"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Gửi</button>



                </form>
            </div>
            <div class="col-md-5" style="">

                <div class="p-4 mb-3 " style="padding:30px">
                    <p class="mb-4 font-weight-bold mt-4">Công ty Công nghệ và Dịch vụ Talent Wins</p>
                    <p class="mb-0 font-weight-bold"> <i class="fas fa-map-marker-alt fa-fw"></i> Địa chỉ</p>
                    <p class="mb-4" style="color:#04B404">Tòa CT2, khu đô thị Thái Hà Constrexim, 43 Phạm Văn Đồng, Hà
                        Nội</p>

                    <p class="mb-0 font-weight-bold"><i class="fa fa-phone"></i> Số Điện Thoại</p>
                    <p class="mb-0"><a href="#" style="color:#04B404"> 0927 15 15 35 (Mr. Hải)</a></p>
                    <p class="mb-0"><a href="#" style="color:#04B404">0919 75 6006 (Ms An)</a></p>
                    <p class="mb-4"><a href="#" style="color:#04B404">0927 15 15 35 (Mr. Hải)</a></p>

                    <p class="mb-0 font-weight-bold icon-envelope"> Email</p>
                    <p class="mb-0"><a href="#" style="color:#04B404">contact@talentwins.co</a></p>

                </div>

            </div>
        </div>
    </div>
</section>



@endsection
