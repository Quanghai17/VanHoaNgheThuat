@php
    $postfooter= \TCG\Voyager\Models\Post::limit(2)->get();
    $images = \App\Staticdata::where('slug','thu-vien-anh')->first();
    $popular = \TCG\Voyager\Models\Post::where('featured', 1)->latest()->limit(3)->get();

    $categories = \TCG\Voyager\Models\Category::where('parent_id', null)->withCount('posts')->inRandomOrder()->limit(7)->get();
@endphp

<style>
  .custom-footer *{
    color: #a3a3a3
  }

  .custom-footer h5{
    margin-top: 1rem;
  }

  .custom-footer a:hover{
    color: #ec0000;
  }
</style>

<footer id="footer" class="footer">
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Thông tin</h3>
          <div class="list-post-block custom-footer ">
           

            <h5 style>{{setting('site.title')}}</h5>

            <p><b>Địa chỉ</b> : {{setting('site.address')}}</p>
            <p><b>Email</b> : <a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a></p>
            <p><b>Số điện thoại</b> :  <a href="tel:{{setting('site.phone')}}">{{setting('site.phone')}}</a></p>
          </div>
          
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget widget-categories">
          <h3 class="widget-title">Danh mục</h3>
          <ul>
            @foreach ($categories as $item)
              <li>
                <a href="{{route('category', $item->slug)}}">
                  <span class="catTitle">{{$item->name}}</span><span class="catCounter"> ({{$item->posts_count}})</span>
                </a>
              </li>
            @endforeach
          </ul>
          
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Tin tức nổi bật</h3>
          <div class="list-post-block">
            <ul class="list-post">
              @foreach ($popular as $post)
                <li class="clearfix">
                  <div class="post-block-style post-float clearfix">
                    <div class="post-thumb">
                      <a href="{{ route('blog.detail', $post->slug) }}">
                        <img class="img-fluid" src="{{ Voyager::image($post->image) }}" alt="" loading="lazy"/>
                      </a>
                    </div><!-- Post thumb end -->

                    <div class="post-content">
                      <h2 class="post-title title-small">
                        <a href="{{ route('blog.detail', $post->slug) }}" class="line-clamp-2">{{ $post->title }}</a>
                      </h2>
                      <div class="post-meta">
                        <span class="post-date">{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                      </div>
                    </div><!-- Post content end -->
                  </div><!-- Post block style end -->
                </li><!-- Li 1 end -->
              @endforeach
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-sm-12 footer-widget">
          <h3 class="widget-title">Thư viện ảnh</h3>
          <div class="row" style="margin: 0 -6px">
            @foreach (json_decode($images->images) as $key =>  $item)
              @if($key >= 9)
                @break
              @endif
              <a href="{{Voyager::image($item)}}" class="image-link col-4" style="padding: 0 3px; margin-bottom: 6px">
                <img class="" src="{{Voyager::image($item)}}" alt="" style="aspect-ratio: 4/3; object-fit: cover;display: block;
                width: 100%;max-width: initial;min-height: initial;" loading="lazy"/>
              </a>
            @endforeach
          </div>
        </div><!-- Col end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->

  

</footer><!-- Footer end -->

<div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="copyright-info text-center">
            <span>Copyright © {{date('Y')}} {{setting('site.title')}} All Rights Reserved</span>
          </div>
        </div>

        {{-- <div class="col-sm-12 col-md-6">
          <div class="footer-menu">
            <ul class="nav unstyled">
              <li><a href="#">Site Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Advertisement</a></li>
              <li><a href="#">Cookies Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div> --}}
      </div><!-- Row end -->

      <div id="back-to-top" class="back-to-top">
        <button class="btn btn-primary" title="Back to Top">
          <i class="fa fa-angle-up"></i>
        </button>
      </div>

    </div><!-- Container end -->
 </div><!-- Copyright end -->

@if (\Session::has('success'))
  <script type="text/javascript">
    window.alert("{!! \Session::get('success') !!}")
  </script>
@endif
<!-- END OF FOOTER -->