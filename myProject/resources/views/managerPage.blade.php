@extends('layouts.LayoutManager')

@section('content')
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="sectione-title-wrap">
                    <h4 class="sectione-title">แคมเปญขอรับบริจาคเงินของฉัน</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="row">
                    @foreach($campaignMoney as $key => $money)
                    @if ($money->Status == "ACTIVE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$money->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressManager/{{$money->campaign_money_id}}">{{$money->Name}}</a><span
                                            class="SttausA">{{$money->Status}}</span>
                                    </h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">เป้าหมาย : ${{$money->Goal}}</p>
                                    <div class="row justify-content-center align-items-center">
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-secondary"
                                                href="/edit/{{$money->campaign_money_id}}"><button>แก้ไขแคมเปญ</button></a>
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-primary"
                                                href="/addProgress/{{$money->campaign_money_id}}"><button>เพิ่มความคืบหน้า</button></a>
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-danger"
                                                href="/requestTerminate/{{$money->campaign_money_id}}"><button>ขอยุติแคมเปญ</button></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($money->Status == "REQUEST_TERMINATE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$money->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$money->Name}}</h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">เป้าหมาย : ${{$money->Goal}}</p>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาคเงิน
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาค
                                        </li>
                                    </ul>
                                    <span class="SttausT">กำลังรอการพิจารณายุติ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($money->Status == "TERMINATE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$money->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$money->Name}}</h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">เป้าหมาย : ${{$money->Goal}}</p>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาคเงิน
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาค
                                        </li>
                                    </ul>
                                    <span class="SttausT">ยุติแคมเปญนี้</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ( $money->Status == 'FINISHED' )
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$money->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressManager/{{$money->campaign_money_id}}">{{$money->Name}}</a><span
                                            class="SttausF">{{$money->Status}}</span></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">เป้าหมาย : ${{$money->Goal}}</p>
                                    <div class="row justify-content-center align-items-center">
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-secondary"
                                                href="/edit/{{$money->campaign_money_id}}"><button>แก้ไขแคมเปญ</button></a>
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-primary"
                                                href="/addProgress/{{$money->campaign_money_id}}"><button>เพิ่มความคืบหน้า</button></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="sectione-title-wrap">
                    <h4 class="sectione-title">แคมเปญให้สิ่งของของฉัน </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->

            <div class="col-lg-12">
                <div class="row">
                    @foreach($campaignObject as $object)
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                @if ($object->Status == "ACTIVE")
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressObjectManager/{{$object->campaign_object_Id}}">{{$object->Name}}</a>
                                    </h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row justify-content-center align-items-center">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <p>จำนวนคงเหลือ : {{$object->Amount}}<br></p>
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
                                            <ul class="list-inline product-meta">
                                                <a class="btn btn-secondary"
                                                    href="/edit/{{$object->campaign_object_Id}}"><button>แก้ไขแคมเปญ</button></a>
                                                <a class="btn btn-primary"
                                                    href="/decisionObject/{{$object->campaign_object_Id}}"><button>ตรวจสอบการบริจาค</button></a>
                                            </ul>

                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a class="btn btn-danger"
                                                href="/requestTerminate/{{$object->campaign_object_Id}}"><button>ขอยุติแคมเปญ</button></a>
                                        </ul>

                                    </div>
                                </div>
                                @elseif ($object->Status == "REQUEST_TERMINATE")
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$object->Name}}</a></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <div class=" row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <i class="fa fas fa-ban"></i>บริจาคเงิน
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fas fa-ban"></i>บริจาค
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="SttausT">กำลังรอการพิจารณายุติ</span>
                                </div>
                                @elseif ($object->Status == "TERMINATE")
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$object->Name}}</a></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <div class=" row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <i class="fa fas fa-ban"></i>บริจาคเงิน
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fas fa-ban"></i>บริจาค
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="SttausT">{{$object->Status}}</span>
                                </div>
                                @elseif ($object->Status == "FINISHED")
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressObjectManager/{{$object->campaign_object_Id}}">{{$object->Name}}</a>
                                    </h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row justify-content-center align-items-center">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <p>จำนวนคงเหลือ : {{$object->Amount}}<br></p>
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
                                            <ul class="list-inline product-meta">
                                                <a class="btn btn-primary"
                                                    href="/edit/{{$object->campaign_object_Id}}"><button>แก้ไขแคมเปญ</button></a>
                                                <a class="btn btn-info"
                                                    href="/decisionObject/{{$object->campaign_object_Id}}"><button>ตรวจสอบการบริจาค</button></a>
                                            </ul>

                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection