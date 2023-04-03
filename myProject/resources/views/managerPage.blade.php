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
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$money->Image)}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                       >{{$money->Name}}</a></h4></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">${{$money->Goal}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <a
                                                href="/edit/{{$money->campaign_money_id}}"><button>แก้ไขแคมเปญ</button></a>
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a
                                                href="/addProgress/{{$money->campaign_money_id}}"><button>เพิ่มความคืบหน้า</button></a>
                                        </ul>
                                    </div>

                                    <div class="product-ratings">
                                        <div class="progress">
                                            <?php echo '<div class="progress-bar" role="progressbar"
                                                aria-valuemin="0" aria-valuemax="100"
                                                style="width: '.$progressBar[$key].'%"> <span class="sr-only">
                                                70% Complete</span>
                                            </div>';?>
                                        </div>
                                    </div>
                                </div>
                                <span class="SttausA">{{$money->Status}}</span>
                            </div>
                        </div>
                    </div>
                    @elseif ($money->Status == "TERMINATE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$money->Name}}</h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">${{$money->Goal}}</p>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาคเงิน
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาค
                                        </li>
                                    </ul>
                                    <span class="SttausT">{{$money->Status}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ( $money->Status == 'FINISHED' )
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                        >{{$money->Name}}</a></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <p class="card-text">${{$money->Goal}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <a
                                                href="/donate/{{$money->campaign_money_id}}"><button>แก้ไขแคมเปญ</button></a>
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <a
                                                href="/addProgress/{{$money->campaign_money_id}}"><button>เพิ่มความคืบหน้า</button></a>
                                        </ul>
                                    </div>
                                    <div class="product-ratings">
                                        <div class="progress">
                                            <?php echo '<div class="progress-bar" role="progressbar"
                                                 aria-valuemin="0" aria-valuemax="100"
                                                style="width: '.$progressBar[$key].'%"> <span class="sr-only">
                                                70% Complete</span>
                                            </div>';?>

                                        </div>
                                    </div>
                                </div>
                                <span class="SttausF">{{$money->Status}}</span>
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
                                    <img class="card-img-top img-fluid" src="{{$object->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progress/{{$object->campaign_object_Id}}">{{$object->Name}}</a></h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
                                            <a
                                                href="/request/{{$object->campaign_object_Id}}"><button>รับบริจาค</button></a>
                                        </ul>
                                        
                                    </div>
                                    <span class="SttausA">{{$object->Status}}</span>
                                </div>


                                @elseif ($object->Status == "TERMINATE")
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{$object->Image}}" alt="Card image cap">
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
                                    <img class="card-img-top img-fluid" src="{{$object->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progress/{{$object->campaign_object_Id}}">{{$object->Name}}</a></h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
                                            <a
                                                href="/request/{{$object->campaign_object_Id}}"><button>รับบริจาค</button></a>
                                        </ul>
                                    </div>
                                    <span class="SttausF">{{$object->Status}}</span>
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