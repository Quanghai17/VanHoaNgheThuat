@extends('frontend.layouts.default')

@section('content')

    <section class="section darkbg fullscreen paralbackground parallax"
             style="background-image:url({{ Voyager::image( setting('site.Image-breadcrumb') ) }});"
             data-img-width="1688" data-img-height="1125" data-diff="100">
        <div class="overlay lightoverlay"></div>
        <div class="container">
            <div class="title-area text-center">
                <h2>{{ $title }}</h2>
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="{{ asset('/') }}">Home</a></li>
                        <li class="active">{{ $title }}</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div>
    </section><!-- end page-title -->

    <section class="section white">
        <div class="container">
            <div class="row">
                <div id="content" class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="product-images">
                                <a data-rel="prettyPhoto" href="{{ Voyager::image( $product->image ) }}" title="{{ $product->name }}">
                                    <img class="img-polaroid" src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->name }}" />
                                </a>
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="shop-desc">
                                <h3>{{ $product->name }} </h3>
                                <small>{{ number_format($product->price) }}đ</small>

                                <p>{{ $product->excerpt }}</p>
                            </div><!-- end desc -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="service-style-1">
                                <div class="tabbed-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a style="width: 200px;" data-toggle="tab" href="#home">Chi tiết</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            {!! $product->body !!}
                                        </div>
                                    </div>
                                </div><!-- end tabbed-widget -->
                            </div><!-- end service-style-1 -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="general-title text-left">
                        <h4>Sản phẩm khác</h4>
{{--                        <p class="lead">Listed below our awesome shop items!</p>--}}
                    </div><!-- end general title -->

                    <div class="row module-wrapper shop-layout text-center">
                        @foreach($recentProduct as $key=>$rcProduct)
                            <div class="col-md-4 col-sm-4 shop-item">
                                <div>
                                    <a href="{{ route('product.show', $rcProduct->slug) }}" class="entry">
                                        <img class="img-responsive" src="{{ Voyager::image( $rcProduct->image ) }}" alt="{{ $rcProduct->name }}">
                                    </a><!-- end entry -->
                                    <h4><a href="{{ route('product.show', $rcProduct->slug) }}">{{ $rcProduct->name }} </a></h4>
                                    <small>{{ number_format($rcProduct->price) }}đ</small>
                                </div>
                            </div><!-- end shop_item -->
                        @endforeach
                    </div><!-- end row -->
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection
