@extends('layouts.MainLayoutAfterLogin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
     <div class="col-lg-8">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
         <h2 class="mb-2 title-color">กรุณากรอกข้อมูลของท่าน</h2>
            <form  class="appoinment-form" method="POST" action="{{ url('requestVerify/update') }}" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-lg-6">
                        <div class="form-group text-center">
                            <label>รหัสบัตรประชาชน</label>
                            <input name="citizenId" id="citizenId" type="text" class="form-control" required pattern="^[0-9]{13}$" title="รหัสบัตรประชาชนควรเป็นตัวเลขและมี 13 หลัก">
                        </div>
                        <div class="form-group text-center">
                            <label>เบอร์โทรศัพท์</label>
                            <input name="phone" id="phone" type="text" class="form-control" required pattern="^[0-9]{10}$" title="เบอร์โทรศัพท์ควรเป็นตัวเลขและมี 10 ตัว">
                        </div>
                        <div class="form-group text-center">
                            <label>ที่อยู่</label>
                            <input name="address" id="address" type="text" class="form-control" required>
                        </div>
                       <a class="btn btn-main btn-round-full" href="{{ url('/home') }}"><i class="icofont-simple-left ml-2"></i>กลับ</a>
                   <button type="submit" class="btn btn-main btn-success btn-round-full">ส่งข้อมูล<i class="icofont-simple-right ml-2"></i></button>
                   </div>
             </form>
         </div>
</body>

</html>
@endsection
