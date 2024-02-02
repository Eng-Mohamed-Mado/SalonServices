@extends('frontend.shared.shardClient')
@section('title' , 'Salon | Home ')
@section('style')
<link href="{{ asset('frontend/asstesClient') }}/css/home.css" rel="stylesheet">

@endsection
@section('content')

    <!--=============== HEADER ===============-->
    <header>
        <div class="cover">
            <div class="cover-black"></div>
        </div>
        <div class="container">
            <div class="flex-header">
                <div class="text-header" id="section1">
                    <h1 id="arabicText">استمتع بلحظات من <span class="text-gold">الاسترخاء</span> </h1>
                    <p class="text-p">استعيد توازنك واسترخاءك مع جلسات المساج المخصصة لتلبية احتياجاتك </p>
                    <div class="box-button my-5">
                        <a href="#packge" class="btn-gold">
                            <span class="back"><img src="{{ asset('frontend/asstesClient') }}/imag/back.png"></span>
                            تسوق الان
                        </a>
                    </div>
                </div>
                <ul class="text-center" style="margin-top: -155px !important;">
                    <li class="my-3"><a href="#"><i class="fab fa-facebook-f fa-xl"></i></a></li>
                    <li class="my-3"><a href="#"><i class="fab fa-whatsapp fa-xl"></i></a></li>
                    <li class="my-3"><a href="#"><i class="fab fa-twitter fa-xl"></i></a></li>
                    <li class="my-3"><a href="#"><i class="fab fa-instagram fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end -->

    <!--=============== NEWS ===============-->
    <section class="add-new">
        <div class="title">
            <h3>مضاف حديثا</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 item mt-5">
                    <a href="">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (8).png" alt="">
                        <h4>شاى اخضر</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 item mb-5">
                    <a href="">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (10).png" alt="">
                        <h4>ماء الورد</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 item mt-5">
                    <a href="">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (3).png" alt="">
                        <h4>الحجارة السوداء</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 item mb-5">
                    <a href="">
                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (1).png" alt="">
                        <h4>اعشاب</h4>
                    </a>
                </div>
                <a href="#payment" class="text-color w-100 text-center mt-5">
                    عرض المزيد ..
                </a>
            </div>
        </div>
    </section>
    <!-- End -->

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
                        <div class="box-button my-5">
                            <a href="#" class="btn-gold">
                                <span class="back"><img src="{{ asset('frontend/asstesClient') }}/imag/back.png"></span>
                                تسوق الان
                            </a>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- End -->

    <!--=============== PACKGE ===============-->
    <section class="packge" id="packge">
        <div class="title pb-4">
            <h3>احدث الباقات</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg my-4 mx-auto">
                    <div style="padding: 15px;">
                        <section class="card">
                            <span class="square-up"></span>
                            <span class="square-down"></span>
                            <div class="line-time">
                                4 ساعات
                            </div>
                            <div>
                                <h4>اساسية</h4>
                                <h1>2000$</h1>
                                <ul>

                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                    <li><span></span> زيوت طبيعية</li>
                                    <li><span></span> احجار سوداء</li>
                                    <li><span></span> اعشاب طبيعية</li>
                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                </ul>
                            </div>
                            <a href="packge.html" class="btn-gold w-100 justify-content-center">
                                احجز الان
                            </a>
                        </section>
                    </div>
                </div>
                <div class="col-lg my-4 mx-auto">
                    <div style="padding: 15px;">
                        <section class="card">
                            <span class="square-up"></span>
                            <span class="square-down"></span>
                            <div class="line-time">
                                4 ساعات
                            </div>
                            <div>
                                <h4>اساسية</h4>
                                <h1>2000$</h1>
                                <ul>

                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                    <li><span></span> زيوت طبيعية</li>
                                    <li><span></span> احجار سوداء</li>
                                    <li><span></span> اعشاب طبيعية</li>
                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                </ul>
                            </div>
                            <a href="packge.html" class="btn-gold w-100 justify-content-center">
                                احجز الان
                            </a>
                        </section>
                    </div>
                </div>
                <div class="col-lg my-4 mx-auto">
                    <div style="padding: 15px;">
                        <section class="card">
                            <span class="square-up"></span>
                            <span class="square-down"></span>
                            <div class="line-time">
                                4 ساعات
                            </div>
                            <div>
                                <h4>اساسية</h4>
                                <h1>2000$</h1>
                                <ul>

                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                    <li><span></span> زيوت طبيعية</li>
                                    <li><span></span> احجار سوداء</li>
                                    <li><span></span> اعشاب طبيعية</li>
                                    <li><span></span> جلسات تخسيس</li>
                                    <li><span></span> علاج بالاعشاب</li>
                                </ul>
                            </div>
                            <a href="packge.html" class="btn-gold w-100 justify-content-center">
                                احجز الان
                            </a>
                        </section>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="profile.html" class="btn-outline-gold">
                        عرض المزيد ..
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
@endsection

@section('modal')
@endsection

@section('script')
<script src="{{ asset('frontend/asstesClient') }}/js/home.js"></script>

<script>
    $(document).ready(function() {
      // عند الضغط على زر الإشعارات
      $('#notification-button').click(function() {
        $('#notification-modal').toggle(); // إظهار/إخفاء نافذة الإشعارات
      });

      // عند النقر في أي مكان على الصفحة
      $(document).click(function(e) {
        if (!$(e.target).closest('#notification-button, #notification-modal').length) {
          // إذا كان النقر خارج زر الإشعارات ونافذة الإشعارات، قم بإخفاء النافذة
          $('#notification-modal').hide();
        }
      });
    });
  </script>
<script>
    // carousel
    $(document).ready(function () {
        $(".owl-carousel-first").owlCarousel({
            items: 1,
            loop: true,
            rtl: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',  // تأثير الاختفاء عند تغيير الصورة
            animateIn: 'fadeIn',    // تأثير الظهور عند عرض الصورة الجديدة
            animateOutDelay: 1000,       // تأخير الاختفاء بمللي ثانية (هنا 500 مللي ثانية)
            animateInDelay: 1500,          // تأخير الظهور بمللي ثانية (هنا 500 مللي ثانية)
        });
    });
</script>
<script>
    $(document).ready(function(){
      const showSidebar = (toggleId, sidebarId, mainId) => {
        const toggle = $('#' + toggleId);
        const sidebar = $('#' + sidebarId);
        const main = $('#' + mainId);

        if (toggle.length && sidebar.length && main.length) {
          toggle.on('click', function() {
            /* Show sidebar */
            sidebar.toggleClass('show-sidebar');
            /* Add padding main */
            main.toggleClass('main-pd');
          });
        }
      };

      showSidebar('header-toggle', 'sidebar', 'main');

      /*=============== LINK ACTIVE ===============*/
      const sidebarLink = $('.sidebar__link');

      function linkColor() {
        sidebarLink.removeClass('active-link');
        $(this).addClass('active-link');
      }

      sidebarLink.on('click', linkColor);
    });
  </script>
@endsection
