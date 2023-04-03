@extends('layouts.MainLayoutUser')

@section('content')
        <section class="popular-deals section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <a>หมวดหมู่ : </a>
                            <a href="/foodU">อาหาร</a>
                            <a href="/apparelU">เครื่องนุ่งห่ม</a>
                            <a href="/medicineU">ยา</a>
                            <a href="/moneyU">บริจาคเงิน</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="sectione-title-wrap mb-5">
                            <h4 class="sectione-title">แคมเปญบริจาคให้สิ่งของ </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-ads-slide">
                            @foreach($campaignObject as $co)
                            @if ( $co->Tag == 'Foods' )
                                @if ( $co->Status == 'ACTIVE' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="cardd">{{$co->Description}}</p>
                                                {{-- <p class="cardd">{{$co->Tag}}</p> --}}
                                                <p class="badges">{{$co->Tag}}</p>
                                                {{-- badges --}}
                                                <div class="row">
                                                    <ul class="list-inline product-meta">
                                                        <li class="list-inline-item">
                                                            <a href="/request"><i
                                                                    class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                                        </li>
                                                        <a
                                                            href=""><button>รับบริจาค</button>
                                                        </a><span class="SttausA">{{$co->Status}}</span>
                                                    </ul>
                                                </div>
                                                {{-- <div class="product-ratings">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                            aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            @elseif ( $co->Status == 'TERMINATE' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="cardd">{{$co->Description}}</p>
                                                <p class="badges">{{$co->Tag}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <i class="fa fas fa-ban">ยุติแคมเปญ</i>
                                                    </li> <span class="SttausT">{{$co->Status}}</span>                                                 
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            @elseif ( $co->Status == 'FINISHED' )
                                <div class="col-sm-12">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="">
                                                    <img class="card-img-top img-fluid" src="{{$co->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$co->Name}}</a></h4>
                                                <p class="cardd">{{$co->Description}}</p>
                                                <p class="badges">{{$co->Tag}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item"><i
                                                                class="fa fab fa-angellist"></i>FINISHED
                                                    </li><span class="SttausF">{{$co->Status}}</span>
                                                </ul>                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- @else --}}
                            @endif

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection