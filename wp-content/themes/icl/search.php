<?php
/*
Template Name: blog
*/
get_header(); ?>
<header class="header-blog">
	<div class="header-blog-content">
		<figure class="logo-blog">
			<a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo-icl.svg" alt=""></a>
		</figure>
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" class="searchform">
		    
		        <input type="text" value="" name="s" id="s" class="s" placeholder="buscar"/>
		        <button type="submit" id="searchsubmit" value="" class="search-button" />
		    
		</form>

	</div>
</header>
<h1 class="search-h1"> Resultados de búsqueda para <?php echo $_GET['s']?> </h1>
<section class="section-post">
	<?php 
  	global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

	$wp_query = new WP_Query($search_query);
	while ( have_posts() ) : the_post(); ?>

	
		<article class="article">
			<figure>
			<img src="<?php
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(430, 335), false, '');
                        echo $src[0];
                   ?>" 
            alt="" />
            </figure>
            <div class="info-article">
	    		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<small><?php the_time('j \d\e F \d\e Y'); ?> por <?php the_author_posts_link(); ?></small>
			</div>
		</article>
	<?php endwhile; ?>

	<?php

?>
 </section>	
  
<?php wp_footer(); ?>