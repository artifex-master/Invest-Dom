<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <section class="section-white">
    <div class="section-white__breadcrumb breadcrumb">
      <div class="container-lower">
        <ul class="breadcrumb__list">
          <li class="breadcrumb__item">О компании /</li>
          <li class="breadcrumb__item active">Карьера</li>
        </ul>
      </div>
    </div>
    <div class="section-white__vacancies vacancies">
      <div class="container-lower">
        <div class="vacancies__outer">
          <div class="vacancies__inner">
            <div class="vacancies__title">
              <p>Доступно <span class="golden">14</span> вакансий</p>
            </div>
            <div class="vacancies__main">
              <ul class="vacancies__vacancies-list">
                <?php
                $loop = CFS()->get('vacancy_item');
                foreach ($loop as $row) { ?>
                  <li class="vacancies-list__vacancy vacancy">
                    <div class="vacancy__inner">
                      <div class="vacancy__row">
                        <div class="vacancy__col">
                          <div class="vacancy__title">
                            <p>
                              <?= $row['vacancy_title'] ?>
                            </p>
                          </div>
                        </div>
                        <div class="vacancy__col">
                          <div class="vacancy__desc">
                            <p>
                              <?= $row['vacancy_desc'] ?>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="vacancy__row">
                        <div class="vacancy__btn-2 btn-2">
                          <p>Откликнуться</p>
                          <div class="btn-2__arrow-right arrow-right">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                <?php }
                ?>
                <div class="vacancy__inner">
                  <div class="vacancy__row">
                    <div class="vacancy__col">
                      <div class="vacancy__title">
                        <p>Старший менеджер по продуктам данных</p>
                      </div>
                    </div>
                    <div class="vacancy__col">
                      <div class="vacancy__desc">
                        <p>Мы ищем лидеров мнений, обладающих глубоким консалтингом и технологической хваткой, чтобы
                          решать самые сложные проблемы наших клиентов в области технологий, стратегии и трансформации,
                          начиная с управления данными и заканчивая...</p>
                      </div>
                    </div>
                  </div>
                  <div class="vacancy__row">
                    <div class="vacancy__btn-2 btn-2">
                      <p>Откликнуться</p>
                      <div class="btn-2__arrow-right arrow-right">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                      </div>
                    </div>
                  </div>
                </div>
                </li>
              </ul>
              <div class="vacancies__btn-wrapper">
                <div class="btn-2">
                  <p>Показать все</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-white__subscribe">
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