@extends('backend.shared.shardAdmin')
@section('title', 'Salon | Create Item')

@section('style')
    <link href="{{ asset('backend/asstesClient') }}/css/createItem.css" rel="stylesheet">
@endsection

@section('content')
    <!--=============== HEADER ===============-->
    <header>
        <div class="row w-100 m-0">
            <div class="d-flex col-12 justify-content-between py-3">
                <h4 class="text-color"> انشاء المنتجات </h4>
                <div class="d-flex text-p">
                    <a href="#"> انشاء المنتجات </a>
                    <span class="px-2"> / </span>
                    <a href="{{ route('dashboard') }}">الرئيسية</a>
                </div>
            </div>
        </div>
        <div class="row w-100 m-0">
            <div class="col-lg-3 col-12 p-2">
                <div class="card-body h-100 bg-component">
                    <a href="#packge" class="btn-gold w-100 my-4">
                        <input type="file" name="" class="d-none" id="imageInput">
                        <span class="back"><img
                                src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                        <label for="imageInput" id="imageInput" class="py-2 m-auto">اختر صورة المنتج</label>
                    </a>
                    <input id="live-nameProduct" class="form-control my-4" type="text" placeholder="اسم المنتج">
                    <input id="live-price" class="form-control my-4" type="number" min="0"
                        placeholder="سعر المنتج الاساسى">
                    <input id="live-Discount" class="form-control my-4" type="number" min="0" max="100"
                        placeholder="نسبة الخصم ">
                    <select class="form-select" aria-label="Default select example">
                        <option selected> اختر القسم </option>
                        <option value="1">اعشاب</option>
                        <option value="2">زيوت</option>
                        <option value="3">احجار</option>
                    </select>
                    <textarea id="live-Description" class="form-control my-4" cols="20" rows="4" placeholder="وصف المنتج"
                        id="example-text-input"></textarea>
                    <button class="btn-gold w-100 my-4">
                        <span class="py-2 m-auto">ارسال</span>
                    </button>
                </div>
            </div> <!-- end col-->
            <div class="col p-2">
                <div class="card-body h-100 bg-component">
                    <div class="row w-100 m-0">
                        <div class="col-lg-5 col-12">
                            <img id="selectedImage" class="w-100 my-5"
                                src="{{ asset('backend/asstesClient') }}/imag/products/item (10).png" alt="">
                        </div>
                        <div class="col mt-4">
                            <h3 id="d-nameProduct" class="text-color">ماء الورد</h3>
                            <div class="d-flex justify-content-between w-100 my-3">
                                <div class="d-flex">
                                    <h4 id="discountedValue" class="text-warning">199$</h4>
                                    <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                        199$</h4>
                                </div>
                                <h4 id="d-Discount" class="text-info">(60%)</h4>
                            </div>
                            <hr class="bg-light">
                            <div>
                                <p id="d-Description" class="text-color" style="line-height: 2;">
                                    نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                    تعريفى نص تعريفى نص تعريفى نص تعريفى
                                    نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص نص تعريفى نص تعريفى نص
                                    نص تعريفى نص تعريفى
                                    نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 m-0">
            <div class="col box px-0">
                <div class="card-body m-2 px-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title text-color"> تعديل المنتجات</h4>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory"> <i
                                class="fa-solid fa-plus fa-sm"></i> اضافة قسم جديد </button>
                    </div>
                    <div class="main">
                        <div class="mt-5 mb-2 d-flex justify-content-between box-category" id="myBtnContainer">
                            <div class="category">
                                <button class="btnItem activeItem" data-filter="all"> جميع المنتجات </button>
                                <button class="btnItem" data-filter="category1"> اعشاب </button>
                                <button class="btnItem" data-filter="category2"> زيوت </button>
                                <button class="btnItem" data-filter="category3"> احجار </button>
                                <button class="btnItem" data-filter="category4"> جلسات </button>
                            </div>
                            <div class="catigory search">
                                <i class="fa-regular fa-search fa-lg"></i>
                                <input class="form-control" type="search" placeholder=" ابحث عن منتج .."
                                    id="searchInput">
                            </div>
                        </div>

                        <div id="items" class="row">
                            <div class="column showItem col-lg-3 col-md-4 col-sm-6 category1">
                                <div class="content">
                                    <div class="cover-black">
                                        <div class="d-flex flex-column align-items-end m-3">
                                            <button class="btn-hover mb-3">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <button class="btn-hover mb-3" data-bs-toggle="modal"
                                                data-bs-target="#editItem">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('backend/asstesClient') }}/imag/products/item (10).png"
                                        alt="Mountains">
                                    <h4 class="text-color">زيوت</h4>
                                    <div class="d-flex justify-content-between w-100 my-3">
                                        <div class="d-flex">
                                            <h4 id="discountedValue" class="text-warning">199$</h4>
                                            <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                199$</h4>
                                        </div>
                                        <h4 id="d-Discount" class="text-info">(60%)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column showItem col-lg-3 col-md-4 col-sm-6 category1">
                                <div class="content">
                                    <div class="cover-black">
                                        <div class="d-flex flex-column align-items-end m-3">
                                            <button class="btn-hover mb-3">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <button class="btn-hover mb-3" data-bs-toggle="modal"
                                                data-bs-target="#editItem">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('backend/asstesClient') }}/imag/products/item (1).png"
                                        alt="Mountains">
                                    <h4 class="text-color">احجار</h4>
                                    <div class="d-flex justify-content-between w-100 my-3">
                                        <div class="d-flex">
                                            <h4 id="discountedValue" class="text-warning">199$</h4>
                                            <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                199$</h4>
                                        </div>
                                        <h4 id="d-Discount" class="text-info">(60%)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column showItem col-lg-3 col-md-4 col-sm-6 category2">
                                <div class="content">
                                    <div class="cover-black">
                                        <div class="d-flex flex-column align-items-end m-3">
                                            <button class="btn-hover mb-3">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <button class="btn-hover mb-3" data-bs-toggle="modal"
                                                data-bs-target="#editItem">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('backend/asstesClient') }}/imag/products/item (2).png"
                                        alt="Mountains">
                                    <h4 class="text-color">اعشاب</h4>
                                    <div class="d-flex justify-content-between w-100 my-3">
                                        <div class="d-flex">
                                            <h4 id="discountedValue" class="text-warning">199$</h4>
                                            <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                199$</h4>
                                        </div>
                                        <h4 id="d-Discount" class="text-info">(60%)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column showItem col-lg-3 col-md-4 col-sm-6 category3">
                                <div class="content">
                                    <div class="cover-black">
                                        <div class="d-flex flex-column align-items-end m-3">
                                            <button class="btn-hover mb-3">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <button class="btn-hover mb-3" data-bs-toggle="modal"
                                                data-bs-target="#editItem">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('backend/asstesClient') }}/imag/products/item (3).png"
                                        alt="Mountains">
                                    <h4 class="text-color">اعشاب</h4>
                                    <div class="d-flex justify-content-between w-100 my-3">
                                        <div class="d-flex">
                                            <h4 id="discountedValue" class="text-warning">199$</h4>
                                            <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                199$</h4>
                                        </div>
                                        <h4 id="d-Discount" class="text-info">(60%)</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="column showItem col-lg-3 col-md-4 col-sm-6 category4">
                                <div class="content">
                                    <div class="cover-black">
                                        <div class="d-flex flex-column align-items-end m-3">
                                            <button class="btn-hover mb-3">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            <button class="btn-hover mb-3" data-bs-toggle="modal"
                                                data-bs-target="#editItem">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <img src="{{ asset('backend/asstesClient') }}/imag/products/item (8).png"
                                        alt="Mountains">
                                    <h4 class="text-color">اعشاب</h4>
                                    <div class="d-flex justify-content-between w-100 my-3">
                                        <div class="d-flex">
                                            <h4 id="discountedValue" class="text-warning">199$</h4>
                                            <h4 id="d-price" class="text-secondary mx-3 text-decoration-line-through">
                                                199$</h4>
                                        </div>
                                        <h4 id="d-Discount" class="text-info">(60%)</h4>
                                    </div>
                                </div>
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
    <!-- popup adit -->
    <div class="modal fade" id="editItem" tabindex="-1" aria-labelledby="editItem">
        <div class="modal-dialog">
            <form class="alert-support modal-content bg-component p-4">
                <div class="head-alert d-flex justify-content-between align-items-center">
                    <h5 class="text-color">تعديل المنتج <i class="fa-solid fa-pen fa-sm mx-3"></i></h5>
                    <button class="text-color btn-close-support" data-bs-dismiss="modal">
                        <i class="text-color fa-solid fa-close fa-lg"></i>
                    </button>
                </div>
                <a href="#packge" class="btn-gold w-100 my-4">
                    <input type="file" name="" class="d-none" id="imageInput">
                    <span class="back"><img src="asstesClient/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imageInput" id="imageInput" class="py-2 m-auto">تعديل صورة المنتج</label>
                </a>
                <input class="form-control my-4" type="text" placeholder="اسم المنتج">
                <input class="form-control my-4" type="number" placeholder="سعر المنتج الاساسى">
                <input class="form-control my-4" type="number" placeholder="نسبة الخصم ">
                <select class="form-select" aria-label="Default select example">
                    <option selected> اختر القسم </option>
                    <option value="1">اعشاب</option>
                    <option value="2">زيوت</option>
                    <option value="3">احجار</option>
                </select>
                <textarea class="form-control my-4" cols="20" rows="4" placeholder="وصف المنتج" id="example-text-input"></textarea>
                <button class="btn-gold w-100 my-4">
                    <span class="py-2 m-auto">ارسال</span>
                </button>
            </form>
        </div>
    </div>
    <!-- End  -->

    <!-- popup create category -->
    <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory">
        <div class="modal-dialog">
            <div class="alert-support modal-content bg-component p-4">
                <div class="head-alert d-flex justify-content-between align-items-center">
                    <h5 class="text-color">اضافة قسم</h5>
                    <button class="text-color btn-close-support" data-bs-dismiss="modal">
                        <i class="text-color fa-solid fa-close fa-lg"></i>
                    </button>
                </div>
                <form class="my-3">
                    <h6 class="text-color">الاقسام الموجودة</h6>

                    <div class="catigory search mb-2">
                        <input class="form-control" type="text" value="اعشاب">
                        <button class="p-0">
                            <i class="fa-solid fa-trash-can p-0 text-danger border-0"></i>
                        </button>
                    </div>
                    <div class="catigory search mb-2">
                        <input class="form-control" type="text" value="زيوت">
                        <button class="p-0">
                            <i class="fa-solid fa-trash-can p-0 text-danger border-0"></i>
                        </button>
                    </div>
                    <div class="catigory search mb-2">
                        <input class="form-control" type="text" value="احجار">
                        <button class="p-0">
                            <i class="fa-solid fa-trash-can p-0 text-danger border-0"></i>
                        </button>
                    </div>
                </form>
                <form action="">
                    <input class="form-control my-4" type="text" placeholder="اضافة قسم جديد">
                    <button class="btn-gold w-100 my-4">
                        <span class="py-2 m-auto">ارسال</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection

