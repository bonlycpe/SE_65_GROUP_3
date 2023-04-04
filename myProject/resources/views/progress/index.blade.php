@extends('layouts.MainLayoutUser')

@section('content')
<section class="blog single-blog section">
    <div class="container">
        <h2>{{$campaign->Name}}</h2>
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
            <div class="col-lg-8">
            <a href="{{url('/home')}}">
                <button class="btn btn-secondary">กลับ</button>
            </a>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection