@extends('layouts.MainLayoutUser')

@section('content')
<section class="section bg-gray">
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-lg-12">
                <div class="heading text-center pb-5">
                    <h2 class="font-weight-bold">ลงคะแนนแคมเปญ {{$nameCampaign}}<br>
                </div>
            </div>
            @if($objReq != null)
            <div class="row">

                @foreach($objReq as $key => $obj)

                <div class="col-lg-6 col-md-6">
                    <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">

                        <div class="package-content-heading border-bottom">
                            <img src="{{ url('images/user/'.$obj->image)}}" width="200" height="200" />
                            <h6><br>คุณ {{$obj->name}} {{$obj->surname}}</h6>
                        </div>
                        <div class="align-item-center">
                            <ul><span><br>จำนวน : {{$obj->Amount}}</span>
                                <h6><br>รายละเอียดการขอรับของบริจาค</h6>

                                <span
                                    style=" display: block;width: 390px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><br>{{$obj->Description}}</span>
                            </ul>
                            <ul>
                                @if($obj->Status=="APPROVE")
                                <span style="color:green;font-size: large;font-weight: bold;">ผ่าน</span>
                                @else
                                <span style="color:red;font-size: large;font-weight: bold;">ไม่ผ่าน</span>
                                @endif
                            </ul>
                            <ul>
                                ลงคะแนนโดย : {{$board[$key]['name']}} {{$board[$key]['surname']}}
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
        <br>
        <div class="row justify-content-center align-items-center">
            <a href="{{ url('vote/'.$Id.'/bool/0')}}" class="btn btn-danger">ไม่ลงคะแนน</a>
            <a href="{{ url('vote/'.$Id.'/bool/1')}}" class="btn btn-primary">ลงคะแนน</a>
        </div>
        @else
        <div class="col-lg-12">
            <div class="row justify-content-center align-items-center">
                <h4>ยังไม่มีการลงคะแนน<br></h4>

            </div>
        </div>
        @endif
        <div class="col-lg-12 ">
            <a href="{{ url('decisionObject/'.$campaignId)}}" class="btn btn-secondary">กลับ</a>
        </div>
    </div>
</section>
@endsection