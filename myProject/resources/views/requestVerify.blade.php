@extends('layouts.MainLayoutUser')

@section('headLink')

@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
@section('content')
<div class="col-lg-12">
    <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">

        <h2 class="mb-2 title-color text-center">กรุณากรอกข้อมูลของท่าน</h2>
        <form class="appoinment-form" method="POST" action="{{ url('requestVerify/update') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="form-group text-center">
                        <label>รหัสบัตรประชาชน</label>
                        <input name="citizenId" id="citizenId" type="text" class="form-control" required
                            pattern="^[0-9]{13}$" title="รหัสบัตรประชาชนควรเป็นตัวเลขและมี 13 หลัก">
                    </div>
                    <div class="form-group text-center">
                        <label>เบอร์โทรศัพท์</label>
                        <input name="phone" id="phone" type="text" class="form-control" required pattern="^[0-9]{10}$"
                            title="เบอร์โทรศัพท์ควรเป็นตัวเลขและมี 10 ตัว">
                    </div>
                    <div class="form-group text-center">
                        <label>ที่อยู่</label>
                        <input name="address" id="address" type="text" class="form-control" required>
                    </div>
                    <div class="col text-center">
                        <a class="btn btn-secondary" href="{{ url('/home') }}">กลับ</a>
                        <button type="submit" class="btn btn-main btn-success btn-round">ส่งข้อมูล</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection