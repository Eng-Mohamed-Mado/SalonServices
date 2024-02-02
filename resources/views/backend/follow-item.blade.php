@extends('backend.shared.shardAdmin')
@section('title' , 'Salon | Follow Items')

@section('style')
<link href="{{ asset('backend/asstesClient') }}/css/cobon.css" rel="stylesheet">

@endsection

@section('content')
 <!--=============== HEADER ===============-->
 <header>
    <div class="row w-100 m-0 ">
        <div class="d-flex col-12 justify-content-between py-3">
            <h4 class="text-color"> متابعه المنتجات</h4>
            <div class="d-flex text-p">
                <a href="#"> متابعه المنتجات</a>
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
                                <th>اسم المنتج</th>
                                <th>الكمية</th>
                                <th>السعر$ </th>
                                <th>الحالة</th>
                                <th>تأكيد الاستلام </th>
                                <th>الغاء الطلب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">هادى ربيع</td>
                                <td>اعشاب طبيعية</td>
                                <td>4</td>
                                <td>100$</td>
                                <td>
                                    <span class="btn-sm btn-warning">جارى الشحن ..</span>
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
                                <td>اعشاب طبيعية</td>
                                <td>4</td>
                                <td>100$</td>
                                <td>
                                    <span class="btn-sm btn-secondary">تم التوصيل</span>
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
                                <td>اعشاب طبيعية</td>
                                <td>4</td>
                                <td>100$</td>
                                <td>
                                    <span class="btn-sm btn-warning">جارى الشحن ..</span>
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
                                <td>اعشاب طبيعية</td>
                                <td>4</td>
                                <td>100$</td>
                                <td>
                                    <span class="btn-sm btn-secondary">تم التوصيل</span>
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

