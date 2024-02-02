<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/asstesClient') }}/imag/M-.png">
    <!--  Bootstrap v4.6.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  owl.carousel v2.3.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('backend/asstesClient') }}/fonts/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf">
    <link rel="stylesheet" href="{{ asset('backend/asstesClient') }}/fonts/centric-space-centric-space-svg-400.otf">

    <!--  font Awesome -->
    <link href="{{ asset('backend/asstesClient') }}/fonts/all.min.css" rel="stylesheet">

    <!--  Style css -->
    <link href="{{ asset('backend/asstesClient') }}/css/shared.css" rel="stylesheet">
    <link href="{{ asset('backend/asstesClient') }}/Chart.css" rel="stylesheet">

    @yield('style')
    <title>@yield('title')</title>
</head>

<body dir="rtl">


    <!--=============== LOADING ===============-->
    <section id="loadingOverlay" class="loading-up">
        <div class='loader loader1'>
            <div>
                <div>
                    <div>
                        <div>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <div class="row m-0 p-0">

        <!--=============== SIDEBAR ===============-->
        <aside class="sidebar col" id="sidebar">
            <div class="sidebar-container flex-wrap">
                <button class="logo text-start d-lg-none mx-4 btnSlider">
                    <span class="toggle-sidebar"><i class="fa-solid fa-arrow-right fa-lg"></i></span>
                </button>
                <div class="logo d-flex align-items-center flex-column mt-3">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt=""
                        class="sidebar__logo-text">
                    <span>هادى ربيع</span>
                </div>
                <hr class="bg-light">

                <div class="sidebar-content">
                    <div class="accordion accordion-flush my-2 " id="dashbord">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                            <i class="fa-solid fa-chart-column fa-xl"></i> <span class="mx-3">وحدة التحكم </span>
                        </button>
                        <ul id="flush-collapseOne" class="accordion-collapse collapse my-2 show"
                            aria-labelledby="flush-headingOne" data-bs-parent="#headingOne">
                            <li class="{{ Request::is('admin/dashboard') ? 'active' : ""  }}">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fa-regular fa-circle"></i>
                                    <span class="mx-3">لوحة التحكم </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="accordion accordion-flush my-2 " id="pages">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-pages" aria-expanded="false" aria-controls="flush-pages">
                            <i class="fa-solid fa-file-lines fa-xl"></i> <span class="mx-3"> الصفحات </span>
                        </button>
                        <ul id="flush-pages" class="accordion-collapse collapse my-2 " aria-labelledby="flush-pages"
                            data-bs-parent="#pages">
                            <li  class="{{ Request::is('admin/setting-home') ? 'active' : ''  }}">
                                <a href="{{ route('setting-home') }}" class=""> <i
                                        class="fa-regular fa-circle"></i> <span> الواجهة الرئيسية </span></a>
                            </li>
                            <li class="{{ Request::is('admin/create-item') ? 'active' : ''  }}">
                                <a href="{{ route('create-item') }}" class=""> <i class="fa-regular fa-circle"></i> <span>
                                        انشاء المنتجات </span></a>
                            </li>
                            <li class="{{ Request::is('admin/create-package') ? 'active' : '' }}" >
                                <a href="{{ route('create-package') }}" >
                                    <i class="fa-regular fa-circle"></i>
                                    <span>انشاء الباقات </span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/setting-aboutus') ? 'active' : ''  }}">
                                <a href="{{ route('setting-aboutus') }}" class=""> <i class="fa-regular fa-circle"></i> <span>
                                        بيانات التواصل </span></a>
                            </li>
                            <li class="{{ Request::is('admin/coupon') ? 'active' : ''  }}">
                                <a href="{{ route('coupon') }}" class=""> <i class="fa-regular fa-circle"></i> <span>
                                        كوبونات الخصم </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion accordion-flush my-2 " id="orders">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-orders" aria-expanded="false" aria-controls="flush-orders">
                            <i class="fa-solid fa-timeline fa-xl"></i> <span class="mx-3"> متابعه الطلبات </span>
                        </button>
                        <ul id="flush-orders" class="accordion-collapse collapse my-2 " aria-labelledby="flush-orders"
                            data-bs-parent="#orders">
                            <li class="{{ Request::is('admin/follow-item') ? 'active' : ''  }}">
                                <a href="{{ route('follow-item') }}" class=""> <i class="fa-regular fa-circle"></i>
                                    <span> متابعه المنتجات </span></a>
                            </li>
                            <li class="{{ Request::is('admin/follow-package') ? 'active' : ''  }}">
                                <a href="{{ route('follow-package') }}" class=""> <i class="fa-regular fa-circle"></i>
                                    <span> متابعه الحجوزات </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion accordion-flush my-2 " id="client">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-client" aria-expanded="false" aria-controls="flush-client">
                            <i class="fa-solid fa-users fa-xl"></i> <span class="mx-3"> العملاء </span>
                        </button>
                        <ul id="flush-client" class="accordion-collapse collapse my-2 "
                            aria-labelledby="flush-client" data-bs-parent="#client">
                            <li class="{{ Request::is('admin/client') ? 'active' : ''  }}">
                                <a href="{{ route('client') }}" class=""> <i class="fa-regular fa-circle"></i> <span>
                                        عملاء </span></a>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>
        </aside>
        <!-- End -->
        <div class="col p-0 m-0">
            <!--=============== NAVBAR ===============-->
            <nav id="navbar">
                <div class="row w-100 m-0 position-relative">
                    <div class="rowNav">
                        <!-- icons -->
                        <div class="iconsnav">
                            <!-- menu -->
                            <button class="btnSlider icon toggle-sidebar mx-3 ml-4 p-0">
                                <img src="{{ asset('backend/asstesClient') }}/imag/menu.png" alt="">
                            </button>
                            <!-- notifaction -->
                            <button class="notification-ui_icon icon mx-3" id="notification-button">
                                <i class="fa-regular fa-bell fa-lg"></i>
                                <span class="unread-notification">51</span>
                            </button>

                            <!-- </div> -->
                            <!-- toogle Sign in Sign up -->
                            <!-- <a class="signIn" href="login.html">تسجيل</a>
                            <a class="signUp mx-3" href="login.html">انشاء حساب</a> -->
                        </div>
                        <!-- logo -->
                        <a href="index.html" class="logo">
                            <img src="{{ asset('backend/asstesClient') }}/imag/Masar.png" alt="logo">
                        </a>
                    </div>
                    <div class="dropdown-menu notification-ui_dd" id="notification-modal">
                        <div class="notification-ui_dd-header">
                            <h4 class="text-center">اشعارات</h4>
                        </div>
                        <div class="notification-ui_dd-content">
                            <div class="notification-list notification-list--unread">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/zYxDCQT.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list notification-list--unread">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/w4Mp4ny.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/ltXdE4K.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                            <div class="notification-list">
                                <div class="notification-list_img">
                                    <img src="https://i.imgur.com/CtAQDCP.jpg" alt="user">
                                </div>
                                <div class="notification-list_detail">
                                    <p class="text-color3"><b>هادى ربيع</b> لديك كود خصم</p>
                                    <p class="text-p"><small>منذ 10 دقائق</small></p>
                                </div>

                            </div>
                        </div>
                        <div class="notification-ui_dd-footer">
                            <a href="#" class="btn btn-gold  justify-content-center btn-block w-100">View
                                All</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- End  -->
            @yield('content')
        </div>

    </div>

    @yield('modal')


    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('backend/asstesClient') }}/apexcharts.min.js"></script>
<script src="{{ asset('backend/asstesClient') }}/apexcharts-column.init.js"></script>
<script src="{{ asset('backend/asstesClient') }}/dashboard-sales.init.js"></script>






    <!--  font awesome -->
    <script src="{{ asset('backend/asstesClient') }}/fonts/all.min.js"></script>

    <!-- carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Js Index Java Script -->
    <script src="{{ asset('backend/asstesClient') }}/js/shared.js"></script>

    @yield('script')
</body>

</html>
