@extends('frontend.layouts.default')

@section('content')
    <div class="page-title">
        <div class="container container-bg">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ asset('/') }}">Trang chủ</a></li>
                        <li>{{ $title }}</li>
                    </ol>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <section class="block-wrapper section-bg">
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-8 col-md-12">

                    <div class="block category-listing category-style2">
                        <h3 class="block-title"><span>{{ $title }}</span></h3>

                        @foreach ($blogs as $post)
                            <div class="post-block-style post-list clearfix">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="post-thumb thumb-float-style">
                                            <a href="{{ route('blog.detail', $post->slug) }}">
                                                <img class="img-fluid" src="{{ Voyager::image($post->image) }}"
                                                    alt="" loading="lazy" style="aspect-ratio: 3/2;object-fit: cover;">
                                            </a>
                                            {{-- <a class="post-cat" href="#">Robotics</a> --}}
                                        </div>
                                    </div><!-- Img thumb col end -->

                                    <div class="col-lg-7 col-md-6">
                                        <div class="post-content">
                                            <h2 class="post-title title-large">
                                                <a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                                            </h2>
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if (count($blogs) == 0)
                            <h3>Không tìm thấy bài viết nào!</h3>
                        @endif

                    </div><!-- Block Technology end -->

                    {{ $blogs->links('frontend.layouts.partials.paginate') }}

                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    @include('frontend.layouts.partials.sidebar')
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section>
@endsection
