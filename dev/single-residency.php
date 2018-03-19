<?php
get_header();

$instructor = get_field('instructor');
$post = $instructor;
setup_postdata($post);
$name = get_the_title();
$name = explode(' ', $name);
$link = get_permalink();
$title = get_field('title');
$headshot = get_field('image');

wp_reset_postdata();

?>
<section class="c-hero c-hero--empty c-hero--orange">
  <div class="c-hero__slider js-hero-slider">
    <?php
            if( have_rows('image_gallery') ):
                while ( have_rows('image_gallery') ) : the_row(); ?>
    <div class="c-hero__slider__image" style="background-image: url(<?php the_sub_field('gallery_image'); ?>);"></div>
    <?php
                endwhile;
            endif;
            ?>
  </div>
  <div class="l-content-container">
    <div class="c-hero__offset-content">
      <h1><?php the_title(); ?></h1>

      <div class="c-hero__offset-content__divider">
        <img src="<?php echo get_template_directory_uri(); ?>/i/path-2.svg">
      </div>


      <div><strong><?php the_field('date'); ?></strong></div>
      <div><?php the_field('location'); ?></div>

    </div>
  </div>
</section>
<section class="u-bg--gray--light" >
  <div class="l-content-container">
    <div class="l-program-content">
      <div class="l-program-content__secondary">
        <div class="l-pull-up-content l-pull-up-content--aside">
          <div class="c-program-details">
            <div class="c-program-details__gallery js-program-details-gallery">
              <?php
            if( have_rows('image_gallery') ):
                while ( have_rows('image_gallery') ) : the_row(); ?>
              <div class="c-program-details__gallery__image" style="background-image: url(<?php the_sub_field('gallery_image'); ?>);">

              </div>
              <?php
                endwhile;
            endif;
            ?>
            </div>
            <div class="c-program-details__content">
              <div class="c-program-details__header">
                <h5>Program fee</h5>
                <div class="c-program-details__price-info">
                  <div class="c-program-details__price"><?php the_field('price'); ?></div>
                  <div class="c-program-details__price__note"><?php the_field('price_note'); ?></div>
                </div>
              </div>
              <div class="c-program-details__text js-content-toggle__text" data-text="details">
                <?php if(get_field('included_in_fee')): ?>
                <h5>Included in program fee</h5>
                <?php the_field('included_in_fee'); ?>
                <?php endif; ?>

                <?php if(get_field('not_included_in_fee')): ?>
                <h5>Not included in program fee</h5>
                <?php the_field('not_included_in_fee'); ?>
                <?php endif; ?>

                <?php if(get_field('check_in')): ?>
                <h5>Check-in</h5>
                <?php the_field('check_in'); ?>
                <?php endif; ?>

                <?php if(get_field('check_out')): ?>
                <h5>Check-out</h5>
                <?php the_field('check_out'); ?>
                <?php endif; ?>

              </div>
              <div class="c-program-details__toggle c-content-toggle-btn js-content-toggle" data-text="details">
                <span class="c-program-details__toggle__text is-closed ">OPEN PROGRAM DETAILS&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></span>
                <span class="c-program-details__toggle__text is-open">Close PROGRAM DETAILS&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-up"></i></span>
              </div>
            </div>
            <div class="c-program-details__registration">
              <?php the_field('registration_description'); ?>
              <a href="<?php the_field('registration_link'); ?>" class="c-btn c-btn--white c-btn--full-width">Begin Registration</a>
            </div>
          </div>

          <div class="l-program-content__main u-body-copy u-hide@med" >
            <?php the_field('description_content'); ?>
          </div>

          <div class="c-author-card c-author-card--large ">
            <div class="c-author-card__image" style="background-image: url(<?php echo $headshot; ?>);"></div>
            <div class="c-author-card__content">
              <p><strong><?php echo $name[0] . ' ' . $name[1]; ?></strong><br>
                <?php echo $title; ?></p>

              <a href="<?php echo $link; ?>">More about <?php echo $name[0]; ?></a>
            </div>
          </div>

          <div class="c-image-gallery js-image-gallery">
            <?php
            if( have_rows('image_gallery') ):
                while ( have_rows('image_gallery') ) : the_row();
                $imageSmall = get_sub_field('gallery_image');
        $imageSmall = str_replace('.jpg', '-300x300.jpg', $imageSmall);
        $imageSmall = str_replace('.png', '-300x300.png', $imageSmall);
          ?>
            <a href="<?php the_sub_field('gallery_image'); ?>">
              <img src="<?php echo $imageSmall; ?>">
            </a>
            <?php
                endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>

      <div class="l-program-content__main u-body-copy u-hide-below-med" >
        <?php the_field('description_content'); ?>
      </div>



      <!--div class="c-author-card c-author-card--small u-hide@med">
        <div class="c-author-card__image" style="background-image: url(<?php echo $headshot; ?>);"></div>
        <div class="c-author-card__content">
          <p><strong><?php echo $name[0] . ' ' . $name[1]; ?></strong><br>
            <?php echo $title; ?>
            </p>

          <a href="<?php echo $link; ?>">More about <?php echo $name[0]; ?></a>
        </div>
      </div -->
    </div>
  </div>
</section>



<script>
  var doc = document;
  var toggleBtns = doc.querySelectorAll('.js-content-toggle');

  for(var i = 0; i < toggleBtns.length; i++) {
    toggleBtns[i].addEventListener('click', function () {
      doc.querySelector('.js-content-toggle__text[data-text="' + this.getAttribute('data-text') + '"]').classList.toggle('is-open');
      this.classList.toggle('is-toggled');
    });
  }
</script>

<?php get_footer(); ?>