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
        <h1 style="text-align: center;">โครงการที่ถูกปิดแล้ว</h1>
    </div>
    <div class="input-group mb-3" style="width: 30%; margin-left: 40%;">
        <form action="{{ route('terminateSearch') }}" method="get"> 
            <div class="input-group mb-3">
                <input type="text"  name="searching" class="form-control" placeholder="Type Something..." aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-Search">Search</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped mx-auto w-auto">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อโครงการ</th>
                        <th scope="col">รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach($campaign as $c)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$c->Name}}</td>
                        <td>
                            <a href="{{route('terminateinfo', [$c->Id])}}" class="btn btn-info" style="justify-content: center;">รายละเอียด</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div style="justify-content: center; display: flex;">
        <a href="{{route('terminatereq')}}" class="btn btn-secondary">Go Back</a>
    </div>
</body>

</html>
@endsection