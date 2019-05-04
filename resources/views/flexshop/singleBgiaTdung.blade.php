@extends('flexshop')
@section('meta')
    <title>{{$system->title}} | {{$data['title']}}</title>
@endsection
@section('content')
    <div class="contentAjax">
        @include('flexshop.partial.bannerTop')
        <section class="introdutionPage" style="background-image:url('{{asset('upload/thumbnail/baogiatuyendung/'.$data->background)}}')">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('homePage')}}" data-name="trang-chu" data-title="Trang chủ"><i
                                        class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li>{{$data->title}}</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 class-center">
                        <h2 class="page_title">{{$data->title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 class-center">
                        @if(!empty($data->content))
                            {!! $data->content !!}
                        @else
                            <h2>Đang chờ cập nhật dữ liệu</h2>
                        @endif
                    </div>
                </div>
            </div>
        </section>
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