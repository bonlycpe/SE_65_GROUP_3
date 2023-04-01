@extends('layouts.MainLayoutAfterLogin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    @foreach ($info as $i)
    <div style="width: 400px;" class="container">
        <br>
        <h2 style="text-align: center;">ข้อมูลผู้ส่งคำขอ</h2>
        <br>
        <br>
        <h5>รหัสบัตรประชาชน</h5>
        <input class="form-control" type="text" value="{{$i->citizen_id}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>ชื่อ</h5>
        <input class="form-control" type="text" value="{{$i->name}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>นามสกุล</h5>
        <input class="form-control" type="text" value="{{$i->surname}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>เบอร์โทร</h5>
        <input class="form-control" type="text" value="{{$i->phone}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>ที่อยู่</h5>
        <input class="form-control" type="text" value="{{$i->address}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <div style="justify-content: center; display: flex;">
            <a href="{{route('verify_approve', [$m->Id])}}" class="btn btn-success">อนุมัติ</a>
            <a href="{{route('verify_deny', [$m->Id])}}" class="btn btn-danger">ไม่อนุมัติ</a>
            <a href="{{route('staff_verify')}}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    @endforeach
</body>

</html>
@endsection