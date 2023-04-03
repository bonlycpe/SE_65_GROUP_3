@extends('layouts.LayoutBlank')

@section('content')
<section class="user-profile section">
    <div class="container">
        <div class="col-lg-8 mx-auto">
            <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
                <!-- Edit Profile Welcome Text -->
                <div class="widget welcome-message">
                    <h2>แก้ไขข้อมูลแคมเปญ</h2>
                </div>
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget personal-info">
                            <form method="POST" action="updateCampaignMoney" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">ชื่อแคมเปญ</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{$campaign->Name}} " style="width: 150%;">
                                </div>
                                <div class="form-group text-center">
                                    <label>รายละเอียดแคมเปญ</label>
                                    <textarea name="Description" id="Description" class="form-control" rows="3" style="width: 150%; height: 200px;" required>{{$campaign->Description}}</textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label>คำเตือน ! หากเลือกยุติแคมเปญจะไม่สามารถอัพเดตความคืบหน้าและแก้ไขแคมเปญได้อีกต่อไป</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="TERMINATE" id="status" name="status">
                                        <label class="form-check-label" for="status">
                                            ยุติแคมเปญ
                                        </label>
                                    </div>
                                </div> --}}
                                

                                <!-- File chooser -->
                                <div class="form-group">
                                    <label for="last-name">อัพโหลดรูปภาพ</label>
                                    <div class="form-group choose-file d-inline-flex">
                                        <i class="fa fa-amazon-pay text-center"></i>
                                        <input type="file" name="campaign_image" class="form-control-file mt-2 pt-1"
                                            id="input-file">
                                    </div>
                                </div>
                                <a type="submit" value="Submit" href="/managerPage" class="btn btn-dark font-weight-bold mt-3 btn-round-full">กลับ<i class="icofont-simple-right ml-2"></i></a>
                                <button type="submit" class="btn btn-primary font-weight-bold mt-3 btn-round-full">แก้ไขข้อมูล</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection