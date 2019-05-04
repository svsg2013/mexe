@extends('flexshop')
@section('meta')
    <title>{{$system->title}} |
        @if($flag==1)
            {{'Tuyển Dụng'}}
        @elseif($flag==2)
            {{'Báo Giá'}}
        @endif
    </title>
@endsection
@section('content')
    <div class="contentAjax">
        @include('flexshop.partial.bannerTop')
        <section style="background:#fff">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('homePage')}}" data-name="trang-chu" data-title="Trang chủ"><i
                                        class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li>
                            @if($flag==1)
                                {{'Tuyển Dụng'}}
                            @elseif($flag==2)
                                {{'Báo Giá'}}
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page_title">
                        @if($flag==1)
                            {{'Tuyển Dụng'}}
                        @elseif($flag==2)
                            {{'Báo Giá'}}
                        @endif
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="contact_map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if(!empty($thisPost))
                        {!! $thisPost !!}
                    @elseif($flag==1)
                        <h2>Chưa có nội dung Tuyển dụng</h2>
                    @elseif($flag==2)
                        <h2>Chưa có Báo giá mới</h2>
                    @endif
                </div>
            </div>
        </div>
        <style>
            .contact-info .shop-name .icon {
                float: left;
                height: 45px;
                width: 35px;
                background: url({{asset('views/template/hstatic.net/581/1000123581/1000171890/icon_shopb09cb09c.png?v=180')}}) no-repeat 0px 0px/35px;
                margin-right: 9px;
                margin-top: 5px;
            }
        </style>
    </div>
@endsection