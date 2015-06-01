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
<section class="section-post">
	<?php 
  	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
	$wp_query = new WP_Query($args);
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
<!-- then the pagination links -->
<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
<?php previous_posts_link( 'Newer posts &rarr;' ); ?>

 </section>	
  
<?php wp_footer(); ?>