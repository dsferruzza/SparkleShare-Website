<?php get_header(); ?>
    <div id="header"></div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="page" id="post-<?php the_ID(); ?>">
          <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
          <div class="entry">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
          </div>
          <h2>by <?php the_author() ?></h2>
          <h2><?php the_time('l, F jS, Y') ?></h2>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <h1>Not Found</h1>
      <p>Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
    <div id="footer"></div>
<?php get_footer(); ?>
