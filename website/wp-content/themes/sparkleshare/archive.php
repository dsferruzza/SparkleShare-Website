<?php
/*
Template Name: Archives
*/
get_header(); ?>
    <div id="header"></div>
    <div class="page">
      <?php
        $args = array( 'numberposts' => 7);
        $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); ?>
          <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <div class="entry" id="post-<?php the_ID(); ?>">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
            <h2>by <?php the_author() ?></h2>
            <h2><?php the_time('l, F jS, Y') ?></h2>
          </div>
        <?php endforeach; ?>
    </div>
    <div id="footer"></div>
<?php get_footer(); ?>