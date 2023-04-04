@extends('layouts.MainLayoutUser')

@section('content')
<section class="dashboard section">
    <!-- Container Start -->
    <div class="container">
        <!-- Row Start -->
        <div class="row align-items-center justify-content-center">

            <div class="col-lg-8">
                <!-- Recently Favorited -->
                <div class="widget dashboard-container my-adslist">
                    <h3 class="widget-header">แคมเปญ {{$campaign->Name}}</h3>
                    @if ($progress != null)
                    <table class="table table-responsive product-dashboard-table">
                        <thead>
                            <tr>
                                <th class="text-center font-bold">วันที่</th>
                                <th class="text-center font-bold">ชื่อ-นามสกุล</th>
                                <th class="text-center font-bold">จำนวนที่ได้รับ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($progress as $p)
                            <tr>
                                <td class="text-center">
                                    <span class="title">{{$p->Date}}</span>
                                </td>
                                <td class="text-center">
                                    <span class="title">{{$p->name}} {{$p->surname}}</span>
                                </td>
                                <td class="text-center" data-title="Action">
                                    <span class="title">{{$p->Amount}}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4 style="color:cornflowerblue">ไม่มีผู้ใช้ขอรับบริจาค</h4>
                    @endif
                </div>

                <a href="{{url('/home')}}">
                    <button class="btn btn-secondary">กลับ</button>
                </a>

            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
</section>
@endsection