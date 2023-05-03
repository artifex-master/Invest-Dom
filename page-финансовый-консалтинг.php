<?php
while (have_posts()) {
  the_post(); ?>
  <!DOCTYPE html>
  <html lang="ru">

  <head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header class="header _light">
      <div class="header__logo logo">
        <a href="#"><img src="<?php echo get_theme_file_uri('/assets/images/logo_dark.svg'); ?>"
            alt="./assets/images/logo.svg" /></a>
      </div>
      <nav class="hero__navbar navbar">
        <ul class="navbar__list">
          <a href="">
            <li class="navbar__item _dark">Главная</li>
          </a>
          <a href="">
            <li class="navbar__item _dark">О нас<div class="chevron-icon header__chevron-icon"><ion-icon
                  name="chevron-down-outline"></ion-icon></div>
            </li>
          </a>
          <a href="">
            <li class="navbar__item _dark">Услуги ценных бумаг<div class="chevron-icon header__chevron-icon"><ion-icon
                  name="chevron-down-outline"></ion-icon></div>
            </li>
          </a>
          <a href="">
            <li class="navbar__item _dark">Аналитика</li>
          </a>
          <a href="">
            <li class="navbar__item _dark">Обучение</li>
          </a>
          <a href="">
            <li class="navbar__item _dark">Как открыть счет?</li>
          </a>
          <a href="">
            <li class="navbar__item _dark">Контакты</li>
          </a>
        </ul>
      </nav>
      <div class="header__btn-1">
        <button class="btn-1 _dark_outline">Личный кабинет</button>
      </div>
      <div class="header__mobile-menu mobile-menu">
        <span class="mobile-menu__item _dark_bg"></span>
        <span class="mobile-menu__item _dark_bg"></span>
        <span class="mobile-menu__item _dark_bg"></span>
      </div>
    </header>
    <section class="hero _finansovy_consulting">
    </section>
    <section class="section-white">
      <div class="section-white__breadcrumb breadcrumb">
        <div class="container-lower">
          <ul class="breadcrumb__list">
            <?php
            $theParent = wp_get_post_parent_id(get_the_ID());
            if ($theParent) { ?>
              <li class="breadcrumb__item"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a> /</li>
              <li class="breadcrumb__item active"><a href="">
                  <?php the_title(); ?>
                </a></li>
            <?php }
            ?>
          </ul>
        </div>
      </div>
      <div class="section-white__who-we-are banner1">
        <div class="who-we-are__col">
          <div class="who-we-are__about-us-label about-us-label">
            Наши услуги
          </div>
          <div class="who-we-are__who-we-are-label who-we-are-label banner1-our-services-label">
            <?= CFS()->get('finansovy_consulting_title'); ?>
          </div>
        </div>
        <div class="banner1-our-services__row">
          <p>
            <?= CFS()->get('finansovy_consulting_desc'); ?>
          </p>
        </div>
      </div>
      <div class="section-white__mfca mfca">
        <div class="container-lower">
          <div class="mfca__outer">
            <div class="mfca__inner">
              <div class="mfca__about-us-label about-us-label">
                Наше предложение
              </div>
              <div class="mfca__who-we-are-label who-we-are-label">
                <?= CFS()->get('finansovy_consulting_nashe_predlozhenie_label'); ?>
              </div>
              <div class="mfca__mfca-card-grid mfca-card-grid">
                <?php
                $loop = CFS()->get('finansovy_consulting_nashe_predlozhenie_loop');
                foreach ($loop as $row) { ?>
                  <div class="mfca-card-grid__item mfca-card">
                    <div class="mfca-card__title">
                      <p><?= $row['finansovy_consulting_nashe_predlozhenie_title'] ?></p>
                    </div>
                  </div>
                <?php }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-white__subscribe subscribe">
        <div class="subscribe__inner">
          <div class="subscribe__inner-wrapper">
            <div class="subscribe__title">
              <p>Подпишитесь на рассылку</p>
            </div>
            <div class="subscribe__subtitle">
              <p>Хотите получать качественные аналитические обзоры и самые актуальные новости финансового рынка?!
                Подпишитесь и Вам не придется долго ждать интересных новостей!</p>
            </div>
            <form action="" class="subscribe__form subscribe-form">
              <div class="subscribe-form__col">
                <div class="subscribe-form__label">
                  <span>Ваше имя</span>
                </div>
                <div class="subscribe-form__input-wrapper">
                  <input class="subscribe-form__input" type="text" name="subscribe-name" id="subscribe-name"
                    placeholder="Ваше имя" />
                </div>
              </div>
              <div class="subscribe-form__col">
                <div class="subscribe-form__label">
                  <span>Ваше email</span>
                </div>
                <div class="subscribe-form__input-wrapper">
                  <input class="subscribe-form__input" type="email" name="subscribe-email" id="subscribe-email"
                    placeholder="Ваш email" />
                </div>
              </div>
              <div class="subscribe-form__col">
                <div class="subscribe-form__label">
                  <span> </span>
                </div>
                <div class="subscribe-form__input-wrapper">
                  <button class="btn-5">Отправить</button>
                </div>
              </div>
            </form>
          </div>
          <figure class="subscribe__woman">
            <img class="subscribe-img" src="<?php echo get_theme_file_uri('/assets/images/subscribe-woman.svg'); ?>"
              alt="./assets/images/subscribe-woman.svg" />
          </figure>
        </div>
      </div>
      <div class="news-feed">
      <div class="container-lower">
        <div class="news-feed__outer">
          <div class="news-feed__inner">
            <div class="news-feed__about-us-label about-us-label">
              <?= CFS()->get('news-feed_subtitle'); ?>
            </div>
            <div class="news-feed__who-we-are-label who-we-are-label">
              <?= CFS()->get('news-feed_title'); ?>
            </div>
            <div class="news-feed__grid-news-feed grid-news-feed">
              <?php
              $loop = CFS()->get('news_card');
              foreach ($loop as $row) { ?>
                <div class="ceo-slider__card-white card-white">
                  <figure class="card-white__photo">
                    <img width="100%" src="<?= $row['news_card_img'] ?>" alt="./assets/images/news-feed-1.png" />
                  </figure>
                  <div class="card-white__inner">
                    <div class="card-white__title">
                      <p>
                        <?= $row['news_card_title'] ?>
                      </p>
                    </div>
                    <div class="card-white__subtitle">
                      <p>
                        <?= $row['news_card_desc'] ?>
                      </p>
                    </div>
                    <div class="card-white__btn-wrapper">
                      <div class="card-white__btn-4 btn-4">
                        <span>Подробнее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php }
get_footer();
?>