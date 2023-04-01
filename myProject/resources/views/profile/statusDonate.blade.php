@extends('layouts.MainLayoutUser')

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
                            <img src="{{asset('images/user/user-thumb.jpg')}}" alt="" class="rounded-circle" width="50%"
                                height="50%">
                        </div>
                        <!-- User Name -->
                        <h5>คุณ {{$user->name}} {{$user->surname}}</h5>
                        <p>เข้าร่วมเมื่อ {{$user->created_at}}</p>
                        <a href="editProfile" class="btn btn-main-sm">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">แคมเปญบริจาคและรับบริจาค</h3>
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>ชื่อโปรเจค</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statusDonate as $ud)
                            <tr>
                                <td class="product-details">
                                    <h3 class="title">{{$ud->Name}}</h3>
                                    <span class="add-id">{{$ud->Description}}</span>
                                </td>
                                <td class="action" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <?php if($ud->Status == "REQUEST") {echo "<span>รอยืนยันการบริจาค</span>";}
                                                    else if($ud->Status =="APPROVE"){
                                                        echo "<span>บริจาคสำเร็จ</span>";
                                                    }
                                                    else{
                                                        echo "<span>บริจาคไม่สำเร็จ</span>";
                                                    }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <a href="profile">
                    <button>กลับ</button>
                </a>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
</section>
@endsection