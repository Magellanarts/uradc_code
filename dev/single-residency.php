<?php
get_header(); ?>
<section class="c-hero c-hero--orange"  style="background-image: url(i/hero.jpeg);">
  <div class="l-content-container">
    <div class="c-hero__offset-content">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>
<section class="u-bg--gray--light" >
  <div class="l-content-container">
    <div class="l-program-content">
      <div class="l-program-content__secondary">
        <div class="l-pull-up-content l-pull-up-content--aside">
          <div class="c-program-details">
            <div class="c-program-details__gallery">
              <img src="i/hero.jpeg">
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
                <h5>Included in program fee</h5>
                <?php the_field('included_in_fee'); ?>

                <h5>Not included in program fee</h5>
                <?php the_field('not_included_in_fee'); ?>
                <h5>Check-in</h5>
                <?php the_field('check_in'); ?>

                <h5>Check-out</h5>
                <?php the_field('check_out'); ?>
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

          <div class="c-author-card c-author-card--large u-hide-below-med u-hide-below-med--grid">
            <div class="c-author-card__image" style="background-image: url(i/bio.jpg);"></div>
            <div class="c-author-card__content">
              <p><strong>“Urban Residency Art
                & Design Collective”</strong>
              Interdisciplinary SA Professor/Artist:<br>
                Mariella Poli</p>

              <a href="#">More about Mariella</a>
            </div>
          </div>

          <div class="c-image-gallery js-image-gallery">
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
            <a href="i/bio.jpg">
              <img src="i/bio.jpg">
            </a>
          </div>
        </div>
      </div>

      <div class="l-program-content__main u-body-copy js-content-toggle__text" data-text="description">
        <?php the_field('description_content'); ?>
      </div>

      <div class="c-content-toggle-btn c-content-toggle-btn--top-border js-content-toggle" data-text="description">
        <span class="is-closed ">OPEN PROGRAM Description&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-down"></i></span>
        <span class="is-open">Close PROGRAM Description&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-up"></i></span>
      </div>

      <div class="c-author-card c-author-card--small u-hide@med">
        <div class="c-author-card__image" style="background-image: url(i/bio.jpg);"></div>
        <div class="c-author-card__content">
          <p><strong>“Urban Residency Art
            & Design Collective”</strong>
            Interdisciplinary SA Professor/Artist:<br>
            Mariella Poli</p>

          <a href="#">More about Mariella</a>
        </div>
      </div>
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