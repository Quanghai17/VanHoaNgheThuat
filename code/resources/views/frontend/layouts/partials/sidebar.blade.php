@php
    $popular = \TCG\Voyager\Models\Post::where('featured', 1)->latest()->limit(5)->get();
@endphp

<div class="sidebar sidebar-right">
  @if (request()->route()->uri() == '/')
      @include('frontend.layouts.partials.notification')
  @endif

  <div class="widget color-default">
      <h3 class="block-title"><span>Tin nổi bật</span></h3>

      @if (count($popular) > 0)
          <div class="post-overaly-style clearfix">
              <div class="post-thumb">
                  <a href="{{ route('blog.detail', $popular[0]->slug) }}">
                      <img class="img-fluid" src="{{ Voyager::image($popular[0]->image) }}"
                          alt="" loading="lazy" style="aspect-ratio: 4/3;object-fit: cover;">
                  </a>
              </div>

              <div class="post-content">
                  {{-- <a class="post-cat" href="#">Health</a> --}}
                  <h2 class="post-title title-small">
                      <a
                          href="{{ route('blog.detail', $popular[0]->slug) }}">{{ $popular[0]->title }}</a>
                  </h2>
                  <div class="post-meta">
                      <span
                          class="post-date">{{ date('d/m/Y', strtotime($popular[0]->created_at)) }}</span>
                  </div>
              </div>
          </div>
      @endif


      <div class="list-post-block">
          <ul class="list-post">
              @foreach ($popular as $key => $post)
                  @if ($key == 0)
                      @continue
                  @endif
                  <li class="clearfix">
                      <div class="post-block-style post-float clearfix">
                          <div class="post-thumb">
                              <a href="{{ route('blog.detail', $post->slug) }}">
                                  <img class="img-fluid" src="{{ Voyager::image($post->image) }}" style="aspect-ratio: 4/3;object-fit: cover;"
                                      alt="" loading="lazy">
                              </a>
                          </div><!-- Post thumb end -->

                          <div class="post-content">
                              <h2 class="post-title title-small">
                                  <a
                                      href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                              </h2>
                              <div class="post-meta">
                                  <span
                                      class="post-date">{{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                              </div>
                          </div>
                      </div>
                  </li>
              @endforeach
          </ul>
      </div>

  </div>

  <div class="widget m-bottom-0">
      <h3 class="block-title"><span>Bản tin</span></h3>
      <div class="ts-newsletter">
          <div class="newsletter-introtext">
              <h4>Liên hệ</h4>
              <p>Theo dõi bản tin của chúng tôi để nhận những câu chuyện hay nhất vào hộp thư đến của
                  bạn!</p>
          </div>

          <div class="newsletter-form">
              <form action="{{ route('feedback') }}" method="post">
                  @csrf
                  <div class="form-group">
                      <input type="email" name="email" id="newsletter-form-email"
                          class="form-control form-control-lg" placeholder="E-mail"
                          autocomplete="off">
                      <button class="btn btn-primary">Đăng ký</button>
                  </div>
              </form>
          </div>
      </div><!-- Newsletter end -->
  </div><!-- Newsletter widget end -->

</div><!-- Sidebar right end -->