<?php //this is just for the doctype and <head> section
get_template_part('theme-partials/header/head');

$class_name = '';
if(is_page() && get_page_template_slug(wpgrade::lang_original_post_id(get_the_ID())) == 'template-journal.php') {
	$class_name .= ' blog';
}

$schema_org = '';
if (is_single()) {
	$schema_org .= 'itemscope itemtype="http://schema.org/Article"';
} else {
	$schema_org .= 'itemscope itemtype="http://schema.org/WebPage"';
}

if(wpgrade::option('nav_inverse_top') == 1) $class_name .= " nav-inverse-top";
if(wpgrade::option('nav_inverse_main') == 1) $class_name .= " nav-inverse-main"; ?>

<body <?php body_class($class_name); ?> <?php echo $schema_org ?> >
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-46447880-1', 'fithealthin.com');
		ga('send', 'pageview');
	</script>

    <div class="pace">
        <div class="pace-activity"></div>
    </div>    
    <div id="page">
        <nav class="navigation  navigation--mobile">
            <h2 class="accessibility"><?php _e('Primary Mobile Navigation', wpgrade::textdomain()) ?></h2>
            <?php 
                wpgrade_main_nav_mobile();
                wpgrade_top_nav_left('nav--stacked', true);
                wpgrade_top_nav_right('nav--stacked', true);
            ?>
        </nav>    
        <div class="wrapper">
            <?php //get the main header section - logo, nav, footer
			get_template_part('theme-partials/header/site', wpgrade::option('header_type')); ?>