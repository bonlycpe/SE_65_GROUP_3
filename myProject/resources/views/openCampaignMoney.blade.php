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
     <div class="col-lg-8 mx-auto">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
         <h2 class="mb-2 title-color">เปิดแคมเปญบริจาคเงิน</h2>
            <form  class="appoinment-form" method="POST" action="{{ url('openCampaignMoneyController/create') }}" enctype="multipart/form-data">
                @csrf
                 <div class="row">
                   <div class="col-lg-6">
                        <div class="form-group text-center">
                            <label>ชื่อ</label>
                            <input name="campaignName" id="campaignName" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>รายละเอียด</label>
                            <input name="description" id="detail" type="text" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <label>จำนวนเงินที่จะรับบริจาค</label>
                            <input name="goal" id="goal" type="number" class="form-control" required min=0 pattern="[0-9]+">
                        </div>
                        <div class="form-group text-left">
                            <label>รูปภาพ</label>
                            <input type="file" name="campaign_image" class="form-control-file mt-2 pt-1" id="input-file">
                        </div>
                        <div class="form-group text-left">
                            <label>รูป QR CODE สำหรับโอนเงิน</label>
                            <input type="file" name="QR_image" class="form-control-file mt-2 pt-1" id="input-file">
                        </div>
                   <button type="submit" class="btn btn-main btn-success btn-round-full">เปิดแคมเปญ<i class="icofont-simple-right ml-2"></i></button>
                   </div>
             </form>
         </div>
</body>

</html>
@endsection
