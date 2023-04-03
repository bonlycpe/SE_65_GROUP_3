@extends('layouts.MainLayoutWithMPermission')

@section('content')
        <section class="popular-deals section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <a>หมวดหมู่ : </a>
                            <a href="/foodM">อาหาร</a>
                            <a href="/apparelM">เครื่องนุ่งห่ม</a>
                            <a href="/medicineM">ยา</a>
                            <a href="/moneyM">บริจาคเงิน</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="sectione-title-wrap mb-5">
                            <h4 class="sectione-title">แคมเปญขอรับบริจาคเงิน </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- offer 01 -->
                    <div class="col-lg-12">
                        <div class="trending-ads-slide">
                            @foreach($campaignMoney as $cm => $money)
                            @if ( $money->Status == 'ACTIVE' )
                                <div class="col-sm-12 col-lg-4">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="single.html">
                                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="single.html">{{$money->Name}}</a></h4>
                                                <p class="cardd">{{$money->Description}}</p>
                                                <p class="card-text">${{$money->Goal}}</p>
                                                <div class="row">
                                                    <ul class="list-inline product-meta">
                                                        <li class="list-inline-item">
                                                            <a href="/donate"><i class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                                        </li>
                                                        <a
                                                            href="/donate/{{$money->campaign_money_id}}"><button>บริจาคเงิน</button></a>
                                                            <span class="SttausA">{{$money->Status}}</span>
                                                    </ul>
                                                </div>

                                                <div class="product-ratings">
                                                    <div class="progress">
                                                        <?php echo '<div class="progress-bar" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            style="width: '.$progressBar[$cm].'%"> <span class="sr-only">
                                                            70% Complete</span>
                                                        </div>';?>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> 
                            @elseif ( $money->Status == 'TERMINATE' )
                                <div class="col-sm-12 col-lg-4">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="single.html">
                                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="">{{$money->Name}}</a></h4>
                                                <p class="cardd">{{$money->Description}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <i class="fa fas fa-ban">ยุติแคมเปญ</i>
                                                    </li> <span class="SttausT">{{$money->Status}}</span>                                                 
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> 
                            @elseif ( $money->Status == 'FINISHED' )
                                <div class="col-sm-12 col-lg-4">
                                    <div class="product-item bg-light">
                                        <div class="cardcard">
                                            <div class="thumb-content">
                                                <a href="single.html">
                                                    <img class="card-img-top img-fluid" src="{{$money->Image}}" alt="Card image cap">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="cardt"><a href="single.html">{{$money->Name}}</a></h4>
                                                <p class="cardd">{{$money->Description}}</p>
                                                <ul class="list-inline product-meta">
                                                    <li class="list-inline-item">
                                                        <a href="/request"><i
                                                                class="fa fab fa-angellist"></i>FINISHED</a>
                                                    </li><span class="SttausF">{{$money->Status}}</span>
                                                </ul>                                              
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