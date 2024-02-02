@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Follow Package ')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/cobon.css" rel="stylesheet">

@endsection

@section('content')

            <!--=============== HEADER ===============-->
            <header>
                <div class="row w-100 m-0 ">
                    <div class="d-flex col-12 justify-content-between py-3">
                        <h4 class="text-color"> متابعه الحجوزات</h4>
                        <div class="d-flex text-p">
                            <a href="#"> متابعه الحجوزات</a>
                            <span class="px-2"> / </span>
                            <a href="../index.html">الرئيسية</a>
                        </div>
                    </div>
                </div>
                <div class="row w-100 m-0 bg-component">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>اسم العميل</th>
                                            <th>اسم الباقة</th>
                                            <th>تاريخ</th>
                                            <th>التوقيت</th>
                                            <th>السعر$ </th>
                                            <th>الحالة</th>
                                            <th>تأكيد الاستلام </th>
                                            <th>الغاء الخدمة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">هادى ربيع</td>
                                            <td> باقة اساسية</td>
                                            <td>14/7/2024</td>
                                            <td>3:30</td>
                                            <td>100$</td>
                                            <td>
                                                <span class="btn-sm btn-warning">قيد الانتظار ..</span>
                                            </td>
                                            <td><form action=""><input type="checkbox" name="" id=""></form></td>
                                            <td>
                                                <button class="btn-sm btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">هادى ربيع</td>
                                            <td> باقة اساسية</td>
                                            <td>14/7/2024</td>
                                            <td>3:30</td>
                                            <td>100$</td>
                                            <td>
                                                <span class="btn-sm btn-secondary">تم الانتهاء</span>
                                            </td>
                                            <td><form action=""><input type="checkbox" name="" id=""></form></td>
                                            <td>
                                                <button class="btn-sm btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">هادى ربيع</td>
                                            <td> باقة اساسية</td>
                                            <td>14/7/2024</td>
                                            <td>3:30</td>
                                            <td>100$</td>
                                            <td>
                                                <span class="btn-sm btn-warning">قيد الانتظار ..</span>
                                            </td>
                                            <td><form action=""><input type="checkbox" name="" id=""></form></td>
                                            <td>
                                                <button class="btn-sm btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">هادى ربيع</td>
                                            <td> باقة اساسية</td>
                                            <td>14/7/2024</td>
                                            <td>3:30</td>
                                            <td>100$</td>
                                            <td>
                                                <span class="btn-sm btn-secondary">تم الانتهاء</span>
                                            </td>
                                            <td><form action=""><input type="checkbox" name="" id=""></form></td>
                                            <td>
                                                <button class="btn-sm btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
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
@endsection

