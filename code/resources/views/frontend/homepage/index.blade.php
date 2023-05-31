@extends('frontend.layouts.default')

@section('content')
	<section class="block-wrapper section-bg">
		<div class="container container-bg">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="latest-news block color-red">
						<h3 class="block-title"><span>TIN TỨC MỚI NHẤT</span></h3>
						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							@php
								$dem = floor(count($featured)/2);
							@endphp
							@for ($i = 0; $i < $dem; $i++)
							<div class="item">
								<ul class="list-post">
									
										<li class="clearfix">
											<div class="post-block-style clearfix">
												<div class="post-thumb">
													<a href="#">
                            <img class="img-fluid" style="aspect-ratio: 4/2.6;object-fit: cover;" src="{{Voyager::image($featured[$i]->image)}}" alt="" loading="lazy"/>
                          </a>
												</div>
												{{-- <a class="post-cat" href="#">Health</a> --}}
												<div class="post-content">
													<h2 class="post-title title-medium">
														<a class="line-clamp-2" href="#">{{$featured[$i]->title}}</a>
													</h2>
													<div class="post-meta">
														<span class="post-date">{{ date('d/m/Y', strtotime($featured[$i]->created_at)) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Block style end -->
										</li><!-- Li end -->
									
										<div class="gap-30"></div>
									

										<li class="clearfix">
											<div class="post-block-style clearfix">
												<div class="post-thumb">
													<a href="#"><img class="img-fluid" style="aspect-ratio: 4/2.6;
														object-fit: cover;" src="{{Voyager::image($featured[$i+$dem]->image)}}" alt="" loading="lazy"/></a>
												</div>
												{{-- <a class="post-cat" href="#">Travel</a> --}}
												<div class="post-content">
													<h2 class="post-title title-medium">
														<a class="line-clamp-2" href="#">{{$featured[$i+$dem]->title }}</a>
													</h2>
													<div class="post-meta">
														<span class="post-date">{{ date('d/m/Y', strtotime($featured[$i+$dem]->created_at)) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Block style end -->
										</li><!-- Li end -->
									
									
								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->
							@endfor

							
						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					<!--- Featured Tab startet -->
					<div class="featured-tab color-blue">
						<h3 class="block-title"><span>Thời sự</span></h3>
						<ul class="nav nav-tabs">
							@foreach ($list_category_news as $key => $item)
								<li class="nav-item">
									<a class="nav-link animated fadeIn @if($key == 0) active @endif " href="#tab_{{$key}}" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title">{{$item->name}}</span>					
									</span>
									</a>
								</li>
							@endforeach
						  
						  	
						</ul>

						<div class="tab-content">
							@foreach ($list_category_news as $key => $item)
								
								<div class="tab-pane animated fadeInRight @if($key == 0) active @endif" id="tab_{{$key}}">
									<div class="row">
										@if(count($item->post) > 0)
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="{{route('blog.detail',$item->post[0]->slug)}}">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="{{Voyager::image($item->post[0]->image)}}" alt="" loading="lazy"/>
														</a>
													</div>
													{{-- <a class="post-cat" href="#">Gadgets</a> --}}
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="{{route('blog.detail',$item->post[0]->slug)}}">{{$item->post[0]->title}}</a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> {{ date('d/m/Y', strtotime($item->post[0]->created_at)) }}</span>
														</div>
														
														<p class="line-clamp">{{$item->post[0]->excerpt}}</p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										@endif
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														@foreach ($item->post as $key => $val)
														@if($key == 0)
															@continue
														@endif
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="{{route('blog.detail',$val->slug)}}">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="{{Voyager::image($val->image)}}" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="{{route('blog.detail',$val->slug)}}">{{$val->title}}</a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date">{{ date('d/m/Y', strtotime($val->created_at)) }}</span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														@endforeach
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							@endforeach
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>
					<!--- Featured Tab startet -->
					<div class="featured-tab color-orange">
						<h3 class="block-title"><span>NGHỆ THUẬT CHUYÊN NGHIỆP</span></h3>
						<ul class="nav nav-tabs">
							@foreach ($list_category_propagate as $key => $item)
								<li class="nav-item">
									<a class="nav-link animated fadeIn @if($key == 0) active @endif " href="#tab1_{{$key}}" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title">{{$item->name}}</span>					
									</span>
									</a>
								</li>
							@endforeach
						  
						  	
						</ul>

						<div class="tab-content">
							@foreach ($list_category_propagate as $key => $item)
								
								<div class="tab-pane animated fadeInRight @if($key == 0) active @endif" id="tab1_{{$key}}">
									<div class="row">
										@if(count($item->post) > 0)
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="{{route('blog.detail',$item->post[0]->slug)}}">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="{{Voyager::image($item->post[0]->image)}}" alt="" loading="lazy"/>
														</a>
													</div>
													{{-- <a class="post-cat" href="#">Gadgets</a> --}}
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="{{route('blog.detail',$item->post[0]->slug)}}">{{$item->post[0]->title}}</a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> {{ date('d/m/Y', strtotime($item->post[0]->created_at)) }}</span>
														</div>
														
														<p class="line-clamp">{{$item->post[0]->excerpt}}</p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										@endif
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														@foreach ($item->post as $key => $val)
														@if($key == 0)
															@continue
														@endif
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="{{route('blog.detail',$val->slug)}}">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="{{Voyager::image($val->image)}}" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="{{route('blog.detail',$val->slug)}}">{{$val->title}}</a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date">{{ date('d/m/Y', strtotime($val->created_at)) }}</span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														@endforeach
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							@endforeach
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>
					

					<!--- Featured Tab startet -->
					<div class="featured-tab color-dark-blue">
						<h3 class="block-title"><span>VĂN HÓA CƠ SỞ</span></h3>
						<ul class="nav nav-tabs">
							@foreach ($list_category_art as $key => $item)
								<li class="nav-item">
									<a class="nav-link animated fadeIn @if($key == 0) active @endif " href="#tab2_{{$key}}" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title">{{$item->name}}</span>					
									</span>
									</a>
								</li>
							@endforeach
						  
						  	
						</ul>

						<div class="tab-content">
							@foreach ($list_category_art as $key => $item)
								
								<div class="tab-pane animated fadeInRight @if($key == 0) active @endif" id="tab2_{{$key}}">
									<div class="row">
										@if(count($item->post) > 0)
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="{{route('blog.detail',$item->post[0]->slug)}}">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="{{Voyager::image($item->post[0]->image)}}" alt="" loading="lazy"/>
														</a>
													</div>
													{{-- <a class="post-cat" href="#">Gadgets</a> --}}
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="{{route('blog.detail',$item->post[0]->slug)}}">{{$item->post[0]->title}}</a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> {{ date('d/m/Y', strtotime($item->post[0]->created_at)) }}</span>
														</div>
														
														<p class="line-clamp">{{$item->post[0]->excerpt}}</p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										@endif
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														@foreach ($item->post as $key => $val)
														@if($key == 0)
															@continue
														@endif
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="{{route('blog.detail',$val->slug)}}">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="{{Voyager::image($val->image)}}" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="{{route('blog.detail',$val->slug)}}">{{$val->title}}</a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date">{{ date('d/m/Y', strtotime($val->created_at)) }}</span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														@endforeach
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							@endforeach
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					
				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					@include('frontend.layouts.partials.sidebar')
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding section-bg">
		<div class="container container-bg">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="{{Voyager::image(setting('site.home_banner_between'))}}" alt="" loading="lazy"/>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content top end -->
	
	<section class="block-wrapper section-bg">
		<div class="container container-bg" style="padding: 0;margin-top: -50px;">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					
						<div class="container">
							<div class="row">
								<div class="col-lg-6">
									<div class="block color-dark-blue">
										<h3 class="block-title"><span>TUYÊN TRUYỀN LƯU ĐỘNG</span></h3>
										@if(count($propagate) > 0)
											<div class="post-overaly-style clearfix">
												<div class="post-thumb">
													<a href="{{route('blog.detail',$propagate[0]->slug)}}">
														<img class="img-fluid" src="{{Voyager::image($propagate[0]->image)}}" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
													</a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title">
														<a href="{{route('blog.detail',$propagate[0]->slug)}}">{{$propagate[0]->title}}</a>
													</h2>
													<div class="post-meta">
														<span class="post-date">{{ date('d/m/Y', strtotime($propagate[0]->created_at)) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Overaly Article end -->
										@endif
										<div class="list-post-block">
											<ul class="list-post">
												
												@foreach ($propagate as $key => $item)
												@if($key == 0)
													@continue
												@endif
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="{{route('blog.detail',$item->slug)}}">
																<img class="img-fluid" src="{{Voyager::image($item->image)}}" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
															</a>
														</div><!-- Post thumb end -->
				
														<div class="post-content">
															 <h2 class="post-title title-small">
																 <a href="{{route('blog.detail',$item->slug)}}">{{$item->title}}</a>
															 </h2>
															 <div class="post-meta">
																 <span class="post-date">{{ date('d/m/Y', strtotime($item->created_at)) }}</span>
															 </div>
														 </div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
												@endforeach
												
				
											</ul><!-- List post end -->
										</div><!-- List post block end -->
									</div><!-- Block end -->
								</div><!-- Travel Col end -->
				
								<div class="col-lg-6">
									<div class="block color-aqua">
										<h3 class="block-title"><span>ĐOÀN THỂ </span></h3>
										@if(count($union) > 0)
											<div class="post-overaly-style clearfix">
												<div class="post-thumb">
													<a href="{{route('blog.detail',$union[0]->slug)}}">
														<img class="img-fluid" src="{{Voyager::image($union[0]->image)}}" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
													</a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title">
														<a href="{{route('blog.detail',$union[0]->slug)}}">{{$union[0]->title}}</a>
													</h2>
													<div class="post-meta">
														<span class="post-date">{{ date('d/m/Y', strtotime($union[0]->created_at)) }}</span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Overaly Article end -->
										@endif
										<div class="list-post-block">
											<ul class="list-post">
												
												@foreach ($union as $key => $item)
												@if($key == 0)
													@continue
												@endif
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="{{route('blog.detail',$item->slug)}}">
																<img class="img-fluid" src="{{Voyager::image($item->image)}}" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
															</a>
														</div><!-- Post thumb end -->
				
														<div class="post-content">
															 <h2 class="post-title title-small">
																 <a href="{{route('blog.detail',$item->slug)}}">{{$item->title}}</a>
															 </h2>
															 <div class="post-meta">
																 <span class="post-date">{{ date('d/m/Y', strtotime($item->created_at)) }}</span>
															 </div>
														 </div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
												@endforeach
												
				
											</ul><!-- List post end -->
										</div><!-- List post block end -->
									</div><!-- Block end -->
								</div><!-- Gadget Col end -->
							</div><!-- Row end -->
						</div><!-- Container end -->
					
				</div><!-- Content Col end -->

				<div class="col-lg-4 col-sm-12">
					<div class="sidebar sidebar-right">

						<div class="widget color-default">
							<h3 class="block-title"><span>Thư viện ảnh</span></h3>
							<div class="row" style="  margin-left: -5px;margin-right: -5px;width: 100%;">
								
								@foreach (json_decode($images->images) as $key =>  $item)
									@if ($key >= 8)
                    @break
                  @endif
									<div class="col-md-6" style="padding:0 5px; padding-bottom: 10px">
										<a class="image-link" href="{{Voyager::image($item)}}">
											<img  style="width: 100%;object-fit: cover;border: 1px solid red;aspect-ratio: 4/3;" src="{{Voyager::image($item)}}" alt="" loading="lazy">
										</a>
										
									</div>
								
								
								@endforeach
							
							</div>
						</div><!-- Latest Review Widget end -->

						
					</div><!--Sidebar right end -->
				</div><!-- Sidebar col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 3rd block end -->

	

@endsection
