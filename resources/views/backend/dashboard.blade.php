@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Dashboard')

@section('style')

<link href="{{ asset('backend/asstesClient') }}/css/dashbord.css" rel="stylesheet">

@endsection

@section('content')

<!--=============== HEADER ===============-->

<header>
    <div class="row w-100 m-0">
        <div class="d-flex col-12 justify-content-between py-3">
            <h4 class="text-color"> الواجهة الرئيسية </h4>
            <div class="d-flex text-p">
                <a href="{{ route('dashboard') }}"> الواجهة الرئيسية </a>
                <span class="px-2"> / </span>
                <a href="{{ route('dashboard') }}">الرئيسية</a>
            </div>
        </div>
        <div class="col box m-2 bg-component py-3 px-4">
            <div>
                <span class="text-p">عدد العملاء</span>
                <h3 class=" text-color">6500</h3>
            </div>
            <div class="apex-charts mt-3" id="sparkline-chart-1"></div>

        </div>
        <div class="col box m-2 bg-component py-3 px-4">
            <div>
                <span class="text-p">عدد الطلبات</span>
                <h3 class=" text-color">6500</h3>
            </div>
            <div class="apex-charts mt-3" id="sparkline-chart-2"></div>
        </div>
        <div class="col box m-2 bg-component py-3 px-4">
            <div>
                <span class="text-p">عدد المنتجات</span>
                <h3 class=" text-color">6500</h3>
            </div>
            <div class="apex-charts mt-3" id="sparkline-chart-3"></div>
        </div>
        <div class="col box m-2 bg-component py-3 px-4">
            <div>
                <span class="text-p">صافى الارباح </span>
                <h3 class=" text-color">6500</h3>
            </div>
            <div class="apex-charts mt-3" id="sparkline-chart-4"></div>
        </div>
    </div>
    <div class="row w-100 m-0">
        <div class="col box m-2 bg-component py-3 px-4">
            <div class="card-body">
                <h4 class="card-title mb-4 text-color"> الحجوزات</h4>

                <div class="mt-1">
                    <ul class="list-inline main-chart mb-0 text-center">
                        <li class="list-inline-item chart-border-left me-0 border-0">
                            <h6 class="text-primary">$<span data-plugin="counterup">3.85k</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">ملغيه</span>
                            </h6>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h6 class=" text-color"><span data-plugin="counterup">258</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">تم التوصيل</span>
                            </h6>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h6 class=" text-color"><span data-plugin="counterup">52</span>k<span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">فى الانتظار</span>
                            </h6>
                        </li>
                    </ul>
                </div>

                <div class="mt-3">
                    <div id="sales-analytics-chart" class="apex-charts"></div>
                </div>
            </div>
        </div> <!-- end col-->
        <div class="col box m-2 bg-component py-3 px-4">
            <div class="card-body">
                <h4 class="card-title text-color"> المنتجات</h4>
                <div class="mt-1">
                    <ul class="list-inline main-chart mb-0 text-center">
                        <li class="list-inline-item chart-border-left me-0 border-0">
                            <h6 class="text-primary">$<span data-plugin="counterup">3.85k</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">ملغيه</span>
                            </h6>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h6 class=" text-color"><span data-plugin="counterup">258</span><span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">تم التوصيل</span>
                            </h6>
                        </li>
                        <li class="list-inline-item chart-border-left me-0">
                            <h6 class=" text-color"><span data-plugin="counterup">52</span>k<span
                                    class="text-muted d-inline-block fw-normal font-size-15 ms-2">فى الانتظار</span>
                            </h6>
                        </li>
                    </ul>
                </div>

                <div id="column_chart_datalabel" class="apex-charts"></div>
            </div>
        </div>
    </div>

</header>
<!-- end -->
@endsection

@section('modal')
@endsection

@section('script')

    <script src="{{ asset('backend/asstesClient') }}/js/home.js"></script>
@endsection

