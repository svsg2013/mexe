@extends('flexshop')
@section('meta')
    <div id="fb-root"></div>
    <address class="vcard" style="display:none">
        <img src='{{asset('upload/logo.png')}}' title='Nhà xinh 360' alt='Nhà xinh 360' class="photo"/>
        <a class="url fn" href="{{url('/')}}">Nhà xinh 360</a>
        <div class="adr">
            <div class="street-address">{{$system->address}}</div>
        </div>
        <div class="tel">{{$system->phone}}</div>
    </address>
    <div itemtype="http://schema.org/website ">
        <div itemtype="http://schema.org/website" itemscope="">
            <div>
                        <span itemprop="keywords">
                            <a rel="tag" href="{{url('/')}}"></a>
                        </span>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="contentAjax">

        <section class="so-spotlight1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="module moduleship">
                            <div class="modcontent clearfix">
                                <div class="row re-ship-phone">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon1"></span>
                                            <p class="des">
                                                <span>Tư vấn 24/7</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon2"></span>
                                            <p class="des">
                                                Vận chuyển
                                                <span>miễn phí</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon3"></span>
                                            <p class="des">
                                                Nhận hàng
                                                <span>Nhận tiền</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item">
                                            <span class="icon icon4"></span>
                                            <p class="des">
                                                Gọi ngay
                                                <span>{{$system->phone}}</span>
                                                {{--<span>0911856720</span>--}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Đặc điểm của công ty -->
        <section class="box-collection2 highLightProject">
            <div class="container">
                <div class="modcontent">
                    <div class="header-title">
                        <h3 class="modtitle">
                            <span>{{$social->danhmuc1}}</span>
                        </h3>
                    </div>
                    <div class="product-slider-2 product-thumb">
                        @if(!empty($thisFeatureProject))
                            {!! $thisFeatureProject !!}
                        @else
                            <p>Chưa có dự án nổi bật</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!--Du an noi bat-->
        <section class="box-collection2 highLightProject">
            <div class="container">
                <div class="modcontent">
                    <div class="row">
                        <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="header-title">
                                <h3 class="modtitle">
                                    <span>{{$social->danhmuc2}}</span>
                                </h3>
                            </div>
                            <div class="product-slider-3  product-thumb">
                                @if(!empty($thisFeatureProduct))
                                    {!! $thisFeatureProduct !!}
                                @else
                                    <p>Chưa có dự án nổi bật </p>
                                @endif
                            </div>
                            <!-- San pham noi bat -->
                                {!! $htmlSlideProduct !!}
                            <!-- Du an thi cong noi that -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-collection1">
            <div class="container">
                <div class=" modcontent">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 hidden-xs">
                            <div class="pre-text banner hidden-xs banner-slider">
{{--                                @if(isset($thisSlider))
                                    {!! $thisSlider !!}
                                @endif--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .so-spotlight3 {
                background: url("{{asset('views/template/src/newsletter-bgb09cb09c.jpg?v=180')}}") no-repeat center center;
            }
        </style>
        <section class="box_blog">
            <div class="container">
                <div class="modcontent" style="margin-bottom: 10px">
                    <div class="header-title">
                        <h3 class="modtitle">
                           {{$social->danhmuc8}}
                        </h3>
                    </div>
                    <div class="product-slider-5 product-thumb">
                        @if(!empty($thisNewNews))
                            {!! $thisNewNews !!}
                        @else
                            <p>Chưa có tin mới</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Tin tức mới -->
        {{--@include('flexshop.partial.footerMap')--}}
    </div>
@endsection