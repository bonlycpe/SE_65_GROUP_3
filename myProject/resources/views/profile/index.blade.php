@extends('layouts.MainLayoutAfterLogin')

@section('content')
<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user-dashboard-profile">
                        <!-- User Image -->
                        <div class="profile-thumb">
                            <img src="images/user/user-thumb.jpg" alt="" class="rounded-circle" width="50%"
                                height="50%">
                        </div>
                        <!-- User Name -->
                        <h5>คุณ {{$user->name}} {{$user->surname}}</h5>
                        <p>เข้าร่วมเมื่อ {{$user->created_at}}</p>
                        <a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">โครงการที่บริจาคและรับบริจาค</h3>
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Title</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumb">
                                    <img width="80px" height="auto" src="images/products/products-1.jpg"
                                        alt="image description">
                                </td>
                                <td class="product-details">
                                    <h3 class="title">กองทุนส่งเสริมอนุรักษ์ม้าลาย</h3>
                                    <span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
                                    <span><strong>Posted on: </strong><time>Jun 27, 2017</time> </span>
                                    <span class="status active"><strong>Status</strong>Active</span>
                                    <span class="location"><strong>Location</strong>Dhaka,Bangladesh</span>
                                </td>
                                <td class="product-category"><span class="categories">Laptops</span></td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="view" class="view"
                                                    href="category.html">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </li>
                                            <!--<li class="list-inline-item">
                                                <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="dashboard.html">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="delete" data-toggle="tooltip" data-placement="top"
                                                    title="Delete" href="dashboard.html">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </li>-->
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <!-- pagination -->
                <div class="pagination justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="dashboard.html" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="dashboard.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="dashboard.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="dashboard.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="dashboard.html" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- pagination -->

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>
@endsection