@section('script')
    <script>
        // upload img
        $(document).ready(function() {
            $('#imageInput').on('change', function() {
                var input = this;
                var img = $('#selectedImage');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        img.attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
        // img 2
        $(document).ready(function() {
            $('#imageInput2').on('change', function() {
                var input = this;
                var img = $('#editImage');

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        img.attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            });
        });
    </script>
    <script>
        // ======================= Live typing text =============================
        $(document).ready(function() {
            $("#live-nameProduct").on("input", function() {
                var ProductValue = $(this).val();
                $("#d-nameProduct").text(ProductValue);
            });
            $("#live-price").on("input", function() {
                var priceValue = $(this).val();
                $("#d-price").text(priceValue + "$");
            });
            $("#live-Discount").on("input", function() {
                var DiscountValue = $(this).val();
                $("#d-Discount").text("(% " + DiscountValue + " )");
            });
            $("#live-Description").on("input", function() {
                var descriptioneValue = $(this).val();
                $("#d-Description").text(descriptioneValue);
            });
        });
    </script>
    <script>
        // Discount
        $(document).ready(function() {
            var productNumberField = $("#live-price");
            var discountPercentageField = $("#live-Discount");
            var discountedValueSpan = $("#discountedValue");

            var getValue = function(field) {
                return parseFloat(field.val()) || 0;
            };

            var calculateDiscountedValue = function() {
                var productNumber = getValue(productNumberField);
                var discountPercentage = getValue(discountPercentageField);
                var discountedValue = productNumber - (productNumber * (discountPercentage / 100));
                discountedValueSpan.text(discountedValue.toFixed(2));
            };

            productNumberField.add(discountPercentageField).on("input", calculateDiscountedValue);

            calculateDiscountedValue();
        });
    </script>
    <script>
        // category
        $(document).ready(function() {
            $(".btnItem").on("click", function() {
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
        $('#searchInput').on('input', function() {
            var searchTerm = $(this).val().trim().toLowerCase();

            $('#items .column').each(function() {
                var cardText = $(this).text().toLowerCase();
                if (cardText.includes(searchTerm)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    </script>
@endsection
