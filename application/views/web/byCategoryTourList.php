<div class="top_site_main" style="background-image:url(<?php echo base_url()?>asset/images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="#" class="home">Home</a></li>
						<li>Tours</li>
					</ul>
				</div>
				<h1 class="heading_primary">Tours</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12">
						<ul class="tours products wrapper-tours-slider">
							<?php if (!empty($categoryTourData)) {?>
								<?php foreach ($categoryTourData as $key => $value): ?>
								<li class="item-tour col-md-3 col-sm-6 product">
									<div class="item_border item-product">
										<div class="post_images">
											<a href="#">
												<img src="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['featureImg'] ?>" alt="image" width="950" height="700">
											</a>
										
										</div>
										<div class="wrapper_content">
											<div class="post_title"><h4>
												<a href="#" rel="bookmark"><?php echo $value['title'] ?></a>
											</h4></div>
											<span class="post_date"><?php echo $value['totalDaysNight'] ?></span>
											<div class="description">
												<p><?php echo $value['content'] ?></p>
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
											<a rel="nofollow" href="<?php echo base_url('home/tourdetail/').$value['tour_id'] ?>" class="button product_type_tour_phys add_to_cart_button">Read more</a>
										</div>
									</div>
								</li>
							<?php endforeach ?>
							<?php } else {?>
								<div><p>Data Not Found...</p></div>
							<?php } ?>
						</ul>
						<!-- <div class="navigation paging-navigation" role="navigation">
							<ul class="page-numbers">
								<li><span class="page-numbers current">1</span></li>
								<li><a class="page-numbers" href="#">2</a></li>
								<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</section>