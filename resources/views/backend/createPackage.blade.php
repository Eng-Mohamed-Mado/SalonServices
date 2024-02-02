@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Create Packages ')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/createpackge.css" rel="stylesheet">

@endsection

@section('content')
 <!--=============== HEADER ===============-->
 <header>
    <div class="row w-100 m-0">
        <div class="d-flex col-12 justify-content-between py-3 p-0">
            <h4 class="text-color"> انشاء الباقات </h4>
            <div class="d-flex text-p">
                <a href="#"> انشاء الباقات </a>
                <span class="px-2"> / </span>
                <a href="{{ route('dashboard') }}">الرئيسية</a>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0">
        <div class="col-lg-8 col-12 p-2">
            <div class="row bg-component">
                <div class="col-lg-6 card-body">
                    <input id="live-namePackge" class="form-control my-4" type="text" placeholder="اسم الباقة">
                    <input id="live-price" class="form-control my-4" type="number" min="0" placeholder="سعر الباقة ">
                    <input id="live-duration" class="form-control my-4" type="number" placeholder=" المده بالساعات">
                </div>
                <div class="col-lg-6 card-body">
                    <input id="live-item1" class="form-control mb-2 mt-4" type="text" placeholder="منتج 1">
                    <input id="live-item2" class="form-control my-2" type="text" placeholder="منتج 2">
                    <input id="live-item3" class="form-control my-2" type="text" placeholder="منتج 3">
                    <input id="live-item4" class="form-control my-2" type="text" placeholder="منتج 4">
                    <input id="live-item5" class="form-control my-2" type="text" placeholder="منتج 5">
                    <input id="live-item6" class="form-control my-2" type="text" placeholder="منتج 6">
                    <input id="live-item7" class="form-control my-2" type="text" placeholder="منتج 7">
                    <input id="live-item8" class="form-control my-2" type="text" placeholder="منتج 8">
                    <input id="live-item9" class="form-control my-2" type="text" placeholder="منتج 9">
                    <input id="live-item10" class="form-control my-2" type="text" placeholder="منتج 10">
                </div>
                <div class="col-12 ">
                    <button class="btn-gold mb-3">
                        <span class="py-2 m-auto">ارسال</span>
                    </button>
                </div>
            </div>
        </div>
         <div class="packge col d-none-990 d-lg-flex p-0">
            <div style="padding: 20px 15px 20px 0px;" class="w-100">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>
                    <div class="line-time" id="d-duration">
                        عدد الساعات
                    </div>
                    <div>
                        <h4  id="d-namePackge">اسم الباقة</h4>
                        <h1 id="d-price">0000$</h1>
                        <ul>

                            <li class="d-flex">
                                <span id="d-item1">منتج 1</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item2">منتج 2</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item3">منتج 3</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item4">منتج 4</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item5">منتج 5</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item6">منتج 6</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item7">منتج 7</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item8">منتج 8</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item9">منتج 9</span>
                            </li>
                            <li class="d-flex">
                                <span id="d-item10">منتج 10</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0">
        <div class="col box px-0">
            <div class="card-body m-2 px-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title text-color"> تعديل الباقات</h4>
                </div>

                <div id="items" class="row packge my-2">
                    <div class=" col-lg-3 col-md-4 col-sm-6 category1">
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
                                <div class="box-button d-flex justify-content-between">
                                    <button class="btn-danger w-75 mb-3">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-2"></span>

                                    <button class="btn-success w-75 mb-3" data-bs-toggle="modal" data-bs-target="#editPackge">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 category1">
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
                                <div class="box-button d-flex justify-content-between">
                                    <button class="btn-danger w-75 mb-3">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-2"></span>

                                    <button class="btn-success w-75 mb-3" data-bs-toggle="modal" data-bs-target="#editPackge">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 category2">
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
                                <div class="box-button d-flex justify-content-between">
                                    <button class="btn-danger w-75 mb-3">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-2"></span>

                                    <button class="btn-success w-75 mb-3" data-bs-toggle="modal" data-bs-target="#editPackge">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 category3">
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
                                <div class="box-button d-flex justify-content-between">
                                    <button class="btn-danger w-75 mb-3">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-2"></span>

                                    <button class="btn-success w-75 mb-3" data-bs-toggle="modal" data-bs-target="#editPackge">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 category4">
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
                                <div class="box-button d-flex justify-content-between">
                                    <button class="btn-danger w-75 mb-3">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-2"></span>

                                    <button class="btn-success w-75 mb-3" data-bs-toggle="modal" data-bs-target="#editPackge">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- end -->
