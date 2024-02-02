@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Coupon ')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/cobon.css" rel="stylesheet">

@endsection

@section('content')
      <!--=============== HEADER ===============-->
      <header>
        <div class="row w-100 m-0 ">
            <div class="d-flex col-12 justify-content-between py-3">
                <h4 class="text-color"> انشاء كوبونات الخصم </h4>
                <div class="d-flex text-p">
                    <a href="#"> انشاء كوبونات الخصم </a>
                    <span class="px-2"> / </span>
                    <a href="../index.html">الرئيسية</a>
                </div>
            </div>
        </div>
        <form class="row w-100 m-0 bg-component">
            <div class="col-lg-3 col-12 ">
                <div class="card-body search my-3">
                    <input class="form-control" type="text" placeholder="انشاء كوبون الخصم">
                </div>
            </div>
            <div class="col-lg-3 col-12 ">
                <div class="card-body search my-3">
                    <input class="form-control w-auto" type="date">
                    <lable>تاريخ الانهاء</lable>
                </div>
            </div>
            <div class="col-lg-3 col-12 ">
                <div class="card-body search my-3">
                    <input class="form-control w-auto" type="date">
                    <lable>تاريخ التفعيل</lable>
                </div>
            </div>
            <div class="col-lg-3 col-12 ">
                <div class="my-3">
                    <button class="btn-gold w-100">
                        <span class="py-2 m-auto">انشاء</span>
                    </button>
                </div>
            </div>

        </form>
        <div class="row w-100 m-0">
            <div class="d-flex col-12 justify-content-between py-3">
                <h4 class="card-title text-color"> عرض جميع الكوبونات</h4>
            </div>
        </div>
        <div class="row w-100 m-0 bg-component">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>كود الخصم</th>
                                    <th>الوقت المتبقى </th>
                                    <th>عدد الاستخدام </th>
                                    <th>الحالة </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">#%^$31561</td>
                                    <td>4 ايام</td>
                                    <td>3</td>
                                    <td>
                                        <select aria-label="Default select example">
                                            <option selected> قيد التشغيل </option>
                                            <option value="1" class="text-danger">الغاء التشغيل</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">#%^$31561</td>
                                    <td>4 ايام</td>
                                    <td>5</td>
                                    <td>
                                        <select aria-label="Default select example">
                                            <option selected> قيد التشغيل </option>
                                            <option value="1" class="text-danger">الغاء التشغيل</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">#%^$31561</td>
                                    <td>4 ايام</td>
                                    <td>1</td>
                                    <td>
                                        <select aria-label="Default select example">
                                            <option selected> قيد التشغيل </option>
                                            <option value="1" class="text-danger">الغاء التشغيل</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end -->
@endsection

@section('modal')
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
        $("#live-nameProduct").on("input", function () {
            var ProductValue = $(this).val();
            $("#d-nameProduct").text(ProductValue);
        });
        $("#live-price").on("input", function () {
            var priceValue = $(this).val();
            $("#d-price").text(priceValue + "$");
        });
        $("#live-Discount").on("input", function () {
            var DiscountValue = $(this).val();
            $("#d-Discount").text("(% " + DiscountValue + " )");
        });
        $("#live-Description").on("input", function () {
            var descriptioneValue = $(this).val();
            $("#d-Description").text(descriptioneValue);
        });
    });
</script>
<script>
    // Discount
    $(document).ready(function () {
        var productNumberField = $("#live-price");
        var discountPercentageField = $("#live-Discount");
        var discountedValueSpan = $("#discountedValue");

        var getValue = function (field) {
            return parseFloat(field.val()) || 0;
        };

        var calculateDiscountedValue = function () {
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
@endsection

