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
                </div>
            </div>
        </div>
    </div>

    <section class="block-wrapper section-bg">
        <div class="container container-bg">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single-post">
                        <div class="post-title-area">
                            <h2 class="post-title">{{ $title }}</h2>
                            <div class="post-meta">
                                <span class="post-date"><i class="fa fa-clock-o"></i>{{ date('d/m/Y', strtotime($document->created_at)) }}</span>
                            </div>

                            <div style="margin-top: 1rem">
                              <a href="{{Voyager::image(json_decode($document->file)[0]->download_link)}}" target="_blank"> 
                                <i class="fa fa-download" style="margin-right:7px"></i> Tải về
                              </a>

                              <div style="margin-top: 1rem"></div>
                              <embed src="{{Voyager::image(json_decode($document->file)[0]->download_link)}}" style="width: 100%; height: 800px" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                  @include('frontend.layouts.partials.sidebar')
                </div><!-- Sidebar Col end -->
            </div>
    </section>
@endsection
