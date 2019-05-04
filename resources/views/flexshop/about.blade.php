@extends('flexshop')
@section('meta')
    <title>{{$system->title}} | Giới Thiệu</title>
@endsection
@section('content')
    <div class="contentAjax">
        <section style="background:#fff">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><a href="{{route('homePage')}}" data-name="trang-chu" data-title="Trang chủ"><i
                                        class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page_title">Giới Thiệu</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="contact_map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Đang chờ cập nhật dữ liệu</h2>
                </div>
                <div class="col-md-6">
                    <div class="location">
                        <address>
                            <strong></strong><br>
                            134/79 Nguyễn Văn Linh, ấp 1, phường Bình Hưng, huyện Bình Chánh, TPHCM<br>
                            <abbr title="Phone">Điện thoại:</abbr> 0934 154 886<br>
                            Email: <a href="mailto:">info@nhaxinh360.vn</a>
                        </address>
                        <p>Nếu có thắc mắc hoặc cần trợ giúp, bạn có thể liên hệ với chúng tôi bất cứ lúc nào!</p>
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
@endsection