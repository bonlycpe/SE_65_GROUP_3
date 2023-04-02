@extends('layouts.LayoutProfile')

@section('content')
<section class="user-profile section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h2>Edit profile</h2>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-5 col-md-8 align-item-center">
                        <div class="widget personal-info">
                            <form method="POST" action="updateProfile" enctype="multipart/form-data">
                                @csrf
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first-name">ชื่อ</label>
                                    <input type="text" name="name" class="form-control" id="first-name"
                                        value="{{$user->name}}">
                                </div>
                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last-name">นามสกุล</label>
                                    <input type="text" name="surname" class="form-control" id="last-name"
                                        value="{{$user->surname}}">
                                </div>
                                <!-- File chooser -->
                                <div class="form-group">
                                    <label for="last-name">อัพโหลดรูปภาพ</label>

                                    <div class="form-group choose-file d-inline-flex">

                                        <i class="fa fa-amazon-pay text-center"></i>
                                        <input type="file" name="profile_image" class="form-control-file mt-2 pt-1"
                                            id="input-file">
                                    </div>
                                </div>
                                <div class="row justify-content-around">
                                    <a href="{{url('/profile')}}">
                                        <button class="btn btn-primary font-weight-bold mt-3">กลับ</button>
                                    </a>
                                    <button type="submit"
                                        class="btn btn-primary font-weight-bold mt-3">แก้ไขข้อมูล</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection