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
    @foreach ($campaign as $c)
    <div style="width: 400px;" class="container">
        <br>
        <h5>ชื่อโครงการ</h5>
        <input class="form-control" type="text" value="{{$c->Name}}" aria-label="Disabled input example" disabled readonly>
        <br>
        <h5>เหตุผล</h5>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$c->Terminate_Description}}</textarea>
        <br>
        <div  style="justify-content: center; display: flex;">
        @if ($c->Status == "REQUEST_TERMINATE")
            <a href="{{route('terminateapprove', [$c->Id])}}" class="btn btn-success">อนุมัติ</a>
            &nbsp
            &nbsp
            <a href="{{route('terminatedeny', [$c->Id])}}" class="btn btn-danger">ไม่อนุมัติ</a>
            &nbsp
            &nbsp
        @endif
            <a href="{{route('terminatereq', [$c->Id])}}" class="btn btn-secondary">Go Back</a>
        </div>
    </div>
    @endforeach
</body>

</html>
@endsection