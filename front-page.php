<?php
get_header();

while (have_posts()) {
  the_post(); ?>

  <section class="section-white">
    <div class="section-white__who-we-are who-we-are">
      <div class="who-we-are__col">
        <div class="who-we-are__about-us-label about-us-label">
          О нас
        </div>
        <div class="who-we-are__who-we-are-label who-we-are-label">
          <?= CFS()->get('_title_companydesc'); ?>
        </div>
      </div>
      <div class="who-we-are__col">
        <p>
          <?= CFS()->get('_desc_companydesc'); ?>
        </p>
      </div>
    </div>
    <div class="section-white__features features">
      <div class="container-lower">
        <div class="features__col">
          <div class="features__about-us-label about-us-label">
            Почему мы?
          </div>
          <div class="features__who-we-are-label who-we-are-label">
            Преимущества работы с нами
          </div>
        </div>
        <div class="features__col">
          <?php
          $loop = CFS()->get('features_item');
          foreach ($loop as $row) { ?>
            <div class="features__drop-item drop-item">
              <div class="g-icon drop-item__g-icon">
                <img src="<?= $row['features_ico'] ?>" alt="./assets/images/icons/g-icon-1.svg" />
              </div>
              <div class="drop-item__col">
                <div class="title-h3 drop-item__title-h3">
                  <p>
                    <?= $row['features_title'] ?>
                  </p>
                </div>
                <div class="drop-item__desc">
                  <p>
                    <?= $row['features_desc'] ?>
                  </p>
                </div>
              </div>
              <div class="close-icon drop-item__close-icon">
                <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/icons/close-icon.svg'); ?>"
                  alt="./assets/images/icons/close-icon.svg" />
              </div>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section-blue">
    <div class="container-lower">
      <div class="section-blue__outer">
        <div class="section-blue__inner">
          <div class="offer section-blue__offer">
            <div class="offer__about-us-label about-us-label">
              <?= CFS()->get('more_with_astana_invest_subtitle'); ?>
            </div>
            <div class="offer__who-we-are-label who-we-are-label">
              <?= CFS()->get('more_with_astana_invest_label'); ?>
            </div>
            <div class="offer__grid-offer grid-offer">
              <?php
              $loop = CFS()->get('more_with_astana_invest_item');
              foreach ($loop as $row) { ?>
                <div class="grid-offer__card-offer card-offer">
                  <div class="card-offer__num">
                    <span>
                      <?= $row['more_with_astana_invest_num'] ?>
                    </span>
                  </div>
                  <div class="icon-type-two card-offer__icon-type-two">
                    <img src="<?= $row['more_with_astana_invest_ico'] ?>"
                      alt="<?= $row['more_with_astana_invest_ico'] ?>" />
                  </div>
                  <div class="card-offer__title">
                    <p>
                      <?= $row['more_with_astana_invest_item_title'] ?>
                    </p>
                  </div>
                  <div class="card-offer__desc">
                    <p>
                      <?= $row['more_with_astana_invest_desc'] ?>
                    </p>
                  </div>
                  <div class="arrow-wrapper card-offer__arrow-wrapper">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                  </div>
                </div>
              <?php }
              ?>
            </div>
          </div>
          <div class="section__blue__banner-first banner-first">
            <div class="banner-first__title">
              <p>Финансовый рынок. Процветание и успех.</p>
            </div>
            <div class="banner-first__subtitle">
              <p>Хотите получать качественные аналитические обзоры и самые актуальные новости финансового рынка?!
                Подпишитесь и Вам не придется долго ждать интересных новостей!</p>
            </div>
            <div class="banner-first__btn-2-wrapper btn-2">
              <div class="btn-2__label learn-more-label">
                Подробнее
              </div>
              <div class="btn-2__arrow-long arrow-long">
                <i class="fa-solid fa-arrow-right-long"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-white">
    <div class="news">
      <div class="container-lower">
        <div class="news__outer">
          <div class="news__inner">
            <div class="news__top">
              <div class="news__top-col">
                <div class="news__about-us-label about-us-label">
                  <?= CFS()->get('news_banner_subtitle'); ?>
                </div>
                <div class="news__who-we-are-label who-we-are-label">
                  <?= CFS()->get('news_banner_title'); ?>
                </div>
              </div>
            </div>
            <div class="news-grid-wrapper">
              <div class="news">
                <div class="news-grid-wrapper">
                  <ul class="news__grid-news grid-news">
                    <?php
                    $loop = CFS()->get('news_item');
                    foreach ($loop as $row) { ?>
                      <li class="grid-news__item">
                        <img class="news-img" width="100%" src="<?= $row['news_item_img'] ?>"
                          alt="./assets/images/gied-news-img-main.png">
                        <!-- <div class="grid-news__news-date news-date">
                                                            <p>20.02.2023</p>
                                                          </div>
                                                          <div class="grid-news__news-watcher news-watcher">
                                                            <div class="news-watcher__total-watches-num total-watches-num">
                                                              <span>43</span>
                                                            </div>
                                                            <div class="news-watcher__eye-icon eye-icon">
                                                              <img src="./assets/images/icons/eye-icon.svg" alt="./assets/images/icons/eye-icon.svg" />
                                                            </div>
                                                          </div> -->
                        <div class="grid-news__news-title news-title">
                          <p>
                            <?= $row['news_item_title'] ?>
                          </p>
                        </div>
                      </li>
                    <?php }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="analytics">
      <div class="container-lower">
        <div class="analytics__outer">
          <div class="analytics__inner">
            <div class="news__top">
              <div class="news__top-col">
                <div class="analytics__about-us-label about-us-label">
                  Что мы можем предложить?
                </div>
                <div class="analytics__who-we-are-label who-we-are-label">
                  Аналитика
                </div>
              </div>
              <div class="analytics__top-btn-3-wrapper">
                <div class="analytics__top-btn-3 btn-3">
                  <span>Читать все</span>
                  <div class="btn-3__arrow-long arrow-long">
                    <i class="fa-solid fa-arrow-right-long"></i>
                  </div>
                </div>
              </div>

            </div>
            <div class="news-feed">
              <div class="container-lower">
                <div class="news-feed__outer">
                  <div class="news-feed__inner">
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



          </div>
        </div>
      </div>
      <div class="analytics__subscribe subscribe">
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
    </div>
  </section>





<?php }
get_footer();
?>