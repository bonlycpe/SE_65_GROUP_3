@extends('layouts.LayoutManager')

@section('content')
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <a>หมวดหมู่ : </a>
                    <a href="/...">อาหาร</a>
                    <a href="/...">เครื่องนุ่งห่ม</a>
                    <a href="/...">ยา</a>
                    <a href="/...">บริจาคเงิน</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="sectione-title-wrap">
                    <h4 class="sectione-title">แคมเปญขอรับบริจาคเงิน </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="row">
                    @foreach($campaignMoney as $key => $money)
                    @if ($money->Status == "TERMINATE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt">{{$money->Name}}</a></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาคเงิน
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาค
                                        </li>
                                    </ul>
                                    <p class="card-text">ยุติแคมเปญ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progress/{{$money->campaign_money_id}}">{{$money->Name}}</a></h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/donate"><i class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                            </li>
                                            <a
                                                href="/donate/{{$money->campaign_money_id}}"><button>บริจาคเงิน</button></a>
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
@endsection