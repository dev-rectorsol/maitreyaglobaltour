<style>
	.shortcode_title .title_primary {
		color: #000 !important;
	}

	.shortcode_title.text-white .title_subtitle {
		color: #ffb300;
	}
</style>
<div class="home-content" role="main">
	<div class="top_site_main">

	</div>
<div id="home-page-slider-image" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<?php foreach ($slider as $value): ?>
						<div class="item active">
							<img src="<?php echo base_url('/uploads/sliderImg/')?><?php echo $value['image'] ?>" alt="Home Slider">
							<div class="carousel-caption content-slider">
								<div class="container">
								<h2><?php echo $value['title'] ?></h2>
								<p><?php echo $value['description'] ?></p>
								<p><a href="tours.html" class="btn btn-slider">VIEW TOURS </a></p>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				
				</div>
				<!-- Controls -->
				<a class="carousel-control-left" href="#home-page-slider-image" data-slide="prev">
					<i class="lnr lnr-chevron-left"></i>
				</a>
				<a class="carousel-control-right" href="#home-page-slider-image" data-slide="next">
					<i class="lnr lnr-chevron-right"></i>
				</a>
			</div>
		
				
	
	
	<div class="section-white padding-top-6x padding-bottom-6x tours-type">
		<div class="container">
			<div class="shortcode_title title-center title-decoration-bottom-center">
				
				<h3 class="title_primary">About Us</h3><span class="line_after_title"></span>
			</div>
			<?php echo $aboutData['aboutDesc']?>
		</div>
	</div>
	<div class="section-white padding-top-6x padding-bottom-6x tours-type">
		<div class="container">
			<div class="shortcode_title title-center title-decoration-bottom-center">
				<div class="title_subtitle"><?php echo $heading[0]['subtitle']?></div>
				<h3 class="title_primary"><?php echo $heading[0]['title']?></h3><span class="line_after_title"></span>
			</div>
			<div class="wrapper-tours-slider wrapper-tours-type-slider">
				<div class="tours-type-slider" data-dots="true" data-nav="true"
					data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":4}, "1200":{"items":5}}'>
					<?php foreach ($category as $value):?>
					<div class="tours_type_item">
						<a href="<?php echo base_url('home/byCategorytourlist/').$value['category_name'] ?>"
							class="tours-type__item__image">
							<img src="<?php echo base_url('/uploads/categoryImg/')?><?php echo $value['category_img'] ?>"
								alt="image" class="tour-height">
						</a>
						<div class="content-item">
							<div class="item__title"><?php echo $value['category_name'] ?></div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="padding-top-6x padding-bottom-6x section-background" style="Background:#f8f8f8;">
		<div class="container">
			<div class="shortcode_title text-white title-center title-decoration-bottom-center">
				<div class="title_subtitle"><?php echo $heading[1]['subtitle']?></div>
				<h3 class="title_primary"><?php echo $heading[1]['title']?></h3>
				<span class="line_after_title" style="color:#ffffff"></span>
			</div>
			<div class="row wrapper-tours-slider">
				<div class="tours-type-slider list_content" data-dots="true" data-nav="true"
					data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}, "1200":{"items":4}}'>
					<?php foreach ($tourData as $value):?>
					<div class="item-tour">
						<div class="item_border">
							<div class="item_content">
								<div class="post_images">
									<a href="#" class="travel_tour-LoopProduct-link">
										<img src="<?php echo base_url('/uploads/tourImg/')?><?php echo $value['image'] ?>"
											alt="image" style="height: 150px; width: 400px">
									</a>
								</div>
								<div class="wrapper_content">
									<div class="post_title">
										<h4>
											<a href="#" rel="bookmark"><?php echo $value['title'] ?></a>
										</h4>
									</div>
									<span class="post_date"><?php echo $value['totalDaysNight'] ?></span>
									<p><?php echo $value['content'] ?></p>
								</div>
							</div>
							<div class="read_more">
								<div class="item_rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
										class="fa fa-star"></i><i class="fa fa-star"></i>
								</div>
								<a href="<?php echo base_url('home/tourdetail/').$value['tour_id'] ?>"
									class="read_more_button">VIEW MORE
									<i class="fa fa-long-arrow-right"></i></a>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>

	<div class="container two-column-respon mg-top-6x mg-bt-6x">
		<div class="row">
			<div class="col-sm-12 mg-btn-6x">
				<div class="shortcode_title title-center title-decoration-bottom-center">
					<h3 class="title_primary">WHY CHOOSE US?</h3><span class="line_after_title"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="wpb_column col-sm-4">
				<div class="widget-icon-box widget-icon-box-base iconbox-center">
					<div class="box-icon icon-image circle">
						<img src="<?php echo base_url()?>asset/images/home/Map-Marker.png" alt="">
					</div>
					<div class="content-inner">
						<div class="sc-heading article_heading">
							<h3 style="color:#000000" class="heading__primary">Handpicked Hotels</h3>
						</div>
						<div class="desc-icon-box">
							<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wpb_column col-sm-4">
				<div class="widget-icon-box widget-icon-box-base iconbox-center">
					<div class="box-icon icon-image ">
						<img src="<?php echo base_url()?>asset/images/home/Worldwide-Location.png" alt="">
					</div>
					<div class="content-inner">
						<div class="sc-heading article_heading">
							<h3 style="color:#000000" class="heading__primary">World Class Service</h3>
						</div>
						<div class="desc-icon-box">
							<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wpb_column col-sm-4">
				<div class="widget-icon-box widget-icon-box-base iconbox-center">
					<div class="box-icon icon-image ">
						<img src="<?php echo base_url()?>asset/images/home/Hot-Air-Balloon.png" alt="">
					</div>
					<div class="content-inner">
						<div class="sc-heading article_heading">
							<h3 style="color:#000000" class="heading__primary">Best Price Guarantee</h3>
						</div>
						<div class="desc-icon-box">
							<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type='text/javascript' src='<?php echo base_url()?>asset/js/owl.carousel.min.js'></script>
