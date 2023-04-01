@extends('layouts.LayoutManagerOpenCampaign')

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
         <h2 class="mb-2 title-color">เปิดแคมเปญบริจาคของ</h2>
            <form  class="appoinment-form" method="POST" action="{{ url('openCampaignObjectController/create') }}" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-lg-6">
                        <div class="form-group text-center">
                            <label>ชื่อแคมเปญ</label>
                            <input name="campaignName" id="campaignName" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>ชื่อของที่ให้บริจาค</label>
                            <input name="objectName" id="objectName" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>รายละเอียด</label>
                            <input name="description" id="description" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>จำนวนของที่ให้บริจาค</label>
                            <input name="objectAmount" id="objectAmount" type="text" class="form-control" required>
                        </div>
                        <div class="container m-0">
                            <label>Tag</label>
                            <select class="form-select" aria-label="Default select example" name="tag">
                                <option value="Foods">Foods</option>
                                <option value="Apparel">Apparel</option>
                                <option value="Medicine">Medicine</option>
                            </select>
                        </div>
                        <div class="form-group text-center">
                            <label>รูปภาพ</label>
                            <input type="file" name="campaign_image" class="form-control-file mt-2 pt-1" id="input-file">
                        </div>
                        {{-- <div class="form-group text-center">
                            <label>เพิ่ม Board ให้โครงการขอคุณโดยให้ใส่เป็น Email ที่ลงทะเบียนไว้กับระบบ</label>
                        </div>
                        <div class="form-group text-center">
                            <label>เพิ่ม Board</label>
                            <input name="board_01" id="board_01" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>เพิ่ม Board</label>
                            <input name="board_02" id="board_02" type="text" class="form-control" required>
                        </div>                        <div class="form-group text-center">
                            <label>เพิ่ม Board</label>
                            <input name="board_03" id="board_03" type="text" class="form-control" required>
                        </div>
                         --}}
                   <button type="submit" class="btn btn-main btn-success btn-round-full">เปิดแคมเปญ<i class="icofont-simple-right ml-2"></i></button>
                   </div>
             </form>
         </div>
</body>

</html>
@endsection
