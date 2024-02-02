@extends('frontend.shared.shardClient')
@section('title' , 'Salon | Services Pages ')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/asstesClient') }}/css/owl.carousel.css">
<link href="{{ asset('frontend/asstesClient') }}/css/service.css" rel="stylesheet">


@endsection
@section('content')

    <!--=============== HEADER ===============-->
    <header>
        <div class="cover">
            <div class="cover-black"></div>
        </div>
        <div class="title-page">
            <h1 class="text-color">المنتجات</h1>
            <div class="d-flex text-p">
                <a href="#">المنتجات</a>
                <span class="px-2"> / </span>
                <a href="index.html">الرئيسية</a>
            </div>
        </div>
    </header>
    <!-- end -->

    <!--=============== item ===============-->
    <section>
        <div class="container">
            <div class="row w-100 m-0">
                <div class="col box px-0">
                    <div class="card-body m-2 px-0">
                        <div class="main">
                            <div class="mt-5 mb-2 d-flex justify-content-between box-category" id="myBtnContainer">
                                <div class="category">
                                    <button class="btnItem activeItem" data-filter="all"> جميع المنتجات </button>
                                    <button class="btnItem"  data-filter="category1"> اعشاب </button>
                                    <button class="btnItem"  data-filter="category2"> زيوت </button>
                                    <button class="btnItem"  data-filter="category3"> احجار </button>
                                    <button class="btnItem"  data-filter="category4"> جلسات </button>
                                </div>
                                <div class="catigory search">
                                    <i class="fa-regular fa-search fa-lg"></i>
                                    <input class="form-control" type="search" placeholder=" ابحث عن منتج .."  id="searchInput">
                                </div>
                            </div>

                            <div id="items" class="row">
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category1">
                                    <div class="content">

                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (10).png" alt="Mountains">
                                        <h5 class="text-color">زيوت</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category1">
                                    <div class="content">

                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (1).png" alt="Mountains">
                                        <h5 class="text-color">احجار</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category2">
                                    <div class="content">

                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (2).png" alt="Mountains">
                                        <h5 class="text-color">اعشاب</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category2">
                                    <div class="content">

                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (2).png" alt="Mountains">
                                        <h5 class="text-color">اعشاب</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category3">
                                    <div class="content">
                                        <div class="line-time">
                                            جديد
                                        </div>
                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (3).png" alt="Mountains">
                                        <h5 class="text-color">اعشاب</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="column showItem col-lg-2 col-md-6 col-sm-6 category4">
                                    <div class="content">
                                        <div class="line-time">
                                            جديد
                                        </div>
                                        <div class="cover-black">
                                            <div class="d-flex flex-column align-items-start m-3">
                                                <a href="item.html" class="btn-hover mb-3 text-center">
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </a>
                                                <button class="btn-hover btn-heart text-p mb-3">
                                                    <span class="fa-solid fa-heart "></span>
                                                </button>
                                            </div>
                                        </div>
                                        <img src="{{ asset('frontend/asstesClient') }}/imag/products/item (8).png" alt="Mountains">
                                        <h5 class="text-color">اعشاب</h5>
                                        <div class="d-flex justify-content-between w-100 my-3">
                                            <div class="d-flex">
                                                <h6 id="discountedValue" class="text-warning">199$</h6>
                                                <h6 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                    199$</h6>
                                            </div>
                                            <h6 id="d-Discount" class="text-info">(60%)</h6>
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

    <!--=============== PACKGE ===============-->
    <section class="packge" id="packge">
        <div class="title pb-4">
            <h3> الباقات</h3>
        </div>
        <div class="container">
            <div class="owl-carousel owl-carousel">
                <div class="packge-item">
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
                <div class="packge-item">
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
                <div class="packge-item">
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
                <div class="packge-item">
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
                <div class="packge-item">
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
            </div>
        </div>
    </section>
    <!-- End -->

@endsection

@section('modal')
@endsection

@section('script')
<script src="{{ asset('frontend/asstesClient') }}/js/owl.carousel.min.js"></script>

<script>
    // add to wish list
    $(document).ready(function() {
        $(".btn-heart").click(function () {
            $(this).toggleClass("text-danger");
            $(this).toggleClass("text-p");
        });
    });
</script>
<script>
    // category
     $(document).ready(function () {
    $(".btnItem").on("click", function () {
        var filter = $(this).data("filter");

        if (filter === "all") {
            $(".column").addClass("showItem");
        } else {
            $(".column").removeClass("showItem").filter("." + filter).addClass("showItem");
        }
        $(this).addClass("activeItem").siblings().removeClass("activeItem");
    });
});
</script>
<script>
    $('#searchInput').on('input', function () {
        var searchTerm = $(this).val().trim().toLowerCase();

        $('#items .column').each(function () {
            var cardText = $(this).text().toLowerCase();
            if (cardText.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
</script>
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
