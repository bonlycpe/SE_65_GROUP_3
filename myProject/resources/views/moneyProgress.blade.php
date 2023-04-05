@extends('layouts.LayoutManager')

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
    <div class="container">
        <h1 style="text-align: center;">ความคืบหน้าโครงการ</h1>
    </div>
        <div class="container">
            <div class="row">
                @if($donateAll != null)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">บริจาคให้</th>
                            <th scope="col">จำนวนเงิน</th>
                            <th scope="col">E-Slip</th>
                            <th scope="col">สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($donateAll as $d)
                        <tr>
                            <th scope="row">{{$d->Id}}</th>
                            <td>{{$d->name}}</td>
                            <td>{{$d->surname}}</td>
                            <td>{{$d->Name}}</td>
                            <td>{{$d->Amount}} บาท</td>
                            <td>
                                <a href="/moneyProgress/eslip/{{$d->Id}}" class="btn btn-info">Show E-Slip</a>
                            </td>
                            <td>{{$d->Status}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div style="display: flex; justify-content: center;">
                    <h1 style="color: cornflowerblue;">ยังไม่มีความคืบหน้า</h1>
                </div>  
                @endif
                <a href="{{url('/managerPage')}}">
                    <button class="btn btn-secondary">กลับ</button>
                </a>
            </div>
        </div>
</body>

</html>
@endsection