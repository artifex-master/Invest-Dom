<?php 
  get_header();
  while(have_posts()) {
    the_post(); ?>

    <section class="section-white">
      <div class="section-white__breadcrumb breadcrumb">
        <div class="container-lower">
          <ul class="breadcrumb__list">
            <?php
              $theParent = wp_get_post_parent_id(get_the_ID());
              if($theParent) { ?>
                <li class="breadcrumb__item"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a> /</li>
                <li class="breadcrumb__item active"><a href=""><?php the_title(); ?></a></li>
            <?php  }
            ?>
          </ul>
        </div>
      </div>
      <div class="section-white__who-we-are who-we-are">
        <div class="who-we-are__col">
          <div class="who-we-are__about-us-label about-us-label">О Нас</div>
          <div class="who-we-are__who-we-are-label who-we-are-label">
            Кто мы?
          </div>
        </div>
        <div class="who-we-are__col">
          <p>
            Инвестиционный Дом «Астана Инвест» обладает рядом преимуществ и
            уникальных отличий на рынке брокерских услуг Казахстана, которые
            основаны на построенной инфраструктуре взаимодействия с крупнейшими
            мировыми компаниями и отработаны многолетней успешной историей
            управления крупным объемом активов. Воспользовавшись нашими
            преимуществами Вы получите лучшее:
          </p>
        </div>
      </div>
      <div class="section-white__brief brief">
        <div class="container-lower">
          <div class="brief__outer">
            <div class="brief__inner">
              <div class="brief__row brief-row">
                <div class="brief__item brief-item">
                  <div class="brief-item__num">
                    <span>01</span>
                  </div>
                  <div class="brief-item__years">
                    <span>1998-2013</span>
                  </div>
                  <div class="brief-item__info">
                    <p>
                      деятельность в качестве накопительного пенсионного фонда,
                      АО «НПФ «Астана.
                    </p>
                  </div>
                </div>
                <div class="brief__item brief-item">
                  <div class="brief-item__num">
                    <span>02</span>
                  </div>
                  <div class="brief-item__years">
                    <span>2011</span>
                  </div>
                  <div class="brief-item__info">
                    <p>
                      Компания принята в члены АО «Казахстанская фондовая биржа»
                      (KASE) по категории «член фондового рынка».
                    </p>
                  </div>
                </div>
                <div class="brief__item brief-item">
                  <div class="brief-item__num">
                    <span>03</span>
                  </div>
                  <div class="brief-item__years">
                    <span>2014</span>
                  </div>
                  <div class="brief-item__info">
                    <p>
                      переименование в АО «Инвестиционный Дом «Астана-Инвест»
                    </p>
                  </div>
                </div>
              </div>
              <div class="brief__row brief-row">
                <div class="brief__item brief-item">
                  <div class="brief-item__num">
                    <span>04</span>
                  </div>
                  <div class="brief-item__years">
                    <span>2021</span>
                  </div>
                  <div class="brief-item__info">
                    <p>
                      Компания зарегистрировала Филиал на территории
                      Международного Финансового Центра Астаны (МФЦА) в форме
                      авторизированной компании c признанием действующих на
                      фондовом рынке лицензий
                    </p>
                  </div>
                </div>
                <div class="brief__item brief-item">
                  <div class="brief-item__num">
                    <span>05</span>
                  </div>
                  <div class="brief-item__years">
                    <span>2022</span>
                  </div>
                  <div class="brief-item__info">
                    <p>
                      получен статус торгового члена фондовой биржи МФЦА (AIX)
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
      <div class="container-lower">
        <div class="section-blue__outer">
          <div class="section-blue__inner">
            <div class="section-blue__philosophy philosophy">
              <div class="offer__about-us-label about-us-label">
                Наша философия
              </div>
              <div class="philosophy__who-we-are-label who-we-are-label">
                Основные принципы работы компании
              </div>
              <div class="philosophy__grid-philosophy grid-philosophy">
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>01</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Качество и доверие</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-1.svg'); ?>"
                        alt="./assets/images/philosophy-card-1.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>02</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Честность и открытость</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-2.svg'); ?>"
                        alt="./assets/images/philosophy-card-2.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>03</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Результативность</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-3.svg'); ?>"
                        alt="./assets/images/philosophy-card-3.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>04</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Клиентоориенти-рованность</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-4.svg'); ?>"
                        alt="./assets/images/philosophy-card-4.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>05</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Гибкость и лояльность</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-1.svg'); ?>"
                        alt="./assets/images/philosophy-card-1.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>06</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Долгосрочность сотрудничества</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-2.svg'); ?>"
                        alt="./assets/images/philosophy-card-2.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>07</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Активность</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-3.svg'); ?>"
                        alt="./assets/images/philosophy-card-3.svg"
                      />
                    </div>
                  </div>
                </div>
                <div class="grid-philosophy__item philosophy-card">
                  <div class="philosophy-card__inner">
                    <div class="philosophy-card__num">
                      <span>08</span>
                    </div>
                    <div class="philosophy-card__title">
                      <span>Соблюдение законодательства</span>
                    </div>
                    <div class="philosophy-card__icon">
                      <img
                        src="<?php echo get_theme_file_uri('/assets/images/philosophy-card-4.svg'); ?>"
                        alt="./assets/images/philosophy-card-4.svg"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="section-white">
      <div class="section-white__benefits benefits">
        <div class="container-lower">
          <div class="benefits__outer">
            <div class="benefits__inner">
              <div class="benefits__row">
                <div class="benefits__col">
                  <div class="benefits__about-us-label about-us-label">
                    Что мы можем предложить?
                  </div>
                  <div class="benefits__who-we-are-label who-we-are-label">
                    Наши преимущества
                  </div>
                  <div class="benefits__subtitle">
                    <p>
                      Компания появилась на финансовом рынке Казахстана в качестве
                      накопительного пенсионного фонда в 1998 году,
                    </p>
                  </div>
                </div>
                <div class="benefits__col">
                  <div class="benefits__card-benefit card-benefit">
                    <div class="card-benefit__inner">
                      <div class="card-benefit__num">
                        <span>01</span>
                      </div>
                      <div class="card-benefit__title">
                        <p>Опыт работы</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="benefits__row">
                <div class="benefits__card-benefit card-benefit">
                  <div class="card-benefit__inner">
                    <div class="card-benefit__num">
                      <span>02</span>
                    </div>
                    <div class="card-benefit__title">
                      <p>Торговая платформа</p>
                    </div>
                  </div>
                </div>

                <div class="benefits__card-benefit card-benefit">
                  <div class="card-benefit__inner">
                    <div class="card-benefit__num">
                      <span>03</span>
                    </div>
                    <div class="card-benefit__title">
                      <p>Профессионализм</p>
                    </div>
                  </div>
                </div>

                <div class="benefits__card-benefit card-benefit">
                  <div class="card-benefit__inner">
                    <div class="card-benefit__num">
                      <span>04</span>
                    </div>
                    <div class="card-benefit__title">
                      <p>Мобильность и эффективность</p>
                    </div>
                  </div>
                </div>

                <div class="benefits__card-benefit card-benefit">
                  <div class="card-benefit__inner">
                    <div class="card-benefit__num">
                      <span>05</span>
                    </div>
                    <div class="card-benefit__title">
                      <p>Готовность к новым проектам</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-white__mfca mfca">
        <div class="container-lower">
          <div class="mfca__outer">
            <div class="mfca__inner">
              <div class="mfca__about-us-label about-us-label">
                О филиале МФЦА
              </div>
              <div class="mfca__who-we-are-label who-we-are-label">
                Услуги МФЦА
              </div>
              <div class="mfca__subtitle">
                <p>Филиал в МФЦА, согласно признанным лицензиям Компании, качественно оказывает своим клиентам следующий перечень услуг:</p>
              </div>
              <div class="mfca__mfca-card-grid mfca-card-grid">
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Dealing in Investments as Principal;</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>01</span>
                  </div>
                </div>
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Dealing in Investments as Agent;</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>02</span>
                  </div>
                </div>
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Managing Investments;</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>03</span>
                  </div>
                </div>
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Managing Collective Investment Scheme;</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>04</span>
                  </div>
                </div>
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Advising on Investments;</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>05</span>
                  </div>
                </div>
                <div class="mfca-card-grid__item mfca-card">
                  <div class="mfca-card__title">
                    <p>Arranging Deals in Investments.</p>
                  </div>
                  <div class="mfca-card__num">
                    <span>06</span>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div>
      <div class="news">
        <div class="container-lower">
          <div class="news__outer">
            <div class="news__inner">
              <div class="news__top">
                <div class="news__top-col">
                  <div class="news__about-us-label about-us-label">
                    Что мы можем предложить?
                  </div>
                  <div class="news__who-we-are-label who-we-are-label">
                    Последние новости
                  </div>
                </div>
                <div class="news__top-btn-3 btn-3">
                  <span>Читать все</span>
                  <div class="btn-3__arrow-long arrow-long">
                    <i class="fa-solid fa-arrow-right-long"></i>
                  </div>
                </div>
              </div>
              <div class="news-grid-wrapper">
                <div class="news__grid-news grid-news">
                  <div class="grid-news__main">
                    <img class="news-main-img" width="100%" src="<?php echo get_theme_file_uri('/assets/images/gied-news-img-main.png'); ?>" alt="./assets/images/gied-news-img-main.png">
                    <div class="grid-news__news-date news-date">
                      <p>20.02.2023</p>
                    </div>
                    <div class="grid-news__news-watcher news-watcher">
                      <div class="news-watcher__total-watches-num total-watches-num">
                        <span>43</span>
                      </div>
                      <div class="news-watcher__eye-icon eye-icon">
                        <img src="<?php echo get_theme_file_uri('/assets/images/icons/eye-icon.svg'); ?>" alt="./assets/images/icons/eye-icon.svg" />
                      </div>
                    </div>
                    <div class="grid-news__news-title news-title">
                      <p>В рамках реализации мероприятия концепции повышения финансовой грамотности на 2020-2024 годы</p>
                    </div>
                  </div>
                  <div class="grid-news__col">
                    <div class="grid-news__col-row">
                      <div class="grid-news__item">
                        <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/news-grid__item-img-1.png'); ?>" alt="./assets/images/news-grid__item-img-1.png" />
                        <div class="news-grid-item__news-title news-title">
                          <p>Уведомление об утверждении новой редакции типовой формы договора для физических лиц</p>
                        </div>
                        <div class="grid-news-item__news-watcher news-watcher">
                          <div class="news-watcher__total-watches-num total-watches-num">
                            <span>43</span>
                          </div>
                          <div class="news-watcher__eye-icon eye-icon">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/eye-icon.svg'); ?>" alt="./assets/images/icons/eye-icon.svg" />
                          </div>
                        </div>
                        <div class="grid-news-item__news-date news-date">
                          <p>20.02.2023</p>
                        </div>
                      </div>
                      <div class="grid-news__item">
                        <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/news-grid__item-img-2.png'); ?>" alt="./assets/images/news-grid__item-img-2.png" />
                        <div class="news-grid-item__news-title news-title">
                          <p>Уведомление об утверждении новой редакции типовой формы договора для физических лиц</p>
                        </div>
                        <div class="grid-news-item__news-watcher news-watcher">
                          <div class="news-watcher__total-watches-num total-watches-num">
                            <span>45</span>
                          </div>
                          <div class="news-watcher__eye-icon eye-icon">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/eye-icon.svg'); ?>" alt="./assets/images/icons/eye-icon.svg" />
                          </div>
                        </div>
                        <div class="grid-news-item__news-date news-date">
                          <p>15.12.2022</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid-news__col-row">
                      <div class="grid-news__item">
                        <img width="100%" height="100%" src="<?php echo get_theme_file_uri('/assets/images/news-grid__item-img-3.png'); ?>" alt="./assets/images/news-grid__item-img-3.png" />
                        <div class="news-grid-item__news-title news-title">
                          <p>Уведомление об утверждении новой редакции типовой формы договора для физических лиц</p>
                        </div>
                        <div class="grid-news-item__news-watcher news-watcher">
                          <div class="news-watcher__total-watches-num total-watches-num">
                            <span>45</span>
                          </div>
                          <div class="news-watcher__eye-icon eye-icon">
                            <img src="<?php echo get_theme_file_uri('/assets/images/icons/eye-icon.svg'); ?>" alt="./assets/images/icons/eye-icon.svg" />
                          </div>
                        </div>
                        <div class="grid-news-item__news-date news-date">
                          <p>15.12.2022</p>
                        </div>
                      </div>
                    </div>
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
              <div class="news__slider slider">
                <ul class="slider__slider-list slider-list">
                  <li class="slider-list__item">
                    <figure class="slider-item__img">
                      <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/main-slider-img-1.png'); ?>" alt="./assets/images/main-slider-img-1.png" />
                    </figure>
                    <div class="slider-item__inner">
                      <div class="slider-item__date">
                        <span>07.17.2022</span>
                      </div>
                      <div class="slider-item__title">
                        <p>Макроэкономический обзор за ноябрь</p>
                      </div>
                      <div class="slider-item__desc">
                        <p>Фондовые индексы показали хороший рост в ноябре, при этом акции развивающихся...</p>
                      </div>
                      <div class="slider-item__btn-4 btn-4">
                        <span>Читать далее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
  
                  </li>
                  <li class="slider-list__item">
                    <figure class="slider-item__img">
                      <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/main-slider-img-3.png'); ?>" alt="./assets/images/main-slider-img-3.png" />
                    </figure>
                    <div class="slider-item__inner">
                      <div class="slider-item__date">
                        <span>10.12.2021</span>
                      </div>
                      <div class="slider-item__title">
                        <p>Осторожно, мошенники!</p>
                      </div>
                      <div class="slider-item__desc">
                        <p>АО «Инвестиционный Дом «Астана-Инвест» (далее – Компания) сообщает, что в последнее время...</p>
                      </div>
                      <div class="slider-item__btn-4 btn-4">
                        <span>Читать далее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
  
                  </li>
                  <li class="slider-list__item">
                    <figure class="slider-item__img">
                      <img width="100%" src="<?php echo get_theme_file_uri('/assets/images/main-slider-img-1.png'); ?>" alt="./assets/images/main-slider-img-1.png" />
                    </figure>
                    <div class="slider-item__inner">
                      <div class="slider-item__date">
                        <span>07.17.2022</span>
                      </div>
                      <div class="slider-item__title">
                        <p>Макроэкономический обзор за октябрь</p>
                      </div>
                      <div class="slider-item__desc">
                        <p>В октябре объемы инвестиций развитых стран значительно выросли, объемы...</p>
                      </div>
                      <div class="slider-item__btn-4 btn-4">
                        <span>Читать далее</span>
                        <div class="btn-3__arrow-long arrow-long">
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                      </div>
                    </div>
  
                  </li>
                </ul>
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
                <p>Хотите получать качественные аналитические обзоры и самые актуальные новости финансового рынка?! Подпишитесь и Вам не придется долго ждать интересных новостей!</p>
              </div>
              <form action="" class="subscribe__form subscribe-form">
                <div class="subscribe-form__col">
                  <div class="subscribe-form__label">
                    <span>Ваше имя</span>
                  </div>
                  <div class="subscribe-form__input-wrapper">
                    <input class="subscribe-form__input" type="text" name="subscribe-name" id="subscribe-name" placeholder="Ваше имя" />
                  </div>
                </div>
                <div class="subscribe-form__col">
                  <div class="subscribe-form__label">
                    <span>Ваше email</span>
                  </div>
                  <div class="subscribe-form__input-wrapper">
                    <input class="subscribe-form__input" type="email" name="subscribe-email" id="subscribe-email" placeholder="Ваш email" />
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
              <img class="subscribe-img" src="<?php echo get_theme_file_uri('/assets/images/subscribe-woman.svg'); ?>" alt="./assets/images/subscribe-woman.svg" />
            </figure>
          </div> 
     
  
        </div>
      </div>
    </div>




  <?php }
  get_footer();
?>
