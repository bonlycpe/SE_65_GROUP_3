@extends('layouts.MainLayoutUser')

@section('content')
<section class="user-profile section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h2>Edit profile</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="widget personal-info">
                            <h3 class="widget-header user">Edit Personal Information</h3>
                            <form method="POST" action="updateProfile">
                                @csrf
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first-name">ชื่อ</label>
                                    <input type="text" name="name" class="form-control" id="first-name">
                                </div>
                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last-name">นามสกุล</label>
                                    <input type="text" name="surname" class="form-control" id="last-name">
                                </div>
                                <!-- File chooser -->
                                <div class="form-group choose-file d-inline-flex">
                                    <i class="fa fa-user text-center px-3"></i>
                                    <input type="file" class="form-control-file mt-2 pt-1" id="input-file">
                                </div>
                                <button type="submit" class="btn btn-primary font-weight-bold mt-3">แก้ไขข้อมูล</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection