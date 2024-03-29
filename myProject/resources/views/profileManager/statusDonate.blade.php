@extends('layouts.MainLayoutWithMPermission')

@section('content')
<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user-dashboard-profile">
                        <!-- User Image -->
                        <div class="profile-thumb">
                            <img src="{{ url('images/user/'.$user->image)}}" alt="" class="rounded-circle" width="50%"
                                height="50%">
                        </div>
                        <!-- User Name -->
                        <h5>คุณ {{$user->name}} {{$user->surname}}</h5>
                        <p>เข้าร่วมเมื่อ {{$user->created_at}}</p>
                        <a href="{{url('/editProfileManager')}}"><button class="btn btn-primary">Edit
                                Profile</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">แคมเปญบริจาค</h3>
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th>ชื่อโปรเจค</th>
                                <th>จำนวน</th>
                                <th class="text-center">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($statusDonate as $ud)
                            <tr>
                                <td class="text-center">
                                    <h3 class="title">{{$ud->Name}}</h3>
                                </td>
                                <td class="text-center">
                                    <span>{{$ud->Amount}}</span>
                                </td>
                                <td class="text-center" data-title="Action">
                                    <div class="">
                                        <ul class="list-inline justify-content-center">
                                            <li class="list-inline-item">
                                                <?php if($ud->Status == "REQUEST") {echo "<span>รอยืนยันการบริจาค</span>";}
                                                    else if($ud->Status =="APPROVE"){
                                                        echo "<span style='color:green'>บริจาคสำเร็จ</span>";
                                                    }
                                                    else{
                                                        echo "<span style='color:red'>บริจาคไม่สำเร็จ</span>";
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

                <a href="{{url('/profileManager')}}">
                    <button class="btn btn-secondary">กลับ</button>
                </a>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
</section>
@endsection