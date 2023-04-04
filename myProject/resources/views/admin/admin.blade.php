@extends('layouts.LayoutAdmin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Welcome to Admin Page</h1><br><br>
    </div>
    <div class="input-group mb-3" style="width: 30%; margin-left: 10%;">
        <form action="{{ route('search') }}" method="get">
            <div class="input-group mb-3">
                <input type="text" name="searching" class="form-control" placeholder="Type Something..."
                    aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-Search">Search</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">การดำเนินการ</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach ($staff as $s)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$s->name}}</td>
                        <td>{{$s->surname}}</td>
                        <td>{{$s->username}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->Type}}</td>
                        <td>
                            <div style="display: flex; align-items:center; justify-content:center">
                                <a href="{{route('editStaff', [$s->id])}}" class="btn btn-primary">EDIT</a>&nbsp
                                <a href="{{route('deleteStaff',[$s->id])}}"
                                    onClick="return confirm('Are you sure for delete this Staff?')"
                                    class="btn btn-danger">DELETE</a>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="display: flex; align-items:center; justify-content:center">
                <a href="{{ route('createStaffPage') }}" class="btn btn-success">Create Staff</a>
            </div>
        </div>
</body>

</html>
@endsection