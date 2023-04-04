@extends('layouts.MainLayoutWithMPermission')

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
                        <img src="{{ url('images/user/'.$user->image)}}" alt="" class="rounded-circle" width="50%"
                            height="40%">
                        <!-- User Name -->
                        <h5>คุณ {{$user->name}} {{$user->surname}}</h5>
                        <p>เข้าร่วมเมื่อ {{$user->created_at}}</p>
                        <a href="editProfileManager"><button class="btn btn-primary">Edit Profile</button></a>
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
                                <th>ชื่อโปรเจค</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userDonate as $ud)
                            <tr>
                                <td class="product-details">
                                    <h3 class="title">{{$ud->Name}}</h3>
                                    <span class="add-id">{{$ud->Description}}</span>
                                </td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="view" class="view"
                                                    href="/statusDonateManager/{{$ud->campaign_money_id}}">
                                                    <i class=" fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @foreach($userObject as $uo)
                            <tr>
                                <td class="product-details">
                                    <h3 class="title">{{$uo->Name}}</h3>
                                    <span class="add-id">{{$uo->Description}}</span>
                                </td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <a data-toggle="tooltip" data-placement="top" title="view" class="view"
                                                    href="/statusObjectManager/{{$uo->campaign_object_id}}">
                                                    <i class=" fa fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{url('/home')}}">
                        <button class="btn btn-secondary">กลับ</button>
                    </a>
                </div>

                <!-- pagination 
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
                </div>-->
                <!-- pagination -->

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</section>
@endsection