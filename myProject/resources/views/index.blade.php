@extends('layouts.MainLayoutUser')

@section('content')
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <a>หมวดหมู่ : </a>
                    <input id="search" type="text" />
                    <button onclick="search()" class="btn btn-success btn-submit">ค้นหา</button>
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
                                            href="/progress/{{$money->campaign_money_id}}">{{$money->Name}}</a><span
                                            class="SttausA">{{$money->Status}}</span>
                                    </h4>
                                    <p class="cardd">{{$money->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/home"><i class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                            </li>
                                            <a href="/donate/{{$money->campaign_money_id}}"><button
                                                    class="btn btn-primary">บริจาคเงิน</button></a>
                                        </ul>
                                    </div>

                                    <div class="product-ratings">
                                        <h6>จำนวนเงิน({{$money->total}}/{{$money->Goal}})
                                            <span class="pull-right">{{$progressBar[$key]}} %</span>
                                        </h6>
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
                                            href="/progress/{{$money->campaign_money_id}}">{{$money->Name}}</a><span
                                            class="SttausF">{{$money->Status}}</span></h4>

                                    <p class="cardd">{{$money->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/home"><i class="fa fab fa-angellist"></i>บริจาคเงิน</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="product-ratings">
                                        <h6>จำนวนเงิน({{$money->total}}/{{$money->Goal}})
                                            <span class="pull-right">{{$progressBar[$key]}} %</span>
                                        </h6>
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
<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="sectione-title-wrap">
                    <h4 class="sectione-title">แคมเปญให้สิ่งของ </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->

            <div class="col-lg-12">
                <div class="row">
                    @foreach($campaignObject as $object)
                    @if ($object->Status == "ACTIVE")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressObject/{{$object->campaign_object_Id}}">{{$object->Name}}</a>
                                        <span class="SttausA">{{$object->Status}}</span>
                                    </h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/home"><i class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
                                            <a href="/request/{{$object->campaign_object_Id}}"><button
                                                    class="btn btn-primary">รับบริจาค</button></a>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif ($object->Status == "FINISHED")
                    <div class="col-sm-12 col-lg-4">
                        <div class="product-item bg-light">
                            <div class="cardcard">
                                <div class="thumb-content">
                                    <img class="card-img-top img-fluid" src="{{url('images/campaign/'.$object->Image)}}"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h4 class="cardt"><a
                                            href="/progressObject/{{$object->campaign_object_Id}}">{{$object->Name}}</a>
                                        <span class="SttausF">{{$object->Status}}</span>
                                    </h4>
                                    <p class="cardd">{{$object->Description}}</p>
                                    <div class="row">
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="/home"><i class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
                                            </li>
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
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function search() {
    var name = $("#search").val();
    $.ajax({
        type: 'get',
        url: "{{ url('search') }}",
        data: {
            "name": name,
        },
        success: function(response) {
            $("#content").empty();
            $("#content").html(response);
        }
    });
}
</script>
@endsection