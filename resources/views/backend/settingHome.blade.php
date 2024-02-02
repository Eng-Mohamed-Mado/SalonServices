@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | setting Home')

@section('style')

<link href="{{ asset('backend/asstesClient') }}/css/home.css" rel="stylesheet">

@endsection

@section('content')
  <!--=============== HEADER ===============-->
  <header>
    <div class="row w-100 m-0 px-0">
        <div class="d-flex col-12 justify-content-between py-3 px-0">
            <h4 class="text-color"> الواجهة الرئيسية </h4>
            <div class="d-flex text-p">
                <a href="#"> الواجهة الرئيسية </a>
                <span class="px-2"> / </span>
                <a href="{{ route('dashboard') }}">الرئيسية</a>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0 bg-component">
        <div class="col-lg-3 col-12 box m-0 p-0">
            <form class="card-body">
                <div class="btn-gold w-100 my-4">
                    <input type="file" name="" class="d-none" id="imageInput">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imageInput" id="imageInput" class="py-2 m-auto">اختر صورة الغلاف</label>
                </div>
                <input id="live-titleProject" class="form-control my-4" type="text" placeholder="استمتع بلحظات من الاسترخاء" id="example-text-input">
                <textarea id="live-Description" class="form-control my-4" cols="20" rows="10" placeholder="استمتع بلحظات من الاسترخاء" id="example-text-input"></textarea>
                <button class="btn-gold w-100 my-4">
                    <span class="py-2 m-auto">ارسال</span>
                </button>
            </form>
        </div> <!-- end col-->
        <div class="col box py-3 px-0 mx-0">
            <div class="card-body">
                <div class="header">
                    <div class="cover">
                        <div class="cover-black"></div>
                        <img id="selectedImage" src="{{ asset('backend/asstesClient') }}/imag/slide2.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="flex-header">
                            <div class="text-header" id="section1">
                                <h1 id="d-titleProject" ">استمتع بلحظات من <span class="text-gold">الاسترخاء</span> </h1>
                                <p id="d-Description" ">استعيد توازنك واسترخاءك مع جلسات المساج المخصصة لتلبية احتياجاتك </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row w-100 my-3 mx-0 px-0">
        <div class="col box px-0 mx-0">
            <form class="card-body bg-component">
                <h4 class="card-title mb-4 text-color"> تعديل الواجهة الرئيسية</h4>
                <div class="header">
                    <div class="cover">
                        <div class="cover-black"></div>
                        <img id="editImage" src="{{ asset('backend/asstesClient') }}/imag/slide2.jpg" alt="">
                    </div>
                    <div class="container">
                        <div class="flex-header">
                            <div class="text-header" id="section1">
                                <input class="editInput" value="استمتع بلحظات من الاسترخاء">
                                <input class="editInput" value="استعيد توازنك واسترخاءك مع جلسات المساج المخصصة لتلبية احتياجاتك ">
                                <div class="box-button d-flex flex-wrap my-5">
                                    <button class="btn-hover">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                    <span class="mx-3"></span>
                                    <div class="btn-hover text-center">
                                        <input type="file" name="" class="d-none" id="imageInput2">
                                        <label for="imageInput2"> <i class="fa-regular fa-pen-to-square"></i> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success w-100 py-2 my-4">
                    <span class="py-2 m-auto w-100">حفظ التعديلات</span>
                </button>
            </form>
        </div>
    </div>
</header>
<!-- end -->
@endsection

@section('modal')
@endsection

@section('script')

<script src="{{ asset('backend/asstesClient') }}/js/home.js"></script>

<script>
    $(document).ready(function(){
        $('#imageInput').on('change', function(){
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
    $(document).ready(function(){
        $('#imageInput2').on('change', function(){
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
        $("#live-titleProject").on("input", function() {
            var projectValue = $(this).val();
            $("#d-titleProject").text(projectValue);
        });
        $("#live-Description").on("input", function() {
            var descriptioneValue = $(this).val();
            $("#d-Description").text(descriptioneValue);
        });
    });
</script>
@endsection

