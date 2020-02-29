<div class="top_site_main" style="background-image:url(<?php echo base_url()?>asset/images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li><a href="#"><?php echo $tourdata['title'] ?></a></li>
					
					</ul>
				</div>
				<h2 class="heading_primary"><?php echo $tourdata['title'] ?></h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1><?php echo $tourdata['title'] ?></h1>
								</div>
							</div>
							<div class="tour_after_title">
								<div class="meta_date">
									<span><?php echo $tourdata['totalDaysNight'] ?></span>
								</div>
								<div class="meta_values">
									<span>Category:</span>
									<div class="value">
										<span><?php echo $tourdata['category'] ?></span>
									</div>
								</div>
								<div class="tour-share">
									<ul class="share-social">
										<li>
											<a target="_blank" class="facebook" href="#"><i class="fa fa-facebook"></i></a>
										</li>
										<li>
											<a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li>
											<a target="_blank" class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
										</li>
										<li>
											<a target="_blank" class="googleplus" href="#"><i class="fa fa-google"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div id="slider" class="flexslider">
								<ul class="slides">
									<?php foreach ($galleryImage as $value): ?>
										<li>
										<a href="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['galleryImg'] ?>" class="swipebox" title=""><img width="950" height="700" src="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['galleryImg'] ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" draggable="false"></a>
									</li>
									<?php endforeach ?>
									
								</ul>
							</div>
							<div id="carousel" class="flexslider thumbnail_product">
								<ul class="slides">	
									<?php foreach ($galleryImage as $value): ?>
										<li>
											<img width="150" height="100" src="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['galleryImg'] ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" title="" draggable="false">
										</li>
									<?php endforeach ?>
								</ul>
							</div>
							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
							<?php 
                      if($this->session->flashdata('success'))
                      {
                      ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <?php echo $this->session->flashdata('success'); ?>
                          <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                            <span aria-hidden="true">&times;</span>           
                          </button>
                        </div>
                      <?php
                      }
                     ?>
								<ul class="tabs wc-tabs" role="tablist">
									<li class="itinerary_tab_tab active" role="presentation">
										<a href="#tab-itinerary_tab" role="tab" data-toggle="tab">Itinerary</a>
									</li>
								
									<li class="reviews_tab" role="presentation">
										<a href="#tab-reviews" role="tab" data-toggle="tab">Reviews (<?php echo count($review);?>)</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--itinerary_tab panel entry-content wc-tab active" id="tab-itinerary_tab">
										<?php  
											if ($itinerary>0) {
												$id = 1;
												foreach ($itinerary as $key => $value): ?>
												<div class="interary-item">
													<p><span class="icon-left"><?php echo $id ?></span></p>
													<div class="item_content">
														<h2><strong><?php echo $value['day'] ?></strong></h2>
														<p><?php echo $value['content'] ?></p>
													</div>
												</div>
										<?php $id=$id+1; endforeach; } ?>
									</div>	
									
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
										<div id="reviews" class="travel_tour-Reviews">
											<div id="comments">
												<h2 class="travel_tour-Reviews-title">1 review for
													<span>Kiwiana Panorama</span></h2>
													
												<ol class="commentlist">
												<?php foreach ($review as $value): ?>
													<li itemscope="" itemtype="#" class="comment byuser comment-author-physcode bypostauthor even thread-even depth-1" id="li-comment-62">
														<div id="comment-62" class="comment_container">
															<img alt="" src="<?php echo base_url()?>asset/images/avata.jpg" class="avatar avatar-60 photo" height="60" width="60">
															<div class="comment-text">
																<div class="star-rating" title="Rated 4 out of 5">
																<?php 
																		if (isset($value['rating'])) { ?>
																			<?php for ($i=0; $i < $value['rating'] ; $i++) { ?>
																		<i class="fa fa-star"></i>
																<?php	} ?>
																		<?php } else {
																			
																		}
																		
																	 ?>
																	<!-- <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> -->
																</div>
																<!-- <p class="meta">
																	<strong>physcode</strong> –
																	<time datetime="2017-01-24T03:54:04+00:00">January 24, 2017</time>
																	:
																</p>
																<div class="description">
																	<p>Mattis interdum nunc massa. Velit. Nonummy penatibus luctus</p>
																</div> -->
																<p class="meta">
																	<strong><?php echo $value['name'] ?></strong> –
																	<?php echo date("d-F-Y", strtotime($value['create_date'])) ?>
																</p>
																<div class="description">
																	<p><?php echo $value['reviewmsg'] ?></p>
																</div>
															</div>
														</div>
													</li>
													<?php endforeach ?>
												</ol>
											
											</div>
											<div id="review_form_wrapper">
											<div id="review_form">
													<div id="respond" class="comment-respond">
														<h3 id="reply-title" class="comment-reply-title">Add a review</h3>
														<form action="<?php echo base_url('home/review_submit');?>" method="post"  class="comment-form">
														<input type="hidden" name="tourId" value="<?php echo $tourdata['id'] ?>">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span> Required fields are marked
																<span class="required">*</span></p>
															<p class="comment-form-author"><label for="author">Name
																<span class="required">*</span></label>
																<input id="author" name="author" type="text" value="" size="30" required="">
															</p>
															<p class="comment-form-email"><label for="email">Email
																<span class="required">*</span></label>
																<input id="email" name="email" type="email" value="" size="30" required="">
															</p>
															<p class="comment-form-rating">
																<label>Your Rating</label>
															</p>
															<p class="stars">
															<select name="rating" id="rating" class="custom-select focus-shadow-0">
															<option value="5">★★★★★ (5/5)</option>
															<option value="4">★★★★☆ (4/5)</option>
															<option value="3">★★★☆☆ (3/5)</option>
															<option value="2">★★☆☆☆ (2/5)</option>
															<option value="1">★☆☆☆☆ (1/5)</option>
														</select>
															</p>

															<p class="comment-form-comment">
																<label for="comment">Your Review
																	<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
															</p>
															<p class="form-submit">
															<input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
																<input name="submit" type="submit" id="submit" class="submit" value="Submit">
															</p></form>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="related tours">
								<h2>Related Tours</h2>
								<ul class="tours products wrapper-tours-slider">
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="#">
													
													<img width="430" height="305" src="<?php echo base_url()?>asset/images/tour/430x305/tour-1.jpg" alt="Discover Brazil" title="Discover Brazil">
												</a>
												
											</div>
											<div class="wrapper_content">
												<div class="post_title"><h4>
													<a href="#" rel="bookmark">Discover Brazil</a>
												</h4></div>
												<span class="post_date">5 DAYS 4 NIGHTS</span>
												<div class="description">
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="#" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="#">
													<img width="430" height="305" src="<?php echo base_url()?>asset/images/tour/430x305/tour-2.jpg" alt="Discover Brazil" title="Discover Brazil">
												</a>
											
											</div>
											<div class="wrapper_content">
												<div class="post_title"><h4>
													<a href="#" rel="bookmark">Kiwiana Panorama</a>
												</h4></div>
												<span class="post_date">5 DAYS 4 NIGHTS</span>
												<div class="description">
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="#" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
									<li class="item-tour col-md-4 col-sm-6 product">
										<div class="item_border item-product">
											<div class="post_images">
												<a href="#">
													<img width="430" height="305" src="<?php echo base_url()?>asset/images/tour/430x305/tour-3.jpg" alt="Discover Brazil" title="Discover Brazil">
												</a>
										
											</div>
											<div class="wrapper_content">
												<div class="post_title"><h4>
													<a href="#" rel="bookmark">Anchorage to Quito</a>
												</h4></div>
												<span class="post_date">5 DAYS 4 NIGHTS</span>
												<div class="description">
													<p>Aliquam lacus nisl, viverra convallis sit amet&nbsp;penatibus nunc&nbsp;luctus</p>
												</div>
											</div>
											<div class="read_more">
												<div class="item_rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<a rel="nofollow" href="#" class="button product_type_tour_phys add_to_cart_button">Read more</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								<div class="entry-content-tour">
								<p class="price">
										<span class="text">Fill up the form below to tell us what you're looking for</span>
									</p>
									<div class="clear"></div>
									<div class="booking">
									<div class="">
					<?php 
                      if($this->session->tempdata('success'))
                      {
                      ?>
                        <div class="alert alert-success alert-dismissible show" role="alert">
                          <?php echo $this->session->tempdata('success'); ?>
                          <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                            <span aria-hidden="true">&times;</span>           
                          </button>
                        </div>
                      <?php
                      }
                     ?>

                     <?php 
                      if($this->session->tempdata('error'))
                      {
                        ?>
                          <div class="alert alert-danger alert-dismissible show" alert="alert">
                            <?php echo $this->session->tempdata('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-lebel="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php
                      }
                      ?>
												<form id="tourBookingForm" method="POST" action="<?php echo base_url('home/tourdetail/').$tourdata['id']; ?>">
													<div class="">
														<input name="firstName" value="" placeholder="First name" type="text" required="">
													</div>
													<div class="">
														<input name="lastName" value="" placeholder="Last name" type="text">
													</div>
													<div class="">
														<input name="email" value="" placeholder="Email" type="text" required="">
													</div>
													<div class="">
														<input name="phone" value="" placeholder="Phone" type="text" required="" maxlength="10">
													</div>
													<div class="">
														<textarea name="message" cols="40" rows="10" class="wpcf7-form-control" aria-invalid="false" placeholder="Message"></textarea>
													</div>
													<input type="hidden" name="tourId" value="<?php echo $tourdata['id'] ?>">
													<input class="btn-booking btn" value="Send Enquiry" type="submit">
													<input type="hidden" id="get_csrf_hash" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
												</form>
											</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>