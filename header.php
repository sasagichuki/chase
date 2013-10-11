<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1"/>
	<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
	<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />

	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600|Open+Sans:100,300italic,400' rel='stylesheet' type='text/css'>
	<!-- stylesheet -->

	
    <!-- custom typography-->
    
	<!-- custom typography -->

   

<!-- wp_head -->
<?php wp_head(); ?>
<!-- wp_head -->

</head>
<!-- head -->

	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

	<!-- #page -->
	<div id="page">
		<div class="header-container">
           <header class="wrapper clearfix">

			   <a href="<?php bloginfo('url'); ?>" class="site-title"></a>

               <!-- <p class="site-description"><?php bloginfo(  ); ?></p> -->


                <!-- .top-menu-container -->
		       <!--  <div class="top-menu-container">
			        <nav>
						<div id="top-menu">
						<?php  site5_main_nav(); ?>
						</div>
					</nav>
				</div> -->

           </header>
        </div>
        <div class="big-menu" id="sticky-header">
        	<nav>
        		<div id="top-menu">
        			<?php site5_main_nav(); ?>
        		</div>
        	</nav>
        </div>

		<!-- .main-container -->
		<div class="main-container">
			

			<div class="main wrapper clearfix">
				
					

