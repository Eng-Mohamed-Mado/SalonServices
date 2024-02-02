@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Setting About Us')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/about-us.css" rel="stylesheet">

@endsection

@section('content')
  <!--=============== HEADER ===============-->
  <header>
    <div class="row w-100 m-0">
        <div class="d-flex col-12 justify-content-between py-3 px-0">
            <h4 class="text-color"> بيانات الموقع </h4>
            <div class="d-flex text-p">
                <a href="#"> بيانات الموقع </a>
                <span class="px-2"> / </span>
                <a href="{{ route('dashboard') }}">الرئيسية</a>
            </div>
        </div>
    </div>
    <!-- Company definition -->
    <div class="row w-100 m-0  mb-3 bg-component">
        <div class="col-lg-4 col-12 box m-0 py-3 px-2">
            <form class="card-body">

                <!-- article -->
                <input id="live-title" class="form-control my-b" type="text" placeholder=" عنوان المقالة " id="example-text-input">
                <textarea id="live-Description" class="form-control my-2" cols="20" rows="3" placeholder="وصف المقالة"></textarea>

                <!-- img 1 -->
                <div class="btn-gold w-100 my-2">
                    <input type="file" name="" class="d-none" id="imageInput1">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imageInput1" id="imageInput" class="py-2 m-auto"> الصورة الاولى</label>
                </div>
                <input id="live-title1" class="form-control my-2" type="text" placeholder=" عنوان المقالة الاولى">
                <textarea id="live-Description1" class="form-control my-2" cols="20" rows="3" placeholder="وصف المقالة الاولى"></textarea>

                <!-- img 2 -->
                <div class="btn-gold w-100 my-2">
                    <input type="file" name="" class="d-none" id="imageInput2">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imageInput2" id="imageInput" class="py-2 m-auto"> الصورة الثانيه</label>
                </div>
                <input id="live-title2" class="form-control my-2" type="text" placeholder=" عنوان المقالة الثانيه">
                <textarea id="live-Description2" class="form-control my-2" cols="20" rows="3" placeholder=" وصف المقالة الثانيه"></textarea>

                <button class="btn-gold w-100 my-2">
                    <span class="py-2 m-auto">تحديث</span>
                </button>

            </form>
        </div>
        <div class="col box m-0 py-3 px-4">
            <div class="row">
                <div class="col-12">
                    <h3 id="d-title" class="text-color">"في [اسم الموقع]، نقوم بتقديم خدمات المساج بروح منفتحة واحترافية."</h3>
                    <p id="d-Description" class="text-p">نحن هنا في [اسم الموقع] نعيش لتقديم تجارب المساج الاستثنائية. رحلتنا بدأت من شغفنا بالصحة والرفاهية، حيث سعينا لإيجاد وسيلة للمساعدة في تحسين جودة حياة الأفراد. بفضل التفاني والتفكير المستدام، نجحنا في بناء مكان يجمع بين الاسترخاء والتجديد.</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <img id="selectedImage1" src="{{ asset('backend/asstesClient') }}/imag/barber-gallery-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body px-0 mx-0">
                                <h5 id="d-title1" class="card-title text-color">رحلتنا </h5>
                                <p id="d-Description1" class="card-text text-p">نحن هنا في [اسم الموقع] نعيش لتقديم تجارب المساج الاستثنائية. رحلتنا بدأت من شغفنا بالصحة والرفاهية، حيث سعينا لإيجاد وسيلة للمساعدة في تحسين جودة حياة </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img id="selectedImage2" src="{{ asset('backend/asstesClient') }}/imag/barber-gallery-2.jpg" class="card-img-top" alt="...">
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
    <!-- Advantages -->
    <div class="row w-100 m-0 my-3 bg-component">
        <div class="col-lg-3 col-12 p-2">
            <form class="card-body h-100">
                <div class="btn-gold w-100 my-4">
                    <input type="file" name="" class="d-none" id="imageCover">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imageCover" id="imageCover" class="py-2 m-auto"> الغلاف </label>
                </div>

                <input id="live-title3" class="form-control my-4" type="text" placeholder=" عنوان الصورة ">
                <input id="live-Description3" class="form-control my-4" type="text" placeholder=" تعريف الصورة ">
                <input id="live-Description4" class="form-control my-4" type="text" placeholder=" تعريف الصورة ">

                <button class="btn-gold w-100 my-4">
                    <span class="py-2 m-auto">تحديث</span>
                </button>
            </form>
        </div>
        <!-- end col-->
        <div class="col p-2">
            <div class="card-body h-100">
                <div class="row w-100 m-0">
                    <div class="col-12">
                        <div>
                            <img id="coverImage" class="w-100 my-5 card-img-top" src="{{ asset('backend/asstesClient') }}/imag/barber-gallery-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col mt-4">
                        <h3 id="d-title3" class="text-color">"في [اسم الموقع]، نقوم بتقديم خدمات المساج بروح منفتحة واحترافية."</h3>
                        <ul class="packge">
                            <li id="d-Description3" class="text-color"><span></span> يجمع فريقنا بين الخبرة والاهتمام بالتفاصيل لضمان تقديم أعلى مستويات الخدمة. نحن  </li>
                            <li id="d-Description4" class="text-color"><span></span> يجمع فريقنا بين الخبرة والاهتمام بالتفاصيل لضمان تقديم أعلى مستويات الخدمة. نحن  </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- who are we -->
    <div class="row w-100 m-0 my-3 bg-component">
        <div class="col-lg-3 col-12 p-0">
            <form class="card-body h-100">
                <div class="btn-gold w-100 my-4">
                    <input type="file" name="" class="d-none" id="imagePoster">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="imagePoster" id="imagePoster" class="py-2 m-auto"> صورة الغلاف</label>
                </div>
                <div class="btn-gold w-100 my-4">
                    <input type="file" name="" class="d-none" id="videoPoster">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="videoPoster" id="videoPoster" class="py-2 m-auto"> صورة الفيديو</label>
                </div>
                <input id="url-link" class="form-control my-4" type="url" placeholder=" رابط فيديو يوتيوب ">
                <input id="live-title6" class="form-control my-4" type="text" placeholder=" عنوان الصورة ">
                <textarea id="live-Description7" class="form-control my-2" cols="20" rows="3" placeholder=" وصف المقالة الثانيه"></textarea>

                <input id="live-bart1" class="form-control my-4" type="text" placeholder=" المميزات 1">
                <input id="live-bart2" class="form-control my-4" type="text" placeholder=" المميزات 2">
                <input id="live-bart3" class="form-control my-4" type="text" placeholder=" المميزات 3">
                <input id="live-bart4" class="form-control my-4" type="text" placeholder=" المميزات 4">
                <input id="live-bart5" class="form-control my-4" type="text" placeholder=" المميزات 5">

                <button class="btn-gold w-100 my-4">
                    <span class="py-2 m-auto">تحديث</span>
                </button>
            </form>
        </div>
        <!-- end col-->
        <div class="col p-0">
            <div class="card-body h-100">
                <div class="row w-100 m-0">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="ext-about-img mb-30">
                            <div class="ext-about-img-inner">
                                <img id="viewPoster" src="{{ asset('backend/asstesClient') }}/imag/barber-portfolio-1.jpg" alt="" class="parallax">
                                <div class="ext-about-img-small">
                                    <img id="viewPostervideo" src="{{ asset('backend/asstesClient') }}/imag/barber-portfolio-55.jpg" alt="" class="parallax">
                                    <div class="video-icon">
                                        <a id="video-link" class="video-popup" rel="external" href="" title="title" target>
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
                                    <h2 id="d-title6">
                                        انظر كيف نعمل وتطبيق الارشادات
                                    </h2>
                                </div>

                            </div>
                            <p id="d-Description7">
                                نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص
                                تعريفى نص تعريفى نص تعريفى
                            </p>
                            <div class="ext-listing mb-30">
                                <ul>
                                    <li>
                                        <span></span>
                                        <p id="d-bart1">
                                            تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                        </p>
                                    </li>
                                    <li>
                                        <span></span>
                                        <p id="d-bart2">
                                            تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                        </p>
                                    </li>
                                    <li>
                                        <span></span>
                                        <p id="d-bart3">
                                            تعريفى نص تعريفى نص تعريفى نص تعريفى
                                        </p>
                                    </li>
                                    <li>
                                        <span></span>
                                        <p id="d-bart4">
                                            تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                        </p>
                                    </li>
                                    <li>
                                        <span></span>
                                        <p id="d-bart5">
                                            تعريفى نص تعريفى نص تعريفى نص تعريفى نص تعريفى
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team -->
    <div class="row w-100 m-0">
        <div class="col-12 py-3 px-0">
            <h4 class="text-color"> فريقنا </h4>
        </div>
        <!-- create Team -->
        <div class="col m-0">
            <form class="row bg-component">
                <div class="col-lg-6 card-body">
                    <div class="btn-gold w-100 my-4">
                        <input type="file" name="" class="d-none" id="imgpersonal">
                        <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                        <label for="imgpersonal" id="imgpersonal" class="py-2 m-auto"> صورة شخصية </label>
                    </div>
                    <input id="live-userName" class="form-control my-4" type="text" placeholder="الاسم">
                    <input id="live-jobTitle" class="form-control my-4" type="text" placeholder="الوظيفة ">
                </div>
                <div class="col-lg-6 card-body">
                    <input id="live-item1" class="form-control mb-3 mt-4" type="text" placeholder="رابط الفيسبوك">
                    <input id="live-item2" class="form-control my-3" type="text" placeholder="رابط الانستقرام">
                    <input id="live-item3" class="form-control my-3" type="text" placeholder="رابط التويتر">
                    <input id="live-item4" class="form-control my-3" type="text" placeholder="رقم الواتساب">
                </div>
                <div class="col-12">
                    <button class="btn-gold my-3">
                        <span class="py-2 m-auto">ارسال</span>
                    </button>
                </div>
            </form>
        </div>
        <!-- view all Team -->
        <div class="team col-lg-4 col-12 d-none-990 d-lg-flex m-0 ">
            <div style="padding: 15px;" class="w-100">
                <section class="card">
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img id="viewImg" src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                    </a>
                    <h5 id="d-userName" class="text-center text-color my-2">هادى ربيع</h5>
                    <h6 id="d-jobTitle" class="text-center text-p">مهندس برمجى </h6>
                    <ul class="mt-3">
                        <li class="btn-hover"><i class="fa-brands fa-facebook"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-twitter"></i> </li>
                        <li class="btn-hover"><i class="fa-brands fa-whatsapp"></i></li>
                        <li class="btn-hover"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="row w-100 m-0 team">
            <div class="col-lg-3 col-md-6 col-sm-6 p-4">
                <section class="card">
                    <div class="cover-black">
                        <div class="d-flex flex-column align-items-end m-3">
                            <button class="btn-hover mb-3">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <button class="btn-hover mb-3" data-bs-toggle="modal" data-bs-target="#editTeam">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </div>
                    </div>
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
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
                    <div class="cover-black">
                        <div class="d-flex flex-column align-items-end m-3">
                            <button class="btn-hover mb-3">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <button class="btn-hover mb-3" data-bs-toggle="modal" data-bs-target="#editTeam">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </div>
                    </div>
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
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
                    <div class="cover-black">
                        <div class="d-flex flex-column align-items-end m-3">
                            <button class="btn-hover mb-3">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <button class="btn-hover mb-3" data-bs-toggle="modal" data-bs-target="#editTeam">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </div>
                    </div>
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
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
                    <div class="cover-black">
                        <div class="d-flex flex-column align-items-end m-3">
                            <button class="btn-hover mb-3">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            <button class="btn-hover mb-3" data-bs-toggle="modal" data-bs-target="#editTeam">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </div>
                    </div>
                    <span class="square-up"></span>
                    <span class="square-down"></span>

                    <a href="../profile.html" class="team-img">
                        <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
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

        <!-- who are we -->
        <form class="row w-100 m-0 my-3 bg-component">
            <div class="col-12 py-3 px-0">
                <h4 class="text-color"> ذيل الصفحة </h4>
            </div>
            <div class="col-lg-4 col-12 p-0">
                <div class="card-body h-100">

                    <input class="form-control my-4" type="text" placeholder=" عنوان الشركة ">
                    <input class="form-control my-4" type="text" placeholder="رقم التواصل">
                    <input class="form-control my-4" type="text" placeholder="  البريد الاكترونى">

                    <button class="btn-gold w-100 my-4">
                        <span class="py-2 m-auto">تحديث</span>
                    </button>
                </div>
            </div>
            <!-- end col-->
            <div class="col-lg-4 col-sm-12 col-12">
                <div class="card-body">
                    <input id="live-item1" class="form-control mb-4 mt-4" type="text" placeholder="رابط الفيسبوك">
                    <input id="live-item2" class="form-control my-4" type="text" placeholder="رابط الانستقرام">
                    <input id="live-item3" class="form-control my-4" type="text" placeholder="رابط التويتر">
                    <input id="live-item4" class="form-control my-4" type="text" placeholder="رقم الواتساب">
                </div>
            </div>

            <div class="col-lg-4 col-12 content-about">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th> ايام العمل</th>
                                    <th> تحديد اليوم </th>
                                    <th> تحديد الوقت </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">السبت</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الاحد</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الاثنين</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الثلاثاء</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الاربعاء</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الخميس</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">الجمعه</td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <input class="form-control" type="time" name="" id="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>

    </div>
