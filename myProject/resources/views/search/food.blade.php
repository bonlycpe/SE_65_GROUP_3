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
                                    <img class="card-img-top img-fluid" src="{{$object->Image}}" alt="Card image cap">
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
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
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
                                    <img class="card-img-top img-fluid" src="{{$object->Image}}" alt="Card image cap">
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
                                                <a href="/request"><i
                                                        class="fa fab fa-angellist"></i>{{$object->Tag}}</a>
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