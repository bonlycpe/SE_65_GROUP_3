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
                        <div class="justify-content-center align-items-center">
                            <h5>คุณ {{$user->name}} {{$user->surname}}</h5>
                            <p>เข้าร่วมเมื่อ {{$user->created_at}}</p>
                            <a href="{{url('/editProfile')}}"><button class="btn btn-primary">Edit
                                    Profile</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">แคมเปญรับบริจาค</h3>
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>ชื่อโปรเจค</th>
                                <th>จำนวน</th>
                                <th class="text-center">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statusObject as $so)
                            <tr>
                                <td class="text-center">
                                    <h56 class="title">{{$so->Name}}</h5>
                                </td>
                                <td class="text-center">
                                    <h5 class="title">{{$so->Amount}}</h5>
                                </td>
                                <td class="text-center" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <?php if($so->Status == "REQUEST") {echo "<span style='color:#FAA300'>รอยืนยันการรับบริจาค</span>";}
                                                    else if($so->Status =="APPROVE"){
                                                        echo "<span style='color:green'>รับบริจาคสำเร็จ</span>";
                                                    }
                                                    else{
                                                        echo "<span style='color:red'>รับบริจาคไม่สำเร็จ</span>";
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

                <a href="{{url('/profile')}}">
                    <button class="btn btn-secondary">กลับ</button>
                </a>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
</section>
@endsection