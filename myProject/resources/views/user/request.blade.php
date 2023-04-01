@extends('layouts.MainLayoutUser')

@section('content')
<section class="user-profile section">
    <div class="container">

        <!-- Edit Profile Welcome Text -->
        <div class="widget welcome-message">
            <h2>บริจาครับบริจาคของจากแคมเปญ {{$campaign->Name}}</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-8 align-item-center">
                <!-- Edit Personal Info -->
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="widget personal-info">
                            <form method="POST" action="{{url('/requested')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="campaignId" value="{{$campaign->Id}}" />
                                <!-- First Name -->
                                <div class="form-group">
                                    <label for="first-name">วันที่</label>
                                    <input type="date" name="name" class="form-control" id="date" value="" required>
                                </div>
                                <!-- Last Name -->
                                <div class="form-group">
                                    <label for="last-name">จำนวน</label>
                                    <input type="number" name="surname" class="form-control" id="time" value=""
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="last-name">รายละเอียด</label>
                                    <input type="text" name="description" class="form-control" id="time" value=""
                                        required>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary font-weight-bold mt-3">รับบริจาคของ</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection