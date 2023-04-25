<?php 
  get_header();

  while(have_posts()) {
    the_post(); ?>

<section class="section-white">
    <div class="section-white__who-we-are who-we-are">
      <div class="who-we-are__col">
        <div class="who-we-are__about-us-label about-us-label">
          О нас
        </div>
        <div class="who-we-are__who-we-are-label who-we-are-label">
        <?= CFS() -> get('_title_companydesc'); ?>
        </div>
      </div>
      <div class="who-we-are__col">
        <p><?= CFS() -> get('_desc_companydesc'); ?></p>
      </div>
    </div>
  </section>


  <?php }

?>