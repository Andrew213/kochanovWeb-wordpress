<!DOCTYPE html>
<html lang="en" class="dark-theme">

<head>
  <title>Kochanov WebDev</title>
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="format-detection" content="address=no" />
  <meta property="og:site_name" content="Веб-разработчик Андрей Кочанов"/>
  <meta property="og:image" content="https://kochanov-web.tech/wp-content/uploads/my_site.jpg"/>
  <meta property="og:image:width" content="1200"/>
  <meta property="og:image:height" content="630"/>
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:url" content="https://kochanov-web.tech" />
  <meta property="og:title" content="Андрей Кочанов" />
  <meta property="og:description" content="Сайт или веб приложения для Вас или Вашего бизнеса!"/>
  <meta property="og:site_name" content="Веб-разработчик Андрей Кочанов. Сайт под ключ любой сложности! "/>
  <link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/assets/favicon.ico" type="image/x-icon" />
  <link rel="preload" href="../fonts/Comfortaa-Bold.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="../fonts/Comfortaa-Regular.woff2" as="font" type="font/woff2" crossorigin />
  <link rel="preload" href="../fonts/Comfortaa-SemiBold.woff2" as="font" type="font/woff2" crossorigin />
  <!-- <link
    rel="preload"
    href="fonts/Syne-Bold.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="fonts/Syne-Regular.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="fonts/Syne-SemiBold.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="fonts/Inter-Bold.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="fonts/Inter-Regular.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="fonts/Inter-SemiBold.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  /> -->


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php 
  wp_head();
?>
</head>

