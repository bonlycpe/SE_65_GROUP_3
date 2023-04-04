@extends('layouts.MainLayoutUser')

@section('content')
<section class="section bg-gray">
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-lg-12">
                <div class="heading text-center pb-5">
                    <h2 class="font-weight-bold">ลงคะแนนแคมเปญ {{$objReq->Name}}
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">

                    <div class="package-content-heading border-bottom">
                        <img src="{{ url('images/user/'.$objReq->image)}}" width="200" height="200" />
                        <h2><br>คุณ {{$objReq->name}} {{$objReq->surname}}</h2>
                    </div>
                    <ul><span><br>จำนวน : {{$objReq->Amount}}</span>
                        <h4><br>รายละเอียดการขอรับของบริจาค</h4>

                        <span><br>{{$objReq->Description}}</span>
                    </ul>
                    <a href="{{ url('vote/'.$objReq->Id.'/bool/0')}}" class="btn btn-danger">ไม่อนุมัติการให้ของ</a>
                    <a href="{{ url('vote/'.$objReq->Id.'/bool/1')}}" class="btn btn-primary">อนุมัติการให้ของ</a>
                </div>
            </div>
        </div><a href="{{ url('decisionObject/'.$objReq->campaign_object_id)}}" class="btn btn-secondary">กลับ</a>
    </div>
</section>
@endsection