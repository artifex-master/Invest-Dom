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
    <div class="section-white__who-we-are who-we-are">
      <div class="who-we-are__col">
        <div class="who-we-are__about-us-label about-us-label">
          <?= CFS()->get('banner_subtitle_filial'); ?>
        </div>
        <div class="who-we-are__who-we-are-label who-we-are-label">
          <?= CFS()->get('banner_title_filial'); ?>
        </div>
        <div class="who-we-are__mfc-info mfca-info">
          <p>
            <?= CFS()->get('banner_desc_filial'); ?>
          </p>
        </div>
      </div>
      <div class="who-we-are__col">
        <div class="who-we-are__persona-card persona-card">
          <div class="persona-card__inner">
            <figure class="persona-card__persona-photo persona-photo">
              <img width="100%" height="100%" src="<?= CFS()->get('ceo_filial_img'); ?>"
                alt="./assets/images/governing-1.png" />
            </figure>
            <div class="persona-card__col">
              <div class="persona-card__fullname">
                <p>
                  <?= CFS()->get('ceo_filial_fullname'); ?>
                </p>
              </div>
              <div class="persona-card__status">
                <p>
                  <?= CFS()->get('ceo_filial_title'); ?>
                </p>
              </div>
              <div class="persona-card__row">
                <div class="persona-card__label">
                  <span>E-mail</span>
                </div>
                <div class="persona-card__info">
                  <p>
                    <?= CFS()->get('ceo_filial_email'); ?>
                  </p>
                </div>
              </div>
              <div class="persona-card__row">
                <div class="persona-card__label">
                  <span>Тел:</span>
                </div>
                <div class="persona-card__info persona-card__tel">
                  <p>
                    <?= CFS()->get('ceo_filial_tel'); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-blue">
    <div class="section-blue__documents documents">
      <div class="container-lower">
        <div class="documents__outer">
          <div class="documents__inner">
            <div class="documents__title">
              <p>Регистрационные документы филиала</p>
            </div>
            <ul class="documents__documents-list documents-list">
              <?php
              $loop = CFS()->get('filial_doc_item');
              foreach ($loop as $row) { ?>
                <li class="documents-list__documents-pdf-item document-pdf-item">
                  <figure class="documents-pdf-item__image">
                    <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                      alt="./assets/images/pdf.png" />
                  </figure>
                  <div class="documents-pdf-item__title">
                    <p>
                      <?= $row['filial_doc_title'] ?>
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



              <!-- <li class="documents-list__documents-pdf-item document-pdf-item">
                <figure class="documents-pdf-item__image">
                  <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                    alt="./assets/images/pdf.png" />
                </figure>
                <div class="documents-pdf-item__title">
                  <p>Свидетельство о регистрации</p>
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
              <li class="documents-list__documents-pdf-item document-pdf-item">
                <figure class="documents-pdf-item__image">
                  <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                    alt="./assets/images/pdf.png" />
                </figure>
                <div class="documents-pdf-item__title">
                  <p>Документ PDF</p>
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
              <li class="documents-list__documents-pdf-item document-pdf-item">
                <figure class="documents-pdf-item__image">
                  <img class="pdf-ico" src="<?php echo get_theme_file_uri('/assets/images/pdf.png'); ?>"
                    alt="./assets/images/pdf.png" />
                </figure>
                <div class="documents-pdf-item__title">
                  <p>Документ PDF</p>
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
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-white">
    <div class="subscribe">
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