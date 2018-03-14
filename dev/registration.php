<?php include('header.php'); ?>
<section class="c-hero c-hero--gray" style="background-image: url(i/hero.jpeg);">

</section>
<section class="u-bg--gray--light">
  <div class="l-content-container l-pull-up-content-container">
    <div class="l-pull-up-content">
      <div class="l-main-content u-body-copy u-lrg-font-size">
        <div class="c-tag">Program Registration</div>

        <h2>Type of Place: Taking Inspiration from Milan’s Neighborhoods</h2>

        <div class="l-registration-container">
          <div class="l-registration-container__intro u-std-font-size">
            <p>Participants who wish to enroll in this Residency should submit a completed Questionnaire and a Website or digital portfolio to <a href="mailto:meta.newhouse@montana.edu">meta.newhouse@montana.edu</a>.</p>

              <p>Participant placement interviews (via skype or phone) will be individually arranged after the questionnaire and portfolio are submitted and reviewed.</p>

              <p>Participants will be notified of their acceptance shortly after the placement interviews.</p>
          </div>

          <div class="l-registration-container__form">
            <form class="c-form js-registration-form">
              <div class="c-form__field">
                <label class="c-form__label" for="name">Name</label>
                <input type="text" class="c-form__input" id="name" name="name">
              </div>

              <div class="c-form__field">
                <label class="c-form__label" for="home-address">Home address</label>
                <input type="text" class="c-form__input" id="home-address" name="Home Address">
              </div>

              <div class="c-form__field">
                <label class="c-form__label" for="e-mail">E-mail</label>
                <input type="email" class="c-form__input" id="e-mail" name="E-mail">
              </div>

              <div class="c-form__field">
                <label class="c-form__label" for="specialization">
                  As a Designer/Artist, what is your specialization?
                  <span class="c-form__label__note">(Graphic Design, Photography, Multi-disciplinary, etc)</span>
                </label>
                <textarea class="c-form__input c-form__input--textarea" id="specialization" name="Specialization"></textarea>
              </div>

              <div class="c-form__field">
                <label class="c-form__label" for="expectations">What are your expectations for the Residency program?</label>
                <textarea class="c-form__input c-form__input--textarea" id="expectations" name="Expectations"></textarea>
              </div>

              <button type="submit" class="c-btn c-btn--gray">Submit Registration</button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php include('footer.php'); ?>