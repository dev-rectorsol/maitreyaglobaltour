	<div class="top_site_main" style="background-image:url(<?php echo base_url('') ?>asset/images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li>About Us</li>
					</ul>
				</div>
				<h1 class="heading_primary">About Us</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main">
                    <div class="shortcode_title title-center title-decoration-bottom-center">
							<h3 class="title_primary">About Us</h3><span class="line_after_title"></span>
                        </div>
                        <div class="col-md-8">
                            <p><?php echo $aboutData['aboutDesc']; ?></p>
                        </div>
                        <div class="col-md-4">
                        <img src="<?php echo base_url('/uploads/aboutImg/')?><?php echo $aboutData['image'] ?>" alt="Image" title="">
                        </div>
					</div>
				</div>
			</div>
		</section>