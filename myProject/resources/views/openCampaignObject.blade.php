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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .form-group.text-center.d-flex.align-items-center label {
        margin-right: 10px;
    }
    .form-group.text-center.d-flex.align-items-center input {
        margin-left: 10px; 
    }
    p {
        font-weight: bold;
        color: #ff8080;
    }

    .container.m-1 {
        margin-bottom: 1.5rem;
    }
</style>

<body>
     <div class="col-lg-8 mx-auto">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
         <h2 class="mb-2 title-color">เปิดแคมเปญบริจาคของ</h2>
            <form  name="openObjectCampaign" onsubmit="return validateForm()" method="POST" action="{{ url('openCampaignObjectController/create') }}" enctype="multipart/form-data">
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
                            <input name="objectAmount" id="objectAmount" type="number" class="form-control" required min=0 pattern="[0-9]+">
                        </div>
                        <div class="container text-center">
                            <label>Tag</label>
                            <select class="form-select" aria-label="Default select example" name="tag">
                                <option value="Foods">Foods</option>
                                <option value="Apparel">Apparel</option>
                                <option value="Medicine">Medicine</option>
                            </select>
                        </div>
                        <div class="container m-9 ym-3 my-3 text-center">
                            <label>เพิ่ม Board ให้โครงการของคุณ</label>
                            <p>* ต้องเป็นผู้ลงทะเบียนกับระบบ</p>
                            <p>* ต้องเป็นผู้มีสิทธิบริหารแคมเปญ</p>
                        </div>                          
                        <div class="form-group text-center">
                            <label>Email </label>
                            <input name="board_01" id="board_01" type="text">
                            <input type="hidden" name="id_board_1" id="id_board_1" value="">
                            <span id="boardError1" class="text-danger"></span>
                        </div>
                        <div class="form-group text-center">
                            <label>Email</label>
                            <input name="board_02" id="board_02" type="text" >
                            <input type="hidden" name="id_board_2" id="id_board_2" value="">
                            <span id="boardError2" class="text-danger"></span>
                        </div>                        
                        <div class="form-group text-center">
                            <label>Email</label>
                            <input name="board_03" id="board_03" type="text">
                            <input type="hidden" name="id_board_3" id="id_board_3" value="">
                            <span id="boardError3" class="text-danger"></span>
                        </div>
                        <div class="form-group text-left">
                            <label>รูปภาพ</label>
                            <input type="file" name="campaign_image" class="form-control-file mt-2 pt-1" id="input-file">
                        </div>
                   <button type="submit" value="Submit" class="btn btn-main btn-success btn-round-full">เปิดแคมเปญ<i class="icofont-simple-right ml-2"></i></button>
                   </div>
             </form>
         </div>
</body>

  
</html>
@endsection

<script>
function emailValidation(email,board){
    const userEmail = {!! json_encode($userEmail) !!};
    if(userEmail == email) return 1;

    const users = {!! json_encode($users) !!};
    for(var i = 0 ; i<users.length ; i++){
            if(email == users[i].email){
                if(users[i].permission == 'REQUEST' || users[i].permission == 'NULL' ) return 2;
                if(board==1){
                    document.getElementById("id_board_1").value = users[i].id;
                }else if(board==2){
                    document.getElementById("id_board_2").value = users[i].id;
                }else if(board==3){
                    document.getElementById("id_board_3").value = users[i].id;
                }
                return 0;
            }
    }
    return 3;
}

function validateForm() {
    
    document.getElementById("boardError1").innerHTML = "";
    document.getElementById("boardError2").innerHTML = "";
    document.getElementById("boardError3").innerHTML = "";
    let board_01 = document.forms["openObjectCampaign"]["board_01"].value;
    let board_02 = document.forms["openObjectCampaign"]["board_02"].value;
    let board_03 = document.forms["openObjectCampaign"]["board_03"].value;

    if (board_01 == "") {
        document.getElementById("boardError1").innerHTML = "กรุณากรอกอีเมล";
        return false;
    } else {
        if (emailValidation(board_01,1)==1) {
            document.getElementById("boardError1").innerHTML = "คุณได้สิทธิบริหารแคมเปญนี้แล้ว";
            return false;
        }else if(emailValidation(board_01,1)==2){
            document.getElementById("boardError1").innerHTML = "อีเมลนี้ยังไม่ได้รับสิทธิการบริหารแคมเปญ";
            return false;
        }else if(emailValidation(board_01,1)==3){
            document.getElementById("boardError1").innerHTML = "อีเมลไม่ถูกต้อง";
            return false;
        }
    }
    if (board_02 == "") {
        document.getElementById("boardError2").innerHTML = "กรุณากรอกอีเมล";
        return false;
    }else if(board_02==board_01){
        document.getElementById("boardError2").innerHTML = "คุณไม่สามารถเพิ่ม Board ซ้ำได้";
        return false;

    }else {
        if (emailValidation(board_02,2)==1) {
            document.getElementById("boardError2").innerHTML = "คุณได้สิทธิบริหารแคมเปญนี้แล้ว";
            return false;
        }else if(emailValidation(board_02,2)==2){
            document.getElementById("boardError2").innerHTML = "อีเมลนี้ยังไม่ได้รับสิทธิการบริหารแคมเปญ";
            return false;
        }else if(emailValidation(board_02,2)==3){
            document.getElementById("boardError2").innerHTML = "อีเมลไม่ถูกต้อง";
            return false;
        }
    }
    if (board_03 == "") {
        document.getElementById("boardError3").innerHTML = "กรุณากรอกอีเมล";
        return false;
    }else if(board_03==board_01 || board_03==board_02){
        document.getElementById("boardError3").innerHTML = "คุณไม่สามารถเพิ่ม Board ซ้ำได้";
        return false;

    }else {
        if (emailValidation(board_03,3)==1) {
            document.getElementById("boardError3").innerHTML = "คุณได้สิทธิบริหารแคมเปญนี้แล้ว";
            return false;
        }else if(emailValidation(board_03,3)==2){
            document.getElementById("boardError3").innerHTML = "อีเมลนี้ยังไม่ได้รับสิทธิการบริหารแคมเปญ";
            return false;
        }else if(emailValidation(board_03,3)==3){
            document.getElementById("boardError3").innerHTML = "อีเมลไม่ถูกต้อง";
            return false;
        }
    }
}

</script>
    