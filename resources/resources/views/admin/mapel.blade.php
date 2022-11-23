@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <span class="card-body d-lg-flex align-items-center">
                        <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
                        <a href="https://www.bootstrapdash.com/product/stellar-admin/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Upgrade To Pro</a>
                        <button class="close popup-dismiss ml-2">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Tabel Guru</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">ID Mapel</th>
                                        <th class="font-weight-bold">Nama</th>
                                        <th class="font-weight-bold">Tenaga Pengajar</th>
                                        <th class="font-weight-bold">Kelas</th>
                                        <th class="font-weight-bold">Jam</th>
                                        <th class="font-weight-bold">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image"> Katie Holmes
                                        </td>
                                        <td>$3621</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>04 Jun 2019</td>
                                        <td>18 Jul 2019</td>
                                        <td>
                                            <div class="badge badge-success p-2">Paid</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image"> Minnie Copeland
                                        </td>
                                        <td>$6245</td>
                                        <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                                        <td>25 Sep 2019</td>
                                        <td>07 Oct 2019</td>
                                        <td>
                                            <div class="badge badge-danger p-2">Pending</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image"> Rodney Sims
                                        </td>
                                        <td>$9265</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>12 dec 2019</td>
                                        <td>26 Aug 2019</td>
                                        <td>
                                            <div class="badge badge-warning p-2">Failed</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image"> Carolyn Barker
                                        </td>
                                        <td>$2263</td>
                                        <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                        <td>30 Sep 2019</td>
                                        <td>20 Oct 2019</td>
                                        <td>
                                            <div class="badge badge-success p-2">Paid</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
</div>
</div>
@endsection