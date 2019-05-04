@extends('flexshop')
@section('meta')
    <title>{{$system->title}} | Khuyến mãi
        @if(!empty($data))
            {{$data}}
        @else
            Danh sách dự án
        @endif
    </title>
@endsection
@section('content')
    <div class="page-container">
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 150) {
                        $('.header').addClass('fixmenu');
                    } else {
                        $('.header').removeClass('fixmenu');
                    }
                })
            })
        </script>
        <style>
            nav.navbar.menumain.visible-xs.mobile-menu {
                margin: 0;
                padding: 11px 0;
            }
            nav.navbar.menumain.visible-xs.mobile-menu .navbar-toggle {
                margin: 5px 15px;
                border-radius: 0;
                border: 0;
                background: rgba(255, 255, 255, 0.48);
            }
            nav.navbar.menumain.visible-xs.mobile-menu .navbar-toggle span {
                background: #3ab54a;
            }
        </style>
        <div class="contentAjax">
            @include('flexshop.partial.bannerTop')
            <section style="background:#fff">
                <div class="container">
                    @if(!empty($thisBreadcrumb))
                        {!! $thisBreadcrumb !!}
                    @else
                        <div class="breadcrumbs">
                            <ul class="breadcrumb">
                                <li><a href="{{route('homePage')}}" data-name="trang-chu" data-title="Trang chủ"><i
                                                class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                                <li>Khuyến Mãi</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </section>
            <div class="page_collection">
                <div class="container">
                    <div class="row content-blog-list">
                        @include('flexshop.partial.project.navLeft')
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            @if(!empty($thisListProject))
                                {!! $thisListProject !!}
                            @else
                                <p>Chưa có nội dung</p>
                            @endif
                        </div>
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
    </div><!-- This page container -->
@endsection