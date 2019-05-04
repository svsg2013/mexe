@extends('template-news')
@section('styleMeta')
    <title>Mexe.info</title>
@endsection
@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-lg-8 bottommargin">
                        @include('newnews.partial.SlideNews')

                        <div class="clear"></div>
                        <!-- post news and advertisement -->
                        @include('newnews.partial.postAd')
                        <!-- end post and advertisement -->
                        <!-- gallery -->
                        @include('newnews.partial.gallery')
                        <!-- end gallery -->
                        @include('newnews.partial.otherNews')

                    </div>
                    <div class="col-lg-4">
                        <div class="line d-block d-lg-none d-xl-block"></div>
                        @include('newnews.partial.widget')
                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection