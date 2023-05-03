<?php
get_header();
while (have_posts()) {
  the_post(); ?>

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
    <div class="section-white__who-we-are">
      <div class="section-white__who-we-are who-we-are">
        <div class="who-we-are__col">
          <div class="who-we-are__about-us-label about-us-label">
            Наши услуги
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
          $loop = CFS()->get('brokerskoe_obsluzhivanie_features_item');
          foreach ($loop as $row) { ?>
            <div class="features__drop-item drop-item">
              <div class="g-icon drop-item__g-icon">
                <img src="<?= $row['brokerskoe_obsluzhivanie_features_ico'] ?>" alt="./assets/images/icons/g-icon-1.svg" />
              </div>
              <div class="drop-item__col">
                <div class="title-h3 drop-item__title-h3">
                  <p>
                    <?= $row['brokerskoe_obsluzhivanie_features_title'] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }
          ?>
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
  </section>
  <div class="section-blue">
    <div class="section-blue__grid-second grid-second-wrapper">
      <div class="grid-second__outer">
        <div class="container-lower">
          <div class="grid-second__inner">
            <div class="grid-second__about-us-label about-us-label">
              Преимущества
            </div>
            <div class="grid-second__who-we-are-label who-we-are-label">
              <?= CFS()->get('brokerskoe_obsluzhivanie_features_cards_title'); ?>
            </div>
          </div>
        </div>
        <div class="grid-second__container">
          <ul class="grid-second">
            <?php
            $loop = CFS()->get('brokerskoe_obsluzhivanie_features_cards_item');
            foreach ($loop as $row) { ?>
              <li class="grid-second__item">
                <div class="grid-second-item__inner">
                  <div class="grid-second-item__title">
                    <p>
                      <?= $row['brokerskoe_obsluzhivanie_features_cards_title'] ?>
                    </p>
                  </div>
                  <div class="grid-second-item__subtitle">
                    <p>
                      <?= $row['brokerskoe_obsluzhivanie_features_cards_desc'] ?>
                    </p>
                  </div>
                </div>
              </li>
            <?php }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="brokerskoe-obsluzhivanie__documents documents">
      <div class="container-lower">
        <div class="documents__outer">
          <div class="documents__inner">
            <div class="documents__title">
              <p>Документы</p>
            </div>
            <ul class="documents__documents-list documents-list">
              <?php
              $loop = CFS()->get('brokerskoe_obsluzhivanie_docs_item');
              foreach ($loop as $row) { ?>
                <li class="documents-list__documents-pdf-item document-pdf-item">
                  <figure class="documents-pdf-item__image">
                    <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                      alt="./assets/images/pdf.png" />
                  </figure>
                  <div class="documents-pdf-item__title">
                    <p>
                      <?= $row['brokerskoe_obsluzhivanie_docs_title'] ?>
                    </p>
                  </div>
                  <div class="btn-download-wrapper">
                    <div class="documents-pdf-item__btn btn-download">
                      <div class="documents-pdf-item__btn-inner">
                        <div class="documents-pdf-item__span-wrapper">
                          <span>Скачать</span>
                        </div>
                        <div class="documents-pdf-item__arrow-down-wrapper">
                          <img src="<?php echo get_theme_file_uri('/assets/images/icons/arrow-down.svg'); ?>"
                            alt="./assets/images/icons/arrow-down.svg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="documents-cat">
      <div class="documents-cat__tab-wrapper tab-wrapper">
        <div class="container-lower">
          <ul class="tab-wrapper__tabs">
            <li><a href="#fizlica" class="documents-cat__tab">Физлица</a></li>
            <li><a href="#urlica" class="documents-cat__tab">Юрлица</a></li>
          </ul>
          <div class="tab_content_wrapper">
            <section class="tab-content" id="newsfeed">
              <div class="documents-cat__outer">
                <div class="documents-cat__inner">
                  <div class="news-grid-wrapper">
                    <div class="news-feed">
                      <div class="container-lower">
                        <div class="news-feed__outer">
                          <div class="news-feed__inner">
                            <ul class="documents__documents-list documents-list">
                              <?php
                              $loop = CFS()->get('brokerskoe_obsluzhivanie_docs_fiz_item');
                              foreach ($loop as $row) { ?>
                                <li class="documents-list__documents-pdf-item document-pdf-item">
                                  <figure class="documents-pdf-item__image">
                                    <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                                      alt="./assets/images/pdf.png" />
                                  </figure>
                                  <div class="documents-pdf-item__title">
                                    <p>
                                      <?= $row['brokerskoe_obsluzhivanie_docs_fiz_title'] ?>
                                    </p>
                                  </div>
                                  <div class="btn-download-wrapper">
                                    <div class="documents-pdf-item__btn btn-download">
                                      <div class="documents-pdf-item__btn-inner">
                                        <div class="documents-pdf-item__span-wrapper">
                                          <span>Скачать</span>
                                        </div>
                                        <div class="documents-pdf-item__arrow-down-wrapper">
                                          <img
                                            src="<?php echo get_theme_file_uri('/assets/images/icons/arrow-down.svg'); ?>"
                                            alt="./assets/images/icons/arrow-down.svg" />
                                        </div>
                                      </div>
                                    </div>
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
            </section>
            <section class="tab-content" id="notify">
              <div class="news__outer">
                <div class="news__inner">
                  <ul class="documents__documents-list documents-list">
                    <?php
                    $loop = CFS()->get('brokerskoe_obsluzhivanie_docs_ur_item');
                    foreach ($loop as $row) { ?>
                      <li class="documents-list__documents-pdf-item document-pdf-item">
                        <figure class="documents-pdf-item__image">
                          <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                            alt="./assets/images/pdf.png" />
                        </figure>
                        <div class="documents-pdf-item__title">
                          <p>
                            <?= $row['brokerskoe_obsluzhivanie_docs_ur_title'] ?>
                          </p>
                        </div>
                        <div class="btn-download-wrapper">
                          <div class="documents-pdf-item__btn btn-download">
                            <div class="documents-pdf-item__btn-inner">
                              <div class="documents-pdf-item__span-wrapper">
                                <span>Скачать</span>
                              </div>
                              <div class="documents-pdf-item__arrow-down-wrapper">
                                <img src="<?php echo get_theme_file_uri('/assets/images/icons/arrow-down.svg'); ?>"
                                  alt="./assets/images/icons/arrow-down.svg" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    <?php }
                    ?>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="section-white">
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

  </div>



  </div>


  </div>




<?php }
get_footer();
?>