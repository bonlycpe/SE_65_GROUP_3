@extends('layouts.LayoutStaff')

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
        <h1 style="text-align: center;">Welcome to Staff Page</h1>
        <h2 style="text-align: center;">คำร้องขอเป็นผู้บริหาร</h2>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-striped w-auto mx-auto">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Info</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($managers as $m)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$m->name}}</td>
                        <td>{{$m->surname}}</td>
                        <td>{{$m->email}}</td>
                        <td>{{$m->username}}</td>
                        <td>
                            <a href="{{route('info', [$m->Id])}}" class="btn btn-info">Info</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div style="justify-content: center; display: flex;">
            <a href="{{route('approved')}}" class="btn btn-info" >คำร้องที่ยืนยันแล้ว</a>
        </div>
</body>
</html>
@endsection