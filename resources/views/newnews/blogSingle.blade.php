@extends('template-news')
@section('styleMeta')
    <title>Blog Single</title>
    <link rel="stylesheet" href="{{asset('node_modules/bxslider/dist/jquery.bxslider.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{{asset('node_modules/bxslider/dist/jquery.bxslider.min.js')}}"></script>
@endsection
@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <ol class="breadcrumb" style="position: inherit">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">This is a standard post with a preview image</li>
            </ol>
        </div>

    </section>
    <section id="content" style="margin-bottom: 0px;">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <!-- Post Content -->
                    <div class="col-lg-8 bottommargin">
                        <div class="single-post nobottommargin">
                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix" style="text-align: justify; margin-bottom: 15px">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h1>This is a Standard post with a Preview Image</h1>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix" style="margin-bottom: 0px">
                                    <li><i class="icon-calendar3"></i> 10th July 2014</li>
                                </ul><!-- .entry-meta end -->
                                <strong style="display: block;padding-bottom: 0.9375em">Duis mollis, est non commodo
                                    luctus, nisi erat porttitor ligula, eget lacinia odio
                                    sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                    porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                    scelerisque nisl consectetur et.</strong>
                                <ul id="list-news">
                                    <li><i class="icon-stop1"></i> <a href="#">Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.</a></li>
                                    <li><i class="icon-stop1"></i> <a href="#">Integer posuere erat a ante venenatis
                                            dapibus posuere velit aliquet</a></li>
                                    <li><i class="icon-stop1"></i> <a href="#">Duis mollis, est non commodo luctus, nisi
                                            erat porttitor ligula, eget lacinia odio sem nec elit.</a></li>
                                </ul>
                                <!-- Entry Image
                                ============================================= -->
                                <div class="entry-image">
                                    <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single"></a>
                                </div><!-- .entry-image end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur
                                            blandit
                                            tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere
                                        velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                                        Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta
                                        gravida
                                        at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

                                    <blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere
                                            consectetur
                                            est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                                            venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat
                                            porttitor
                                            ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus
                                            auctor
                                            fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>

                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis
                                        consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget
                                        metus.</p>

                                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia
                                        bibendum
                                        nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget
                                        quam.
                                        <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer
                                        posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                    <pre>#header-inner {
	width: 940px;
	margin: 0 auto;
	padding-top: 40px;
}</pre>

                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                        odio
                                        sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus,
                                        porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et.</p>

                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus
                                        porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                                        Cras
                                        justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                                        porta
                                        felis euismod semper. Donec id elit non mi porta gravida at eget metus.
                                        Vestibulum
                                        id ligula porta felis euismod semper.</p>
                                    <!-- Post Single - Content End -->

                                    <!-- Tag Cloud
                                    ============================================= -->
                                    <div class="tagcloud clearfix bottommargin">
                                        <a href="#">general</a>
                                        <a href="#">information</a>
                                        <a href="#">media</a>
                                        <a href="#">press</a>
                                        <a href="#">gallery</a>
                                        <a href="#">illustration</a>
                                    </div><!-- .tagcloud end -->

                                    <div class="clear"></div>

                                    <!-- Post Single - Share
                                    ============================================= -->
                                    <div class="si-share noborder clearfix">
                                        <span>Share this Post:</span>
                                        <div>
                                            <a href="#" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-pinterest">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>
                                        </div>
                                    </div><!-- Post Single - Share End -->

                                </div>
                            </div><!-- .entry end -->

                            <!-- Post Navigation
                            ============================================= -->
                            <div class="post-navigation clearfix">

                                <div class="col_half nobottommargin">
                                    <a href="#">⇐ This is a Standard post with a Slider Gallery</a>
                                </div>

                                <div class="col_half col_last tright nobottommargin">
                                    <a href="#">This is an Embedded Audio Post ⇒</a>
                                </div>

                            </div><!-- .post-navigation end -->

                            <!-- Box info check ẩn hiện -->
                            <div class="card" style="text-align: justify">
                                {{--<div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>--}}
                                <div class="card-body">
                                    <!-- check image ẩn hiện -->
                                    <div class="author-image">
                                        <img src="images/author/1.jpg" alt="" class="rounded-circle">
                                    </div> <!-- image -->
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi
                                    et
                                    nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis
                                    praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium
                                    laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur
                                    fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
                                </div>
                            </div><!-- Box info -->
                            <!-- san pham lien quan -->
                            <div class="col_full nobottommargin clearfix releaseProduct">
                                <div class="lineCustom"></div>
                                <div class="fancy-title title-border">
                                    <h4>Sản phẩm liên quan</h4>
                                </div>
                                <div class="owl-carousel custom-carousel">
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ipost clearfix">
                                            <div class="entry-image">
                                                <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg"
                                                                 alt="Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h3><a href="blog-single.html">Yum, McDonald's apologize as new China
                                                        food
                                                        scandal brews</a></h3>
                                            </div>
                                            <ul class="entry-meta prices clearfix">
                                                <li>Đơn giá: 2.0000.000 vnđ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end san pham lien quan -->
                            <!-- tin lien quan -->
                            <div class="col_full nobottommargin clearfix releaseNews">

                                <div class="fancy-title title-border">
                                    <h4>Tin Liên Quan</h4>
                                </div>

                                <div class="col_one_third">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/11.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">Yum, McDonald's apologize as new China food scandal brews</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 9th Sep 2014</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col_one_third">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/16.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">Halliburton gets boost from rebound in North America drilling</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 23rd Aug 2014</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col_one_third col_last">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/13.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">China sends spy ship off Hawaii during U.S.-led drills brews</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 11th Feb 2014</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>

                                <div class="col_one_third nobottommargin">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/10.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">Wobbly stocks underpin yen and Swiss franc; dollar subdued</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 17th Jan 2014</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/15.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">BlackBerry names ex-Sybase executive as chief operating officer</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 20th Nov 2014</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col_one_third nobottommargin col_last">
                                    <div class="ipost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img class="image_fade" src="images/magazine/thumb/6.jpg" alt="Image" style="opacity: 1;"></a>
                                        </div>
                                        <div class="entry-title">
                                            <h3><a href="blog-single.html">Georgian prime minister fires seven ministers in first reshuffle</a></h3>
                                        </div>
                                        <ul class="entry-meta clearfix">
                                            <li><i class="icon-calendar3"></i> 10th Dec 2013</li>
                                        </ul>
                                        <div class="entry-content">
                                            <p>Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- .postcontent end -->

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        @include('newnews.partial.widget')
                    </div>
                    <!-- .sidebar end -->
                </div>

            </div>

        </div>
    </section>
@endsection
@section('script')
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayHoverPause: true,
            smartSpeed:250,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true
                },
                600: {
                    items: 3,
                    nav: false,
                    loop: true
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        })
    </script>
@endsection