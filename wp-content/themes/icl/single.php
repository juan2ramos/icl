<?php
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
<section class="section-single">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 		
 		<figure class="imagen-post-thumbnail">
            <?php the_post_thumbnail(); ?>
        </figure>
        <h2><?php the_title(); ?></h2>
        <small><?php the_time('j \d\e F \d\e Y'); ?> </small>
        <hr/>
        <article class="entry-single">
            <?php the_content(); ?>
        </article>
        <?php //comments_template(); ?>
 
    <?php endwhile; ?>
 
    <?php else : ?>
 
        <h2>pagina no encontrada</h2>
 
    <?php endif; ?>
 </section>