@extends('frontend.layouts.default')

@section('content')
    {{-- <section class="section darkbg fullscreen paralbackground parallax" style="background-image:url({{ Voyager::image( setting('site.Image-breadcrumb') ) }});" data-img-width="1688" data-img-height="1125" data-diff="100">
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
        <div class="container about-us">
            @if($service)
                {!! $service->body !!}
            @else
                <h5>Không tìm thấy bài viết</h5>
            @endif
        </div>
    </section> --}}

  <div id="breadcrumbs" class="flexbox-container ">
    <div class="breadcrumb-inner">
      <div class="container">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
          <a href="{{ asset('/') }}" title="general.breadcrumbs.home_link_title">Trang chủ /</a>
          <span class="revicon-angle-right"></span>
          <span>{{ $title }}</span>
        </nav>
      </div>
    </div>
  </div>

  <div style="padding-bottom: 4rem;">
    <div class="container" id="layout-page-main">
      <div class="content-page">
        @if($service)
          {!! $service->body !!}
        @else
          <h5>Không tìm thấy bài viết</h5>
        @endif
      </div>
    </div>
  </div>

@endsection
