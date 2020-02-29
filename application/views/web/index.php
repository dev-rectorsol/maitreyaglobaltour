<?php include'layout/css.php'?>
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<marquee direction="left" behavior="scroll"  scrolldelay="5" >
							<?php echo $flash[0]['name'];?>
  							 </marquee>
							
					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="#" title="Travel" rel="home">
						<img src="<?php echo base_url()?>asset/images/logo.png" alt="Logo" width="80" height="75" class="logo_transparent_static">
						<img src="<?php echo base_url()?>asset/images/logo.png" alt="Sticky logo" width="80" height="75" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
						<li class="current-menu-ancestor current-menu-parent">
							<a href="<?php echo base_url()?>">Home</a>
						</li>
						<li><a href="<?php echo base_url('about') ?>">About</a></li>
						<li><a href="<?php echo base_url('tourlist') ?>">Tours</a></li>

						<li><a href="<?php echo base_url('gallery')?>">Gallery</a></li>
						<!-- <li><a href="<?php echo base_url()?>">Blog</a></li> -->
						<li><a href="<?php echo base_url('contact')?>">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
<div class="site wrapper-content">
<?php echo $main_content; ?>
</div>
<?php include 'layout/footer.php'?>