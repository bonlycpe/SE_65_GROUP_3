@extends('layouts.MainLayoutUser')

@section('content')
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <a>หมวดหมู่ : </a>
                    <a href="/food">อาหาร</a>
                    <a href="/apparel">เครื่องนุ่งห่ม</a>
                    <a href="ฝ">ยา</a>
                    <a href="single.html">บริจาคเงิน</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>แคมเปญขอรับบริจาคเงิน</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="trending-ads-slide">
                    @foreach($campaignMoney as $money)
                    @if ($money->Status == "TERMINATE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="card">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="@@img-src" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">{{$money->Name}}</a></h4>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <i class="fa fas fa-ban"></i>บริจาคเงิน
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
                            <div class="card">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="@@img-src" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="single.html">{{$money->Name}}</a></h4>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a href="single.html"><i class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                        </li>
                                    </ul>
                                    <p class="card-text">{{$money->Description}}</p>
                                    <div class="product-ratings">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:10%">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
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
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>แคมเปญบริจาคให้บริจาค</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                @foreach($campaignObject as $object)
                <div class="col-sm-12 col-lg-4">
                    <div class="product-item bg-light">
                        <div class="card">
                            @if ($object->Status == "TERMINATE")
                            <div class="thumb-content">
                                <img class="card-img-top img-fluid" src="@@img-src" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$object->Name}}</a></h4>
                                <ul class="list-inline product-meta">
                                    <li class="list-inline-item">
                                        <i class="fa fas fa-ban"></i>{{$object->Tag}}</a>
                                    </li>
                                </ul>
                                <p class="card-text">ยุติแคมเปญ</p>
                            </div>
                            @else
                            <div class="thumb-content">
                                <img class="card-img-top img-fluid" src="@@img-src" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><a href="single.html">{{$object->Name}}</a></h4>
                                <ul class="list-inline product-meta">
                                    <li class="list-inline-item">
                                        <a href="single.html"><i class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                    </li>
                                </ul>
                                <p class="card-text">{{$object->Description}}</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection