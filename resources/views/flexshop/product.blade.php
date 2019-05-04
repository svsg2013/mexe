@extends('flexshop')
@section('meta')
    @if(empty($meta))
        @section('title'){{'Sản phẩm'}}@endsection
        @section('description'){{'Sản phẩm giá được nhập khẩu từ Thái Lan chất lượng tốt mà giá phải chăng'}}@endsection
    @else
            @section('title'){{$meta->title}}@endsection
            @section('description'){{$meta->description}}@endsection
            @section('image'){{$meta->image}}@endsection
            <link rel="canonical" href="{{url()->current()}}" />
    @endif
@endsection
@section('content')
    <div class="contentAjax">
        @include('flexshop.partial.product.banner')
        <section style="background:#fff">
            <div class="container">
                @if(!empty($thisBreadcrumb))
                    {!! $thisBreadcrumb !!}
                @else
                    <div class="breadcrumbs">
                        <ul class="breadcrumb">
                            <li><a href="{{route('homePage')}}" data-title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a><span class="divider"></span></li>
                            @if(!empty($flag))
                                <li>Tìm kiếm Sản Phẩm</li>
                            @else
                                <li>Sản phẩm</li>
                            @endif
                        </ul>
                    </div>
                @endif
            </div>
        </section>
        <div class="page_collection">
            <div class="container">
                <div class="row">
                    @include('flexshop.partial.product.navLeft')
                    <div class="col-xs-12 col-sm-8 col-md-9">
                    {{--@include('flexshop.partial.product.bannerProduct')--}}
                    <!--Sắp xếp-->
                        {{--@include('flexshop.partial.product.sort')--}}
                        <style>
                            a.button.button-grid {
                                background: #3ab54a !important;
                            }
                        </style>
                        <div class="row product-thumb">
                            @if(!empty($thisProductList))
                                {!! $thisProductList !!}
                            @else
                                <p>Chưa có dữ liệu sản phẩm</p>
                            @endif
                            <style>
                                .page-numbers.current {
                                    background: #000;
                                    color: #fff !important;
                                }
                                .pagination {
                                    text-align: center;
                                }
                                .pagination, .wp-prev-next {
                                    margin: 1.5em 0;
                                }
                                .pagination ul {
                                    border: 1px solid #b7b7b7;
                                    display: inline-block;
                                    white-space: nowrap;
                                    padding: 0;
                                    clear: both;
                                }
                                .pagination li:first-child {
                                    border-left: none;
                                }
                                .pagination li {
                                    border-left: 1px solid #b7b7b7;
                                    padding: 0;
                                    margin: 0;
                                    float: left;
                                    display: inline;
                                    overflow: hidden;
                                }
                                a:link, a:visited:link {
                                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0.3);
                                }
                                a:-webkit-any-link {
                                    text-decoration: none !important;
                                }
                                .pagination a, .pagination span {
                                    margin: 0;
                                    text-decoration: none;
                                    padding: 0;
                                    line-height: 1em;
                                    font-size: 1em;
                                    font-weight: normal;
                                    padding: 0.75em;
                                    min-width: 1em;
                                    display: block;
                                }
                            </style>
                        </div>
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