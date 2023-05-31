<?php $__env->startSection('content'); ?>
	<section class="block-wrapper section-bg">
		<div class="container container-bg">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="latest-news block color-red">
						<h3 class="block-title"><span>TIN TỨC MỚI NHẤT</span></h3>
						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<?php
								$dem = floor(count($featured)/2);
							?>
							<?php for($i = 0; $i < $dem; $i++): ?>
							<div class="item">
								<ul class="list-post">
									
										<li class="clearfix">
											<div class="post-block-style clearfix">
												<div class="post-thumb">
													<a href="#">
                            <img class="img-fluid" style="aspect-ratio: 4/2.6;object-fit: cover;" src="<?php echo e(Voyager::image($featured[$i]->image)); ?>" alt="" loading="lazy"/>
                          </a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title title-medium">
														<a class="line-clamp-2" href="#"><?php echo e($featured[$i]->title); ?></a>
													</h2>
													<div class="post-meta">
														<span class="post-date"><?php echo e(date('d/m/Y', strtotime($featured[$i]->created_at))); ?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Block style end -->
										</li><!-- Li end -->
									
										<div class="gap-30"></div>
									

										<li class="clearfix">
											<div class="post-block-style clearfix">
												<div class="post-thumb">
													<a href="#"><img class="img-fluid" style="aspect-ratio: 4/2.6;
														object-fit: cover;" src="<?php echo e(Voyager::image($featured[$i+$dem]->image)); ?>" alt="" loading="lazy"/></a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title title-medium">
														<a class="line-clamp-2" href="#"><?php echo e($featured[$i+$dem]->title); ?></a>
													</h2>
													<div class="post-meta">
														<span class="post-date"><?php echo e(date('d/m/Y', strtotime($featured[$i+$dem]->created_at))); ?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Block style end -->
										</li><!-- Li end -->
									
									
								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->
							<?php endfor; ?>

							
						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					<!--- Featured Tab startet -->
					<div class="featured-tab color-blue">
						<h3 class="block-title"><span>Thời sự</span></h3>
						<ul class="nav nav-tabs">
							<?php $__currentLoopData = $list_category_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="nav-item">
									<a class="nav-link animated fadeIn <?php if($key == 0): ?> active <?php endif; ?> " href="#tab_<?php echo e($key); ?>" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title"><?php echo e($item->name); ?></span>					
									</span>
									</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						  
						  	
						</ul>

						<div class="tab-content">
							<?php $__currentLoopData = $list_category_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="tab-pane animated fadeInRight <?php if($key == 0): ?> active <?php endif; ?>" id="tab_<?php echo e($key); ?>">
									<div class="row">
										<?php if(count($item->post) > 0): ?>
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="<?php echo e(Voyager::image($item->post[0]->image)); ?>" alt="" loading="lazy"/>
														</a>
													</div>
													
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>"><?php echo e($item->post[0]->title); ?></a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> <?php echo e(date('d/m/Y', strtotime($item->post[0]->created_at))); ?></span>
														</div>
														
														<p class="line-clamp"><?php echo e($item->post[0]->excerpt); ?></p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										<?php endif; ?>
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														<?php $__currentLoopData = $item->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($key == 0): ?>
															<?php continue; ?>
														<?php endif; ?>
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="<?php echo e(route('blog.detail',$val->slug)); ?>">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="<?php echo e(Voyager::image($val->image)); ?>" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="<?php echo e(route('blog.detail',$val->slug)); ?>"><?php echo e($val->title); ?></a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date"><?php echo e(date('d/m/Y', strtotime($val->created_at))); ?></span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>
					<!--- Featured Tab startet -->
					<div class="featured-tab color-orange">
						<h3 class="block-title"><span>NGHỆ THUẬT CHUYÊN NGHIỆP</span></h3>
						<ul class="nav nav-tabs">
							<?php $__currentLoopData = $list_category_propagate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="nav-item">
									<a class="nav-link animated fadeIn <?php if($key == 0): ?> active <?php endif; ?> " href="#tab1_<?php echo e($key); ?>" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title"><?php echo e($item->name); ?></span>					
									</span>
									</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						  
						  	
						</ul>

						<div class="tab-content">
							<?php $__currentLoopData = $list_category_propagate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="tab-pane animated fadeInRight <?php if($key == 0): ?> active <?php endif; ?>" id="tab1_<?php echo e($key); ?>">
									<div class="row">
										<?php if(count($item->post) > 0): ?>
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="<?php echo e(Voyager::image($item->post[0]->image)); ?>" alt="" loading="lazy"/>
														</a>
													</div>
													
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>"><?php echo e($item->post[0]->title); ?></a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> <?php echo e(date('d/m/Y', strtotime($item->post[0]->created_at))); ?></span>
														</div>
														
														<p class="line-clamp"><?php echo e($item->post[0]->excerpt); ?></p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										<?php endif; ?>
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														<?php $__currentLoopData = $item->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($key == 0): ?>
															<?php continue; ?>
														<?php endif; ?>
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="<?php echo e(route('blog.detail',$val->slug)); ?>">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="<?php echo e(Voyager::image($val->image)); ?>" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="<?php echo e(route('blog.detail',$val->slug)); ?>"><?php echo e($val->title); ?></a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date"><?php echo e(date('d/m/Y', strtotime($val->created_at))); ?></span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>
					

					<!--- Featured Tab startet -->
					<div class="featured-tab color-dark-blue">
						<h3 class="block-title"><span>VĂN HÓA CƠ SỞ</span></h3>
						<ul class="nav nav-tabs">
							<?php $__currentLoopData = $list_category_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="nav-item">
									<a class="nav-link animated fadeIn <?php if($key == 0): ?> active <?php endif; ?> " href="#tab2_<?php echo e($key); ?>" data-toggle="tab">
										<span class="tab-head">
										<span style="width: 100px;
										overflow: hidden;
										white-space: nowrap;
										text-overflow: ellipsis;
										display: block;
										text-align: center;" class="tab-text-title"><?php echo e($item->name); ?></span>					
									</span>
									</a>
								</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						  
						  	
						</ul>

						<div class="tab-content">
							<?php $__currentLoopData = $list_category_art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="tab-pane animated fadeInRight <?php if($key == 0): ?> active <?php endif; ?>" id="tab2_<?php echo e($key); ?>">
									<div class="row">
										<?php if(count($item->post) > 0): ?>
										<div class="col-lg-6 col-md-6">
											
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<a href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>">
															<img class="img-fluid" style="aspect-ratio: 4/2.5;
															object-fit: cover;" src="<?php echo e(Voyager::image($item->post[0]->image)); ?>" alt="" loading="lazy"/>
														</a>
													</div>
													
													<div class="post-content">
														<h2 class="post-title">
															<a class="line-clamp-2" href="<?php echo e(route('blog.detail',$item->post[0]->slug)); ?>"><?php echo e($item->post[0]->title); ?></a>
														</h2>
														<div class="post-meta">
															<span class="post-date"> <?php echo e(date('d/m/Y', strtotime($item->post[0]->created_at))); ?></span>
														</div>
														
														<p class="line-clamp"><?php echo e($item->post[0]->excerpt); ?></p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											
										</div><!-- Col end -->
										<?php endif; ?>
										<div class="col-lg-6 col-md-6">
											<div class="list-post-block">
													<ul class="list-post">
														<?php $__currentLoopData = $item->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($key == 0): ?>
															<?php continue; ?>
														<?php endif; ?>
															<li class="clearfix">
																<div class="post-block-style post-float clearfix">
																	<div class="post-thumb">
																		<a href="<?php echo e(route('blog.detail',$val->slug)); ?>">
																			<img  style="aspect-ratio: 4/3;
																			object-fit: cover;" class="img-fluid" src="<?php echo e(Voyager::image($val->image)); ?>" alt="" loading="lazy"/>
																		</a>
																	</div><!-- Post thumb end -->
		
																	<div class="post-content">
																		<h2 class="post-title title-small">
																			<a class="line-clamp" href="<?php echo e(route('blog.detail',$val->slug)); ?>"><?php echo e($val->title); ?></a>
																		</h2>
																		<div class="post-meta">
																			<span class="post-date"><?php echo e(date('d/m/Y', strtotime($val->created_at))); ?></span>
																		</div>
																	</div><!-- Post content end -->
																</div><!-- Post block style end -->
															</li><!-- Li 1 end -->
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													</ul><!-- List post end -->
												</div><!-- List post block end -->
										</div><!-- List post Col end -->
									</div><!-- Tab pane Row 1 end -->
								</div><!-- Tab pane 1 end -->
								
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					
				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-12">
					<?php echo $__env->make('frontend.layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding section-bg">
		<div class="container container-bg">
			<div class="row">
				<div class="col-md-12">
					<img class="img-fluid" src="<?php echo e(Voyager::image(setting('site.home_banner_between'))); ?>" alt="" loading="lazy"/>
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
										<?php if(count($propagate) > 0): ?>
											<div class="post-overaly-style clearfix">
												<div class="post-thumb">
													<a href="<?php echo e(route('blog.detail',$propagate[0]->slug)); ?>">
														<img class="img-fluid" src="<?php echo e(Voyager::image($propagate[0]->image)); ?>" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
													</a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title">
														<a href="<?php echo e(route('blog.detail',$propagate[0]->slug)); ?>"><?php echo e($propagate[0]->title); ?></a>
													</h2>
													<div class="post-meta">
														<span class="post-date"><?php echo e(date('d/m/Y', strtotime($propagate[0]->created_at))); ?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Overaly Article end -->
										<?php endif; ?>
										<div class="list-post-block">
											<ul class="list-post">
												
												<?php $__currentLoopData = $propagate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($key == 0): ?>
													<?php continue; ?>
												<?php endif; ?>
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="<?php echo e(route('blog.detail',$item->slug)); ?>">
																<img class="img-fluid" src="<?php echo e(Voyager::image($item->image)); ?>" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
															</a>
														</div><!-- Post thumb end -->
				
														<div class="post-content">
															 <h2 class="post-title title-small">
																 <a href="<?php echo e(route('blog.detail',$item->slug)); ?>"><?php echo e($item->title); ?></a>
															 </h2>
															 <div class="post-meta">
																 <span class="post-date"><?php echo e(date('d/m/Y', strtotime($item->created_at))); ?></span>
															 </div>
														 </div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
				
											</ul><!-- List post end -->
										</div><!-- List post block end -->
									</div><!-- Block end -->
								</div><!-- Travel Col end -->
				
								<div class="col-lg-6">
									<div class="block color-aqua">
										<h3 class="block-title"><span>ĐOÀN THỂ </span></h3>
										<?php if(count($union) > 0): ?>
											<div class="post-overaly-style clearfix">
												<div class="post-thumb">
													<a href="<?php echo e(route('blog.detail',$union[0]->slug)); ?>">
														<img class="img-fluid" src="<?php echo e(Voyager::image($union[0]->image)); ?>" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
													</a>
												</div>
												
												<div class="post-content">
													<h2 class="post-title">
														<a href="<?php echo e(route('blog.detail',$union[0]->slug)); ?>"><?php echo e($union[0]->title); ?></a>
													</h2>
													<div class="post-meta">
														<span class="post-date"><?php echo e(date('d/m/Y', strtotime($union[0]->created_at))); ?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Overaly Article end -->
										<?php endif; ?>
										<div class="list-post-block">
											<ul class="list-post">
												
												<?php $__currentLoopData = $union; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($key == 0): ?>
													<?php continue; ?>
												<?php endif; ?>
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="<?php echo e(route('blog.detail',$item->slug)); ?>">
																<img class="img-fluid" src="<?php echo e(Voyager::image($item->image)); ?>" alt="" style="aspect-ratio: 3/2;object-fit: cover;" loading="lazy"/>
															</a>
														</div><!-- Post thumb end -->
				
														<div class="post-content">
															 <h2 class="post-title title-small">
																 <a href="<?php echo e(route('blog.detail',$item->slug)); ?>"><?php echo e($item->title); ?></a>
															 </h2>
															 <div class="post-meta">
																 <span class="post-date"><?php echo e(date('d/m/Y', strtotime($item->created_at))); ?></span>
															 </div>
														 </div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
				
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
								
								<?php $__currentLoopData = json_decode($images->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($key >= 8): ?>
                    <?php break; ?>
                  <?php endif; ?>
									<div class="col-md-6" style="padding:0 5px; padding-bottom: 10px">
										<a class="image-link" href="<?php echo e(Voyager::image($item)); ?>">
											<img  style="width: 100%;object-fit: cover;border: 1px solid red;aspect-ratio: 4/3;" src="<?php echo e(Voyager::image($item)); ?>" alt="" loading="lazy">
										</a>
										
									</div>
								
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							</div>
						</div><!-- Latest Review Widget end -->

						
					</div><!--Sidebar right end -->
				</div><!-- Sidebar col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 3rd block end -->

	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tinhtoan/domains/vanhoanghethuatthainguyen.vn/public_html/resources/views/frontend/homepage/index.blade.php ENDPATH**/ ?>