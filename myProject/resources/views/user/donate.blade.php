@extends('layouts.MainLayoutUser')

@section('content')
<section class="user-profile section">
    <div class="container">

        <!-- Edit Profile Welcome Text -->
        <div class="widget welcome-message">
            <h2>บริจาคเงินให้กับแคมเปญ {{$campaign->Name}}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 align-item-center">
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="widget personal-info">
                            <form method="POST" action="donated">
                                @csrf
                                <input type="hidden" name="campaignId" value="{{$campaign->Id}}" />
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first-name">วันที่</label>
                                    <input type="date" name="date" class="form-control" id="date" value="" required
                                        title="กรุณาใส่วันที่">
                                </div>
                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last-name">เวลา</label>
                                    <input type="time" name="time" class="form-control" id="time" value="" required
                                        title="กรุณาใส่เวลา">
                                </div>
                                <div class="form-group">
                                    <label for="last-name">จำนวน</label>
                                    <input type="text" name="Amount" class="form-control" id="last-name" value=""
                                        required pattern="^[0-9]{10}$" title="เบอร์โทรศัพท์ควรเป็นตัวเลข">
                                </div>
                                <div class="form-group">
                                    <label for="last-name">อัพโหลดรูปภาพ</label>

                                    <div class="form-group choose-file d-inline-flex">

                                        <i class="fa fa-amazon-pay text-center px-3"></i>
                                        <input type="file" name="profile_image" class="form-control-file mt-2 pt-1"
                                            id="input-file">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary font-weight-bold mt-3">บริจาคเงิน</button>

                            </form>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-8">
                        <div class="profile-thumb">
                            <img src="{{asset('images/promptpay.png')}}" alt="" class="rounded mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection