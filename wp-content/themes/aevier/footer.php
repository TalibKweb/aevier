<!-- Footer-Section -->
<section class="footer-section text-white">

  <div class="container text-center">
    <a href="<?php echo site_url() ?>"><img src="<?php echo get_field('footer_logo', 'option')['url'] ?>" alt="AEVIER" class="img-fluid footerLogo"></a>

    <div class="disclaimerContent">

      <?php
      if (have_rows('footer_pointers', 'option')):
        while (have_rows('footer_pointers', 'option')): the_row();
      ?>
          <p><strong><?php echo get_sub_field('pointer_title') ?></strong> <?php echo get_sub_field('pointer_desc') ?></p>
        <?php
        endwhile;
      else:
        ?>

        <h5>No Pointers Found!</h5>
      <?php
      endif;
      ?>

      <hr>
    </div>



    <div class="row justify-content-center align-items-center pt-2">
      <div class="col-md-4 footer-block px-4 mailBox text-center">
        <p><a href="mailto:info@aevier.com">info@aevier.com</a></p>
      </div>

      <div class="col-md-4 footer-block px-4">
        <p>&copy; <script>
            document.write(new Date().getFullYear())
          </script> Aevier. All Rights Reserved.</p>
      </div>

      <div class="col-md-4 footer-block px-4 iconBox">
        <div class="d-inline-flex justify-content-center align-items-center footer-icons">


          <?php
          if (have_rows('socials', 'option')):
            while (have_rows('socials', 'option')): the_row();
          ?>
              <a href="<?php echo get_sub_field('social_url') ?>" target="_blank"><img src="<?php echo get_sub_field('social_icon')['url'] ?>"></a>
            <?php
            endwhile;
          else:
            ?>

            <p>No Pointers Found!</p>
          <?php
          endif;
          ?>

        </div>
      </div>

    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-qENqe8c6GmAsAq3bOvGr+DN8RekVh0p+EHeS16U14Mxjqg7Y+JQtrV5Xz6k2z6rI"
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // const thumbSwiper = new Swiper('.thumb-swiper', {
  //     spaceBetween: 10,
  //     slidesPerView: 6,
  //     freeMode: true,
  //     watchSlidesProgress: true,
  // });

  // const mainSwiper = new Swiper('.main-swiper', {
  //     spaceBetween: 10,
  //     navigation: {
  //         nextEl: '.swiper-button-next',
  //         prevEl: '.swiper-button-prev',
  //     },
  //     thumbs: {
  //         swiper: thumbSwiper,
  //     },
  // });
</script>

</body>

</html>