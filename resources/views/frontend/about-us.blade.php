@extends('frontend.shared.shardClient')
@section('title' , 'Salon | About Us ')
@section('style')
{{-- <link href="{{ asset('frontend/asstesClient') }}/css/profile.css" rel="stylesheet"> --}}
<link href="{{ asset('frontend/asstesClient') }}/css/about-us.css" rel="stylesheet">


@endsection
@section('content')
 <!--=============== HEADER ===============-->
 <header>
    <div class="cover">
        <div class="cover-black"></div>
    </div>
    <div class="title-page">
        <h1 class="text-color"> معلومات عنا </h1>
        <div class="d-flex text-p">
            <a href="#"> معلومات عنا </a>
            <span class="px-2"> / </span>
            <a href="{{ route('home') }}">الرئيسية</a>
        </div>
    </div>
</header>
<!-- end -->

<!--=============== Company definition ===============-->
<section class="my-3">
    <div class="container">
        <div class="row w-100 m-0  mb-3 ">
            <div class="col-lg-4 col-12 box m-0 py-3 px-2">
                <div class="col-12">
                    <h3 id="d-title" class="text-color">في [اسم الموقع] نقوم بتقديم خدمات المساج بروح منفتحة واحترافية</h3>
                    <p id="d-Description" class="text-p">نحن هنا في [اسم الموقع] نعيش لتقديم تجارب المساج الاستثنائية. رحلتنا بدأت من شغفنا بالصحة والرفاهية، حيث سعينا لإيجاد وسيلة للمساعدة في تحسين جودة حياة الأفراد. بفضل التفاني والتفكير المستدام، نجحنا في بناء مكان يجمع بين الاسترخاء والتجديد.</p>
                </div>
            </div>
            <div class="col box m-0 py-3 px-4">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <img id="selectedImage1" src="{{ asset('frontend/asstesClient') }}/imag/barber-gallery-2.jpg" class="card-img" alt="...">
                                <div class="card-body px-0 mx-0">
                                    <h5 id="d-title1" class="card-title text-color">رحلتنا </h5>
                                    <p id="d-Description1" class="card-text text-p">نحن هنا في [اسم الموقع] نعيش لتقديم تجارب المساج الاستثنائية. رحلتنا بدأت من شغفنا بالصحة والرفاهية، حيث سعينا لإيجاد وسيلة للمساعدة في تحسين جودة حياة </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img id="selectedImage2" src="{{ asset('frontend/asstesClient') }}/imag/barber-gallery-2.jpg" class="card-img" alt="...">
                                <div class="card-body px-0 mx-0">
                                    <h5 id="d-title2" class="card-title text-color">رؤيتنا</h5>
                                    <p id="d-Description2" class="card-text text-p">نحن هنا في [اسم الموقع] نعيش لتقديم تجارب المساج الاستثنائية. رحلتنا بدأت من شغفنا بالصحة والرفاهية، حيث سعينا لإيجاد وسيلة للمساعدة في تحسين جودة حياة </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->


<!--=============== Advantages ===============-->
<section class="my-3 advantages">
    <div class="container">
        <div class="row w-100 m-0 p-0">
            <div class="col-lg-6 col-sm-12">
                <img id="coverImage" class="w-100 my-5 card-img" src="{{ asset('frontend/asstesClient') }}/imag/barber-gallery-2.jpg" alt="">
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="my-lg-5 my-md-2">
                    <h3 class="text-color lh-base">في [اسم الموقع]، نقوم بتقديم خدمات المساج بروح منفتحة واحترافية</h3>
                    <ul class="packge lh-lg">
                        <li class="text-color"><span></span> يجمع فريقنا بين الخبرة والاهتمام بالتفاصيل لضمان تقديم أعلى مستويات الخدمة. نحن  </li>
                        <li class="text-color"><span></span> يجمع فريقنا بين الخبرة والاهتمام بالتفاصيل لضمان تقديم أعلى مستويات الخدمة. نحن  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=============== ABOUT-US ===============-->
<section class="ext-about-wrapper top-spacer-lg bottom-spacer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="ext-about-img mb-30">
                    <div class="ext-about-img-inner">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/barber-portfolio-1.jpg" alt="" class="parallax">
                        <div class="ext-about-img-small">
                            <img src="{{ asset('frontend/asstesClient') }}/imag/barber-portfolio-55.jpg" alt="" class="parallax">
                            <div class="video-icon">
                                <a class="video-popup" rel="external"
                                    href="https://www.youtube.com/embed/S3uOcK_8gdc" title="title">
                                    <i class="fa fa-play"></i>
                                </a>
                                <div class="btn-wave"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 content-about">
                <div class="text-color mb-3">
                    <div class="ext-heading-wrapper mb-3">
                        <div>
                            <h4 class="mb-3">
                                من نحن
                            </h4>
                            <h2>
                                انظر كيف نعمل وتطبيق الارشادات
                            </h2>
                        </div>

                    </div>
                    <p>
                        نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                        تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                        تعريفى نص تعريفى نص تعريفى
                    </p>
                    <div class="ext-listing mb-30">
                        <ul>
                            <li>
                                <span></span>
                                <p>
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p>
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p>
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p>
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                </p>
                            </li>
                            <li>
                                <span></span>
                                <p>
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->

<!--=============== Testimonial ===============-->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="box-testimonial">
                    <h3>330</h3>
                    <span>ساعات العمل</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="box-testimonial">
                    <h3>99%</h3>
                    <span>رضا العملاء</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="box-testimonial">
                    <h3>330+</h3>
                    <span>من المنتجات</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="box-testimonial">
                    <h3>330+</h3>
                    <span>العملاء</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->

<!--=============== Team ===============-->
<section class="my-3">
    <div class="title pb-4">
        <h3> فريقنا</h3>
    </div>
    <div class="container">
        <div class="owl-carousel owl-carousel team">
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

@endsection

@section('modal')
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            rtl:true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            animateOutDelay: 1000,
            animateInDelay: 1500,
            responsive:{
            300:{
                items:1,
                nav:true
            },600:{
                items:2,
                nav:false
            },
            990:{
                items:3,
                nav:false
            },
            1200:{
                items:4,
                nav:true,
                loop:false
            }
        }
        });
    });

</script>
@endsection
