@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Client ')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/client.css" rel="stylesheet">

@endsection

@section('content')
<!--=============== HEADER ===============-->
<header class="client">
    <div class="row w-100 m-0">
        <div class="d-flex col-12 justify-content-between py-3">
            <h4 class="text-color"> العملاء  </h4>
            <div class="d-flex text-p">
                <a href="#"> العملاء </a>
                <span class="px-2"> / </span>
                <a href="{{ route('dashboard') }}">الرئيسية</a>
            </div>
        </div>
    </div>
    <div class="row w-100 m-0">
        <div class="col-lg-3 col-md-6 col-sm-6 p-4">
            <section class="card">
                <div class="cover-black">
                    <div class="d-flex flex-column align-items-end m-3">
                        <button class="btn-hover mb-3">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

                </ul>
                <span class="square-up"></span>
                <span class="square-down"></span>
            </section>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-4">
            <section class="card">
                <div class="cover-black">
                    <div class="d-flex flex-column align-items-end m-3">
                        <button class="btn-hover mb-3">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

                </ul>
                <span class="square-up"></span>
                <span class="square-down"></span>
            </section>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-4">
            <section class="card">
                <div class="cover-black">
                    <div class="d-flex flex-column align-items-end m-3">
                        <button class="btn-hover mb-3">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

                </ul>
                <span class="square-up"></span>
                <span class="square-down"></span>
            </section>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 p-4">
            <section class="card">
                <div class="cover-black">
                    <div class="d-flex flex-column align-items-end m-3">
                        <button class="btn-hover mb-3">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>
                <span class="square-up"></span>
                <span class="square-down"></span>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

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
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>
                <span class="square-up"></span>
                <span class="square-down"></span>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

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
                        <a href="../profile.html" class="btn-hover mb-3 text-center">
                            <i class="fa-solid fa-user-tie"></i>
                        </a>
                    </div>
                </div>
                <span class="square-up"></span>
                <span class="square-down"></span>

                <a href="../profile.html" class="client-img">
                    <img src="{{ asset('backend/asstesClient') }}/imag/hady.jpg" alt="hady" >
                </a>
                <h5 class="text-center text-color my-2">هادى ربيع</h5>
                <ul class="mt-3">

                    <li><span><i class="fa-solid fa-envelope"></i></span> hadyrabie@gmail.com </li>
                    <li><span><i class="fa-solid fa-location-dot"></i></span> مصر - القاهرة - المقطم </li>
                    <li><span><i class="fa-solid fa-phone-volume"></i></span>  01030804922 </li>
                    <li><span><i class="fa-solid fa-venus-mars"></i></span>  ذكر </li>

                </ul>
            </section>
        </div>
    </div>
</header>
<!-- end -->
@endsection

@section('modal')
@endsection

@section('script')
@endsection

