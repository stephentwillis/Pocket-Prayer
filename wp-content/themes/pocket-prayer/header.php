<!DOCTYPE html>
<html>
<head>
    <script>
      (function(d) {
        var config = {
              kitId: 'ysn6ahg',
              scriptTimeout: 3000,
              async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

    <meta charset="utf-8" />
    <title><?php if (is_front_page()) { echo 'Welcome'; } else { wp_title('', true, 'right'); } ?> | <?php bloginfo('name'); ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/icons/favicon-16x16.png">

    <!-- CSS -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />

	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />   

	<?php wp_head(); ?>

</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

	<!-- Site Wraper -->
<div class="wrapper">

<!-- Header -->
<header id="header" class="header">
	<div class="container header-inner">
		
		<div class="row">
			<div class="col-4 col-md-4 col-lg-5 col-xl-5">
				<!-- Mobile Navbar Icon -->
				<div class="nav-mobile nav-bar-icon">
					<span></span>
				</div>
				<!-- End Mobile Navbar Icon -->

				<!-- Navbar Navigation -->
				<div class="nav-menu">
					<ul class="nav-menu-inner">
						<?php 
							$pages = get_pages(array(
								'sort_column' => 'menu_order'
							));

							foreach($pages as $page) {
							$url = get_permalink($post = $page->ID);
						?>
						<li id="<?php echo $page->ID ?>">
							<a href="<?php echo $url ?>"><?php echo $page->post_title ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- End Navbar Navigation -->
			</div> 

			<!-- SU Logo -->
			<div class="su-logo col-6 col-md-6 col-lg-2 col-xl-3">
				<a href="https://content.scriptureunion.org.uk/">
					<img class="logo-dark" src="<?php bloginfo('template_url'); ?>/assets/img/logos/su_logo.png" alt="Scripture Union" />
				</a>
			</div>
			<!-- End Logo --> 
		</div>

	</div>
</header>
<!-- End Header -->