<?php get_header(); ?>
<section class="c-hero c-hero--gray" style="background-image: url(<?php the_field('hero_image'); ?>);">

</section>
<section class="u-bg--gray--light">
  <div class="l-content-container l-pull-up-content-container">
    <div class="l-pull-up-content">
      <div class="l-main-content u-body-copy u-std-font-size">
          <div class="c-tag">About <?php the_title(); ?></div>

          <h1><?php the_field('heading'); ?></h1>

          <p class="alignLeft"><img width="320" src="<?php the_field('image'); ?>"></p>
          <?php the_field('bio'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>