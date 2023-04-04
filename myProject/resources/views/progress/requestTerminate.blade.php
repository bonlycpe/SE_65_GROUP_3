@extends('layouts.LayoutBlank')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>

</style>

<body>
     <div class="col-lg-8 mx-auto">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
         <h4 class="mb-2 title-color">ขอยุติแคมเปญ : {{$campaign->Name}}</h4>
            <form name="openObjectCampaign" onsubmit="return validateForm()" method="POST" action="{{ url("/request") }}" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-lg-6">
                        <div class="form-group text-left">
                            <label>เหตุผล</label>
                            <textarea name="Description" id="Description" class="form-control" rows="3" style="width: 150%; height: 200px;" required></textarea>
                        </div>
                        <input type="hidden" name="id" id="id" value={{$campaign->Id}}>
                        <a type="submit" value="Submit" href="/managerPage" class="btn btn-main btn-orange  btn-round-full">กลับ<i class="icofont-simple-right ml-2"></i></a>
                   <button type="submit" value="Submit" class="btn btn-main btn-success btn-round-full">ส่ง<i class="icofont-simple-right ml-2"></i></button>
                   </div>
             </form>
         </div>
</body>

  
</html>
@endsection

    