@endsection

@section('modal')
 <!-- popup packge -->
 <div class="modal fade" id="editPackge" tabindex="-1" aria-labelledby="editPackge">
    <div class="modal-dialog">
        <form class="alert-support modal-content bg-component p-4">
            <div class="head-alert d-flex justify-content-between align-items-center">
                <h5 class="text-color">تعديل الباقة <i class="fa-solid fa-pen fa-sm mx-3"></i></h5>
                <button class="text-color btn-close-support" data-bs-dismiss="modal">
                    <i class="text-color fa-solid fa-close fa-lg"></i>
                </button>
            </div>
            <input class="form-control my-2" type="text" placeholder="اسم الباقة">
            <input class="form-control my-2" type="number" min="0" placeholder="سعر الباقة ">
            <input class="form-control my-2" type="number" placeholder=" المده بالساعات">
            <input class="form-control my-2" type="text" placeholder="منتج 1">
            <input class="form-control my-2" type="text" placeholder="منتج 2">
            <input class="form-control my-2" type="text" placeholder="منتج 3">
            <input class="form-control my-2" type="text" placeholder="منتج 4">
            <input class="form-control my-2" type="text" placeholder="منتج 5">
            <input class="form-control my-2" type="text" placeholder="منتج 6">
            <input class="form-control my-2" type="text" placeholder="منتج 7">
            <input class="form-control my-2" type="text" placeholder="منتج 8">
            <input class="form-control my-2" type="text" placeholder="منتج 9">
            <input class="form-control my-2" type="text" placeholder="منتج 10">
            <button class="btn-gold w-100 my-4">
                <span class="py-2 m-auto">ارسال</span>
            </button>
        </form>
    </div>
</div>
<!-- End  -->
@endsection

@section('script')

<script>
    // upload img
    $(document).ready(function () {
        $('#imageInput').on('change', function () {
            var input = this;
            var img = $('#selectedImage');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
    // img 2
    $(document).ready(function () {
        $('#imageInput2').on('change', function () {
            var input = this;
            var img = $('#editImage');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>
<script>
    // ======================= Live typing text =============================
    $(document).ready(function () {
        $("#live-namePackge").on("input", function () {
            var ProductValue = $(this).val();
            $("#d-namePackge").text(ProductValue);
        });
        $("#live-price").on("input", function () {
            var priceValue = $(this).val();
            $("#d-price").text(priceValue + "$");
        });
        $("#live-duration").on("input", function () {
            var durationValue = $(this).val();
            $("#d-duration").text( durationValue + " ساعات ");
        });

        $("#live-item1").on("input", function () {
            var item1Value = $(this).val();
            $("#d-item1").text(item1Value);
        });
        $("#live-item2").on("input", function () {
            var item2Value = $(this).val();
            $("#d-item2").text(item2Value);
        });
        $("#live-item3").on("input", function () {
            var item3Value = $(this).val();
            $("#d-item3").text(item3Value);
        });
        $("#live-item4").on("input", function () {
            var item4Value = $(this).val();
            $("#d-item4").text(item4Value);
        });
        $("#live-item5").on("input", function () {
            var item5Value = $(this).val();
            $("#d-item5").text(item5Value);
        });
        $("#live-item6").on("input", function () {
            var item6Value = $(this).val();
            $("#d-item6").text(item6Value);
        });
        $("#live-item7").on("input", function () {
            var item7Value = $(this).val();
            $("#d-item7").text(item7Value);
        });
        $("#live-item8").on("input", function () {
            var item8Value = $(this).val();
            $("#d-item8").text(item8Value);
        });
        $("#live-item9").on("input", function () {
            var item9Value = $(this).val();
            $("#d-item9").text(item9Value);
        });
        $("#live-item10").on("input", function () {
            var item10Value = $(this).val();
            $("#d-item10").text(item10Value);
        });
    });
</script>

@endsection

