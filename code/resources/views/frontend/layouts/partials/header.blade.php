@php
  // $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();

  $menu = menu('Home menu', '_json');
@endphp

<!-- Header start -->
<header id="header" class="header">
  <div class="container">
    <div class="row">
      {{-- <div class="col-12"> --}}
        <img src="{{Voyager::image(setting('site.home_banner'))}}" alt="Home banner" loadding="lazy" style="width: 100%" >
      {{-- </div> --}}
      {{-- <div class="col-md-3 col-sm-12">
        <div class="logo">
           <a href="index.html">
            <img src="{{asset('assets/images/logos/logo.png')}}" alt="">
           </a>
        </div>
      </div>

      <div class="col-md-9 col-sm-12 header-right">
        <div class="ad-banner float-right">
          <a href="#"><img src="{{asset('assets/images/banner-ads/ad-top-header.png')}}" class="img-fluid" alt=""></a>
        </div>
      </div> --}}
    </div>
  </div>
</header>

<div class="main-nav clearfix">
  <div class="container">
    <div class="row">
      <div class="header-line" style="background: url({{Voyager::image(setting('site.header_line'))}}) repeat-x;"></div>
      <nav class="navbar navbar-expand-lg col">
        <div class="site-nav-inner float-left">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
                </span>
             </button>
             <!-- End of Navbar toggler -->

          <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
              @foreach ($menu as $item)
                <li @if(count($item->children) > 0) class="dropdown" @endif>
                  <a href="{{asset($item->url)}}" @if(count($item->children) > 0) class="dropdown-toggle" data-toggle="dropdown" @endif>
                    {{$item->title}} @if(count($item->children) > 0) <i class="fa fa-angle-down"></i> @endif
                  </a>

                  @if(count($item->children) > 0)
                    <ul class="dropdown-menu" role="menu">
                      @foreach ($item->children as $child)
                        <li>
                          <a href="{{asset($child->url)}}">{{$child->title}}</a>
                        </li>
                      @endforeach
                    </ul><!-- End dropdown -->
                  @endif
                </li><!-- Features menu end -->
              @endforeach
            </ul><!--/ Nav ul end -->
          </div><!--/ Collapse end -->

        </div><!-- Site Navbar inner end -->
      </nav><!--/ Navigation end -->

      <div class="nav-search">
        <span id="search"><i class="fa fa-search"></i></span>
      </div><!-- Search end -->
      
      <div class="search-block" style="display: none;">
        <form action="{{route('blogs')}}">
          <input type="text" class="form-control" name="search" placeholder="Nhập từ khóa bạn muốn tìm kiếm">
        </form>
        <span class="search-close">&times;</span>
      </div><!-- Site search end -->

      <div class="header-line" style="background: url({{Voyager::image(setting('site.header_line'))}}) repeat-x;"></div>
    </div><!--/ Row end -->
  </div><!--/ Container end -->

</div><!-- Menu wrapper end -->