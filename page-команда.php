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
    <div class="section-white__who-we-are sovet-direktorov">
      <div class="who-we-are__col">
        <div class="who-we-are__about-us-label about-us-label">
          Команда
        </div>
        <div class="who-we-are__who-we-are-label who-we-are-label sovet-direktorov-label">
          Совет директоров
        </div>
        <div class="sovet-direktorov__direktor-wrapper">
          <?php
          $loop = CFS()->get('ceo_card');
          foreach ($loop as $row) { ?>
            <div class="sovet-direktorov__item">
              <div class="sovet-direktorov-item__inner">
                <div class="sovet-direktorov-item__name">
                  <p>
                    <?= $row['ceo_fullname'] ?>
                  </p>
                </div>
                <div class="sovet-direktorov-item__title">
                  <p>
                  <?= $row['ceo_title'] ?>
                  </p>
                </div>
                <div class="sovet-direktorov-item__btn-wrapper">
                  <div class="slider-item__btn-6 btn-6">
                    <span>Читать далее</span>
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
  </section>
  <div class="section-blue">
    <div class="section-blue__governing governing">
      <div class="container-lower">
        <div class="governing__outer">
          <div class="governing__inner">
            <div class="governing__about-us-label about-us-label">Команда</div>
            <div class="governing__who-we-are-label who-we-are-label">
              Правление
            </div>
            <div class="governing__governing-grid governing-grid">
              <div class="governing-slider__card-white card-blue">
                <figure class="card-blue__photo">
                  <img width="100%" src="./assets/images/governing-1.png" alt="./assets/images/governing-1.png" />
                </figure>
                <div class="card-blue__inner">
                  <div class="card-blue__title">
                    <p>Карягин Андрей Валерьевич</p>
                  </div>
                  <div class="card-blue__subtitle">
                    <p>Председатель совета директоров</p>
                  </div>
                  <div class="card-blue__btn-wrapper">
                    <div class="card-blue__btn-4 btn-4">
                      <span>Подробнее</span>
                      <div class="btn-3__arrow-long arrow-long">
                        <i class="fa-solid fa-arrow-right-long"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="governing-slider__card-white card-blue">
                <figure class="card-blue__photo">
                  <img width="100%" src="./assets/images/governing-2.png" alt="./assets/images/governing-2.png" />
                </figure>
                <div class="card-blue__inner">
                  <div class="card-blue__title">
                    <p>Карягин Андрей Валерьевич</p>
                  </div>
                  <div class="card-blue__subtitle">
                    <p>Председатель совета директоров</p>
                  </div>
                  <div class="card-blue__btn-wrapper">
                    <div class="card-blue__btn-4 btn-4">
                      <span>Подробнее</span>
                      <div class="btn-3__arrow-long arrow-long">
                        <i class="fa-solid fa-arrow-right-long"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="governing-slider__card-white card-blue">
                <figure class="card-blue__photo">
                  <img width="100%" src="./assets/images/governing-3.png" alt="./assets/images/governing-3.png" />
                </figure>
                <div class="card-blue__inner">
                  <div class="card-blue__title">
                    <p>Карягин Андрей Валерьевич</p>
                  </div>
                  <div class="card-blue__subtitle">
                    <p>Председатель совета директоров</p>
                  </div>
                  <div class="card-blue__btn-wrapper">
                    <div class="card-blue__btn-4 btn-4">
                      <span>Подробнее</span>
                      <div class="btn-3__arrow-long arrow-long">
                        <i class="fa-solid fa-arrow-right-long"></i>
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
  </div>
  <div class="section-white">
    <div class="team section-white__team">
      <div class="container-lower">
        <div class="team__outer">
          <div class="team__inner">
            <div class="team__about-us-label about-us-label">Команда</div>
            <div class="team__who-we-are-label who-we-are-label">
              Наша Команда
            </div>
            <div class="team__team-grid team-grid">
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-1.png" alt="./assets/images/team-1.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Козыбаев Серик Мехлисович</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Директор (CEO) Филиала Компании в МФЦА</p>
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
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-2.png" alt="./assets/images/team-2.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Муратова Айгуль Анарбековна</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Управляющий директор по привлечению клиентов</p>
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
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-3.png" alt="./assets/images/team-3.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Есютина Екатерина Метеркуловна</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Директор Департамента по работе с клиентами и персоналом</p>
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
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-4.png" alt="./assets/images/team-4.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Мун Игорь Леонидович</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Директор Департамента управления активами</p>
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
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-5.png" alt="./assets/images/team-5.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Громова Марина Анатольевна</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Директор Департамента брокерской и дилерской деятельности</p>
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
              <div class="team-slider__card-white card-white">
                <figure class="card-white__photo">
                  <img width="100%" src="./assets/images/team-6.png" alt="./assets/images/team-6.png" />
                </figure>
                <div class="card-white__inner">
                  <div class="card-white__title">
                    <p>Даулетов Калмас Даулетович</p>
                  </div>
                  <div class="card-white__subtitle">
                    <p>Заместитель Директора Департамента брокерской и дилерской деятельности</p>
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
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>


<?php }
get_footer();
?>