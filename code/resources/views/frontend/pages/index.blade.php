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

                    <h3>{{$page->title}}</h3>

                    <div class="widget contact-info">
                      <div class="content">
                        {!! $page->body ?? '' !!}
                      </div>
                    </div>

                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-12">
                    @include('frontend.layouts.partials.sidebar')
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->
@endsection
