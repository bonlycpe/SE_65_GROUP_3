@extends('layouts.LayoutBlank')

@section('content')
<section class="blog single-blog section">
    <div class="container">
        <h2>ความคืบหน้าของแคมเปญคุณ : {{$campaign->Name}}</h2>
        <div class="text-end">
            <a type="submit" value="Submit" href="/managerPage" class="btn btn-main btn-success">กลับ<i class="icofont-simple-right ml-2"></i></a>
            <a href="/addProgressPage/{{$campaign->Id}}" class="btn btn-main btn-success ">เพิ่มความคืบหน้า</a>
        </div>
        <div class="row justify-content-center align-item-center">
            <div class="col-lg-8">
                @if ($progress != null)
                @foreach($progress as $p)
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8 align-item-center">
                            <article class="single-post">
                                <br>
                                <img src="{{ url('/images/progress/'.$p->Image)}}" alt="article-01" width="70%"
                                    height="70%">
                                <br><br>
                                <ul class="list-inline">
                                    <li class="list-inline-item">by ผู้ดูแลแคมเปญ</a></li>
                                    <li class="list-inline-item">{{$p->Date}}</li>
                                </ul>

                                <p>{{$p->Description}}</p>
                            </article>
                        </div>
                    </div>
                </div>
                <br><br>
                @endforeach
                @else
                <h1 style="color:cornflowerblue">ยังไม่มีความคืบหน้า</h1>
                @endif
            </div>
        </div>
    </div>
    </div>
</section>
@endsection