<body class="bod">
  <div class="wrapper" data-scroll-container>

    <div class="wrapper_top" data-scroll-section>
      <header class="header" id="hero">
        <div class="header__inner container">
          <button aria-label="Кнопка открыть меню" type="button" class="header__burger">
            <span></span>
          </button>

          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__item">
                <a href="#projects" class="header__button">Работы</a>
              </li>
              <li class="header__item">
                <a href="#skills" class="header__button">Навыки</a>
              </li>
              <li class="header__item">
                <a href="#tools" class="header__button">Технологии</a>
              </li>
              <li class="header__item">
                <a href="#contacts" class="header__button">Контакты</a>
              </li>
            </ul>
          </nav>

          <div class="header__actions">
            <input type="checkbox" id="themeSwitch" name="theme-switch" class="theme-switch__input" />
            <label for="themeSwitch" class="theme-switch__label"><span class="theme-switch__span"></span></label>
            <a href="mailto:a.kochanov31@yandex.ru" class="button header__hire">
              <div class="button-hire__text">Связаться</div>
            </a>
          </div>
        </div>
      </header>
      <section class="hero" id="hero">
        <div class="hero__inner container">
          <div class="hero__me">
            <div class="hero__me_left">
              <h1 class="hero__title">
                <span class="hero__title_highlight"> Andrey </span>
                Kochanov
              </h1>
              <p class="hero__text">
                <span class="hero__title_highlight hero__text_highlight">Web developer.</span>
              </p>
            </div>

            <div class="hero__imgWrapper">
              <img class="hero__img" src="<?php echo bloginfo('template_url'); ?>/assets/me-light.png" />
              <div class="hero__imgDecor"></div>
              <div class="hero__imgDecor_bubble"></div>
              <div class="hero__imgDecor_bubble2"></div>
            </div>

            <div class="hero__desctopDecorWrapper">
              <div class="hero__desctopDecor hero__desctopDecor_back">
                <div class="hero__desctopDecorHeader">
                  <span></span>
                </div>
              </div>
              <div class="hero__desctopDecor hero__desctopDecor_front">
                <div class="hero__desctopDecorHeader">
                  <span></span>
                </div>
                <img class="hero__desctopDecorImg"
                  src="<?php echo bloginfo('template_url'); ?>/assets/desctopDecor.svg" />
              </div>
            </div>
          </div>

          <div class="hero__actions">
            <div class="hero__btnWrapper">
              <a href="#footer" class="hero__btnScroll"></a>
              <span class="hero__btnScrollText"> SCROLL TO DOWN </span>
            </div>

            <a href="mailto:a.kochanov31@yandex.ru" class="button hero__hire">
              <div class="button-hire__text">Связаться</div>
            </a>

            <ul class="hero__socialList">
              <li class="hero__socialItem hero__socialItem">
                <a rel="stylesheet" href="https://github.com/Andrew213" target="_blank"
                  class="hero__socialLink hero__socialLink_git"></a>
              </li>
              <li class="hero__socialItem hero__socialItem">
                <a rel="stylesheet" href="https://t.me/andreikochanov" target="_blank"
                  class="hero__socialLink hero__socialLink_tg"></a>
              </li>
              <li class="hero__socialItem hero__socialItem">
                <a rel="stylesheet" href="https://instagram.com/ludovikxlv?igshid=ZDdkNTZiNTM=" target="_blank"
                  class="hero__socialLink hero__socialLink_inst"></a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>

    <main data-scroll-section>
      <div class="float_icon float_icon-js"></div>
      <svg class="testSvg">
        <path id="dynamicCurve-js" fill="none" stroke-width=" 2" />
      </svg>
      <section class="projects" id="projects" data-scroll data-scroll-speed="2">
        <div class="projects__inner inner ">
          <h2 class="title projects__title" id="projects">Проекты</h2>
          <div class="projects_listContainer">
            <div class="swiper-pagination"></div>

            <ul class="projects__list">
              <?php
              // параметры по умолчанию
              $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'slider_projects',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );
              
              global $post;
              
              foreach( $my_posts as $post ){
                setup_postdata( $post );
              ?>
              <li class="projects__item">
                <article class="projects__project">
                  <img class="projects__img" src="<?php echo the_field('project_img'); ?>" />
                  <p class="projects__name">
                    <?php the_title() ?>
                  </p>
                  <a href="<?php the_field("project_prod") ?>" target="_blank" class="projects__link">link to
                    site</a>
                    <?php
                      if( get_field("project_git") ): ?>
                        <a href="<?php the_field("project_git") ?>" target="_blank" class="projects__link">link to code</a>
                      <?php endif; ?>
                  <p class="projects__about">
                    <?php 
                  the_field('project_desc') 
              ?>
                    <!-- Классный проект с использованием TypeScript, ViteJS, EventBust для
                управления событиями, WebSocket для обмена сообщениями. Плюс за
                кастомный роутинг на TypeScript и тестирование с помощью Chai и
                Mocha. -->
                  </p>
                  <div class="projects__tags">
                    <?php 
              $tags_string = get_field('project_tags');
              if($tags_string){
                  $tags = explode(',', $tags_string);
                  foreach($tags as $tag){
                      $tag = trim($tag);
                      if (!empty($tag)){
                         echo "<span class='projects__tag'>".$tag."</span>";
                      }
                  }
              }
                  
              ?>

                  </div>
                </article>
              </li>
              <?php
              }
              wp_reset_postdata(); // сброс
          ?>
            </ul>

            <?php
              // Условие для отображения кнопки
              if (count($my_posts) > 3) {
                ?>
                <button type="button" class="button projects__btn">
                  <div class="button-hire__text">Раскрыть список</div>
                </button>
                <?php
              }
            ?>
          </div>
        </div>
      </section>
      <div class="float_icon float_icon-react"></div>
      <svg class="testSvg">
        <path id="dynamicCurve-react" fill="none" stroke-width="2" />
      </svg>
      <section class="skills" id="skills" data-scroll data-scroll-speed="3">
        <div class="skills__inner inner container">
          <h2 class="title skills__title">Навыки</h2>
          <div class="skills__wrapper">
            <ul class="skills__list">
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Вёрстка</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">
                    Адаптивная, кроосбраузерная, семантическая вёрстка.
                  </li>
                  <li class="skills__innerItem">
                    Вёрстка сайтов любой сложности по макетам.
                  </li>
                  <li class="skills__innerItem">Работа с анимацией.</li>
                  <li class="skills__innerItem">
                    Владение различными техниками создания сайтов.
                  </li>
                  <li class="skills__innerItem">Sass, Less</li>
                </ol>
              </li>
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Frontend</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">JavaScript ES6</li>
                  <li class="skills__innerItem">TypeScript</li>
                  <li class="skills__innerItem">
                    React и всё что с ним связано (роутинг и тд)
                  </li>
                  <li class="skills__innerItem">Небольшой опыт NextJS</li>
                  <li class="skills__innerItem">Oauth2, cookie</li>
                  <li class="skills__innerItem">
                    Владение любым стейт менеджером (Redux, Mobx, Effector)
                  </li>
                  <li class="skills__innerItem">Конфигурирование Webpack, Vite</li>
                  <li class="skills__innerItem">CSR, SSG, SSR</li>
                  <li class="skills__innerItem">WebSocket</li>
                  <li class="skills__innerItem">Взаимодействие с различными API</li>
                </ol>
              </li>
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Backend</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">SQL, PSQL</li>
                  <li class="skills__innerItem">NodeJS</li>
                  <li class="skills__innerItem">Есть опыт работы с PHP</li>
                  <li class="skills__innerItem">Server Side Rendering</li>
                </ol>
              </li>
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Архитектура</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">MV* - паттерны проектирования</li>
                  <li class="skills__innerItem">Алгоритмы</li>
                  <li class="skills__innerItem">
                    Работа с системами контроля версий
                  </li>
                  <li class="skills__innerItem">Модульная архитектура</li>
                  <li class="skills__innerItem">ООП</li>
                  <li class="skills__innerItem">REST</li>
                </ol>
              </li>
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Команда</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">Есть опыт командной разработки</li>
                  <li class="skills__innerItem">Agile, Scrum</li>
                  <li class="skills__innerItem">Соблюдение дедлайнов</li>
                  <li class="skills__innerItem">Соблюдение единого кодстайла</li>
                </ol>
              </li>
              <li class="skills__item">
                <div class="skills__decor">
                  <div class="skills__decorBlur"></div>
                </div>
                <p class="skills__listTitle">Опыт</p>
                <ol class="skills__innerList">
                  <li class="skills__innerItem">
                    Более 3-х лет коммерческой разработки
                  </li>
                  <li class="skills__innerItem">
                    Опыт создания сайтов и приложений любой сложности
                    под любые нужды
                  </li>
                  <li class="skills__innerItem">
                    Разработка TMA приложений
                  </li>
                  <li class="skills__innerItem">
                    Разработка web3 приложений
                  </li>
                </ol>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <div class="float_icon float_icon-html"></div>
      <svg class="testSvg">
        <path id="dynamicCurve-html" fill="none" stroke-width="2" />
      </svg>

      <section class="tools" id="tools" data-scroll data-scroll-speed="4">
        <div class="tools__inner inner container">
          <h2 class="title tools__title">Технологии</h2>
          <ul class="tools__list">
            <li class="tools__item">
              <div class="tools__circle tools__circle-react"></div>
              <p class="tools__name">React</p>
            </li>
            <li class="tools__item">
              <div class="tools__circle tools__circle-redux"></div>
              <p class="tools__name">STM</p>
            </li>
            <li class="tools__item">
              <div class="tools__circle tools__circle-js"></div>
              <p class="tools__name">JS/TS</p>
            </li>
            <li class="tools__item">
              <div class="tools__circle tools__circle-layout"></div>
              <p class="tools__name">NextJs</p>
            </li>
            <li class="tools__item">
              <div class="tools__circle tools__circle-nodejs"></div>
              <p class="tools__name">NodeJS</p>
            </li>
            <li class="tools__item">
              <div class="tools__circle tools__circle-webpack"></div>
              <p class="tools__name">Algorithms</p>
            </li>
          </ul>
        </div>
      </section>
      <section class="contacts" id="contacts" id="tools" data-scroll data-scroll-speed="5">
        <div class="contacts__inner inner container">
          <h2 class="title contacts__title">Контакты</h2>

          <div class="contacts__list">
            <div class="contacts__item contacts__item-mail">
              <div class="contacts__item-mailTop">
                <p class="contacts__addres">a.kochanov31@yandex.ru</p>
                <div class="contacts__copy">
                  <button class="contacts__copyBtn">
                  </button>
                </div>
              </div>
              <a href="mailto:a.kochanov31@yandex.ru" class="button contacts__mail">Связаться</a>
            </div>

            <div class="contacts__tgInstWrapper">
              <a target="_blank" href="https://t.me/andreikochanov" class="contacts__item contacts__item-tg">
                <div class="contacts__img hero__socialItem hero__socialItem">
                  <div class="hero__socialLink hero__socialLink_tg"></div>
                </div>
                <span class="contacts__name">Telegram</span>
              </a>
              <a href="https://github.com/Andrew213" target="_blank" class="contacts__item contacts__item-git">
                <div class="contacts__img hero__socialItem hero__socialItem">
                  <div rel="stylesheet" href="#" target="_blank" class="hero__socialLink hero__socialLink_git"></div>
                </div>
                <span class="contacts__name">GitHub</span>
              </a>
              <a target="_blank" href="https://instagram.com/ludovikxlv?igshid=ZDdkNTZiNTM="
                class="contacts__item contacts__item-inst">
                <div class="contacts__img hero__socialItem hero__socialItem">
                  <div class="hero__socialLink hero__socialLink_inst"></div>
                </div>
                <span class="contacts__name">Instagram</span>
              </a>
            </div>
            <a target="_blank" href="https://t.me/andreikochanov"
              class="contacts__item contacts__item-sm contacts__item-inst">
              <div class="contacts__img hero__socialItem hero__socialItem">
                <div class="hero__socialLink hero__socialLink_tg"></div>
              </div>
              <span class="contacts__name">Telegram</span>
            </a>
            <a href="https://github.com/Andrew213" target="_blank"
              class="contacts__item contacts__item-sm contacts__item-git">
              <div class="contacts__img hero__socialItem hero__socialItem">
                <div rel="stylesheet" href="#" target="_blank" class="hero__socialLink hero__socialLink_git"></div>
              </div>
              <span class="contacts__name">GitHub</span>
            </a>
            <a href="https://instagram.com/ludovikxlv?igshid=ZDdkNTZiNTM=" target="_blank"
              class="contacts__item contacts__item-sm contacts__item-inst">
              <div class="contacts__img hero__socialItem hero__socialItem">
                <div rel="stylesheet" class="hero__socialLink hero__socialLink_inst"></div>
              </div>
              <span class="contacts__name">Instagram</span>
            </a>
          </div>
      </section>
    </main>
    <footer class="footer" id="footer" data-scroll-section>
      <div class="container inner footer__container">
        <span class="footer__title">Перейти к</span>
        <div class="footer__top">
          <nav class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item">
                <a data-scroll-to="hero" style="display: block" class="footer__button footer_link">Обо мне</a>
              </li>
              <li class="footer__item">
                <a data-scroll-to="projects" style="display: block" class="footer__button footer_link">Работы</a>
              </li>
              <li class="footer__item">
                <a data-scroll-to="skills" style="display: block" class="footer__button footer_link">Навыки</a>
              </li>
              <li class="footer__item">
                <a data-scroll-to="tools" style="display: block" class="footer__button footer_link">Технологии</a>
              </li>
              <li class="footer__item">
                <a data-scroll-to="contacts" style="display: block" class="footer__button footer_link">Контакты</a>
              </li>
            </ul>
          </nav>
          <div class="footer__actions">
            <input type="checkbox" id="themeSwitch2" name="theme-switch2" class="theme-switch2__input footer__theme" />
            <label for="themeSwitch2" class="theme-switch2__label footer__themeLabel"><span
                class="theme-switch2__span"></span></label>
            <a href="#hero" class="hero__btnScroll footer__btnScroll"></a>
          </div>
        </div>
        <div class="footer__top-sm">
          <nav class="footer__nav-sm">
            <ul class="footer__list-sm">
              <li class="footer__item-sm">
                <a data-scroll-to="hero" class="footer__button-sm footer_link">Обо мне</a>
              </li>
              <li class="footer__item-sm">
                <a data-scroll-to="projects" class="footer__button-sm footer_link">Работы</a>
              </li>
              <li class="footer__item-sm">
                <a data-scroll-to="skills" class="footer__button-sm footer_link">Навыки</a>
              </li>
              <li class="footer__item-sm">
                <a data-scroll-to="tools" class="footer__button-sm footer_link">Технологии</a>
              </li>
              <li class="footer__item-sm">
                <a data-scroll-to="contacts" class="footer__button-sm footer_link">Контакты</a>
              </li>
              <li class="footer__item-sm">
                <a href="mailto:a.kochanov31@yandex.ru" class="contacts__mail footer__mail footer_link">Связаться</a>
              </li>
            </ul>
          </nav>
        </div>
        <span class="footer__copyright">&copy; Andrey Kochanov</span>
      </div>
    </footer>
  </div>

  <?php 
  wp_footer()
?>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] =
        m[i] ||
        function () {
          (m[i].a = m[i].a || []).push(arguments);
        };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) {
          return;
        }
      }
      (k = e.createElement(t)),
        (a = e.getElementsByTagName(t)[0]),
        (k.async = 1),
        (k.src = r),
        a.parentNode.insertBefore(k, a);
    })(
      window,
      document,
      "script",
      "https://mc.yandex.ru/metrika/tag.js",
      "ym"
    );

    ym(95285034, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
    });
  </script>
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/95285034" style="position: absolute; left: -9999px" alt="" />
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
</body>

</html>