@extends('layouts.LayoutStaff')

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
    @foreach ($eslip as $e)
    <div style="width: 400px;" class="container">
        <br>
        <h2 style="text-align: center;">E-Slip</h2>
        <br>
        <br>
        <img src="images/eslip/{{$e->eSlip}}">
        <br>
        <h5>ชื่อผู้บริจาค</h5>
        <input class="form-control" type="text" value="{{$e->name}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>วัน</h5>
        <input class="form-control" type="text" value="{{$e->Date}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>เวลา</h5>
        <input class="form-control" type="text" value="{{$e->Timer}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>จำนวนเงิน</h5>
        <input class="form-control" type="text" value="{{$e->Amount}} บาท" aria-label="Disabled input example" disabled readonly>
        <br>
        <div  style="justify-content: center; display: flex;">
        @if ($e->Status == "REQUEST")
            <a href="{{route('staff_approve', [$e->Id,$e->Amount,$e->campaign_money_id])}}" class="btn btn-success">อนุมัติ</a>
            &nbsp
            &nbsp
            <a href="{{route('staff_deny', [$e->Id])}}" class="btn btn-danger">ไม่อนุมัติ</a>
            &nbsp
            &nbsp
        @endif
            <a href="{{route('staff_money')}}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    @endforeach
</body>

</html>
@endsection