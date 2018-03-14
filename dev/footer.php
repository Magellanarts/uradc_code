<footer class="c-site-footer">
  <div class="c-site-footer__content">
    <div class="c-site-footer__text u-std-font-size u-text--white">
      <?php the_field('footer_description', 'option'); ?>
    </div>

    <div class="c-social-links">
      <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="c-social-link"><img src="<?php echo get_template_directory_uri(); ?>/i/twitter-icon.svg"  width="40"></a>
      <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="c-social-link"><img src="<?php echo get_template_directory_uri(); ?>/i/facebook-icon.svg"  width="40"></a>
    </div>

    <div class="c-copyright">
      <?php the_field('copyright', 'option'); ?>
    </div>
  </div>

  <div class="c-site-footer__logo">
    <img src="<?php the_field('logo', 'option'); ?>">
  </div>
</footer>

</div> <!-- close l-site-wrapper -->

<?php wp_footer(); ?>
<script src="js/lib/lightgallery.js"></script>
</body>
</html>