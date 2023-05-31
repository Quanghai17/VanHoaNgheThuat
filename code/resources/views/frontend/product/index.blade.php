
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
                <div id="content" class="col-md-8 col-sm-12 col-xs-12 ">
                    @if($products)
                    <div class="blog-wrapper">
                        <div class="row module-wrapper shop-layout text-center">
                            @foreach($products as $key=>$product)
                            <div class="col-md-4 col-sm-6 shop-item">
                                <div class="entry">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        <img class="img-responsive" src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->name }}">
                                    </a>
                                </div><!-- end entry -->
                                <h4><a href="{{ route('product.show', $product->slug) }}">{{ $product->name }} </a></h4>
                                <small>{{ number_format($product->price) }}đ</small>
                            </div><!-- end shop_item -->
                            @endforeach
                        </div><!-- end row -->
                    </div><!-- end blog-wrapper -->

                    <hr class="invis">

                    <nav class="pagi clearfix text-center">
                        {{ $products->links('frontend.layouts.partials.paginate') }}
                    </nav>
                    @else
                    <h5>Không tìm thấy sản phẩm nào</h5>
                    @endif
                </div><!-- end content -->

                <div id="sidebar" class="col-md-4 col-sm-12 col-xs-12 pull-right">

                    <div class="widget">
                        <div class="widget-title">
                            <h4>Bài viết mới</h4>
                            <hr>
                        </div><!-- end title -->

                        <div class="recent-post-widget">
                            <ul class="recent-posts">
                                @if($recentPost)
                                    @foreach($recentPost as $key=>$rep)
                                        <li>
                                            <p>
                                                <a href="{{ route('blog.detail', $rep->slug) }}" title="{{ $rep->title }}">
                                                    <img src="{{ Voyager::image( $rep->image) }}" alt="{{ $rep->title }}"
                                                         class="alignleft">{{ $rep->title }}
                                                </a>
                                            </p>
                                            <span>{{ date_format($rep->created_at,"d/m/Y") }}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul><!-- end latest-tweet -->
                        </div><!-- end twitter-widget -->
                    </div><!-- end widget -->
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

@endsection

@section('js')

@endsection