</header>
<!-- end -->
@endsection

@section('modal')

    <!-- popup adit -->
    <div class="modal fade" id="editTeam" tabindex="-1" aria-labelledby="editTeam">
        <div class="modal-dialog">
            <form class="alert-support modal-content bg-component p-4">
                <div class="head-alert d-flex justify-content-between align-items-center">
                    <h5 class="text-color">تعديل </h5>
                    <button class="text-color btn-close-support" data-bs-dismiss="modal">
                        <i class="text-color fa-solid fa-close fa-lg"></i>
                    </button>
                </div>
                <a href="#packge" class="btn-gold w-100 my-3">
                    <input type="file" name="" class="d-none" id="editimgtm">
                    <span class="back"><img src="{{ asset('backend/asstesClient') }}/imag/photo-camera-interface-symbol-for-button.png"></span>
                    <label for="editimgtm" class="py-2 m-auto"> صورة شخصية </label>
                </a>
                <input class="form-control my-2" type="text" placeholder="الاسم">
                <input class="form-control my-2" type="text" placeholder="الوظيفة ">
                <input class="form-control mb-2 mt-4" type="text" placeholder="رابط الفيسبوك">
                <input class="form-control my-2" type="text" placeholder="رابط الانستقرام">
                <input class="form-control my-2" type="text" placeholder="رابط التويتر">
                <input class="form-control my-2" type="text" placeholder="رقم الواتساب">
                <button class="btn-gold w-100 my-4">
                    <span class="py-2 m-auto">تحديث</span>
                </button>
            </form>
        </div>
    </div>
    <!-- End  -->
@endsection

@section('script')
<script src="{{ asset('backend/asstesClient') }}/js/home.js"></script>

<script>
    // img 1
    $(document).ready(function(){
        $('#imageInput1').on('change', function(){
            var input = this;
            var img = $('#selectedImage1');

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
            var img = $('#selectedImage2');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });

    // cover
    $(document).ready(function(){
        $('#imageCover').on('change', function(){
            var input = this;
            var img = $('#coverImage');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });

    // who are we
    $(document).ready(function(){
        $('#imagePoster').on('change', function(){
            var input = this;
            var img = $('#viewPoster');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
    $(document).ready(function(){
        $('#videoPoster').on('change', function(){
            var input = this;
            var img = $('#viewPostervideo');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });

    // Team
    $(document).ready(function(){
        $('#imgpersonal').on('change', function(){
            var input = this;
            var img = $('#viewImg');

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
        // Company definition
        $("#live-title").on("input", function() {
            var Value = $(this).val();
            $("#d-title").text(Value);
        });
        $("#live-Description").on("input", function() {
            var descriptioneValue = $(this).val();
            $("#d-Description").text(descriptioneValue);
        });
        // img 1
         $("#live-title1").on("input", function() {
            var Value1 = $(this).val();
            $("#d-title1").text(Value1);
        });
        $("#live-Description1").on("input", function() {
            var descriptioneValue1 = $(this).val();
            $("#d-Description1").text(descriptioneValue1);
        });
        // img 2
         $("#live-title2").on("input", function() {
            var Value2 = $(this).val();
            $("#d-title2").text(Value2);
        });
        $("#live-Description2").on("input", function() {
            var descriptioneValue2 = $(this).val();
            $("#d-Description2").text(descriptioneValue2);
        });

        // Advantages
        $("#live-title3").on("input", function() {
            var Value3 = $(this).val();
            $("#d-title3").text(Value3);
        });
        $("#live-Description3").on("input", function() {
            var descriptioneValue3 = $(this).val();
            $("#d-Description3").text(descriptioneValue3);
        });
        $("#live-Description4").on("input", function() {
            var descriptioneValue4 = $(this).val();
            $("#d-Description4").text(descriptioneValue4);
        });

        // who are we
        $("#url-link").on("input", function () {
            var videoUrl = $(this).val();
            $("#video-link").attr("href", videoUrl);
        });
        $("#live-title6").on("input", function() {
            var Value6 = $(this).val();
            $("#d-title6").text(Value6);
        });
        $("#live-Description7").on("input", function() {
            var descriptioneValue7 = $(this).val();
            $("#d-Description7").text(descriptioneValue7);
        });

        $("#live-bart1").on("input", function() {
            var bart1 = $(this).val();
            $("#d-bart1").text(bart1);
        });
        $("#live-bart2").on("input", function() {
            var bart2 = $(this).val();
            $("#d-bart2").text(bart2);
        });
        $("#live-bart3").on("input", function() {
            var bart3 = $(this).val();
            $("#d-bart3").text(bart3);
        });
        $("#live-bart4").on("input", function() {
            var bart4 = $(this).val();
            $("#d-bart4").text(bart4);
        });
        $("#live-bart5").on("input", function() {
            var bart5 = $(this).val();
            $("#d-bart5").text(bart5);
        });

        // team
        $("#live-userName").on("input", function() {
            var userName = $(this).val();
            $("#d-userName").text(userName);
        });
        $("#live-jobTitle").on("input", function() {
            var jobTitle = $(this).val();
            $("#d-jobTitle").text(jobTitle);
        });
    });

</script>
@endsection

