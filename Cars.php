<?php
$path = array("./img/Plug/bg_plug.png","./img/Plug/bg_plug.png", "");

  if ($_GET["utm_campaign"] == "audi") {
    $path = array ("./img/Cars/Audi1.png","./img/Cars/Audi2.png", "AUDI");
  }
  if ($_GET["utm_campaign"] == "bmw") {
    $path = array ("./img/Cars/Bmw1.png","./img/Cars/Bmw2.png", "BMW");
  }
  if ($_GET["utm_campaign"] == "lexus") {
    $path = array ("./img/Cars/Lexus1.png","./img/Cars/Lexus2.png", "Lexus");
  }
  if ($_GET["utm_campaign"] == "mercedes-benz") {
    $path = array ("./img/Cars/Mercedes-Benz1.png","./img/Cars/Mercedes-Benz2.png", "Mercedes-Benz");
  }
  if ($_GET["utm_campaign"] == "toyota") {
    $path = array ("./img/Cars/Toyota1.png","./img/Cars/Toyota2.png", "Toyota");
  }
  if ($_GET["utm_campaign"] == "volkswagen") {
    $path = array ("./img/Cars/Volkswagen1.png","./img/Cars/Volkswagen2.png", "Volkswagen");
  }
  if ($_GET["utm_campaign"] == "kia") {
    $path = array ("./img/Cars/Kia1.png","./img/Cars/Kia2.png", "Kia");
  }
  if ($_GET["utm_campaign"] == "ford") {
    $path = array ("./img/Cars/Ford1.png","./img/Cars/Ford2.png", "Ford");
  }
  if ($_GET["utm_campaign"] == "skoda") {
    $path = array ("./img/Cars/Skoda1.png","./img/Cars/Skoda2.png", "Skoda");
  }
  if ($_GET["utm_campaign"] == "hyundai") {
    $path = array ("./img/Cars/Hyundai1.png","./img/Cars/Hyundai2.png", "Hyundai");
  }
  if ($_GET["utm_campaign"] == "chevrolet") {
    $path = array ("./img/Cars/Chevrolet1.png","./img/Cars/Chevrolet2.png", "Chevrolet");
  }
  if ($_GET["utm_campaign"] == "citroen") {
    $path = array ("./img/Cars/Citroen1.png","./img/Cars/Citroen2.png", "Citroen");
  }
  if ($_GET["utm_campaign"] == "honda") {
    $path = array ("./img/Cars/Honda1.png","./img/Cars/Honda2.png", "Honda");
  }
  if ($_GET["utm_campaign"] == "mazda") {
    $path = array ("./img/Cars/Mazda1.png","./img/Cars/Mazda2.png", "Mazda");
  }
  if ($_GET["utm_campaign"] == "mitsubishi") {
    $path = array ("./img/Cars/Mitsubishi1.png","./img/Cars/Mitsubishi2.png", "Mitsubishi");
  }
  if ($_GET["utm_campaign"] == "nissan") {
    $path = array ("./img/Cars/Nissan1.png","./img/Cars/Nissan2.png", "Nissan");
  }
  if ($_GET["utm_campaign"] == "opel") {
    $path = array ("./img/Cars/Opel1.png","./img/Cars/Opel2.png", "Opel");
  }
  if ($_GET["utm_campaign"] == "peugeot") {
    $path = array ("./img/Cars/Peugeot1.png","./img/Cars/Peugeot2.png", "Peugeot");
  }
  if ($_GET["utm_campaign"] == "suzuki") {
    $path = array ("./img/Cars/Suzuki1.png","./img/Cars/Suzuki2.png", "Suzuki");
  }
  if ($_GET["utm_campaign"] == "porsche") {
    $path = array ("./img/Cars/Porsche1.png","./img/Cars/Porsche2.png", "Porsche");
  }
  ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="facebook-domain-verification"
      content="61n0kzvr3dy3ypx85gf7tepttrbmfn"
    />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="icon" type="image/png" href="favicon.png" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>Trustcar</title>
  </head>
  <body>
    <div class="gray-back">
      <header class="header">
        <div class="header_item logo_item">
          <a href="./index.html">
            <img src="./logo.svg" alt="logo" />
          </a>
        </div>
        <div class="header_item top_nav_item">
          <nav class="navigation" role="navigation">
            <div class="mobile_menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="descktop_menu">
              <ul>
                <a href="#my-popup-login" class="m-menu-header popup-link">
                  <div class="m-menu-header__left">
                    <img src="./img/Personal-area/user.svg" alt="user" />
                  </div>
                  <div class="m-menu-header__right">
                    <span
                      href="./Personal-change-profile.html"
                      class="m-menu-header__title"
                      >Войти</span
                    >
                  </div>
                </a>
                <a href="#anchor_service"><li>Услуги</li></a>
                <a href="./Promotions.html"><li>Акции</li></a>
                <a href="./About-us.html"><li>О нас</li></a>
                <a href="#contacts"><li>Контакты</li></a>
              </ul>
              <span class="close"></span>
              <div class="mobile_icons_menu">
                <div class="hi_ii wapp">
                  <a href="https://wa.me/79891232351">
                    <img src="wapp_foot.svg" alt="whatsapp" />
                  </a>
                </div>
                <div class="hi_ii insta">
                  <a href="https://www.instagram.com/trustcar_service/">
                    <img src="instagram_foot.svg" alt="instagram" />
                  </a>
                </div>
                <div class="hi_ii email">
                  <a href="mailto:mail@trustcar.ru">
                    <img src="mail_foot.svg" alt="email" />
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <div class="header_item contacts_item header-social">
          <div class="hi_ci phone">
            <span></span>
            <a href="tel:+78612060723">+7 861 206 07 23</a>
          </div>
          <!-- <div class="hi_ci truck header-truck">
            <span></span>
            <a href="tel:+78612060723">8 (918) 438 43 95</a>
          </div> -->
        </div>
        <a href="#my-popup-login" class="user-icon popup-link">
          <img class="user-icon__img" src="./img/Main/user.svg" alt="" />
        </a>
      </header>
      <div class="intro">
        <div class="intro__left-body">
          <div class="intro__left">
            <h1 class="h-title">
              Ремонт автомобилей
              <span class="h-title my-owl-text"><? echo $path[2]?></span>
              в Краснодаре
            </h1>
            <div class="button-box">
              <button class="button">
                <a href="#" class="button__text order_now">Быстрая запись</a>
              </button>
              <button class="button button-white">
                <a href="./About-us.html" class="button__text">Подробнее</a>
              </button>
            </div>
          </div>
          <div class="social">
            <div class="fi_ii wapp">
              <a href="https://wa.me/79891232351">
                <img
                  class="social-icon"
                  src="./img/Main/call.svg"
                  alt="whatsapp"
                />
              </a>
            </div>
            <div class="fi_ii insta">
              <a href="https://www.instagram.com/trustcar_service/">
                <img
                  class="social-icon"
                  src="./img/Main/instagram.svg"
                  alt="instagram"
                />
              </a>
            </div>
            <div class="fi_ii email">
              <a href="mailto:mail@trustcar.ru">
                <img
                  class="social-icon"
                  src="./img/Main/mail.svg"
                  alt="email"
                />
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <img
                id="audi-img1"
                class="my-owl__img"
                src="<? echo $path[0]?>"
                alt="AUDI"
              />
            </div>
            <div class="swiper-slide">
              <img
                id="audi-img2"
                class="my-owl__img"
                src="<? echo $path[1]?>"
                alt="AUDI"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <main id="content">
      <section class="action">
        <div class="content">
          <div class="wrapper">
            <div class="action__box">
              <div class="action__top">
                <div
                  class="action__invisible-block action__invisible-block-mob"
                ></div>
                <div class="action__title">
                  <span class="action__text">действующие акции</span>
                </div>
                <a
                  href="./Promotions.html"
                  class="action__link action__link-mob"
                  >Все акции<svg
                    class="action-arrow"
                    width="15"
                    height="8"
                    viewBox="0 0 15 8"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </a>
              </div>
              <div class="action__body action-body">
                <div class="action-body__left">
                  <div
                    class="action-body__single-item single-item"
                    style="
                      background: url(./img/Main/oil.png) no-repeat right / 85%,
                        #fafafc;
                    "
                  >
                    <div class="single-item__title">
                      <div class="single-item__notifi">Бессрочно</div>
                      <div class="single-item__text">Замена масла</div>
                      <div class="single-item__sub-text">
                        При замене масла в ДВС или АКПП, диагностика подвески и
                        тех. жидкостей за наш счёт.
                      </div>
                    </div>
                    <a href="#repair-form" class="action__link"
                      >Записаться<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="action-body__right">
                  <div
                    class="action-body__double-item double-item"
                    style="
                      background: url(./img/Main/oil.png) no-repeat right /
                          80%,
                        #fafafc;
                    "
                  >
                    <div class="double-item__body">
                      <div class="double-item__title">
                        <div class="single-item__notifi">Бессрочно</div>
                        <div class="double-item__text">Сезонный шиномонтаж</div>
                        <div class="double-item__sub-text">
                          Проверка углов схождения колес за наш счет.
                        </div>
                      </div>
                    </div>
                    <a href="#repair-form" class="action__link"
                      >Записаться<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                  <div
                    class="action-body__double-item double-item"
                    style="
                      background: url(./img/Main/suspension.png) no-repeat
                          right / 80%,
                        #fafafc;
                    "
                  >
                    <div class="double-item__body">
                      <div class="double-item__title">
                        <div class="single-item__notifi">До 31.09.21</div>
                        <div class="double-item__text">
                          Диагностика подвески
                        </div>
                        <div class="double-item__sub-text">
                          За наш счёт до 31.09.21
                        </div>
                      </div>
                    </div>
                    <a href="#repair-form" class="action__link"
                      >Записаться<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
                <a class="action__link action__link-mob action__link-bottom"
                  >Все акции<svg
                    class="action-arrow"
                    width="15"
                    height="8"
                    viewBox="0 0 15 8"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </a>
              </div>
            </div>
            <div id="service" class="action__top">
              <div class="action__title">
                <span class="action__text">Наши услуги</span>
              </div>
            </div>
            <div class="category__category category">
              <div class="category__item category-first">
                <span class="category-first__text"
                  >популярные <br />
                  услуги</span
                >
              </div>
              <a
                href="./Gear-diagnostics.html"
                class="category__item category-second"
              >
                <span class="category-second__text"
                  >Диагностика ходовой части</span
                >
              </a>
              <a
                href="./Wheel-alignment.html"
                class="category__item category-second"
              >
                <span class="category-second__text">Развал-схождение</span>
              </a>
              <a
                href="./Timing-belt.html"
                class="category__item category-second"
              >
                <span class="category-second__text">Замена ремня ГМР</span>
              </a>
              <a
                href="./Conditioner.html"
                class="category__item category-second"
              >
                <span class="category-second__text">Заправка кондиционера</span>
              </a>
              <a
                href="./Oil-engine.html"
                class="category__item category-second"
              >
                <span class="category-second__text">Замена масла</span>
              </a>
            </div>
            <div class="service">
              <div class="service__item-wrapper">
                <div class="service__item">
                  <div class="service__top">
                    <div class="service__icon">
                      <svg
                        width="58"
                        height="58"
                        viewBox="0 0 58 58"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          y="0.000488281"
                          width="58"
                          height="58"
                          rx="5"
                          fill="#FBC22E"
                        />
                        <path
                          d="M18.9783 39.1861C20.8821 39.1861 22.4254 37.6427 22.4254 35.7389C22.4254 33.8351 20.8821 32.2917 18.9783 32.2917C17.0745 32.2917 15.5311 33.8351 15.5311 35.7389C15.5311 37.6427 17.0745 39.1861 18.9783 39.1861Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M39.1536 30.5613C39.3443 30.0423 39.4419 29.4938 39.4419 28.9408C39.4411 26.345 37.3361 24.2414 34.7403 24.2422C34.1885 24.2424 33.6409 24.3397 33.1227 24.5299V33.3512C35.5586 34.2462 38.2587 32.9971 39.1536 30.5613Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M24.8134 20.032L20.4561 25.7533C20.3482 25.894 20.1972 25.9953 20.0261 26.0419L12.7356 28.033C11.7151 28.3122 11.0055 29.2371 11 30.295V32.9561C11.0106 34.2507 12.0669 35.2925 13.3615 35.285H13.9421C14.1827 32.5036 16.6326 30.4438 19.414 30.6844C21.8618 30.8962 23.803 32.8373 24.0147 35.285H31.514V18.6929H27.5155C26.4559 18.6963 25.4578 19.1909 24.8134 20.032Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M44.8772 27.5504C44.5269 27.5173 44.2375 27.2629 44.1599 26.9197C43.9117 25.7728 43.4521 24.6823 42.8046 23.7037C42.6076 23.408 42.6281 23.018 42.8549 22.7444L44.2044 21.1138L42.563 19.4516L40.9395 20.7965C40.6695 21.0206 40.2853 21.0439 39.9903 20.8539C39.0058 20.2097 37.9128 19.749 36.7642 19.4941C36.4226 19.4218 36.1672 19.1364 36.1334 18.7888L35.93 16.6821H33.1228V22.8451C36.4896 21.9515 39.9434 23.9563 40.837 27.3232C41.7306 30.6901 39.7257 34.1438 36.3588 35.0374C35.2985 35.3189 34.1831 35.3189 33.1227 35.0374V41.2184H35.9299L36.1337 39.1024C36.1672 38.7535 36.4221 38.4663 36.7645 38.3916C37.9114 38.1435 39.0022 37.6838 39.9808 37.0363C40.2766 36.8393 40.6667 36.8598 40.9402 37.0866L42.5675 38.4341L44.2368 36.7648L42.8893 35.1376C42.6659 34.8671 42.6434 34.483 42.8339 34.1884C43.4794 33.2041 43.9415 32.1111 44.198 30.9623C44.2736 30.6199 44.5613 30.3651 44.9103 30.3316L46.9999 30.1283V27.7541L44.8772 27.5504Z"
                          fill="#3C3C3C"
                        />
                      </svg>
                    </div>
                    <div class="service__title">Автосервис</div>
                  </div>
                  <div class="service__body">
                    <div class="service__text">
                      Гарантия на ремонтные работы любой сложности.
                    </div>
                  </div>
                  <div class="service__bottom">
                    <a href="#popup-autoservice" class="action__link popup-link"
                      >Подробнее<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="service__item-wrapper">
                <div class="service__item">
                  <div class="service__top">
                    <div class="service__icon">
                      <svg
                        width="58"
                        height="58"
                        viewBox="0 0 58 58"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          y="0.000488281"
                          width="58"
                          height="58"
                          rx="5"
                          fill="#FBC22E"
                        />
                        <path
                          d="M23.8786 27.8701C23.1158 27.8701 22.4975 28.4885 22.4975 29.2512C22.4975 30.0139 23.1158 30.6323 23.8786 30.6323C24.6413 30.6323 25.2596 30.0139 25.2596 29.2512C25.2586 28.4889 24.6409 27.8711 23.8786 27.8701Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M24.3383 16.9591H34.6615V14.0806C34.6587 13.5872 34.2564 13.1896 33.763 13.1925C33.7621 13.1925 33.761 13.1925 33.76 13.1925H32.1579C31.8925 13.1907 31.6644 13.0033 31.6114 12.7432C31.3964 11.7281 30.5011 11.0015 29.4635 11C28.4237 11 27.5593 11.7077 27.3122 12.7571C27.2535 13.0102 27.029 13.1903 26.7691 13.1925H25.2032C24.7268 13.191 24.3394 13.5761 24.338 14.0526C24.338 14.0619 24.338 14.0713 24.3383 14.0806V16.9591Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M22.1762 39.0701H27.0588V34.3967H22.1762V39.0701ZM23.1347 36.456C23.1347 36.456 23.1348 36.4559 23.1347 36.456C23.3266 36.2148 23.6776 36.1748 23.9188 36.3666L24.3234 36.6887L25.2801 35.5956C25.4831 35.3637 25.8356 35.3402 26.0675 35.5432C26.2994 35.7461 26.3229 36.0987 26.12 36.3306L24.8128 37.8244C24.6165 38.0486 24.2787 38.079 24.0455 37.8936L23.2239 37.2401C22.9828 37.0482 22.9428 36.6971 23.1347 36.456Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M34.882 27.8701C34.1193 27.8701 33.5009 28.4885 33.5009 29.2512C33.5009 30.0139 34.1193 30.6323 34.882 30.6323C35.6448 30.6323 36.2631 30.0139 36.2631 29.2512C36.2621 28.4889 35.6443 27.8711 34.882 27.8701Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M39.1855 15.7036H35.7777V17.5397C35.7743 17.8389 35.5291 18.0788 35.2299 18.0754C35.2255 18.0754 35.221 18.0753 35.2166 18.0752H23.747C23.4646 18.0827 23.2296 17.8598 23.222 17.5774C23.2217 17.5649 23.2218 17.5522 23.2224 17.5397V15.7036H19.8147C18.9177 15.7036 18.2004 16.4607 18.2004 17.3576V40.4059C18.1983 41.2842 18.9085 41.9979 19.7868 42C19.7961 42 19.8054 42 19.8147 41.9998H39.1855C40.0637 42.0131 40.7863 41.3118 40.7996 40.4337C40.7997 40.4244 40.7998 40.4151 40.7998 40.4058V17.3576C40.7998 16.4607 40.0824 15.7036 39.1855 15.7036ZM28.1748 39.6283C28.1748 39.9365 27.9249 40.1863 27.6168 40.1863H21.6182C21.31 40.1863 21.0602 39.9365 21.0602 39.6283V33.839C21.0602 33.5308 21.31 33.2809 21.6182 33.2809H27.6168C27.9249 33.2809 28.1748 33.5308 28.1748 33.839V39.6283ZM37.3706 38.7216H30.1256C29.8174 38.7216 29.5676 38.4717 29.5676 38.1635C29.5676 37.8554 29.8174 37.6055 30.1256 37.6055H37.3706C37.6788 37.6055 37.9286 37.8554 37.9286 38.1635C37.9286 38.4717 37.6788 38.7216 37.3706 38.7216ZM29.5676 35.234C29.5676 34.9258 29.8174 34.676 30.1256 34.676H34.4577C34.7659 34.676 35.0157 34.9258 35.0157 35.234C35.0157 35.5421 34.7659 35.792 34.4577 35.792H30.1256C29.8174 35.792 29.5676 35.5421 29.5676 35.234ZM39.6838 27.9825C39.6838 29.0823 38.7831 30.0026 37.6833 30.0026H37.2718C36.9601 30.9792 36.007 31.7743 34.8823 31.7743C33.7576 31.7743 32.8043 30.9792 32.4924 30.0026H26.2681C25.9565 30.9792 25.0033 31.7743 23.8787 31.7743C22.754 31.7743 21.8008 30.9792 21.4892 30.0026H21.3168C20.2171 30.0026 19.3164 29.0823 19.3164 27.9825V26.7688C19.3194 25.8707 19.9216 25.0851 20.7881 24.8489L23.9322 23.9948L25.8046 21.5445C26.2757 20.9362 27.0031 20.582 27.7724 20.5862H33.3189C34.1692 20.577 34.9633 21.0102 35.4158 21.7301L36.8714 24.0364L38.5116 24.7813C39.2236 25.1055 39.6815 25.8148 39.6838 26.5971V27.9825Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M38.0498 25.7994L36.2553 24.987C36.1558 24.9432 36.0716 24.871 36.0132 24.7793L34.4692 22.3225C34.2202 21.9292 33.7843 21.6941 33.3189 21.7021H27.7724C27.3512 21.6969 26.9516 21.8887 26.6922 22.2206L24.7049 24.813C24.6303 24.9106 24.5257 24.9809 24.4073 25.0132L21.0823 25.9212C20.7001 26.0259 20.4344 26.3724 20.4324 26.7687V27.9824C20.4336 28.4736 20.8258 28.8744 21.3168 28.8865H21.412C21.6269 27.5242 22.9054 26.594 24.2677 26.8089C25.3375 26.9776 26.1766 27.8167 26.3453 28.8865H32.4157C32.6306 27.5242 33.9092 26.5942 35.2714 26.8091C36.3411 26.9779 37.18 27.8169 37.3488 28.8865H37.6836C38.1745 28.8742 38.5665 28.4734 38.5677 27.9824V26.597C38.566 26.2527 38.3636 25.941 38.0498 25.7994Z"
                          fill="#3C3C3C"
                        />
                      </svg>
                    </div>
                    <div class="service__title">Диагностика</div>
                  </div>
                  <div class="service__body">
                    <div class="service__text">
                      Полная проверка всех узлов автомобиля на современном
                      оборудовании.
                    </div>
                  </div>
                  <div class="service__bottom">
                    <a href="#popup-diagnostic" class="action__link popup-link"
                      >Подробнее<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="service__item-wrapper">
                <div class="service__item">
                  <div class="service__top">
                    <div class="service__icon">
                      <svg
                        width="58"
                        height="58"
                        viewBox="0 0 58 58"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect width="58" height="58" rx="5" fill="#FBC22E" />
                        <path
                          d="M19.8815 24.1829C19.5608 24.7882 19.3019 25.4243 19.109 26.0817L21.8295 26.1302L19.8815 24.1829Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M19.0341 31.6482C19.2195 32.3512 19.4797 33.0323 19.8102 33.6797L21.8833 31.6067L19.0341 31.6482Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M25.9928 38.865L25.996 35.6831L23.7839 37.8953C24.4791 38.305 25.2206 38.6305 25.9928 38.865Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M31.6267 19.0283L31.5994 21.8901L33.6798 19.8101C33.0256 19.4761 32.3372 19.214 31.6267 19.0283Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M25.9979 19.1335C25.2725 19.3533 24.574 19.6534 23.9153 20.0282L25.9674 22.0804L25.9979 19.1335Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M31.6514 38.9652C32.4031 38.7668 33.1296 38.4828 33.8166 38.119L31.6068 35.9092L31.6514 38.9652Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M38.8743 26.0253C38.6393 25.2416 38.3105 24.4891 37.8952 23.7842L35.6736 26.0057L38.8743 26.0253Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M37.9719 34.0845C38.3892 33.351 38.7138 32.5685 38.9379 31.7549L35.6704 31.7834L37.9719 34.0845Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M39.6067 18.3934C33.7488 12.5356 24.2513 12.5355 18.3934 18.3934C12.5356 24.2512 12.5355 33.7487 18.3934 39.6066C24.2512 45.4645 33.7487 45.4645 39.6066 39.6067C45.4645 33.7488 45.4645 24.2513 39.6067 18.3934ZM37.0596 37.0596C32.6084 41.5107 25.3916 41.5107 20.9405 37.0596C16.4893 32.6084 16.4893 25.3916 20.9405 20.9405C25.3916 16.4893 32.6084 16.4893 37.0596 20.9405C39.1971 23.078 40.3979 25.9771 40.3979 29C40.4062 32.0246 39.2041 34.9267 37.0596 37.0596Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M39.1367 27.1167V27.1166L34.3626 27.0872C34.0617 27.0854 33.8192 26.8399 33.8211 26.539C33.822 26.3956 33.8793 26.2584 33.9807 26.1569L37.2803 22.8573C36.5553 21.8847 35.6666 21.0455 34.6539 20.3775L31.4275 23.6038C31.2147 23.8166 30.8696 23.8165 30.6568 23.6037C30.5534 23.5003 30.496 23.3596 30.4973 23.2133L30.5389 18.8054C29.3939 18.6353 28.2287 18.6565 27.0906 18.868L27.0438 23.3882C27.0407 23.6891 26.7942 23.9306 26.4932 23.9274C26.3506 23.9259 26.2144 23.8686 26.1136 23.7679L22.9778 20.6321C21.9949 21.3424 21.1433 22.2187 20.4612 23.2214L23.5542 26.3146C23.711 26.4685 23.7572 26.7029 23.6704 26.9048C23.5841 27.1041 23.3863 27.232 23.1691 27.2288H23.1596L18.8552 27.1622C18.6546 28.2855 18.6392 29.434 18.8096 30.5623L23.2106 30.4985H23.2187C23.5192 30.498 23.7632 30.7413 23.7636 31.0418C23.7638 31.1866 23.7064 31.3255 23.604 31.4277L20.3777 34.6537C21.0457 35.6664 21.8848 36.5551 22.8575 37.2802L26.1572 33.9805C26.3701 33.7677 26.7151 33.7678 26.9279 33.9807C27.0302 34.083 27.0876 34.2217 27.0874 34.3664L27.0827 39.1303C28.2318 39.3449 29.4088 39.3652 30.5647 39.1904L30.4972 34.5816C30.4928 34.2807 30.7332 34.0331 31.0342 34.0288C31.1814 34.0266 31.3233 34.0841 31.4275 34.1883L34.7782 37.5391C35.7811 36.857 36.6574 36.0053 37.3678 35.0223L33.9807 31.6352C33.7678 31.4225 33.7678 31.0774 33.9805 30.8645C34.0816 30.7634 34.2183 30.7061 34.3613 30.7048L39.1747 30.6628C39.3645 29.4872 39.3516 28.2878 39.1367 27.1167ZM31.4974 31.4973C30.1182 32.8765 27.882 32.8765 26.5027 31.4973C25.1234 30.118 25.1234 27.8818 26.5027 26.5025C27.882 25.1232 30.1182 25.1232 31.4974 26.5025C32.1598 27.1648 32.5319 28.0632 32.5319 28.9999C32.5344 29.9371 32.1619 30.8364 31.4974 31.4973Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M29 26.5576C27.6513 26.5576 26.558 27.6509 26.5579 28.9995C26.5579 30.3482 27.6512 31.4416 28.9998 31.4416C30.3485 31.4417 31.4419 30.3484 31.4419 28.9997C31.4419 28.352 31.1846 27.7308 30.7267 27.2729C30.2697 26.8134 29.6479 26.5559 29 26.5576Z"
                          fill="#3C3C3C"
                        />
                      </svg>
                    </div>
                    <div class="service__title">Шиномонтаж</div>
                  </div>
                  <div class="service__body">
                    <div class="service__text">
                      Балансировка, установка, ремонт повреждений.
                    </div>
                  </div>
                  <div class="service__bottom">
                    <a href="#popup-tires" class="action__link popup-link"
                      >Подробнее<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="service__item-wrapper">
                <div class="service__item">
                  <div class="service__top">
                    <div class="service__icon">
                      <svg
                        width="58"
                        height="58"
                        viewBox="0 0 58 58"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect
                          y="-0.000244141"
                          width="58"
                          height="58"
                          rx="5"
                          fill="#FBC22E"
                        />
                        <path
                          d="M22.8807 30.1976C22.8215 30.3283 22.8036 30.4739 22.8292 30.6151C22.8549 30.7562 22.9229 30.8862 23.0243 30.9877C23.0839 31.0479 23.1543 31.0964 23.2317 31.1309L28.7153 33.6234C28.7998 33.6634 28.8914 33.6863 28.9848 33.6905C29.0782 33.6948 29.1716 33.6804 29.2594 33.6483C29.3472 33.6161 29.4277 33.5668 29.4962 33.5032C29.5648 33.4396 29.62 33.363 29.6586 33.2778C29.6973 33.1927 29.7186 33.1007 29.7213 33.0072C29.724 32.9137 29.7081 32.8207 29.6745 32.7334C29.6409 32.6461 29.5903 32.5664 29.5255 32.4989C29.4608 32.4315 29.3833 32.3775 29.2975 32.3403L23.8141 29.8476C23.6439 29.7702 23.4499 29.7637 23.2749 29.8293C23.0999 29.895 22.9581 30.0274 22.8807 30.1976Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M25.0182 28.9932C25.0779 29.0533 25.1482 29.1018 25.2256 29.1363L30.7092 31.6289C30.7935 31.6671 30.8845 31.6883 30.9769 31.6914C31.0694 31.6945 31.1616 31.6793 31.2482 31.6468C31.3348 31.6142 31.4142 31.5649 31.4817 31.5017C31.5493 31.4385 31.6038 31.3626 31.642 31.2783C31.6802 31.1941 31.7015 31.1031 31.7045 31.0106C31.7076 30.9181 31.6924 30.826 31.6599 30.7394C31.6274 30.6527 31.5781 30.5734 31.5148 30.5058C31.4516 30.4383 31.3757 30.3838 31.2915 30.3456L25.8079 27.853C25.6575 27.7846 25.488 27.7713 25.3288 27.8152C25.1696 27.8591 25.0308 27.9575 24.9368 28.0933C24.8428 28.229 24.7994 28.3935 24.8143 28.558C24.8292 28.7224 24.9014 28.8765 25.0182 28.9932Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M22.0146 38.9765L25.7948 35.1963L26.7212 35.6174C26.8057 35.6571 26.8972 35.6797 26.9904 35.6838C27.0837 35.6879 27.1768 35.6734 27.2645 35.6411C27.3521 35.6089 27.4324 35.5596 27.5008 35.4961C27.5692 35.4325 27.6243 35.356 27.6628 35.271C27.7014 35.186 27.7227 35.0942 27.7255 35.0009C27.7283 34.9076 27.7125 34.8146 27.679 34.7275C27.6456 34.6403 27.5952 34.5607 27.5307 34.4932C27.4662 34.4257 27.389 34.3717 27.3034 34.3343L21.8198 31.8415C21.6695 31.7732 21.4999 31.7598 21.3407 31.8037C21.1815 31.8476 21.0428 31.946 20.9488 32.0818C20.8547 32.2176 20.8114 32.3821 20.8263 32.5465C20.8412 32.711 20.9133 32.865 21.0302 32.9817C21.0899 33.0419 21.1602 33.0904 21.2376 33.1248L21.6821 33.3269L19.0235 35.9854C18.2911 35.8808 17.5444 36.0092 16.8891 36.3526C16.2337 36.696 15.703 37.2368 15.3722 37.8986C15.0413 38.5603 14.927 39.3094 15.0456 40.0396C15.1641 40.7699 15.5093 41.4444 16.0325 41.9676C16.5556 42.4907 17.2301 42.836 17.9604 42.9545C18.6907 43.073 19.4397 42.9588 20.1015 42.6279C20.7632 42.297 21.304 41.7663 21.6474 41.111C21.9908 40.4557 22.1192 39.7089 22.0146 38.9765ZM23.053 33.95L24.4238 34.5732L21.4783 37.5187C21.2166 37.1226 20.8774 36.7834 20.4813 36.5217L23.053 33.95ZM17.0421 40.9579C16.7463 40.6621 16.5449 40.2853 16.4633 39.875C16.3817 39.4647 16.4236 39.0395 16.5836 38.653C16.7437 38.2665 17.0148 37.9362 17.3626 37.7038C17.7104 37.4714 18.1193 37.3473 18.5377 37.3473C18.956 37.3473 19.3649 37.4714 19.7127 37.7038C20.0605 37.9362 20.3316 38.2665 20.4917 38.653C20.6517 39.0395 20.6936 39.4647 20.612 39.875C20.5304 40.2853 20.329 40.6621 20.0332 40.9579C19.6362 41.354 19.0984 41.5764 18.5377 41.5764C17.9769 41.5764 17.4391 41.354 17.0421 40.9579Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M17.0421 40.9579C16.7463 40.6621 16.5449 40.2853 16.4633 39.875C16.3817 39.4647 16.4236 39.0395 16.5836 38.653C16.7437 38.2665 17.0148 37.9362 17.3626 37.7038C17.7104 37.4714 18.1193 37.3473 18.5377 37.3473C18.956 37.3473 19.3649 37.4714 19.7127 37.7038C20.0605 37.9362 20.3316 38.2665 20.4917 38.653C20.6517 39.0395 20.6936 39.4647 20.612 39.875C20.5304 40.2853 20.329 40.6621 20.0332 40.9579C19.6362 41.354 19.0984 41.5764 18.5377 41.5764C17.9769 41.5764 17.4391 41.354 17.0421 40.9579Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M23.053 33.95L24.4238 34.5732L21.4783 37.5187C21.2166 37.1226 20.8774 36.7834 20.4813 36.5217L23.053 33.95Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M40.9706 23.0115L39.961 22.002C40.7197 21.9026 41.4247 21.5567 41.9676 21.0175C42.295 20.6902 42.5546 20.3016 42.7318 19.8739C42.9089 19.4462 43.0001 18.9878 43.0001 18.5249C43.0001 18.062 42.909 17.6036 42.7318 17.1759C42.5547 16.7482 42.295 16.3596 41.9677 16.0323C41.6404 15.7049 41.2518 15.4453 40.8241 15.2681C40.3964 15.091 39.938 14.9998 39.4751 14.9998C39.0122 14.9997 38.5538 15.0909 38.1261 15.2681C37.6985 15.4452 37.3099 15.7049 36.9825 16.0322C36.4433 16.5751 36.0974 17.2801 35.9981 18.0388L34.9885 17.0292C34.9231 16.9637 34.8454 16.9117 34.7598 16.8763C34.6743 16.8408 34.5826 16.8225 34.49 16.8225C34.3974 16.8225 34.3057 16.8408 34.2202 16.8763C34.1346 16.9117 34.0569 16.9637 33.9915 17.0292L26.0153 25.0054C25.8833 25.1377 25.8091 25.317 25.8091 25.5039C25.8091 25.6908 25.8833 25.8701 26.0153 26.0024C26.0691 26.0558 26.1309 26.1005 26.1984 26.1349L34.1745 30.123C34.307 30.1889 34.4568 30.2116 34.6028 30.1879C34.7489 30.1641 34.8838 30.0951 34.9885 29.9905L40.9706 24.0086C41.0361 23.9431 41.0881 23.8654 41.1235 23.7799C41.159 23.6943 41.1773 23.6026 41.1773 23.51C41.1773 23.4174 41.159 23.3258 41.1235 23.2402C41.0881 23.1547 41.0361 23.077 40.9706 23.0115ZM40.9706 17.0296C41.2664 17.3253 41.4678 17.7022 41.5494 18.1125C41.6311 18.5228 41.5892 18.948 41.4291 19.3345C41.269 19.721 40.9979 20.0513 40.6501 20.2837C40.3023 20.5161 39.8934 20.6401 39.4751 20.6401C39.0568 20.6401 38.6479 20.5161 38.3 20.2837C37.9522 20.0513 37.6812 19.721 37.5211 19.3345C37.361 18.948 37.3191 18.5228 37.4007 18.1125C37.4823 17.7022 37.6838 17.3253 37.9796 17.0296C38.3765 16.6334 38.9143 16.4109 39.475 16.4109C40.0358 16.4108 40.5736 16.6332 40.9706 17.0292V17.0296ZM34.3506 28.6346L27.7036 25.3115L32.4961 20.5188L37.4812 25.5039L34.3506 28.6346ZM38.4781 24.5069L33.493 19.5218L34.49 18.5247L39.4751 23.5099L38.4781 24.5069Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M34.3506 28.6346L27.7036 25.3115L32.4961 20.5188L37.4812 25.5039L34.3506 28.6346Z"
                          fill="#3C3C3C"
                        />
                        <path
                          d="M40.9706 17.0296C41.2664 17.3253 41.4678 17.7022 41.5494 18.1125C41.6311 18.5228 41.5892 18.948 41.4291 19.3345C41.269 19.721 40.9979 20.0513 40.6501 20.2837C40.3023 20.5161 39.8934 20.6401 39.4751 20.6401C39.0568 20.6401 38.6479 20.5161 38.3 20.2837C37.9522 20.0513 37.6812 19.721 37.5211 19.3345C37.361 18.948 37.3191 18.5228 37.4007 18.1125C37.4823 17.7022 37.6838 17.3253 37.9796 17.0296C38.3765 16.6334 38.9143 16.4109 39.475 16.4109C40.0358 16.4108 40.5736 16.6332 40.9706 17.0292V17.0296Z"
                          fill="#3C3C3C"
                        />
                      </svg>
                    </div>
                    <div class="service__title">Автозапчасти</div>
                  </div>
                  <div class="service__body">
                    <div class="service__text">
                      Широкий выбор для популярных марок. Бонус за покупку у
                      нас.
                    </div>
                  </div>
                  <div class="service__bottom">
                    <a href="./Auto-parts.html" class="action__link"
                      >Подробнее<svg
                        class="action-arrow"
                        width="15"
                        height="8"
                        viewBox="0 0 15 8"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M14.4957 4.31661C14.6706 4.14175 14.6706 3.85825 14.4957 3.68338L11.6462 0.833849C11.4713 0.658987 11.1878 0.658988 11.0129 0.833849C10.8381 1.00871 10.8381 1.29222 11.0129 1.46708L13.5458 4L11.0129 6.53292C10.8381 6.70778 10.8381 6.99129 11.0129 7.16615C11.1878 7.34101 11.4713 7.34101 11.6462 7.16615L14.4957 4.31661ZM0.179077 4.44776L14.1791 4.44776L14.1791 3.55224L0.179077 3.55224L0.179077 4.44776Z"
                          fill="#FBC22E"
                        />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="repair-wrapper">
            <div class="preview-third_block">
              <div class="preview-third_block__text">
                <b>забронируйте подъёмник сейчас, заполнив форму ниже!</b>
              </div>
            </div>
          </div>
          <div class="landing_block_item third_block">
            
            <form action="telegram.php" class="form-repair" id="repair-form">
              <div class="left_part_form">
                <h2>быстрая запись</h2>
                <p>
                 Выберите вид услуги и оставьте номер, мы перезвоним и запишем
                 вас в течение минуты.
                </p>
                </div>
              <div class="right_part_form">
                <!-- <div id="car-model" class="select">
                  <div class="select__title">
                    <span class="select__text">Марка автомобиля</span>
                  </div>
                  <div class="select__box">
                    <input
                      name="carModel"
                      class="select__input"
                      type="hidden"
                    />
                    <div class="select__in"></div>
                    <div class="select__list">
                      <div class="select__item" data-value="1">
                        Акура (Acura)
                      </div>
                      <div class="select__item" data-value="2">
                        Грейт Волл (Great Wall)
                      </div>
                      <div class="select__item" data-value="3">
                        Датсун (Datsun)
                      </div>
                      <div class="select__item" data-value="4">
                        Додж (Dodge)
                      </div>
                      <div class="select__item" data-value="5">
                        Исузу (Isuzu)
                      </div>
                      <div class="select__item" data-value="6">Киа (KIA)</div>
                      <div class="select__item" data-value="7">
                        Лифан (LIFAN)
                      </div>
                      <div class="select__item" data-value="8">
                        Мазда (Mazda)
                      </div>
                      <div class="select__item" data-value="9">
                        Митсубиши (Mitsubishi)
                      </div>
                      <div class="select__item" data-value="10">
                        Ниссан (Nissan)
                      </div>
                      <div class="select__item" data-value="11">
                        Опель (Opel)
                      </div>
                      <div class="select__item" data-value="12">
                        Пежо (Peugeot)
                      </div>
                      <div class="select__item" data-value="13">
                        Ситроен (Citroen)
                      </div>
                      <div class="select__item" data-value="14">
                        Субару (Subaru)
                      </div>
                      <div class="select__item" data-value="15">
                        Сузуки (Suzuki)
                      </div>
                      <div class="select__item" data-value="16">
                        Тойота (Toyota)
                      </div>
                      <div class="select__item" data-value="17">
                        Фольксваген (Volkswagen)
                      </div>
                      <div class="select__item" data-value="18">
                        Форд (Ford)
                      </div>
                      <div class="select__item" data-value="19">
                        Хавал (Haval)
                      </div>
                      <div class="select__item" data-value="20">
                        Хендай (Hyundai)
                      </div>
                      <div class="select__item" data-value="21">
                        Хонда (Honda)
                      </div>
                      <div class="select__item" data-value="22">
                        Чангфенг (ChangFeng)
                      </div>
                      <div class="select__item" data-value="23">
                        Шевроле (Chevrolet)
                      </div>
                      <div class="select__item" data-value="24">
                        Шкода (Skoda)
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- <div id="repair-type" class="select">
                  <div class="select__title">
                    <span class="select__text">Вид ремонта</span>
                  </div>
                  <div class="select__box">
                    <input
                      name="repairType"
                      class="select__input"
                      type="hidden"
                    />
                    <div class="select__in"></div>
                    <div class="select__list">
                      <div class="select__item" data-value="1">
                        Нанесение герметика на колесный диск
                      </div>
                      <div class="select__item" data-value="2">
                        Ремонт покрышки жгутом
                      </div>
                      <div class="select__item" data-value="3">
                        Ремонт покрышки заплаткой
                      </div>
                      <div class="select__item" data-value="4">
                        Установка вентиля бескамерной шины
                      </div>
                      <div class="select__item" data-value="5">
                        Установка камеры колеса
                      </div>
                    </div>
                  </div>
                </div> -->
                <div id="service" class="select">
                  <div class="select__title">
                    <span class="select__text">Выбор сервиса</span>
                  </div>
                  <div class="select__box">
                    <input name="service" class="select__input" type="hidden" />
                    <div class="select__in"></div>
                    <div class="select__list">
                      <div
                        class="select__item select__service-item"
                        data-value="1"
                      >
                        Автосервис
                      </div>
                      <div
                        class="select__item select__service-item"
                        data-value="2"
                      >
                        Диагностика
                      </div>
                      <div
                        class="select__item select__service-item"
                        data-value="3"
                      >
                        Шиномонтаж
                      </div>
                    </div>
                  </div>
                </div>
                <div class="third_block__bottom">
                <div class="third_block__date">
                  <label class="select__title" for="date">Удобная дата</label>
                  <input
                    class="third_block__input maskdate third_block__date-input"
                    id="date"
                    name="date"
                    type="text"
                    placeholder="дд.мм.гг"
                  />
                </div>
                <div class="third_block__phone">
                  <label class="select__title" for="phone"
                    >Телефон
                    <div class="third_block__red-star">*</div></label
                  >
                  <input
                    class="third_block__input maskphone"
                    id="phone"
                    name="phone"
                    type="text"
                    placeholder="+7 (     )  _ _ - _ _ - _ _ _"
                  />
                </div>
              </div>
                <div class="third_block__footer">
                  <button id="repair" class="btn" type="submit">
                    <span class="btn__text">Записаться сейчас</span>
                  </button>
                  <div class="third_block__faster">
                    <p class="third_block__faster-title">Срочно</p>
                    <label class="switch">
                      <input id="faster" name="faster" type="checkbox" />
                      <span class="slider"></span>
                    </label>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="about">
            <div class="about__title">О нас</div>
            <p class="about__content">
              <span class="text-yellow"
                >Автосервис Trust Car — место где о вас заботятся.</span
              ><br />
              <br />
              Мы не меняем детали, мы выкатываем отремонтированные авто готовые
              к эксплуатации. Ваши проблемы — наши. Клиенты ценят
              профессиональный подход, который помогает им годами поддерживать
              автомобиль в отличном состоянии. Все записи о ремонте,
              автозапчастях и денежных вложениях хранятся в вашем аккаунте, к
              которому всегда есть доступ.<br /><br />Trust Car — это 600
              квадратных метров полезного пространства для водителей Краснодара,
              охраняемая парковка, комфортный зал ожидания и партнёрская
              программа.
            </p>
            <div class="about__button">
              <button class="button">
                <a href="./About-us.html" class="button__text"
                  >Подробнее о нас</a
                >
              </button>
            </div>
          </div>
          <div class="wrapper">
          <div class="landing_block_item eight_block" id="anchor_service">
          <h2>Другие наши услуги</h2>
          <div>
            <ul>
              <a href="./Tire-fitting.html"
                ><li><span class="settings_all set1"></span>Шиномонтаж</li></a
              >
              <a href="./Gear-diagnostics.html"
                ><li>
                  <span class="settings_all set2"></span>Диагностика ходовой
                  части
                </li></a
              >
              <a href="./Shock-absorber.html"
                ><li>
                  <span class="settings_all set3"></span>Замена амортизаторов
                </li></a
              >
              <a href="./Throttle.html"
                ><li>
                  <span class="settings_all set4"></span>Прочистка дроссельной
                  заслонки
                </li></a
              >
              <a href="./Oil-engine.html"
                ><li>
                  <span class="settings_all set5"></span>Замена масла ДВС
                </li></a
              >
              <a href="./All-diagnostic.html"
                ><li>
                  <span class="settings_all set16"></span>Комплексная
                  диагностика автомобиля
                </li></a
              >
            </ul>
            <ul>
              <a href="./Engine-diagnostic.html"
                ><li>
                  <span class="settings_all set6"></span>Диагностика двигателя и
                  электросистемы
                </li></a
              >
              <a href="./Pads.html"
                ><li>
                  <span class="settings_all set7"></span>Замена колодок и
                  тормозных дисков
                </li></a
              >
              <a href="./Timing-belt.html"
                ><li>
                  <span class="settings_all set8"></span>Замена ремня ГРМ
                </li></a
              >
              <a href="./Conditioner.html"
                ><li>
                  <span class="settings_all set9"></span>Кондиционеры и
                  отопление
                </li></a
              >
              <a href="./Nozzle.html"
                ><li>
                  <span class="settings_all set10"></span>Аппаратная прочистка
                  форсунок
                </li></a
              >
              <a href="./Generator-belt.html"
                ><li>
                  <span class="settings_all set11"></span>Замена ремня
                  генератора
                </li></a
              >
            </ul>
            <ul>
              <a href="./Wheel-alignment.html"
                ><li>
                  <span class="settings_all set12"></span>Развал - схождение
                </li></a
              >
              <a href="./Transmission-oils.html"
                ><li>
                  <span class="settings_all set13"></span>Замена масла АКПП
                </li></a
              >
              <a href="./Catalyst.html"
                ><li>
                  <span class="settings_all set15"></span>Удаление катализатора
                </li></a
              >
              <a href="./Auto-parts.html"
                ><li><span class="settings_all set14"></span>Запчасти</li></a
              >
            </ul>
          </div>
        </div>
      </div>
        <div class="wrapper">
          <div class="map">
            <div id="contacts" class="map__left">
              <div class="map__title">контакты</div>
              <div class="map__item">
                <p class="map__item-title">Адрес:</p>
                <p class="map__item-text">
                  Краснодар, <br />
                  ул. Коммунаров, 268 лит Г 39
                </p>
              </div>
              <div class="map__item">
                <p class="map__item-title">Телефон:</p>
                <a href="tel:+78612060723" class="map__item-text"
                  >+7 861 206 07 23</a
                >
                <a
                  href="https://wa.me/79891232351"
                  class="map__item-text link-whatsapp"
                  >Написать в WhatsApp</a
                >
              </div>
              <div class="map__item">
                <p class="map__item-title">Почта:</p>
                <a href="mailto:mail@trustcar.ru" class="map__item-text"
                  >mail@trustcar.ru</a
                >
              </div>
              <div class="map__item">
                <p class="map__item-title">Инстаграм:</p>
                <a
                  href="https://www.instagram.com/trustcar_service/"
                  class="map__item-text"
                  >trustcar_service</a
                >
              </div>
              <div class="map__car-box">
                <div class="map__car-img">
                  <svg
                    width="38"
                    height="38"
                    viewBox="0 0 38 38"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="1"
                      y="1"
                      width="36"
                      height="36"
                      rx="18"
                      fill="#FBC22E"
                      stroke="#FAFAFC"
                      stroke-width="1.52672"
                    />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M17.0059 13.0767C18.6127 13.164 20.1959 13.5058 21.6956 14.0898C23.1046 14.6699 24.4172 15.461 25.5876 16.4364L25.8613 16.6651L17.802 16.2631L17.0059 13.0767Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M31 22.389H30.1126C30.1077 22.3559 30.0995 22.3243 30.0935 22.2916C30.0863 22.2487 30.0794 22.2102 30.0703 22.1697C30.0585 22.1154 30.0439 22.0622 30.0276 22.0087C30.0173 21.971 30.0074 21.9329 29.9953 21.896C29.9772 21.8404 29.9564 21.7863 29.9354 21.7323C29.922 21.699 29.9106 21.6655 29.8967 21.6329C29.8832 21.6004 29.8651 21.5657 29.8489 21.5317H31V22.389Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M25.0004 22.8178C25.0004 24.0011 25.9598 24.9606 27.1431 24.9606C28.3267 24.9606 29.2861 24.0011 29.2861 22.8178C29.2861 21.6342 28.3267 20.6748 27.1431 20.6748C25.9598 20.6748 25.0004 21.6342 25.0004 22.8178Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M10.4793 13.4983L13.9965 13.1271C14.6001 13.0641 15.2069 13.0326 15.8136 13.0332C15.9133 13.0332 16.0133 13.038 16.1136 13.0397L16.9082 16.2176L11.9637 15.9706L10.4793 13.4983Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M9.13019 19.4927L9.55868 17.7784C9.59051 17.6504 9.56152 17.5147 9.48033 17.4107C9.39948 17.3069 9.27485 17.246 9.14274 17.246H7.12032L8.62032 15.371C8.725 15.2405 8.744 15.0612 8.66926 14.9115L8.0887 13.7502L9.53968 13.5972L11.3471 16.6097C11.4205 16.7323 11.5501 16.8101 11.6931 16.8175L17.1258 17.0884L18.0224 20.6745H15.1427V21.5318H18.2367L18.4512 22.389H13.8268C13.8221 22.3559 13.8137 22.3243 13.8077 22.2917C13.8006 22.2487 13.7937 22.2102 13.7846 22.1697C13.7728 22.1154 13.7582 22.0623 13.7418 22.0088C13.7316 21.971 13.7217 21.9329 13.7096 21.896C13.6917 21.8405 13.6707 21.7864 13.6497 21.7323C13.6363 21.6991 13.6249 21.6655 13.6109 21.6329C13.5844 21.5716 13.5546 21.5122 13.5255 21.4529C13.5133 21.4292 13.5031 21.405 13.4904 21.3818C13.446 21.3008 13.3982 21.2222 13.3467 21.1457C13.3352 21.1284 13.3217 21.113 13.3103 21.0959C13.2674 21.0372 13.2245 20.9792 13.1817 20.9245C13.1607 20.8987 13.1391 20.8747 13.1161 20.8495C13.0771 20.8067 13.0384 20.7608 12.9974 20.7209C12.9714 20.6944 12.9439 20.6694 12.9164 20.6443C12.8764 20.6065 12.8367 20.5688 12.7948 20.5331C12.7651 20.5079 12.7341 20.4844 12.7034 20.4603C12.6606 20.4273 12.6176 20.3952 12.5749 20.3642C12.5423 20.3417 12.5094 20.3215 12.4752 20.2985C12.4324 20.2697 12.3858 20.2417 12.3396 20.2157C12.3049 20.1954 12.2698 20.1765 12.234 20.1579C12.1865 20.1332 12.1387 20.1102 12.0897 20.0884C12.0533 20.0716 12.0169 20.0554 11.9802 20.0404C11.9294 20.0198 11.8776 20.0018 11.8255 19.9839C11.7885 19.9709 11.7516 19.9578 11.7135 19.9465C11.6587 19.9304 11.6029 19.9169 11.547 19.9036C11.5102 19.8952 11.4742 19.8852 11.437 19.8779C11.3744 19.8654 11.3107 19.8568 11.2464 19.8486C11.2146 19.8444 11.1833 19.8384 11.1511 19.8356C11.0547 19.8261 10.9566 19.8204 10.8576 19.8204C10.7096 19.8215 10.5617 19.8336 10.4159 19.8568C10.3865 19.8612 10.357 19.865 10.3298 19.8702C10.1927 19.8944 10.0576 19.9284 9.92508 19.9714C9.90117 19.9796 9.87769 19.9892 9.85395 19.9979C9.73311 20.0405 9.61562 20.0912 9.50157 20.1491C9.48523 20.1573 9.46812 20.1641 9.45246 20.1728C9.33248 20.2378 9.21697 20.3106 9.10688 20.3908C9.08185 20.4089 9.05742 20.4273 9.03291 20.4461C8.92505 20.5286 8.82296 20.6178 8.72706 20.714C8.71476 20.7262 8.70401 20.7397 8.69257 20.7522C8.60562 20.843 8.52485 20.9393 8.45028 21.0406C8.43454 21.0623 8.41734 21.0836 8.40186 21.1054C8.32488 21.2158 8.25521 21.3316 8.19363 21.4513C8.17987 21.4778 8.16774 21.5048 8.15484 21.5314C8.09532 21.6538 8.04441 21.7802 8.002 21.9097C8.002 21.9142 7.99822 21.9183 7.99693 21.9227L7 20.9258V19.8175H8.71424C8.91103 19.8175 9.08236 19.6836 9.13019 19.4927ZM12.1427 18.5318H14.7142V17.6745H12.1427V18.5318Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M8.59473 18.1035L8.38048 18.9605H7.0008V18.1035H8.59473Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M8.71425 22.8178C8.71425 24.0011 9.67368 24.9606 10.8573 24.9606C12.0406 24.9606 13 24.0011 13 22.8178C13 21.6342 12.0406 20.6748 10.8573 20.6748C9.67368 20.6748 8.71425 21.6342 8.71425 22.8178Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M18.9061 20.674L18.0207 17.1318L27.2712 17.5931L29.9061 18.6171C30.5824 18.996 31.0008 19.7112 31 20.4865V20.674H29.2381C29.2264 20.6625 29.2137 20.6517 29.2013 20.6407C29.1613 20.6029 29.1216 20.5653 29.0797 20.5299C29.05 20.5044 29.019 20.4808 28.9884 20.457C28.9453 20.4238 28.9026 20.3917 28.8596 20.361C28.8271 20.3382 28.7941 20.318 28.7602 20.2947C28.7174 20.2662 28.6707 20.2381 28.6244 20.2122C28.5897 20.192 28.5546 20.1732 28.519 20.1543C28.4715 20.1299 28.4234 20.1067 28.3745 20.0848C28.3381 20.0681 28.3016 20.0518 28.2648 20.0369C28.2142 20.0162 28.1624 19.9983 28.1106 19.9801C28.0732 19.9676 28.0363 19.9541 27.9984 19.943C27.9434 19.9266 27.8877 19.9135 27.8319 19.9001C27.7951 19.8915 27.759 19.8817 27.7219 19.8744C27.6594 19.862 27.5954 19.8534 27.5311 19.8453C27.4994 19.8412 27.468 19.8351 27.436 19.8321C27.3396 19.8226 27.2414 19.817 27.1424 19.817C27.0434 19.817 26.9453 19.8226 26.8489 19.8321C26.8167 19.8351 26.7854 19.8412 26.7536 19.8453C26.6893 19.8534 26.6251 19.862 26.563 19.8744C26.5258 19.8817 26.4898 19.8915 26.453 19.9001C26.397 19.9135 26.3413 19.9266 26.2865 19.943C26.2484 19.9541 26.2115 19.9676 26.1743 19.9801C26.1224 19.9983 26.0706 20.0162 26.0198 20.0369C25.9831 20.0518 25.9467 20.0681 25.9102 20.0848C25.8613 20.1067 25.8135 20.1278 25.766 20.1543C25.7302 20.1732 25.6951 20.192 25.6604 20.2122C25.6142 20.2381 25.5691 20.2662 25.5246 20.2947C25.4906 20.3163 25.4577 20.3377 25.4251 20.361C25.3824 20.3917 25.3393 20.4238 25.2966 20.457C25.2656 20.4808 25.2346 20.5044 25.2052 20.5299C25.1624 20.5653 25.1234 20.6029 25.0836 20.6407C25.0561 20.6659 25.0286 20.6908 25.0026 20.7176C24.9596 20.7603 24.9228 20.803 24.8839 20.846C24.862 20.8713 24.841 20.8953 24.8183 20.9211C24.7729 20.9767 24.7324 21.0346 24.6897 21.0926C24.6781 21.1096 24.6647 21.125 24.6533 21.1421C24.6018 21.2184 24.554 21.2971 24.5096 21.3783C24.4969 21.4014 24.4864 21.4258 24.4745 21.4494C24.4441 21.5085 24.4141 21.5681 24.3891 21.6294C24.3751 21.662 24.3637 21.6954 24.3503 21.7288C24.3293 21.7829 24.3073 21.8368 24.2904 21.8925C24.2783 21.9295 24.2684 21.9675 24.2582 22.0051C24.2431 22.0589 24.2285 22.112 24.2151 22.1664C24.2063 22.2068 24.1993 22.2469 24.1923 22.2882C24.1863 22.3206 24.1779 22.3524 24.1732 22.3855H19.3346L19.1203 21.5285H23.7142V20.674H18.9061ZM21.5715 17.674H19.4285V18.5313H21.5715V17.674Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="24"
                          height="24"
                          fill="white"
                          transform="matrix(-1 0 0 1 30.999 6.99951)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <p class="map__car-text">Маршрут только в будние дни</p>
              </div>
              <div class="map__car-box">
                <div class="map__car-img">
                  <svg
                    width="38"
                    height="38"
                    viewBox="0 0 38 38"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect
                      x="1"
                      y="1"
                      width="36"
                      height="36"
                      rx="18"
                      fill="#3C3C3C"
                      stroke="white"
                      stroke-width="1.52672"
                    />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M17.0059 13.0771C18.6127 13.1644 20.1959 13.5063 21.6956 14.0903C23.1046 14.6704 24.4172 15.4615 25.5876 16.4369L25.8613 16.6656L17.802 16.2636L17.0059 13.0771Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M31 22.3895H30.1126C30.1077 22.3564 30.0995 22.3248 30.0935 22.2921C30.0863 22.2492 30.0794 22.2107 30.0703 22.1702C30.0585 22.1159 30.0439 22.0627 30.0276 22.0092C30.0173 21.9715 30.0074 21.9334 29.9953 21.8965C29.9772 21.8409 29.9564 21.7868 29.9354 21.7328C29.922 21.6995 29.9106 21.666 29.8967 21.6334C29.8832 21.6009 29.8651 21.5662 29.8489 21.5322H31V22.3895Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M25.0004 22.8183C25.0004 24.0016 25.9598 24.961 27.1431 24.961C28.3267 24.961 29.2861 24.0016 29.2861 22.8183C29.2861 21.6347 28.3267 20.6753 27.1431 20.6753C25.9598 20.6753 25.0004 21.6347 25.0004 22.8183Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M10.4793 13.4988L13.9965 13.1276C14.6001 13.0646 15.2069 13.0331 15.8136 13.0337C15.9133 13.0337 16.0133 13.0385 16.1136 13.0402L16.9082 16.2181L11.9637 15.9711L10.4793 13.4988Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M9.13019 19.4932L9.55868 17.7789C9.59051 17.6508 9.56152 17.5152 9.48033 17.4112C9.39948 17.3074 9.27485 17.2465 9.14274 17.2465H7.12032L8.62032 15.3715C8.725 15.2409 8.744 15.0617 8.66926 14.912L8.0887 13.7507L9.53968 13.5977L11.3471 16.6102C11.4205 16.7328 11.5501 16.8106 11.6931 16.818L17.1258 17.0889L18.0224 20.675H15.1427V21.5323H18.2367L18.4512 22.3895H13.8268C13.8221 22.3564 13.8137 22.3248 13.8077 22.2922C13.8006 22.2492 13.7937 22.2107 13.7846 22.1702C13.7728 22.1159 13.7582 22.0628 13.7418 22.0093C13.7316 21.9715 13.7217 21.9334 13.7096 21.8965C13.6917 21.8409 13.6707 21.7868 13.6497 21.7328C13.6363 21.6995 13.6249 21.666 13.6109 21.6334C13.5844 21.5721 13.5546 21.5127 13.5255 21.4534C13.5133 21.4297 13.5031 21.4055 13.4904 21.3823C13.446 21.3013 13.3982 21.2227 13.3467 21.1462C13.3352 21.1289 13.3217 21.1135 13.3103 21.0964C13.2674 21.0377 13.2245 20.9797 13.1817 20.9249C13.1607 20.8992 13.1391 20.8752 13.1161 20.8499C13.0771 20.8072 13.0384 20.7613 12.9974 20.7214C12.9714 20.6949 12.9439 20.6699 12.9164 20.6448C12.8764 20.607 12.8367 20.5693 12.7948 20.5336C12.7651 20.5084 12.7341 20.4849 12.7034 20.4608C12.6606 20.4278 12.6176 20.3956 12.5749 20.3647C12.5423 20.3422 12.5094 20.3219 12.4752 20.299C12.4324 20.2702 12.3858 20.2422 12.3396 20.2162C12.3049 20.1959 12.2698 20.177 12.234 20.1584C12.1865 20.1337 12.1387 20.1107 12.0897 20.0889C12.0533 20.0721 12.0169 20.0559 11.9802 20.0409C11.9294 20.0203 11.8776 20.0022 11.8255 19.9844C11.7885 19.9714 11.7516 19.9583 11.7135 19.9469C11.6587 19.9309 11.6029 19.9174 11.547 19.9041C11.5102 19.8957 11.4742 19.8857 11.437 19.8784C11.3744 19.8659 11.3107 19.8573 11.2464 19.8491C11.2146 19.8449 11.1833 19.8389 11.1511 19.8361C11.0547 19.8266 10.9566 19.8209 10.8576 19.8209C10.7096 19.822 10.5617 19.8341 10.4159 19.8573C10.3865 19.8617 10.357 19.8655 10.3298 19.8706C10.1927 19.8949 10.0576 19.9289 9.92508 19.9719C9.90117 19.9801 9.87769 19.9897 9.85395 19.9984C9.73311 20.041 9.61562 20.0917 9.50157 20.1496C9.48523 20.1578 9.46812 20.1646 9.45246 20.1733C9.33248 20.2383 9.21697 20.3111 9.10688 20.3913C9.08185 20.4094 9.05742 20.4278 9.03291 20.4466C8.92505 20.5291 8.82296 20.6183 8.72706 20.7145C8.71476 20.7267 8.70401 20.7402 8.69257 20.7527C8.60562 20.8435 8.52485 20.9397 8.45028 21.0411C8.43454 21.0628 8.41734 21.0841 8.40186 21.1059C8.32488 21.2163 8.25521 21.3321 8.19363 21.4518C8.17987 21.4783 8.16774 21.5053 8.15484 21.5319C8.09532 21.6543 8.04441 21.7807 8.002 21.9102C8.002 21.9147 7.99822 21.9188 7.99693 21.9232L7 20.9262V19.818H8.71424C8.91103 19.818 9.08236 19.6841 9.13019 19.4932ZM12.1427 18.5323H14.7142V17.675H12.1427V18.5323Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M8.59473 18.104L8.38048 18.961H7.0008V18.104H8.59473Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M8.71425 22.8183C8.71425 24.0016 9.67368 24.961 10.8573 24.961C12.0406 24.961 13 24.0016 13 22.8183C13 21.6347 12.0406 20.6753 10.8573 20.6753C9.67368 20.6753 8.71425 21.6347 8.71425 22.8183Z"
                        fill="#FFB800"
                      />
                      <path
                        d="M18.9061 20.6745L18.0207 17.1323L27.2712 17.5936L29.9061 18.6176C30.5824 18.9965 31.0008 19.7117 31 20.487V20.6745H29.2381C29.2264 20.663 29.2137 20.6522 29.2013 20.6412C29.1613 20.6034 29.1216 20.5658 29.0797 20.5304C29.05 20.5049 29.019 20.4813 28.9884 20.4575C28.9453 20.4243 28.9026 20.3922 28.8596 20.3615C28.8271 20.3387 28.7941 20.3184 28.7602 20.2952C28.7174 20.2667 28.6707 20.2386 28.6244 20.2127C28.5897 20.1925 28.5546 20.1737 28.519 20.1548C28.4715 20.1304 28.4234 20.1072 28.3745 20.0853C28.3381 20.0686 28.3016 20.0523 28.2648 20.0374C28.2142 20.0167 28.1624 19.9988 28.1106 19.9806C28.0732 19.968 28.0363 19.9546 27.9984 19.9434C27.9434 19.9271 27.8877 19.914 27.8319 19.9006C27.7951 19.892 27.759 19.8822 27.7219 19.8749C27.6594 19.8625 27.5954 19.8539 27.5311 19.8457C27.4994 19.8417 27.468 19.8356 27.436 19.8326C27.3396 19.8231 27.2414 19.8175 27.1424 19.8175C27.0434 19.8175 26.9453 19.8231 26.8489 19.8326C26.8167 19.8356 26.7854 19.8417 26.7536 19.8457C26.6893 19.8539 26.6251 19.8625 26.563 19.8749C26.5258 19.8822 26.4898 19.892 26.453 19.9006C26.397 19.914 26.3413 19.9271 26.2865 19.9434C26.2484 19.9546 26.2115 19.968 26.1743 19.9806C26.1224 19.9988 26.0706 20.0167 26.0198 20.0374C25.9831 20.0523 25.9467 20.0686 25.9102 20.0853C25.8613 20.1072 25.8135 20.1283 25.766 20.1548C25.7302 20.1737 25.6951 20.1925 25.6604 20.2127C25.6142 20.2386 25.5691 20.2667 25.5246 20.2952C25.4906 20.3168 25.4577 20.3381 25.4251 20.3615C25.3824 20.3922 25.3393 20.4243 25.2966 20.4575C25.2656 20.4813 25.2346 20.5049 25.2052 20.5304C25.1624 20.5658 25.1234 20.6034 25.0836 20.6412C25.0561 20.6664 25.0286 20.6913 25.0026 20.718C24.9596 20.7608 24.9228 20.8035 24.8839 20.8465C24.862 20.8718 24.841 20.8957 24.8183 20.9215C24.7729 20.9772 24.7324 21.0351 24.6897 21.093C24.6781 21.1101 24.6647 21.1255 24.6533 21.1426C24.6018 21.2189 24.554 21.2976 24.5096 21.3788C24.4969 21.4019 24.4864 21.4262 24.4745 21.4499C24.4441 21.509 24.4141 21.5686 24.3891 21.6299C24.3751 21.6625 24.3637 21.6959 24.3503 21.7293C24.3293 21.7834 24.3073 21.8373 24.2904 21.893C24.2783 21.93 24.2684 21.968 24.2582 22.0056C24.2431 22.0594 24.2285 22.1125 24.2151 22.1669C24.2063 22.2073 24.1993 22.2474 24.1923 22.2887C24.1863 22.3211 24.1779 22.3529 24.1732 22.386H19.3346L19.1203 21.5289H23.7142V20.6745H18.9061ZM21.5715 17.6745H19.4285V18.5318H21.5715V17.6745Z"
                        fill="#FFB800"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="24"
                          height="24"
                          fill="white"
                          transform="matrix(-1 0 0 1 30.999 7)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <p class="map__car-text">Ежедневный маршрут</p>
              </div>
            </div>
            <div class="map__right">
              <img class="map__gif-map" src="./gif-map.gif" alt="" />
            </div>
          </div>
        </div>
      </div>
      </section>
    </main>
    <footer id="footer">
      <div class="footer_item logo_item_foot">
        <a href="/">
          <img src="./logo_foot.svg" alt="logo_foot" />
        </a>
      </div>
      <div class="footer_item icons_item">
        <div class="fi_ii wapp">
          <a href="https://wa.me/79891232351">
            <img src="wapp_foot.svg" alt="whatsapp" />
          </a>
        </div>
        <div class="fi_ii insta">
          <a href="https://www.instagram.com/trustcar_service/">
            <img src="instagram_foot.svg" alt="instagram" />
          </a>
        </div>
        <div class="fi_ii email">
          <a href="mailto:mail@trustcar.ru">
            <img src="mail_foot.svg" alt="email" />
          </a>
        </div>
      </div>
      <div class="footer_item footer_nav_item">
        <nav class="footer_navigation" role="navigation">
          <ul>
            <a href="./index.html"><li>Главная</li></a>
            <a href="#anchor_service"><li>Услуги</li></a>
            <a href="./Promotions.html"><li>Акции</li></a>
            <a href="./About-us.html"><li>О нас</li></a>
            <a href="#contacts"><li>Контакты</li></a>
          </ul>
        </nav>
      </div>
      <div class="address_foot">
        <span></span>
        <p>Краснодар, <br />ул. Коммунаров, 268 лит Г 39</p>
      </div>
      <div class="contacts_foot">
        <span></span>
        <a class="contacts-link" href="tel:+78612060723">+7 861 206 07 23</a>
      </div>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-7DSGD8339T"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7DSGD8339T');
      </script>
    </footer>
    <div id="popup-tires" class="popup-wrapper popup">
      <div class="popup-tires popup-default">
        <a href="#" class="popup-tires__close close-popup"
          ><svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.42713 8.00011L15.8954 1.53216C16.0346 1.39277 16.0346 1.1669 15.8954 1.02751L14.9729 0.104504C14.906 0.0377562 14.815 0 14.7204 0C14.6257 0 14.5348 0.0377562 14.4679 0.104504L7.99981 6.57262L1.5317 0.104504C1.3977 -0.0294971 1.16054 -0.0293285 1.02688 0.104504L0.104546 1.02751C-0.0348487 1.1669 -0.0348487 1.39277 0.104546 1.53216L6.57266 8.00011L0.104546 14.4681C-0.0348487 14.6074 -0.0348487 14.8333 0.104546 14.9727L1.02705 15.8957C1.09396 15.9625 1.18481 16.0002 1.27954 16.0002C1.37427 16.0002 1.46495 15.9625 1.53187 15.8957L7.99998 9.42759L14.4681 15.8957C14.535 15.9625 14.626 16.0002 14.7206 16.0002C14.8151 16.0002 14.9062 15.9625 14.9731 15.8957L15.8956 14.9727C16.0348 14.8333 16.0348 14.6074 15.8956 14.4681L9.42713 8.00011Z"
              fill="#3C3C3C"
            />
          </svg>
        </a>
        <div class="popup-tires__top">
          <div class="popup-tires__title">Шиномонтаж</div>
        </div>
        <div class="popup-tires__body">
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M16.7858 25.4688C16.5436 24.277 16.6004 23.0438 16.9511 21.8793C17.3017 20.7148 17.9353 19.6553 18.7953 18.7953C19.6553 17.9354 20.7148 17.3018 21.8793 16.9511C23.0438 16.6005 24.277 16.5437 25.4688 16.7858V12.6766C23.7356 12.4518 21.9739 12.6279 20.3195 13.1913C18.6651 13.7547 17.1621 14.6904 15.9262 15.9262C14.6904 17.1621 13.7547 18.6651 13.1913 20.3195C12.6279 21.9739 12.4518 23.7356 12.6766 25.4688H16.7858ZM21.2037 15.0125C21.3636 14.9417 21.5271 14.8736 21.6901 14.8099C21.7403 14.7902 21.7938 14.7805 21.8478 14.7815C21.9017 14.7825 21.9548 14.7941 22.0043 14.8157C22.0537 14.8373 22.0984 14.8684 22.1357 14.9073C22.1731 14.9461 22.2025 14.992 22.2221 15.0422C22.2418 15.0924 22.2513 15.146 22.2502 15.1999C22.2491 15.2538 22.2374 15.307 22.2157 15.3564C22.1941 15.4057 22.1629 15.4504 22.124 15.4877C22.0851 15.525 22.0392 15.5543 21.9889 15.5738C21.8373 15.6331 21.6849 15.6969 21.536 15.7626C21.4368 15.805 21.3249 15.8066 21.2246 15.7671C21.1242 15.7276 21.0435 15.6501 20.9998 15.5515C20.9561 15.4529 20.9531 15.3411 20.9913 15.2402C21.0295 15.1393 21.1058 15.0576 21.2039 15.0126L21.2037 15.0125ZM17.3478 17.7208C17.4687 17.5944 17.5938 17.4689 17.7203 17.3482C17.7591 17.3106 17.805 17.281 17.8553 17.2612C17.9056 17.2413 17.9593 17.2316 18.0134 17.2326C18.0675 17.2336 18.1208 17.2453 18.1703 17.267C18.2198 17.2887 18.2646 17.32 18.302 17.359C18.3394 17.3981 18.3687 17.4442 18.3882 17.4946C18.4078 17.545 18.4171 17.5988 18.4158 17.6528C18.4145 17.7069 18.4025 17.7601 18.3805 17.8095C18.3585 17.8589 18.3269 17.9035 18.2877 17.9407C18.1699 18.0534 18.0533 18.1703 17.9403 18.2881C17.8649 18.366 17.7617 18.4108 17.6534 18.4129C17.545 18.4149 17.4402 18.374 17.362 18.299C17.2837 18.2241 17.2382 18.1212 17.2356 18.0129C17.2329 17.9045 17.2732 17.7995 17.3478 17.7208ZM14.8091 21.692C14.8728 21.529 14.9411 21.3652 15.0119 21.2051C15.033 21.1549 15.064 21.1093 15.1029 21.0712C15.1418 21.033 15.188 21.003 15.2386 20.9829C15.2893 20.9628 15.3434 20.953 15.3979 20.954C15.4524 20.9551 15.5062 20.967 15.556 20.989C15.6058 21.0111 15.6508 21.0429 15.6882 21.0825C15.7256 21.1221 15.7548 21.1688 15.7739 21.2198C15.7931 21.2708 15.8019 21.3252 15.7999 21.3796C15.7978 21.4341 15.7849 21.4876 15.7619 21.537C15.6959 21.6862 15.6323 21.8389 15.5729 21.9908C15.5331 22.092 15.4549 22.1732 15.3553 22.2167C15.2557 22.2601 15.1429 22.2623 15.0418 22.2228C14.9406 22.1832 14.8592 22.1051 14.8156 22.0055C14.7719 21.906 14.7695 21.7933 14.8089 21.692H14.8091Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M23.8391 24.239C23.7853 24.2391 23.7319 24.2285 23.6821 24.2079C23.6324 24.1873 23.5872 24.1571 23.5491 24.1189L21.9824 22.5545C21.2145 23.4328 20.7552 24.5384 20.6746 25.7022H22.8953C23.004 25.7022 23.1084 25.7455 23.1853 25.8224C23.2622 25.8993 23.3054 26.0036 23.3054 26.1124C23.3054 26.2212 23.2622 26.3255 23.1853 26.4024C23.1084 26.4793 23.004 26.5226 22.8953 26.5226H20.6746C20.7664 27.6823 21.2243 28.7829 21.9823 29.6655L23.5491 28.0976C23.587 28.0589 23.6322 28.0281 23.682 28.007C23.7319 27.9859 23.7855 27.9749 23.8396 27.9746C23.8937 27.9743 23.9474 27.9847 23.9975 28.0053C24.0476 28.0259 24.0931 28.0561 24.1314 28.0944C24.1697 28.1327 24.2001 28.1781 24.2207 28.2282C24.2414 28.2782 24.2519 28.3319 24.2517 28.386C24.2515 28.4401 24.2405 28.4937 24.2195 28.5436C24.1985 28.5935 24.1678 28.6387 24.1292 28.6767L22.5608 30.2425C23.4441 30.9977 24.5444 31.4527 25.703 31.5421V29.3303C25.703 29.2215 25.7462 29.1172 25.8231 29.0403C25.9001 28.9634 26.0044 28.9201 26.1132 28.9201C26.2219 28.9201 26.3263 28.9634 26.4032 29.0403C26.4801 29.1172 26.5233 29.2215 26.5233 29.3303V31.5409C27.6813 31.4479 28.78 30.9903 29.6616 30.2337L28.1053 28.6764C28.0284 28.5994 27.9853 28.4949 27.9853 28.3861C27.9854 28.2772 28.0287 28.1728 28.1058 28.0959C28.1828 28.019 28.2873 27.9758 28.3961 27.9759C28.505 27.976 28.6094 28.0193 28.6863 28.0963L30.243 29.6549C30.9966 28.7746 31.4515 27.6779 31.5422 26.5226H29.3406C29.2318 26.5226 29.1275 26.4793 29.0505 26.4024C28.9736 26.3255 28.9304 26.2212 28.9304 26.1124C28.9304 26.0036 28.9736 25.8993 29.0505 25.8224C29.1275 25.7455 29.2318 25.7022 29.3406 25.7022H31.5422C31.4517 24.5454 30.9969 23.447 30.2432 22.5648L28.6867 24.1202C28.6097 24.1971 28.5052 24.2403 28.3963 24.2402C28.2874 24.2401 28.1831 24.1968 28.1061 24.1197C28.0292 24.0427 27.986 23.9382 27.9861 23.8293C27.9862 23.7205 28.0296 23.6161 28.1066 23.5391L29.6615 21.9816C28.78 21.225 27.6813 20.7673 26.5233 20.6744V22.885C26.5233 22.9938 26.4801 23.0981 26.4032 23.175C26.3263 23.252 26.2219 23.2952 26.1132 23.2952C26.0044 23.2952 25.9001 23.252 25.8231 23.175C25.7462 23.0981 25.703 22.9938 25.703 22.885V20.6732C24.5444 20.7627 23.4441 21.2178 22.5608 21.9729L24.128 23.5389C24.1853 23.5961 24.2244 23.6691 24.2402 23.7486C24.2561 23.828 24.2481 23.9104 24.2172 23.9853C24.1863 24.0602 24.1339 24.1243 24.0666 24.1694C23.9993 24.2146 23.9202 24.2388 23.8391 24.239ZM26.1084 24.5256C26.4213 24.5256 26.7272 24.6184 26.9873 24.7922C27.2475 24.9661 27.4503 25.2132 27.57 25.5022C27.6898 25.7913 27.7211 26.1094 27.66 26.4163C27.599 26.7232 27.4483 27.0051 27.2271 27.2263C27.0058 27.4476 26.7239 27.5982 26.4171 27.6593C26.1102 27.7203 25.7921 27.689 25.503 27.5693C25.2139 27.4495 24.9668 27.2467 24.793 26.9866C24.6192 26.7264 24.5264 26.4206 24.5264 26.1077C24.5269 25.6882 24.6937 25.2861 24.9903 24.9895C25.2869 24.6929 25.689 24.5261 26.1084 24.5256Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M19.381 19.3795C18.5601 20.2023 17.972 21.2281 17.6768 22.3523C17.3816 23.4765 17.3898 24.6589 17.7005 25.7789C17.7175 25.8389 17.7201 25.902 17.7082 25.9632C17.6963 26.0244 17.6701 26.082 17.6319 26.1312C17.5934 26.1809 17.5438 26.2208 17.4872 26.248C17.4305 26.2751 17.3683 26.2887 17.3055 26.2877H14.8025C14.9054 32.44 19.9372 37.4101 26.1087 37.4101C32.3443 37.4101 37.4114 32.3399 37.4114 26.1043C37.4116 19.9329 32.4416 14.9039 26.2892 14.801V17.304C26.2905 17.3668 26.2771 17.4291 26.2499 17.4858C26.2228 17.5425 26.1828 17.592 26.133 17.6305C26.0833 17.6689 26.0252 17.6951 25.9635 17.707C25.9018 17.719 25.8382 17.7163 25.7777 17.6991C24.6581 17.3883 23.4762 17.3801 22.3524 17.6753C21.2286 17.9705 20.2033 18.5586 19.381 19.3795ZM26.1086 19.8375H26.1161H26.1181C26.1192 19.8375 26.1202 19.8375 26.1212 19.8375C27.7501 19.8397 29.3137 20.478 30.4788 21.6163C30.5318 21.649 30.5763 21.6936 30.609 21.7466C31.7222 22.8913 32.3549 24.4188 32.3771 26.0154C32.3913 26.0757 32.3913 26.1385 32.3771 26.1989C32.3548 27.7953 31.7222 29.3227 30.6091 30.4674C30.5765 30.5203 30.532 30.5649 30.4791 30.5977C29.314 31.736 27.7503 32.3743 26.1214 32.3765C26.1203 32.3765 26.1193 32.3765 26.1182 32.3765H26.1163H26.1087C24.446 32.3765 22.8513 31.716 21.6755 30.5402C20.4997 29.3644 19.8392 27.7698 19.8392 26.107C19.8392 24.4442 20.4997 22.8495 21.6755 21.6738C22.8513 20.498 24.446 19.8374 26.1087 19.8374L26.1086 19.8375Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.1084 26.8695C26.5291 26.8695 26.8701 26.5285 26.8701 26.1078C26.8701 25.6871 26.5291 25.3461 26.1084 25.3461C25.6877 25.3461 25.3467 25.6871 25.3467 26.1078C25.3467 26.5285 25.6877 26.8695 26.1084 26.8695Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings1.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Нанесение герметика на колесный диск
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M37.3391 32.9675C38.3527 31.1305 38.9248 29.0752 39 26.9415H37.5636V25.9764H38.999C38.922 23.7988 38.3296 21.7508 37.3367 19.952L36.3836 20.5874L35.8482 19.7843L36.8382 19.1244C35.8 17.525 34.4338 16.1588 32.8344 15.1206L32.1745 16.1106L31.3715 15.5752L32.0069 14.6222C30.208 13.6293 28.16 13.0368 25.9824 12.9598V13.9127H25.0173V12.9598C22.8398 13.0368 20.7918 13.6293 18.9929 14.6222L19.6283 15.5752L18.8253 16.1106L18.1653 15.1206C16.5659 16.1588 15.1998 17.525 14.1616 19.1244L15.1515 19.7843L14.6162 20.5874L13.6631 19.952C12.6703 21.7508 12.0778 23.7988 12.0008 25.9764H13.4362V26.9415H12C12.0753 29.0744 12.6484 31.1293 13.6621 32.9666L14.6161 32.3306L15.1515 33.1336L14.1569 33.7966C14.5758 34.4417 15.0539 35.0534 15.5852 35.6274H16.814V36.5925H15.372H15.1251C14.726 36.5925 14.4013 36.9172 14.4013 37.3163C14.4013 37.7155 14.726 38.0401 15.1251 38.0401H18.0034L18.8253 36.8074L19.6283 37.3427L19.1634 38.0401H35.3921C35.7912 38.0401 36.1159 37.7155 36.1159 37.3163C36.1159 36.9742 35.8775 36.687 35.558 36.6116C35.5457 36.6104 35.533 36.6085 35.5203 36.6064C35.4788 36.5986 35.436 36.5925 35.3921 36.5925H32.2555V35.6274H35.4192C35.9499 35.054 36.423 34.44 36.8414 33.7957L35.8483 33.1336L36.3836 32.3306L37.3391 32.9675ZM25.4999 36.5924C19.9124 36.5924 15.3664 32.0467 15.3664 26.4589C15.3664 20.8712 19.9124 16.3254 25.4999 16.3254C31.0874 16.3254 35.6334 20.8712 35.6334 26.4589C35.6334 32.0467 31.0874 36.5924 25.4999 36.5924Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M20.4609 18.8076L22.571 20.9177C22.891 20.7485 23.2251 20.6074 23.5696 20.4962V17.499C22.4426 17.7416 21.393 18.1917 20.4609 18.8076Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M30.6332 27.7862C30.6883 27.573 30.8806 27.424 31.1006 27.424H34.6165C34.6499 27.1067 34.6684 26.785 34.6684 26.4589C34.6684 26.1329 34.6499 25.8112 34.6165 25.4938H31.1006C30.8806 25.4938 30.6883 25.3449 30.6332 25.1317C30.5031 24.626 30.2996 24.1447 30.0281 23.7008C29.9122 23.5106 29.941 23.2656 30.0988 23.1079L32.574 20.6328C32.1988 20.1781 31.7809 19.7601 31.3261 19.3849L28.8509 21.8601C28.7581 21.9531 28.6342 22.0015 28.5098 22.0015C28.423 22.0015 28.3364 21.9784 28.2581 21.9308C27.8138 21.6593 27.3321 21.4555 26.827 21.3252C26.614 21.2703 26.465 21.078 26.465 20.858V17.3424C26.1477 17.309 25.826 17.2905 25.5 17.2905C25.1739 17.2905 24.8522 17.309 24.5349 17.3424V20.8583C24.5349 21.0783 24.3859 21.2706 24.1725 21.3255C23.6678 21.4556 23.1866 21.6592 22.7418 21.9308C22.6635 21.9784 22.5769 22.0015 22.4901 22.0015C22.3657 22.0015 22.2418 21.9532 22.149 21.8601L19.6738 19.385C19.2191 19.7601 18.8011 20.1781 18.4259 20.6328L20.9011 23.108C21.0589 23.2656 21.0877 23.5107 20.9718 23.7008C20.7004 24.1447 20.4968 24.6261 20.3667 25.1318C20.3116 25.345 20.1193 25.4939 19.8993 25.4939H16.3834C16.3501 25.8112 16.3315 26.133 16.3315 26.459C16.3315 26.785 16.3501 27.1068 16.3834 27.4241H19.8993C20.1194 27.4241 20.3117 27.573 20.3668 27.7862C20.4968 28.2914 20.7004 28.773 20.9718 29.2172C21.0878 29.4073 21.059 29.6524 20.9012 29.81L18.426 32.2851C18.8012 32.7398 19.2191 33.1578 19.6739 33.533L22.149 31.0578C22.3064 30.8997 22.551 30.8707 22.7418 30.9871C23.1867 31.2588 23.6678 31.4624 24.1725 31.5924C24.386 31.6473 24.5349 31.8396 24.5349 32.0596V35.5755C24.8523 35.6089 25.174 35.6274 25.5 35.6274C25.826 35.6274 26.1478 35.6089 26.4651 35.5755V32.0596C26.4651 31.8396 26.614 31.6473 26.8275 31.5924C27.3322 31.4624 27.8133 31.2588 28.2582 30.9871C28.4486 30.8707 28.6932 30.8997 28.851 31.0578L31.3262 33.533C31.7809 33.1578 32.1989 32.7398 32.574 32.2851L30.0989 29.8099C29.941 29.6523 29.9122 29.4072 30.0282 29.2171C30.2995 28.7729 30.5031 28.2914 30.6332 27.7862ZM25.5 30.8019C23.1051 30.8019 21.157 28.8535 21.157 26.4589C21.157 24.0644 23.1051 22.116 25.5 22.116C27.8948 22.116 29.8429 24.0644 29.8429 26.4589C29.8429 28.8535 27.8948 30.8019 25.5 30.8019Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M17.8486 21.4202C17.2327 22.3523 16.7826 23.4019 16.54 24.5288H19.537C19.6482 24.1838 19.7896 23.85 19.9587 23.5302L17.8486 21.4202Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M25.4999 26.9415C25.7664 26.9415 25.9824 26.7255 25.9824 26.459C25.9824 26.1925 25.7664 25.9764 25.4999 25.9764C25.2334 25.9764 25.0173 26.1925 25.0173 26.459C25.0173 26.7255 25.2334 26.9415 25.4999 26.9415Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M19.537 28.3892H16.54C16.7826 29.5161 17.2327 30.5657 17.8486 31.4978L19.9587 29.3877C19.7895 29.0677 19.6481 28.7339 19.537 28.3892Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M25.4999 23.0812C23.6376 23.0812 22.1221 24.5964 22.1221 26.459C22.1221 28.3216 23.6376 29.8369 25.4999 29.8369C27.3622 29.8369 28.8777 28.3216 28.8777 26.459C28.8777 24.5964 27.3622 23.0812 25.4999 23.0812ZM25.4999 27.9067C24.7017 27.9067 24.0523 27.2573 24.0523 26.459C24.0523 25.6608 24.7017 25.0114 25.4999 25.0114C26.2982 25.0114 26.9475 25.6608 26.9475 26.459C26.9475 27.2573 26.2982 27.9067 25.4999 27.9067Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M22.571 32.0002L20.4609 34.1103C21.393 34.7262 22.4426 35.1763 23.5696 35.4189V32.4218C23.2251 32.3106 22.891 32.1694 22.571 32.0002Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M31.463 28.3892C31.3518 28.7339 31.2104 29.0677 31.0413 29.3877L33.1513 31.4978C33.7672 30.5657 34.2173 29.5161 34.4599 28.3892H31.463Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M28.4287 32.0002C28.1088 32.1694 27.7747 32.3106 27.4302 32.4218V35.4189C28.5571 35.1763 29.6067 34.7262 30.5388 34.1103L28.4287 32.0002Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.1513 21.4202L31.0413 23.5302C31.2105 23.85 31.3518 24.1838 31.463 24.5288H34.4599C34.2173 23.4019 33.7672 22.3523 33.1513 21.4202Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M27.4302 17.499V20.4959C27.7747 20.6074 28.1088 20.7486 28.4287 20.9177L30.5388 18.8076C29.6068 18.1917 28.5571 17.7416 27.4302 17.499Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings2.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Ремонт покрышки жгутом
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">200 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M30.625 24.0625C30.6219 24.3766 30.5953 24.6899 30.5453 25H29.2188V23.125H30.5547C30.6016 23.4353 30.6251 23.7487 30.625 24.0625Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M30.6251 20.3124C30.625 20.3752 30.6122 20.4374 30.5876 20.4952C31.1533 21.4518 31.4832 22.5293 31.55 23.6387C31.6168 24.748 31.4187 25.8573 30.972 26.8749H31.9751C32.322 25.9778 32.5 25.0243 32.5001 24.0624C32.5004 22.1866 31.8361 20.3715 30.6251 18.939V20.3124Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.9062 27.8125H28.75C28.6257 27.8125 28.5065 27.7631 28.4185 27.6752C28.3306 27.5873 28.2812 27.4681 28.2812 27.3438V22.1875H27.3438V27.3438C27.3438 27.4681 27.2944 27.5873 27.2065 27.6752C27.1185 27.7631 26.9993 27.8125 26.875 27.8125H21.7188V28.75H26.875C26.9993 28.75 27.1185 28.7994 27.2065 28.8873C27.2944 28.9752 27.3438 29.0944 27.3438 29.2188V34.375H28.2812V29.2188C28.2812 29.0944 28.3306 28.9752 28.4185 28.8873C28.5065 28.7994 28.6257 28.75 28.75 28.75H33.9062V27.8125Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M24.5314 17.0312C25.3908 17.0299 26.2428 17.1888 27.0439 17.5H29.0408C27.6536 16.5433 25.9986 16.0515 24.314 16.0955C22.6295 16.1395 21.0024 16.717 19.6671 17.7448C18.3317 18.7727 17.357 20.1978 16.8834 21.8149C16.4097 23.4321 16.4616 25.1579 17.0314 26.7437V25.9375C17.0314 25.8131 17.0808 25.6939 17.1687 25.606C17.2566 25.5181 17.3758 25.4687 17.5002 25.4687H17.6455C17.4342 24.4471 17.4534 23.3913 17.7017 22.378C17.95 21.3648 18.4211 20.4196 19.0807 19.6114C19.7403 18.8032 20.5718 18.1522 21.5147 17.7059C22.4576 17.2595 23.4882 17.029 24.5314 17.0312Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M30.1609 29.6875H29.2188V30.5031C29.5551 30.2581 29.8702 29.9852 30.1609 29.6875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.5706 25.2897C21.6061 25.3754 21.6153 25.4697 21.5971 25.5607C21.5789 25.6516 21.5341 25.7351 21.4684 25.8006L20.8619 26.4062H21.25C21.3743 26.4062 21.4935 26.4556 21.5815 26.5435C21.6694 26.6315 21.7188 26.7507 21.7188 26.875H26.4062V22.1875C26.2819 22.1875 26.1627 22.1381 26.0748 22.0502C25.9869 21.9623 25.9375 21.8431 25.9375 21.7188V20.7812H25.4688C25.3444 20.7812 25.2252 20.7319 25.1373 20.644C25.0494 20.556 25 20.4368 25 20.3125V17.9922C24.8453 17.9781 24.6906 17.9688 24.5312 17.9688C24.2172 17.9714 23.9038 17.998 23.5938 18.0484V20.6688C23.5919 20.7925 23.542 20.9107 23.4544 20.9982C23.3669 21.0857 23.2488 21.1357 23.125 21.1375C23.0005 21.1379 22.8809 21.089 22.7922 21.0016L20.9453 19.1453C20.4362 19.5185 19.9872 19.9674 19.6141 20.4766L21.4703 22.3234C21.5354 22.3894 21.5794 22.4731 21.5969 22.564C21.6145 22.6549 21.6046 22.749 21.5688 22.8344C21.5343 22.9205 21.4747 22.9942 21.3978 23.046C21.3209 23.0978 21.2302 23.1254 21.1375 23.125H18.5172C18.4668 23.435 18.4402 23.7484 18.4375 24.0625C18.4403 24.3766 18.4676 24.6901 18.5191 25H21.1375C21.2303 25 21.3209 25.0275 21.398 25.0791C21.4751 25.1307 21.5352 25.204 21.5706 25.2897Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.7001 24.5312H35.7813V23.5937H36.7048C36.6777 22.8425 36.5804 22.0955 36.4142 21.3625L35.5188 21.6015L35.2751 20.6968L36.1751 20.4578C35.9514 19.7401 35.6611 19.0449 35.3079 18.3812L34.5063 18.8453L34.0376 18.0297L34.8392 17.5703C34.4378 16.9363 33.9797 16.3401 33.4704 15.789L32.8188 16.4406L32.1532 15.775L32.8048 15.1234C32.2537 14.6142 31.6575 14.156 31.0235 13.7547L30.5642 14.5562L29.7485 14.0875L30.2126 13.2859C29.549 12.9328 28.8537 12.6424 28.136 12.4187L27.897 13.3187L26.9923 13.075L27.2313 12.1797C26.4983 12.0135 25.7513 11.9162 25.0001 11.889V12.8125H24.0626V11.889C23.3114 11.9162 22.5644 12.0135 21.8313 12.1797L22.0704 13.075L21.1657 13.3187L20.9267 12.4187C20.209 12.6424 19.5137 12.9328 18.8501 13.2859L19.3142 14.0875L18.4985 14.5562L18.0392 13.7547C17.4052 14.156 16.809 14.6142 16.2579 15.1234L16.9095 15.775L16.2438 16.4406L15.5923 15.789C15.083 16.3401 14.6249 16.9363 14.2235 17.5703L15.0251 18.0297L14.5563 18.8453L13.7548 18.3812C13.4016 19.0449 13.1113 19.7401 12.8876 20.4578L13.7876 20.6968L13.5438 21.6015L12.6485 21.3625C12.4823 22.0955 12.385 22.8425 12.3579 23.5937H13.2813V24.5312H12.3579C12.385 25.2824 12.4823 26.0294 12.6485 26.7625L13.5438 26.5234L13.7876 27.4281L12.8876 27.6672C13.1113 28.3849 13.4016 29.0801 13.7548 29.7437L14.5563 29.2797L15.0251 30.0953L14.2235 30.5547C14.6249 31.1886 15.083 31.7848 15.5923 32.3359L16.2438 31.6844L16.9095 32.35L16.2579 33.0015C16.809 33.5108 17.4052 33.9689 18.0392 34.3703L18.4985 33.5687L19.3142 34.0375L18.8501 34.839C19.5137 35.1922 20.209 35.4825 20.9267 35.7062L21.1657 34.8062L22.0704 35.05L21.8313 35.9453C22.5644 36.1115 23.3114 36.2088 24.0626 36.2359V35.3125H25.0001V36.2406C25.0026 36.1179 25.053 36.0011 25.1407 35.9152C25.2283 35.8293 25.3461 35.7812 25.4688 35.7812H25.9376V34.8437C25.9376 34.7194 25.987 34.6002 26.0749 34.5123C26.1628 34.4244 26.282 34.375 26.4063 34.375V32.7672C25.7905 32.9023 25.1618 32.9699 24.5313 32.9687C22.5554 32.9637 20.6367 32.3044 19.0751 31.0937H17.5001C17.3758 31.0937 17.2565 31.0443 17.1686 30.9564C17.0807 30.8685 17.0313 30.7493 17.0313 30.625V28.8531C16.2869 27.6879 15.8241 26.3654 15.6795 24.9902C15.535 23.6151 15.7127 22.2252 16.1986 20.9307C16.6845 19.6362 17.4652 18.4726 18.4789 17.5322C19.4925 16.5919 20.7113 15.9005 22.0386 15.5129C23.3658 15.1254 24.7651 15.0523 26.1256 15.2994C27.486 15.5466 28.7702 16.1072 29.8763 16.9368C30.9825 17.7664 31.8802 18.8423 32.4983 20.0791C33.1165 21.316 33.4381 22.6798 33.4376 24.0625C33.4379 25.0191 33.2811 25.9692 32.9735 26.875H33.9063C33.9063 26.7507 33.9557 26.6314 34.0436 26.5435C34.1315 26.4556 34.2508 26.4062 34.3751 26.4062H35.3126V25.9375C35.3126 25.8132 35.362 25.6939 35.4499 25.606C35.5378 25.5181 35.657 25.4687 35.7813 25.4687H36.6298C36.6673 25.1594 36.6907 24.85 36.7001 24.5312Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M25.9375 18.4375H29.6875V19.8438H25.9375V18.4375Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.25 26.4062H37.6562V30.1562H36.25V26.4062Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.9063 29.6875H31.4219C30.7989 30.4495 30.0545 31.1036 29.2188 31.6234V34.375C29.3431 34.375 29.4623 34.4244 29.5502 34.5123C29.6381 34.6002 29.6875 34.7194 29.6875 34.8437V35.0922C29.8609 35.0125 30.0391 34.9281 30.2125 34.8391L29.7484 34.0375L30.5641 33.5687L31.0281 34.375C31.6624 33.9723 32.2587 33.5126 32.8094 33.0016L32.1531 32.35L32.8188 31.6844L33.475 32.3406C34.0852 31.6735 34.6197 30.941 35.0688 30.1562H34.375C34.2507 30.1562 34.1315 30.1069 34.0435 30.019C33.9556 29.931 33.9063 29.8118 33.9063 29.6875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M17.9688 26.4062H19.375V30.1562H17.9688V26.4062Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M25.9375 36.7188H29.6875V38.125H25.9375V36.7188Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.4063 31.8016V30.8359C25.5101 31.0864 24.5728 31.1553 23.6495 31.0386C22.7262 30.9219 21.8355 30.6219 21.0298 30.1562H20.3126V30.625C20.3112 30.6842 20.3001 30.7428 20.2798 30.7984C21.1842 31.3617 22.1913 31.7404 23.2428 31.9125C24.2943 32.0847 25.3695 32.047 26.4063 31.8016Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.875 20.7812H28.75V21.7188H26.875V20.7812Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M20.3125 27.3438H21.25V29.2188H20.3125V27.3438Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.875 34.8438H28.75V35.7812H26.875V34.8438Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M34.375 27.3438H35.3125V29.2188H34.375V27.3438Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings3.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Установка вентиля бескамерной шины
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 250 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M24.5312 34.7031C26.1599 34.7031 27.7519 34.2202 29.106 33.3154C30.4602 32.4106 31.5156 31.1245 32.1388 29.6199C32.7621 28.1153 32.9251 26.4596 32.6074 24.8623C32.2897 23.265 31.5054 21.7978 30.3538 20.6462C29.2022 19.4946 27.735 18.7103 26.1377 18.3926C24.5404 18.0749 22.8847 18.2379 21.3801 18.8612C19.8755 19.4844 18.5894 20.5398 17.6846 21.894C16.7798 23.2481 16.2969 24.8401 16.2969 26.4688C16.3 28.6517 17.1685 30.7444 18.7121 32.2879C20.2556 33.8315 22.3483 34.7001 24.5312 34.7031ZM24.5312 19.2031C25.9683 19.2031 27.373 19.6293 28.5678 20.4276C29.7626 21.226 30.6939 22.3607 31.2438 23.6883C31.7937 25.0159 31.9376 26.4768 31.6573 27.8862C31.3769 29.2956 30.6849 30.5902 29.6688 31.6063C28.6527 32.6224 27.3581 33.3144 25.9487 33.5948C24.5393 33.8751 23.0784 33.7312 21.7508 33.1813C20.4232 32.6314 19.2885 31.7001 18.4901 30.5053C17.6917 29.3105 17.2656 27.9058 17.2656 26.4688C17.2679 24.5425 18.0342 22.6958 19.3962 21.3337C20.7583 19.9717 22.605 19.2054 24.5312 19.2031Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.4702 25.1998C21.4346 25.2888 21.3731 25.3649 21.2936 25.4185C21.2142 25.472 21.1204 25.5005 21.0246 25.5001H18.317C18.2072 26.1413 18.2072 26.7965 18.317 27.4376H21.0246C21.1204 27.4373 21.2142 27.4657 21.2936 27.5192C21.3731 27.5728 21.4346 27.649 21.4702 27.7379C21.5073 27.8261 21.5175 27.9234 21.4994 28.0173C21.4813 28.1113 21.4357 28.1978 21.3685 28.2659L19.4504 30.1743C19.8344 30.6988 20.2967 31.1611 20.8212 31.5451L22.7345 29.6318C22.8026 29.5646 22.8891 29.5191 22.983 29.501C23.077 29.4829 23.1742 29.493 23.2624 29.5301C23.3514 29.5657 23.4276 29.6273 23.4811 29.7067C23.5347 29.7862 23.5631 29.8799 23.5627 29.9757V32.6834C24.2039 32.7932 24.8591 32.7932 25.5002 32.6834V29.9757C25.4999 29.8799 25.5283 29.7862 25.5819 29.7067C25.6354 29.6273 25.7116 29.5657 25.8006 29.5301C25.8888 29.493 25.986 29.4829 26.08 29.501C26.1739 29.5191 26.2604 29.5646 26.3285 29.6318L28.2418 31.5451C28.7662 31.1611 29.2286 30.6988 29.6126 30.1743L27.6945 28.2659C27.6273 28.1978 27.5817 28.1113 27.5636 28.0173C27.5455 27.9234 27.5556 27.8261 27.5927 27.7379C27.6284 27.649 27.6899 27.5728 27.7694 27.5192C27.8488 27.4657 27.9425 27.4373 28.0384 27.4376H30.746C30.8558 26.7965 30.8558 26.1413 30.746 25.5001H28.0384C27.9425 25.5005 27.8488 25.472 27.7694 25.4185C27.6899 25.3649 27.6284 25.2888 27.5927 25.1998C27.5556 25.1116 27.5455 25.0144 27.5636 24.9204C27.5817 24.8264 27.6273 24.74 27.6945 24.6718L29.6126 22.7634C29.227 22.2373 28.763 21.7734 28.237 21.3878L26.3285 23.3059C26.2369 23.3963 26.1133 23.4467 25.9846 23.4464C25.8567 23.4445 25.7346 23.3929 25.6442 23.3024C25.5538 23.212 25.5021 23.0899 25.5002 22.962V20.2543C24.8591 20.1445 24.2039 20.1445 23.5627 20.2543V22.962C23.5609 23.0899 23.5092 23.212 23.4188 23.3024C23.3284 23.3929 23.2062 23.4445 23.0784 23.4464C22.9497 23.4467 22.8261 23.3963 22.7345 23.3059L20.826 21.3878C20.2999 21.7734 19.836 22.2373 19.4504 22.7634L21.3685 24.6718C21.4357 24.74 21.4813 24.8264 21.4994 24.9204C21.5175 25.0144 21.5073 25.1116 21.4702 25.1998Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M11.9521 26.9532C11.9807 27.7297 12.0828 28.5017 12.2573 29.2589L13.1776 29.0118L13.4295 29.9467L12.5043 30.1937C12.7377 30.9338 13.0359 31.6518 13.3956 32.3395L14.2239 31.86L14.7082 32.7028L13.88 33.1775C14.4888 34.1481 15.227 35.0314 16.0742 35.8028C16.1467 35.8673 16.1979 35.9523 16.2213 36.0465C16.2446 36.1407 16.2389 36.2398 16.205 36.3307C16.1709 36.4219 16.1102 36.5007 16.0307 36.5569C15.9512 36.613 15.8566 36.6439 15.7593 36.6456C15.1275 36.6607 14.5266 36.9217 14.0842 37.3731C13.6419 37.8245 13.3931 38.4306 13.3907 39.0626H34.1317C34.0311 38.7803 33.8461 38.5359 33.6017 38.3626C33.3573 38.1892 33.0654 38.0954 32.7657 38.0939H31.3804C31.275 38.0936 31.1726 38.0589 31.0886 37.9951C31.0047 37.9312 30.9439 37.8418 30.9154 37.7403C30.8859 37.639 30.8908 37.5308 30.9294 37.4326C30.968 37.3345 31.038 37.2519 31.1286 37.1978C31.8292 36.767 32.4862 36.269 33.0903 35.7107L32.4073 35.0326L33.0951 34.3448L33.7732 35.0278C34.3043 34.4595 34.7796 33.8415 35.1925 33.1823L34.3545 32.7028L34.8389 31.86L35.6768 32.3443C36.0398 31.6572 36.3366 30.9371 36.5632 30.1937L35.6332 29.9467L35.8851 29.0118L36.8103 29.2589C36.9814 28.5013 37.0819 27.7294 37.1106 26.9532H36.1564V25.9845H37.1057C37.0803 25.2086 36.983 24.4368 36.8151 23.6789L35.8851 23.9259L35.6332 22.9911L36.5681 22.744C36.2299 21.6638 35.7476 20.6341 35.1343 19.6828H35.1198V19.6682C35.0229 19.5181 34.9309 19.3679 34.8292 19.2226L34.185 20.8356C34.1465 20.9327 34.0777 21.0148 33.9888 21.0696C33.8999 21.1244 33.7957 21.149 33.6916 21.1398C33.5876 21.1305 33.4894 21.0879 33.4115 21.0182C33.3337 20.9486 33.2805 20.8556 33.2598 20.7532L32.8336 18.6317L31.1964 18.22C31.1032 18.1968 31.019 18.1465 30.9545 18.0754C30.8899 18.0043 30.848 17.9156 30.834 17.8206C30.82 17.7256 30.8345 17.6286 30.8757 17.5419C30.917 17.4551 30.9831 17.3826 31.0656 17.3336L32.3201 16.5828C31.1074 15.6257 29.7279 14.9014 28.2514 14.4467L28.0092 15.367L27.0743 15.1151L27.3165 14.1948C26.5605 14.024 25.7903 13.9235 25.0157 13.8945V14.8439H24.047V13.8896C23.2708 13.9177 22.4989 14.0182 21.7414 14.19L21.9884 15.1151L21.0536 15.367L20.8065 14.437C20.0649 14.6682 19.3465 14.9682 18.6607 15.3331L19.1403 16.1614L18.2975 16.6457L17.8228 15.8175C17.1677 16.2322 16.5516 16.7056 15.9821 17.2318L16.6554 17.9051L15.9676 18.5929L15.2943 17.9196C14.7681 18.4891 14.2947 19.1052 13.88 19.7603L14.7082 20.235L14.2239 21.0778L13.3956 20.5982C13.0307 21.284 12.7307 22.0024 12.4995 22.744L13.4295 22.9911L13.1776 23.9259L12.2525 23.6789C12.0807 24.4364 11.9802 25.2083 11.9521 25.9845H12.9064V26.9532H11.9521ZM15.8126 38.5782H14.8439V37.6095H15.8126V38.5782ZM18.7189 37.1251H17.2657V36.1564H18.7189V37.1251ZM21.1407 38.5782H20.172V37.6095H21.1407V38.5782ZM25.5001 38.5782H22.5939V37.6095H25.5001V38.5782ZM28.4064 37.1251H26.4689V36.1564H28.4064V37.1251ZM29.8595 38.5782H28.8907V37.6095H29.8595V38.5782ZM24.5314 17.2657C26.3516 17.2657 28.1309 17.8055 29.6444 18.8167C31.1578 19.828 32.3374 21.2653 33.0339 22.947C33.7305 24.6286 33.9128 26.4791 33.5577 28.2643C33.2026 30.0495 32.326 31.6894 31.039 32.9765C29.7519 34.2635 28.112 35.1401 26.3268 35.4952C24.5416 35.8503 22.6911 35.668 21.0095 34.9714C19.3278 34.2749 17.8905 33.0953 16.8792 31.5819C15.868 30.0684 15.3282 28.2891 15.3282 26.4689C15.3304 24.0287 16.3007 21.6891 18.0262 19.9637C19.7516 18.2382 22.0912 17.2679 24.5314 17.2657Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M35.2701 13.6571L34.7615 12.9015L34.1657 14.093C34.1373 14.1498 34.0979 14.2004 34.0498 14.242C34.0017 14.2835 33.9459 14.315 33.8856 14.3348C33.8252 14.3547 33.7616 14.3623 33.6982 14.3574C33.6349 14.3525 33.5732 14.3351 33.5166 14.3062L32.4316 13.7637L32.7513 15.6963C32.9984 15.8804 33.2405 16.079 33.473 16.2824C33.5308 16.3323 33.5758 16.3952 33.6045 16.466C33.6331 16.5367 33.6445 16.6133 33.6377 16.6893C33.6303 16.7657 33.605 16.8394 33.5637 16.9042C33.5225 16.969 33.4665 17.0232 33.4004 17.0622L32.5624 17.566L33.3665 17.7646C33.456 17.7852 33.5376 17.8314 33.6013 17.8976C33.665 17.9639 33.7079 18.0473 33.7249 18.1376L33.8896 18.9658L34.248 18.0746C34.2926 17.9577 34.3799 17.862 34.4924 17.8072C34.6048 17.7523 34.7339 17.7423 34.8535 17.7791C34.9729 17.8193 35.0719 17.9045 35.1296 18.0165C35.333 18.2635 35.5171 18.5251 35.6963 18.7866L37.4885 19.0433L36.7377 18.0407C36.6923 17.9816 36.6616 17.9126 36.6481 17.8393C36.6347 17.7661 36.6388 17.6906 36.6602 17.6193C36.6801 17.5476 36.7163 17.4815 36.7658 17.4261C36.8154 17.3706 36.877 17.3274 36.946 17.2996L38.3652 16.7329L37.3916 16.2437C37.2798 16.1884 37.194 16.0916 37.1524 15.974C37.1108 15.8565 37.1167 15.7273 37.1688 15.614L38.5541 12.4897L35.8901 13.8218C35.7844 13.8747 35.6631 13.8871 35.5489 13.8568C35.4347 13.8265 35.3356 13.7554 35.2701 13.6571Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings4.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Ремонт покрышки заплаткой
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">550 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M22.5784 23.2368C22.5784 23.5998 22.8737 23.8952 23.2368 23.8952C23.5998 23.8952 23.8952 23.5998 23.8952 23.2368C23.8952 22.8738 23.5998 22.5784 23.2368 22.5784C22.8737 22.5784 22.5784 22.8738 22.5784 23.2368Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M30.7383 23.4766C26.7341 23.4766 23.4766 26.7341 23.4766 30.7383C23.4766 34.7424 26.7341 38 30.7383 38C34.7424 38 38 34.7424 38 30.7383C38 26.7341 34.7424 23.4766 30.7383 23.4766ZM34.1096 31.8052C34.474 32.0155 34.5988 32.4814 34.3884 32.8457C34.2474 33.0901 33.9913 33.2267 33.7281 33.2267C33.5988 33.2267 33.4679 33.1938 33.3479 33.1245L31.5 32.0576V34.1915C31.5 34.6121 31.159 34.9532 30.7383 34.9532C30.3176 34.9532 29.9766 34.6121 29.9766 34.1915V32.0576L28.1286 33.1245C28.0086 33.1938 27.8777 33.2267 27.7484 33.2267C27.4852 33.2267 27.2291 33.0901 27.0881 32.8458C26.8777 32.4814 27.0025 32.0156 27.3669 31.8052L29.2148 30.7383L27.3669 29.6714C27.0026 29.461 26.8777 28.9952 27.0881 28.6309C27.2985 28.2665 27.7643 28.1416 28.1286 28.3521L29.9766 29.419V27.2852C29.9766 26.8645 30.3176 26.5234 30.7383 26.5234C31.159 26.5234 31.5 26.8645 31.5 27.2852V29.419L33.3479 28.3521C33.7122 28.1418 34.1781 28.2666 34.3884 28.6309C34.5988 28.9952 34.474 29.4611 34.1096 29.6714L32.2617 30.7383L34.1096 31.8052Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.9598 30.4109C18.5489 29.8055 15.9504 26.8189 15.9504 23.2367C15.9504 19.219 19.219 15.9504 23.2367 15.9504C26.8189 15.9504 29.8055 18.5489 30.4109 21.9599C30.5196 21.9559 30.6286 21.9532 30.7383 21.9532C32.0696 21.9532 33.3323 22.2514 34.4641 22.7836C34.4181 21.6334 34.1983 20.5273 33.8305 19.4905L31.7044 18.9208C31.3535 18.8271 31.1451 18.4666 31.2389 18.1158C31.3326 17.765 31.6931 17.5566 32.0439 17.6503L33.1474 17.946C32.4828 16.7062 31.5925 15.6049 30.5316 14.6972L28.4111 15.2654C28.0602 15.3592 27.6998 15.1508 27.6061 14.7999C27.5124 14.4491 27.7208 14.0887 28.0716 13.9949L29.1724 13.7C28.004 12.9702 26.6927 12.4489 25.2907 12.1889L23.7331 13.7465C23.476 14.0036 23.0592 14.0036 22.8021 13.7465C22.545 13.4894 22.545 13.0726 22.8021 12.8154L23.6106 12.007C23.4864 12.0028 23.3619 12 23.2367 12C21.9236 12 20.6628 12.2271 19.4904 12.643L18.9208 14.7691C18.827 15.1199 18.4666 15.3284 18.1158 15.2346C17.7649 15.1409 17.5565 14.7805 17.6503 14.4296L17.946 13.3261C16.7062 13.9906 15.6049 14.8809 14.6972 15.9418L15.2654 18.0624C15.3591 18.4132 15.1507 18.7736 14.7999 18.8674C14.449 18.9611 14.0886 18.7527 13.9949 18.4018L13.7 17.3011C12.9701 18.4694 12.4489 19.7807 12.1888 21.1827L13.7465 22.7403C14.0036 22.9974 14.0036 23.4143 13.7465 23.6714C13.4894 23.9285 13.0726 23.9285 12.8154 23.6714L12.0069 22.8629C12.0028 22.9871 12 23.1116 12 23.2367C12 24.5498 12.2271 25.8107 12.6429 26.983L14.7691 27.5527C15.1199 27.6464 15.3283 28.0068 15.2346 28.3577C15.1408 28.7085 14.7804 28.9169 14.4296 28.8232L13.326 28.5275C13.9906 29.7673 14.8809 30.8686 15.9418 31.7763L18.0624 31.2081C18.4132 31.1143 18.7736 31.3227 18.8674 31.6736C18.9611 32.0244 18.7527 32.3848 18.4018 32.4786L17.3011 32.7735C18.4694 33.5033 19.7807 34.0246 21.1827 34.2846L22.2961 33.1713C22.073 32.3984 21.9531 31.5821 21.9531 30.7383C21.9531 30.6286 21.9559 30.5196 21.9598 30.4109Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M29.0987 22.1072C28.5692 19.3539 26.1423 17.2672 23.2369 17.2672C19.9453 17.2672 17.2673 19.9451 17.2673 23.2368C17.2673 26.1423 19.354 28.5691 22.1073 29.0986C22.3983 27.5641 23.0893 26.1695 24.0679 25.028C23.8151 25.1458 23.5336 25.2119 23.2368 25.2119C22.1477 25.2119 21.2616 24.3259 21.2616 23.2368C21.2616 22.1476 22.1477 21.2616 23.2368 21.2616C24.3259 21.2616 25.212 22.1476 25.212 23.2368C25.212 23.5335 25.1458 23.8149 25.0281 24.0678C26.1696 23.0892 27.5641 22.3981 29.0987 22.1072ZM19.2864 23.8952C18.9228 23.8952 18.628 23.6004 18.628 23.2368C18.628 22.8731 18.9228 22.5783 19.2864 22.5783C19.65 22.5783 19.9448 22.8731 19.9448 23.2368C19.9448 23.6004 19.65 23.8952 19.2864 23.8952ZM20.909 26.4957C20.6519 26.7528 20.235 26.7528 19.9779 26.4957C19.7208 26.2386 19.7208 25.8217 19.9779 25.5646C20.235 25.3075 20.6519 25.3075 20.909 25.5646C21.1661 25.8217 21.1661 26.2386 20.909 26.4957ZM20.909 20.9089C20.6519 21.166 20.235 21.166 19.9779 20.9089C19.7208 20.6518 19.7208 20.2349 19.9779 19.9778C20.235 19.7207 20.6519 19.7207 20.909 19.9778C21.1661 20.235 21.1661 20.6518 20.909 20.9089ZM23.2368 19.9448C22.8742 19.9448 22.5784 19.649 22.5784 19.2863C22.5784 18.9236 22.8741 18.6279 23.2368 18.6279C23.5995 18.6279 23.8953 18.9236 23.8953 19.2863C23.8953 19.649 23.5995 19.9448 23.2368 19.9448ZM25.5646 19.9779C25.8217 19.7208 26.2387 19.7208 26.4958 19.9779C26.7529 20.235 26.7529 20.6519 26.4958 20.909C26.2387 21.1661 25.8218 21.1661 25.5646 20.909C25.3075 20.6518 25.3075 20.235 25.5646 19.9779Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings5.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Сезонный шиномонтаж</div>
                  <div class="popup-tires__item-subtext">*цена за 4 колеса</div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">R13/14</div>
                  <div class="item-slider__price">1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R19</div>
                  <div class="item-slider__price">1800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R15/16</div>
                  <div class="item-slider__price">1200 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R20</div>
                  <div class="item-slider__price">2200 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R17</div>
                  <div class="item-slider__price">1500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R21</div>
                  <div class="item-slider__price">2500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">R18</div>
                  <div class="item-slider__price">1700 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M21.0902 17.1399C16.0778 17.1399 12 21.2176 12 26.2298C12 31.2422 16.0778 35.3201 21.0902 35.3201C26.1025 35.3201 30.1803 31.2422 30.1803 26.2297C30.1802 21.2176 26.1024 17.1399 21.0902 17.1399ZM21.0902 32.6862C17.5246 32.6862 14.6339 29.7957 14.6339 26.2298C14.6339 22.6643 17.5246 19.7738 21.0902 19.7738C24.6558 19.7738 27.5464 22.6643 27.5464 26.2298C27.5464 29.7957 24.6558 32.6862 21.0902 32.6862Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.0902 20.6096C17.991 20.6096 15.4697 23.1308 15.4697 26.2297C15.4697 29.3289 17.991 31.8502 21.0902 31.8502C24.1893 31.8502 26.7106 29.3289 26.7106 26.2297C26.7106 23.1308 24.1893 20.6096 21.0902 20.6096ZM21.4427 21.3289C22.5315 21.4065 23.5228 21.8399 24.3015 22.5137L22.3756 24.4396C22.1042 24.2434 21.7869 24.1084 21.4427 24.0527V21.3289ZM20.7375 21.3289V24.0527C20.3932 24.1085 20.0759 24.2436 19.8043 24.4398L17.8784 22.5139C18.6572 21.84 19.6486 21.4065 20.7375 21.3289ZM17.3792 23.0122L19.3057 24.9387C19.1096 25.2101 18.9747 25.5274 18.919 25.8716H16.1895C16.2683 24.7822 16.7036 23.7905 17.3792 23.0122ZM16.1886 26.577H18.919C18.9747 26.9211 19.1097 27.2383 19.3058 27.5097L17.374 29.4414C16.699 28.6614 16.2652 27.6679 16.1886 26.577ZM20.7375 31.1308C19.6457 31.053 18.6522 30.6175 17.8725 29.9405L19.8044 28.0084C20.0759 28.2046 20.3933 28.3395 20.7375 28.3954V31.1308ZM19.3792 26.2243C19.3792 25.2792 20.1453 24.5128 21.0902 24.5128C22.0352 24.5128 22.8013 25.2791 22.8013 26.2243C22.8013 27.1692 22.0353 27.9352 21.0902 27.9352C20.1453 27.9352 19.3792 27.1692 19.3792 26.2243ZM21.4427 31.1308V28.3954C21.7869 28.3396 22.1041 28.2046 22.3755 28.0085L24.3076 29.9406C23.528 30.6176 22.5344 31.053 21.4427 31.1308ZM24.806 29.4414L22.8743 27.5098C23.0706 27.2383 23.2055 26.9211 23.2613 26.5769H25.9916C25.915 27.6679 25.4812 28.6615 24.806 29.4414ZM23.2615 25.8716C23.2057 25.5273 23.0706 25.2099 22.8744 24.9384L24.8009 23.012C25.4768 23.7903 25.912 24.7821 25.9908 25.8716H23.2615Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M38.0001 18.5573C38.0001 16.9365 37.1251 15.4291 35.7166 14.6237C35.6417 14.5808 35.5549 14.5581 35.4654 14.5581C35.1814 14.5581 34.9672 14.7797 34.9672 15.0721C34.9672 15.0721 34.9585 17.3393 34.9586 18.0951C34.9586 18.1742 34.8638 18.2686 34.8244 18.297L34.7961 18.3183C34.3428 18.6952 33.7713 19.12 33.5188 19.2513C33.5027 19.2512 33.4874 19.2508 33.471 19.2508C33.4536 19.2508 33.4371 19.2512 33.4202 19.2514C33.1639 19.1197 32.5832 18.6877 32.1235 18.3034L32.0946 18.2816C32.0935 18.2808 31.9832 18.1925 31.9832 18.0225C31.9832 17.236 31.9753 15.0738 31.9753 15.0738C31.9749 14.7332 31.7309 14.5549 31.4901 14.5549C31.397 14.5549 31.3009 14.5804 31.2185 14.6275C29.8144 15.4343 28.9421 16.94 28.9421 18.557C28.9421 20.4538 30.1146 22.0809 31.7724 22.7543L31.7722 33.7929C31.7722 34.7037 32.5133 35.4447 33.424 35.4447H33.518C34.4289 35.4447 35.1698 34.7036 35.1698 33.7929L35.1701 22.7573C35.7261 22.5325 36.2368 22.1965 36.6736 21.7597C37.5291 20.9044 38.0002 19.7669 38.0001 18.5573Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Tires/settings6.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Установка камеры колеса
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 150 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="popup-diagnostic" class="popup-wrapper popup">
      <div class="popup-tires popup-default">
        <a href="#" class="popup-tires__close close-popup"
          ><svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.42713 8.00011L15.8954 1.53216C16.0346 1.39277 16.0346 1.1669 15.8954 1.02751L14.9729 0.104504C14.906 0.0377562 14.815 0 14.7204 0C14.6257 0 14.5348 0.0377562 14.4679 0.104504L7.99981 6.57262L1.5317 0.104504C1.3977 -0.0294971 1.16054 -0.0293285 1.02688 0.104504L0.104546 1.02751C-0.0348487 1.1669 -0.0348487 1.39277 0.104546 1.53216L6.57266 8.00011L0.104546 14.4681C-0.0348487 14.6074 -0.0348487 14.8333 0.104546 14.9727L1.02705 15.8957C1.09396 15.9625 1.18481 16.0002 1.27954 16.0002C1.37427 16.0002 1.46495 15.9625 1.53187 15.8957L7.99998 9.42759L14.4681 15.8957C14.535 15.9625 14.626 16.0002 14.7206 16.0002C14.8151 16.0002 14.9062 15.9625 14.9731 15.8957L15.8956 14.9727C16.0348 14.8333 16.0348 14.6074 15.8956 14.4681L9.42713 8.00011Z"
              fill="#3C3C3C"
            />
          </svg>
        </a>
        <div class="popup-tires__top">
          <div class="popup-tires__title">Диагностика</div>
        </div>
        <div class="popup-tires__body">
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M20.338 16.3824H29.6621V13.7824C29.6596 13.3368 29.2962 12.9777 28.8506 12.9803C28.8497 12.9803 28.8488 12.9803 28.8479 12.9803H27.4008C27.1611 12.9787 26.9551 12.8095 26.9072 12.5745C26.713 11.6577 25.9043 11.0013 24.9672 11C24.0279 11 23.2472 11.6392 23.0241 12.5871C22.971 12.8157 22.7682 12.9783 22.5335 12.9803H21.1192C20.6888 12.979 20.3389 13.3268 20.3376 13.7572C20.3376 13.7656 20.3377 13.7741 20.338 13.7824V16.3824Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M18.385 36.3536H22.7951V32.1326H18.385V36.3536ZM19.2508 33.9926C19.2508 33.9926 19.2508 33.9925 19.2508 33.9926C19.4241 33.7747 19.7412 33.7386 19.959 33.9118L20.3244 34.2027L21.1886 33.2154C21.3719 33.006 21.6903 32.9847 21.8998 33.1681C22.1093 33.3514 22.1305 33.6698 21.9472 33.8793L20.7665 35.2285C20.5892 35.4311 20.2841 35.4585 20.0734 35.291L19.3314 34.7007C19.1136 34.5274 19.0775 34.2103 19.2508 33.9926Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.7482 15.2483H30.6703V16.9067C30.6672 17.1769 30.4457 17.3936 30.1754 17.3906C30.1715 17.3905 30.1674 17.3905 30.1635 17.3903H19.8039C19.5488 17.3971 19.3365 17.1958 19.3297 16.9408C19.3293 16.9294 19.3295 16.918 19.33 16.9067V15.2483H16.252C15.4419 15.2483 14.7939 15.9321 14.7939 16.7422V37.56C14.7921 38.3534 15.4336 38.998 16.2269 38.9999C16.2353 38.9999 16.2437 38.9999 16.252 38.9997H33.7482C34.5415 39.0117 35.1942 38.3783 35.2062 37.5851C35.2063 37.5767 35.2063 37.5684 35.2063 37.56V16.7422C35.2063 15.9321 34.5584 15.2483 33.7482 15.2483ZM23.8031 36.8577C23.8031 37.136 23.5775 37.3617 23.2991 37.3617H17.881C17.6027 37.3617 17.377 37.136 17.377 36.8577V31.6286C17.377 31.3503 17.6027 31.1246 17.881 31.1246H23.2991C23.5775 31.1246 23.8031 31.3503 23.8031 31.6286V36.8577ZM32.109 36.0387H25.5651C25.2868 36.0387 25.0611 35.813 25.0611 35.5347C25.0611 35.2563 25.2868 35.0307 25.5651 35.0307H32.109C32.3874 35.0307 32.613 35.2563 32.613 35.5347C32.613 35.813 32.3874 36.0387 32.109 36.0387ZM25.0611 32.8886C25.0611 32.6103 25.2868 32.3846 25.5651 32.3846H29.478C29.7564 32.3846 29.982 32.6103 29.982 32.8886C29.982 33.167 29.7564 33.3926 29.478 33.3926H25.5651C25.2868 33.3926 25.0611 33.167 25.0611 32.8886ZM34.1983 26.3389C34.1983 27.3323 33.3848 28.1635 32.3914 28.1635H32.0197C31.7382 29.0456 30.8773 29.7638 29.8615 29.7638C28.8457 29.7638 27.9846 29.0456 27.7029 28.1635H22.081C21.7995 29.0456 20.9386 29.7638 19.9228 29.7638C18.9069 29.7638 18.046 29.0456 17.7645 28.1635H17.6088C16.6155 28.1635 15.802 27.3323 15.802 26.3389V25.2427C15.8047 24.4315 16.3486 23.7219 17.1313 23.5086L19.9711 22.7371L21.6623 20.5239C22.0878 19.9745 22.7448 19.6545 23.4397 19.6584H28.4494C29.2174 19.6501 29.9347 20.0413 30.3434 20.6916L31.6581 22.7747L33.1396 23.4475C33.7827 23.7403 34.1963 24.3809 34.1983 25.0876V26.3389Z"
                      fill="#3C3C3C"
                    />
                    <rect x="15" y="18" width="20" height="12" fill="#3C3C3C" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M30.7017 22.0966H31.9403C31.981 22.0966 32.0213 22.1046 32.0589 22.1201C32.0965 22.1357 32.1306 22.1585 32.1594 22.1872C32.1881 22.216 32.2109 22.2501 32.2265 22.2877C32.242 22.3253 32.25 22.3656 32.25 22.4063V27.9801C32.25 28.0208 32.242 28.0611 32.2265 28.0986C32.2109 28.1362 32.1881 28.1704 32.1594 28.1991C32.1306 28.2279 32.0965 28.2507 32.0589 28.2663C32.0213 28.2818 31.981 28.2898 31.9403 28.2898H30.7017C30.661 28.2898 30.6208 28.2818 30.5832 28.2663C30.5456 28.2507 30.5114 28.2279 30.4827 28.1991C30.4539 28.1704 30.4311 28.1362 30.4156 28.0986C30.4 28.0611 30.392 28.0208 30.392 27.9801V27.0511H29.1534V28.5994C29.1534 28.6401 29.1454 28.6804 29.1299 28.718C29.1143 28.7555 29.0915 28.7897 29.0628 28.8184C29.034 28.8472 28.9999 28.87 28.9623 28.8856C28.9247 28.9011 28.8844 28.9091 28.8438 28.9091H22.6506C22.6099 28.9091 22.5696 28.9011 22.532 28.8856C22.4945 28.87 22.4603 28.8472 22.4316 28.8184C22.4028 28.7897 22.38 28.7555 22.3644 28.718C22.3489 28.6804 22.3409 28.6401 22.3409 28.5994V27.6705H20.1733C20.1326 27.6705 20.0923 27.6625 20.0548 27.6469C20.0172 27.6314 19.983 27.6086 19.9543 27.5798C19.9255 27.5511 19.9027 27.5169 19.8872 27.4793C19.8716 27.4417 19.8636 27.4015 19.8636 27.3608V24.8835H19.2443V26.1222C19.2443 26.2043 19.2117 26.2831 19.1536 26.3411C19.0955 26.3992 19.0168 26.4318 18.9347 26.4318C18.8525 26.4318 18.7738 26.3992 18.7157 26.3411C18.6576 26.2831 18.625 26.2043 18.625 26.1222V23.0256C18.625 22.9434 18.6576 22.8647 18.7157 22.8066C18.7738 22.7485 18.8525 22.7159 18.9347 22.7159C19.0168 22.7159 19.0955 22.7485 19.1536 22.8066C19.2117 22.8647 19.2443 22.9434 19.2443 23.0256V24.2642H19.8636V21.7869C19.8636 21.7463 19.8716 21.706 19.8872 21.6684C19.9027 21.6308 19.9255 21.5967 19.9543 21.5679C19.983 21.5392 20.0172 21.5163 20.0548 21.5008C20.0923 21.4852 20.1326 21.4772 20.1733 21.4773H21.7216V20.5483C21.7216 20.5076 21.7296 20.4673 21.7451 20.4298C21.7607 20.3922 21.7835 20.358 21.8122 20.3293C21.841 20.3005 21.8751 20.2777 21.9127 20.2622C21.9503 20.2466 21.9906 20.2386 22.0313 20.2386H24.5085V19.6193H23.2699C23.1878 19.6193 23.109 19.5867 23.0509 19.5286C22.9929 19.4705 22.9602 19.3918 22.9602 19.3097C22.9602 19.2275 22.9929 19.1488 23.0509 19.0907C23.109 19.0326 23.1878 19 23.2699 19H26.3665C26.4486 19 26.5274 19.0326 26.5854 19.0907C26.6435 19.1488 26.6761 19.2275 26.6761 19.3097C26.6761 19.3918 26.6435 19.4705 26.5854 19.5286C26.5274 19.5867 26.4486 19.6193 26.3665 19.6193H25.1278V20.2386H27.6051C27.6458 20.2386 27.6861 20.2466 27.7236 20.2622C27.7612 20.2777 27.7954 20.3005 27.8241 20.3293C27.8529 20.358 27.8757 20.3922 27.8913 20.4298C27.9068 20.4673 27.9148 20.5076 27.9148 20.5483V21.4773H28.8438C28.8844 21.4772 28.9247 21.4852 28.9623 21.5008C28.9999 21.5163 29.034 21.5392 29.0628 21.5679C29.0915 21.5967 29.1143 21.6308 29.1299 21.6684C29.1454 21.706 29.1534 21.7463 29.1534 21.7869V23.3352H30.392V22.4063C30.392 22.3656 30.4 22.3253 30.4156 22.2877C30.4311 22.2501 30.4539 22.216 30.4827 22.1872C30.5114 22.1585 30.5456 22.1357 30.5832 22.1201C30.6208 22.1046 30.661 22.0966 30.7017 22.0966ZM25.7004 24.2306C25.7486 24.2466 25.7849 24.2864 25.7967 24.3358C25.8083 24.3852 25.7935 24.4371 25.7576 24.473L24.2933 25.9373C24.2423 25.9883 24.1624 25.9944 24.1041 25.9526C24.0459 25.9106 24.0267 25.8325 24.0587 25.7683L24.569 24.7478L23.8505 24.5083C23.8023 24.4923 23.766 24.4525 23.7543 24.403C23.7427 24.3537 23.7574 24.3018 23.7933 24.2659L25.2577 22.8015C25.3083 22.7506 25.3884 22.7443 25.4469 22.7862C25.5051 22.8283 25.5242 22.9064 25.4922 22.9706L24.982 23.9911L25.7004 24.2306Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M31.9403 22.0966V22.4966L31.9406 22.4966L31.9403 22.0966ZM30.7017 22.0966L30.7015 22.4966H30.7017V22.0966ZM32.1594 22.1872L31.8765 22.4701L31.8765 22.4701L32.1594 22.1872ZM32.2265 22.2877L31.8569 22.4407L31.8569 22.4407L32.2265 22.2877ZM32.25 22.4063L31.85 22.406V22.4063H32.25ZM32.25 27.9801H31.85V27.9803L32.25 27.9801ZM32.2265 28.0986L31.8569 27.9457L31.8569 27.9457L32.2265 28.0986ZM32.0589 28.2663L32.2118 28.6359L32.2118 28.6358L32.0589 28.2663ZM31.9403 28.2898L31.9406 27.8898H31.9403V28.2898ZM30.7017 28.2898V27.8898H30.7015L30.7017 28.2898ZM30.5832 28.2663L30.4302 28.6358L30.4302 28.6359L30.5832 28.2663ZM30.4827 28.1991L30.1998 28.482L30.1999 28.482L30.4827 28.1991ZM30.4156 28.0986L30.046 28.2516L30.046 28.2516L30.4156 28.0986ZM30.392 27.9801L30.792 27.9804V27.9801H30.392ZM30.392 27.0511H30.792V26.6511H30.392V27.0511ZM29.1534 27.0511V26.6511H28.7534V27.0511H29.1534ZM29.1534 28.5994H28.7534V28.5997L29.1534 28.5994ZM29.1299 28.718L28.7603 28.565L28.7603 28.565L29.1299 28.718ZM29.0628 28.8184L28.7799 28.5356L28.7799 28.5356L29.0628 28.8184ZM28.8438 28.9091L28.844 28.5091H28.8438V28.9091ZM22.6506 28.9091V28.5091H22.6503L22.6506 28.9091ZM22.532 28.8856L22.3791 29.2552H22.3791L22.532 28.8856ZM22.4316 28.8184L22.7144 28.5356L22.7144 28.5356L22.4316 28.8184ZM22.3644 28.718L22.734 28.565L22.734 28.565L22.3644 28.718ZM22.3409 28.5994L22.7409 28.5997V28.5994H22.3409ZM22.3409 27.6705H22.7409V27.2705H22.3409V27.6705ZM20.1733 27.6705V27.2705H20.1731L20.1733 27.6705ZM20.0548 27.6469L20.2077 27.2773L20.2077 27.2773L20.0548 27.6469ZM19.9543 27.5798L20.2371 27.297L20.2371 27.297L19.9543 27.5798ZM19.8872 27.4793L20.2568 27.3264L20.2568 27.3264L19.8872 27.4793ZM19.8636 27.3608L20.2636 27.361V27.3608H19.8636ZM19.8636 24.8835H20.2636V24.4835H19.8636V24.8835ZM19.2443 24.8835V24.4835H18.8443V24.8835H19.2443ZM19.1536 26.3411L18.8708 26.0583L18.8708 26.0583L19.1536 26.3411ZM18.7157 26.3411L18.9985 26.0583L18.9985 26.0583L18.7157 26.3411ZM18.7157 22.8066L18.9985 23.0894H18.9985L18.7157 22.8066ZM19.1536 22.8066L19.4365 22.5238L19.4365 22.5238L19.1536 22.8066ZM19.2443 24.2642H18.8443V24.6642H19.2443V24.2642ZM19.8636 24.2642V24.6642H20.2636V24.2642H19.8636ZM19.8636 21.7869H20.2636L20.2636 21.7867L19.8636 21.7869ZM19.8872 21.6684L20.2568 21.8214V21.8214L19.8872 21.6684ZM19.9543 21.5679L20.2371 21.8508L20.2371 21.8508L19.9543 21.5679ZM20.1733 21.4773L20.1731 21.8773H20.1733V21.4773ZM21.7216 21.4773V21.8773H22.1216V21.4773H21.7216ZM21.7216 20.5483H22.1216L22.1216 20.5481L21.7216 20.5483ZM21.8122 20.3293L22.0951 20.6121L22.0951 20.6121L21.8122 20.3293ZM21.9127 20.2622L22.0657 20.6318L22.0657 20.6318L21.9127 20.2622ZM22.0313 20.2386L22.031 20.6386H22.0313V20.2386ZM24.5085 20.2386V20.6386H24.9085V20.2386H24.5085ZM24.5085 19.6193H24.9085V19.2193H24.5085V19.6193ZM23.0509 19.5286L22.7681 19.8115L22.7681 19.8115L23.0509 19.5286ZM23.0509 19.0907L22.7681 18.8079L22.7681 18.8079L23.0509 19.0907ZM26.5854 19.0907L26.8683 18.8079V18.8079L26.5854 19.0907ZM26.5854 19.5286L26.3026 19.2458L26.3026 19.2458L26.5854 19.5286ZM25.1278 19.6193V19.2193H24.7278V19.6193H25.1278ZM25.1278 20.2386H24.7278V20.6386H25.1278V20.2386ZM27.6051 20.2386V20.6386L27.6054 20.6386L27.6051 20.2386ZM27.7236 20.2622L27.5707 20.6318L27.5707 20.6318L27.7236 20.2622ZM27.8241 20.3293L27.5413 20.6121L27.5413 20.6121L27.8241 20.3293ZM27.9148 20.5483L27.5148 20.5481V20.5483H27.9148ZM27.9148 21.4773H27.5148V21.8773H27.9148V21.4773ZM28.8438 21.4773V21.8773L28.844 21.8773L28.8438 21.4773ZM29.0628 21.5679L28.7799 21.8508L28.7799 21.8508L29.0628 21.5679ZM29.1299 21.6684L28.7603 21.8214L28.7603 21.8214L29.1299 21.6684ZM29.1534 21.7869L28.7534 21.7867V21.7869H29.1534ZM29.1534 23.3352H28.7534V23.7352H29.1534V23.3352ZM30.392 23.3352V23.7352H30.792V23.3352H30.392ZM30.392 22.4063H30.792V22.406L30.392 22.4063ZM30.4156 22.2877L30.046 22.1348L30.046 22.1348L30.4156 22.2877ZM30.4827 22.1872L30.1998 21.9044L30.1998 21.9044L30.4827 22.1872ZM30.5832 22.1201L30.4302 21.7505L30.4302 21.7505L30.5832 22.1201ZM25.7967 24.3358L26.1861 24.2444L26.1859 24.2436L25.7967 24.3358ZM25.7004 24.2306L25.5739 24.6101L25.5743 24.6102L25.7004 24.2306ZM25.7576 24.473L25.4748 24.1901L25.4748 24.1901L25.7576 24.473ZM24.2933 25.9373L24.5761 26.2202L24.5761 26.2202L24.2933 25.9373ZM24.1041 25.9526L23.8698 26.2769L23.8711 26.2778L24.1041 25.9526ZM24.0587 25.7683L23.701 25.5894L23.7008 25.5897L24.0587 25.7683ZM24.569 24.7478L24.9267 24.9267L25.133 24.5142L24.6955 24.3684L24.569 24.7478ZM23.8505 24.5083L23.977 24.1288L23.9766 24.1287L23.8505 24.5083ZM23.7543 24.403L23.3649 24.4945L23.3651 24.4953L23.7543 24.403ZM23.7933 24.2659L23.5105 23.9831L23.5105 23.9831L23.7933 24.2659ZM25.2577 22.8015L25.5405 23.0844L25.5413 23.0836L25.2577 22.8015ZM25.4469 22.7862L25.6811 22.462L25.6798 22.4611L25.4469 22.7862ZM25.4922 22.9706L25.85 23.1495L25.8502 23.1491L25.4922 22.9706ZM24.982 23.9911L24.6242 23.8122L24.418 24.2247L24.8555 24.3705L24.982 23.9911ZM31.9403 21.6966H30.7017V22.4966H31.9403V21.6966ZM32.2118 21.7505C32.1257 21.7149 32.0333 21.6965 31.9401 21.6966L31.9406 22.4966C31.9287 22.4966 31.9169 22.4943 31.9059 22.4897L32.2118 21.7505ZM32.4422 21.9044C32.3763 21.8385 32.298 21.7862 32.2118 21.7505L31.9059 22.4897C31.8949 22.4852 31.8849 22.4785 31.8765 22.4701L32.4422 21.9044ZM32.5961 22.1348C32.5604 22.0486 32.5081 21.9703 32.4422 21.9044L31.8765 22.4701C31.8681 22.4617 31.8614 22.4517 31.8569 22.4407L32.5961 22.1348ZM32.65 22.4065C32.6501 22.3133 32.6317 22.2209 32.5961 22.1348L31.8569 22.4407C31.8523 22.4297 31.85 22.4179 31.85 22.406L32.65 22.4065ZM32.65 27.9801V22.4063H31.85V27.9801H32.65ZM32.5961 28.2516C32.6317 28.1654 32.6501 28.0731 32.65 27.9799L31.85 27.9803C31.85 27.9685 31.8523 27.9567 31.8569 27.9457L32.5961 28.2516ZM32.4422 28.482C32.5081 28.416 32.5604 28.3378 32.5961 28.2516L31.8569 27.9457C31.8614 27.9347 31.8681 27.9247 31.8765 27.9163L32.4422 28.482ZM32.2118 28.6358C32.298 28.6002 32.3763 28.5479 32.4422 28.482L31.8765 27.9163C31.8849 27.9079 31.8949 27.9012 31.9059 27.8967L32.2118 28.6358ZM31.9401 28.6898C32.0333 28.6898 32.1257 28.6715 32.2118 28.6359L31.9059 27.8967C31.9169 27.8921 31.9287 27.8898 31.9406 27.8898L31.9401 28.6898ZM30.7017 28.6898H31.9403V27.8898H30.7017V28.6898ZM30.4302 28.6359C30.5164 28.6715 30.6087 28.6898 30.7019 28.6898L30.7015 27.8898C30.7134 27.8898 30.7251 27.8921 30.7361 27.8967L30.4302 28.6359ZM30.1999 28.482C30.2658 28.5479 30.344 28.6002 30.4302 28.6358L30.7361 27.8967C30.7471 27.9012 30.7571 27.9079 30.7655 27.9163L30.1999 28.482ZM30.046 28.2516C30.0816 28.3378 30.1339 28.416 30.1998 28.482L30.7655 27.9163C30.7739 27.9247 30.7806 27.9347 30.7852 27.9457L30.046 28.2516ZM29.992 27.9799C29.992 28.0731 30.0103 28.1654 30.046 28.2516L30.7852 27.9457C30.7897 27.9567 30.7921 27.9685 30.792 27.9804L29.992 27.9799ZM29.992 27.0511V27.9801H30.792V27.0511H29.992ZM29.1534 27.4511H30.392V26.6511H29.1534V27.4511ZM29.5534 28.5994V27.0511H28.7534V28.5994H29.5534ZM29.4995 28.8709C29.5351 28.7848 29.5535 28.6924 29.5534 28.5992L28.7534 28.5997C28.7534 28.5878 28.7557 28.576 28.7603 28.565L29.4995 28.8709ZM29.3456 29.1013C29.4115 29.0354 29.4638 28.9571 29.4995 28.8709L28.7603 28.565C28.7648 28.554 28.7715 28.544 28.7799 28.5356L29.3456 29.1013ZM29.1152 29.2552C29.2014 29.2195 29.2797 29.1672 29.3456 29.1013L28.7799 28.5356C28.7883 28.5272 28.7983 28.5205 28.8093 28.516L29.1152 29.2552ZM28.8435 29.3091C28.9367 29.3091 29.0291 29.2908 29.1152 29.2552L28.8093 28.516C28.8203 28.5114 28.8321 28.5091 28.844 28.5091L28.8435 29.3091ZM22.6506 29.3091H28.8438V28.5091H22.6506V29.3091ZM22.3791 29.2552C22.4652 29.2908 22.5576 29.3091 22.6508 29.3091L22.6503 28.5091C22.6622 28.5091 22.674 28.5114 22.685 28.516L22.3791 29.2552ZM22.1487 29.1013C22.2146 29.1672 22.2929 29.2195 22.3791 29.2552L22.685 28.516C22.696 28.5205 22.706 28.5272 22.7144 28.5356L22.1487 29.1013ZM21.9948 28.8709C22.0305 28.9571 22.0828 29.0354 22.1487 29.1013L22.7144 28.5356C22.7228 28.544 22.7295 28.554 22.734 28.565L21.9948 28.8709ZM21.9409 28.5992C21.9409 28.6924 21.9592 28.7848 21.9948 28.8709L22.734 28.565C22.7386 28.576 22.7409 28.5878 22.7409 28.5997L21.9409 28.5992ZM21.9409 27.6705V28.5994H22.7409V27.6705H21.9409ZM20.1733 28.0705H22.3409V27.2705H20.1733V28.0705ZM19.9018 28.0165C19.988 28.0522 20.0803 28.0705 20.1735 28.0705L20.1731 27.2705C20.1849 27.2704 20.1967 27.2728 20.2077 27.2773L19.9018 28.0165ZM19.6714 27.8627C19.7374 27.9286 19.8156 27.9809 19.9018 28.0165L20.2077 27.2773C20.2187 27.2819 20.2287 27.2886 20.2371 27.297L19.6714 27.8627ZM19.5176 27.6323C19.5532 27.7184 19.6055 27.7967 19.6714 27.8627L20.2371 27.297C20.2455 27.3054 20.2522 27.3154 20.2568 27.3264L19.5176 27.6323ZM19.4636 27.3606C19.4636 27.4538 19.4819 27.5461 19.5176 27.6323L20.2568 27.3264C20.2613 27.3374 20.2636 27.3491 20.2636 27.361L19.4636 27.3606ZM19.4636 24.8835V27.3608H20.2636V24.8835H19.4636ZM19.2443 25.2835H19.8636V24.4835H19.2443V25.2835ZM19.6443 26.1222V24.8835H18.8443V26.1222H19.6443ZM19.4365 26.624C19.5696 26.4909 19.6443 26.3104 19.6443 26.1222H18.8443C18.8443 26.0982 18.8538 26.0752 18.8708 26.0583L19.4365 26.624ZM18.9347 26.8318C19.1229 26.8318 19.3034 26.7571 19.4365 26.624L18.8708 26.0583C18.8877 26.0413 18.9107 26.0318 18.9347 26.0318V26.8318ZM18.4329 26.624C18.5659 26.7571 18.7464 26.8318 18.9347 26.8318V26.0318C18.9586 26.0318 18.9816 26.0413 18.9985 26.0583L18.4329 26.624ZM18.225 26.1222C18.225 26.3104 18.2998 26.4909 18.4329 26.624L18.9985 26.0583C19.0155 26.0752 19.025 26.0982 19.025 26.1222H18.225ZM18.225 23.0256V26.1222H19.025V23.0256H18.225ZM18.4329 22.5238C18.2998 22.6569 18.225 22.8374 18.225 23.0256H19.025C19.025 23.0495 19.0155 23.0725 18.9985 23.0894L18.4329 22.5238ZM18.9347 22.3159C18.7464 22.3159 18.5659 22.3907 18.4329 22.5238L18.9985 23.0894C18.9816 23.1064 18.9586 23.1159 18.9347 23.1159V22.3159ZM19.4365 22.5238C19.3034 22.3907 19.1229 22.3159 18.9347 22.3159V23.1159C18.9107 23.1159 18.8877 23.1064 18.8708 23.0894L19.4365 22.5238ZM19.6443 23.0256C19.6443 22.8374 19.5696 22.6569 19.4365 22.5238L18.8708 23.0894C18.8538 23.0725 18.8443 23.0495 18.8443 23.0256H19.6443ZM19.6443 24.2642V23.0256H18.8443V24.2642H19.6443ZM19.8636 23.8642H19.2443V24.6642H19.8636V23.8642ZM19.4636 21.7869V24.2642H20.2636V21.7869H19.4636ZM19.5176 21.5154C19.4819 21.6016 19.4636 21.6939 19.4636 21.7872L20.2636 21.7867C20.2636 21.7986 20.2613 21.8104 20.2568 21.8214L19.5176 21.5154ZM19.6714 21.2851C19.6055 21.351 19.5532 21.4293 19.5176 21.5154L20.2568 21.8214C20.2522 21.8324 20.2455 21.8423 20.2371 21.8508L19.6714 21.2851ZM19.9018 21.1312C19.8156 21.1669 19.7374 21.2191 19.6714 21.2851L20.2371 21.8508C20.2287 21.8592 20.2187 21.8658 20.2077 21.8704L19.9018 21.1312ZM20.1735 21.0773C20.0803 21.0772 19.988 21.0955 19.9018 21.1312L20.2077 21.8704C20.1967 21.8749 20.185 21.8773 20.1731 21.8773L20.1735 21.0773ZM21.7216 21.0773H20.1733V21.8773H21.7216V21.0773ZM21.3216 20.5483V21.4773H22.1216V20.5483H21.3216ZM21.3755 20.2768C21.3399 20.363 21.3215 20.4553 21.3216 20.5485L22.1216 20.5481C22.1216 20.56 22.1193 20.5717 22.1147 20.5827L21.3755 20.2768ZM21.5294 20.0464C21.4635 20.1124 21.4112 20.1906 21.3755 20.2768L22.1147 20.5827C22.1102 20.5937 22.1035 20.6037 22.0951 20.6121L21.5294 20.0464ZM21.7598 19.8926C21.6736 19.9282 21.5953 19.9805 21.5294 20.0464L22.0951 20.6121C22.0867 20.6205 22.0767 20.6272 22.0657 20.6318L21.7598 19.8926ZM22.0315 19.8386C21.9382 19.8386 21.8459 19.8569 21.7598 19.8926L22.0657 20.6318C22.0547 20.6363 22.0429 20.6386 22.031 20.6386L22.0315 19.8386ZM24.5085 19.8386H22.0313V20.6386H24.5085V19.8386ZM24.1085 19.6193V20.2386H24.9085V19.6193H24.1085ZM23.2699 20.0193H24.5085V19.2193H23.2699V20.0193ZM22.7681 19.8115C22.9012 19.9446 23.0817 20.0193 23.2699 20.0193V19.2193C23.2938 19.2193 23.3168 19.2288 23.3338 19.2458L22.7681 19.8115ZM22.5602 19.3097C22.5602 19.4979 22.635 19.6784 22.7681 19.8115L23.3338 19.2458C23.3507 19.2627 23.3602 19.2857 23.3602 19.3097H22.5602ZM22.7681 18.8079C22.635 18.9409 22.5602 19.1214 22.5602 19.3097H23.3602C23.3602 19.3336 23.3507 19.3566 23.3338 19.3735L22.7681 18.8079ZM23.2699 18.6C23.0817 18.6 22.9012 18.6748 22.7681 18.8079L23.3338 19.3735C23.3168 19.3905 23.2938 19.4 23.2699 19.4V18.6ZM26.3665 18.6H23.2699V19.4H26.3665V18.6ZM26.8683 18.8079C26.7352 18.6748 26.5547 18.6 26.3665 18.6V19.4C26.3425 19.4 26.3195 19.3905 26.3026 19.3735L26.8683 18.8079ZM27.0761 19.3097C27.0761 19.1214 27.0014 18.9409 26.8683 18.8079L26.3026 19.3735C26.2857 19.3566 26.2761 19.3336 26.2761 19.3097H27.0761ZM26.8683 19.8115C27.0014 19.6784 27.0761 19.4979 27.0761 19.3097H26.2761C26.2761 19.2857 26.2857 19.2627 26.3026 19.2458L26.8683 19.8115ZM26.3665 20.0193C26.5547 20.0193 26.7352 19.9446 26.8683 19.8115L26.3026 19.2458C26.3195 19.2288 26.3425 19.2193 26.3665 19.2193V20.0193ZM25.1278 20.0193H26.3665V19.2193H25.1278V20.0193ZM25.5278 20.2386V19.6193H24.7278V20.2386H25.5278ZM27.6051 19.8386H25.1278V20.6386H27.6051V19.8386ZM27.8766 19.8926C27.7905 19.8569 27.6981 19.8386 27.6049 19.8386L27.6054 20.6386C27.5935 20.6386 27.5817 20.6363 27.5707 20.6318L27.8766 19.8926ZM28.107 20.0464C28.041 19.9805 27.9628 19.9282 27.8766 19.8926L27.5707 20.6318C27.5597 20.6272 27.5497 20.6205 27.5413 20.6121L28.107 20.0464ZM28.2608 20.2768C28.2252 20.1906 28.1729 20.1124 28.107 20.0464L27.5413 20.6121C27.5329 20.6037 27.5262 20.5937 27.5217 20.5827L28.2608 20.2768ZM28.3148 20.5485C28.3148 20.4553 28.2965 20.363 28.2608 20.2768L27.5217 20.5827C27.5171 20.5717 27.5148 20.56 27.5148 20.5481L28.3148 20.5485ZM28.3148 21.4773V20.5483H27.5148V21.4773H28.3148ZM28.8438 21.0773H27.9148V21.8773H28.8438V21.0773ZM29.1152 21.1312C29.0291 21.0955 28.9368 21.0772 28.8435 21.0773L28.844 21.8773C28.8321 21.8773 28.8203 21.8749 28.8093 21.8704L29.1152 21.1312ZM29.3456 21.2851C29.2797 21.2191 29.2014 21.1669 29.1152 21.1312L28.8093 21.8704C28.7983 21.8658 28.7883 21.8592 28.7799 21.8508L29.3456 21.2851ZM29.4995 21.5154C29.4638 21.4293 29.4115 21.351 29.3456 21.2851L28.7799 21.8508C28.7715 21.8423 28.7648 21.8324 28.7603 21.8214L29.4995 21.5154ZM29.5534 21.7872C29.5535 21.6939 29.5351 21.6016 29.4995 21.5154L28.7603 21.8214C28.7557 21.8104 28.7534 21.7986 28.7534 21.7867L29.5534 21.7872ZM29.5534 23.3352V21.7869H28.7534V23.3352H29.5534ZM30.392 22.9352H29.1534V23.7352H30.392V22.9352ZM29.992 22.4063V23.3352H30.792V22.4063H29.992ZM30.046 22.1348C30.0103 22.2209 29.992 22.3133 29.992 22.4065L30.792 22.406C30.7921 22.4179 30.7897 22.4297 30.7852 22.4407L30.046 22.1348ZM30.1998 21.9044C30.1339 21.9703 30.0816 22.0486 30.046 22.1348L30.7852 22.4407C30.7806 22.4517 30.7739 22.4617 30.7655 22.4701L30.1998 21.9044ZM30.4302 21.7505C30.3441 21.7862 30.2658 21.8385 30.1998 21.9044L30.7655 22.4701C30.7571 22.4785 30.7471 22.4852 30.7361 22.4897L30.4302 21.7505ZM30.7019 21.6966C30.6087 21.6965 30.5164 21.7149 30.4302 21.7505L30.7361 22.4897C30.7251 22.4943 30.7134 22.4966 30.7015 22.4966L30.7019 21.6966ZM26.1859 24.2436C26.1423 24.0597 26.0068 23.9109 25.8266 23.851L25.5743 24.6102C25.4905 24.5823 25.4276 24.513 25.4074 24.4281L26.1859 24.2436ZM26.0405 24.7558C26.1744 24.6219 26.2293 24.4284 26.1861 24.2444L25.4073 24.4273C25.3872 24.342 25.4127 24.2523 25.4748 24.1901L26.0405 24.7558ZM24.5761 26.2202L26.0405 24.7558L25.4748 24.1901L24.0104 25.6545L24.5761 26.2202ZM23.8711 26.2778C24.0871 26.4326 24.3855 26.4107 24.5761 26.2202L24.0105 25.6544C24.0991 25.5659 24.2376 25.5562 24.3371 25.6275L23.8711 26.2778ZM23.7008 25.5897C23.5814 25.8291 23.6527 26.12 23.8698 26.2769L24.3383 25.6284C24.439 25.7011 24.472 25.8359 24.4167 25.9469L23.7008 25.5897ZM24.2112 24.5689L23.701 25.5894L24.4165 25.9472L24.9267 24.9267L24.2112 24.5689ZM23.724 24.8878L24.4425 25.1273L24.6955 24.3684L23.977 24.1288L23.724 24.8878ZM23.3651 24.4953C23.4086 24.6792 23.5442 24.828 23.7244 24.8879L23.9766 24.1287C24.0605 24.1566 24.1234 24.2258 24.1435 24.3108L23.3651 24.4953ZM23.5105 23.9831C23.3766 24.117 23.3217 24.3105 23.3649 24.4945L24.1437 24.3116C24.1637 24.3969 24.1383 24.4866 24.0762 24.5487L23.5105 23.9831ZM24.9748 22.5187L23.5105 23.9831L24.0762 24.5487L25.5405 23.0844L24.9748 22.5187ZM25.6798 22.4611C25.4637 22.3062 25.1646 22.3279 24.9741 22.5195L25.5413 23.0836C25.452 23.1734 25.3131 23.1824 25.2139 23.1114L25.6798 22.4611ZM25.8502 23.1491C25.9696 22.9098 25.8982 22.6188 25.6811 22.462L25.2126 23.1105C25.1119 23.0377 25.0789 22.903 25.1343 22.792L25.8502 23.1491ZM25.3397 24.1699L25.85 23.1495L25.1344 22.7917L24.6242 23.8122L25.3397 24.1699ZM25.8269 23.8511L25.1085 23.6116L24.8555 24.3705L25.5739 24.6101L25.8269 23.8511Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings1.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика бензинового двигателя и электронных систем
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M18.381 14.3352C17.3592 14.8844 16.4061 15.5612 15.5481 16.3468L16.6561 17.5568C17.4138 16.8629 18.2555 16.2652 19.1577 15.7803L18.381 14.3352Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M23.9144 12.7161C22.7529 12.8052 21.607 13.0389 20.5085 13.4108L21.0346 14.9648C22.0036 14.6368 23.0147 14.4306 24.0399 14.3519L23.9144 12.7161Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M11.428 23.2263C11.144 24.3475 11 25.5076 11 26.6744H12.6406C12.6406 25.6433 12.7677 24.6188 13.0184 23.6291L11.428 23.2263Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M31.7509 14.407L30.9587 15.8437C31.8561 16.3385 32.6916 16.9454 33.442 17.6475L34.5629 16.4495C33.7133 15.6546 32.7672 14.9674 31.7509 14.407Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M13.9721 18.0491C13.2543 18.9656 12.6529 19.9688 12.1846 21.0306L13.6857 21.6926C14.099 20.7554 14.6299 19.8699 15.2638 19.0607L13.9721 18.0491Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.1206 18.1682L34.8181 19.1659C35.4429 19.9815 35.964 20.8722 36.3671 21.8132L37.8751 21.1672C37.4185 20.101 36.8281 19.092 36.1206 18.1682Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M38.6075 23.3701L37.0129 23.756C37.2428 24.7058 37.3593 25.6877 37.3593 26.6745H39C39 25.5578 38.8679 24.446 38.6075 23.3701Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.2328 12.728L26.0901 14.3625C27.1142 14.4519 28.123 14.6688 29.0887 15.0072L29.6313 13.4589C28.5365 13.0752 27.3931 12.8293 26.2328 12.728Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M22.8125 14.9714V21.5339H27.1875V14.9714H22.8125ZM25.5469 19.8933H24.4531V16.6121H25.5469V19.8933Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M20.3723 25.699L19.9392 27.2608H20.7857L20.3723 25.699Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M32.9796 19.6824C31.8405 18.3835 30.4124 17.3919 28.8281 16.7783V23.1745H21.1719V16.7786C19.5422 17.4103 18.0775 18.4423 16.9267 19.7908C15.2913 21.7071 14.3906 24.1518 14.3906 26.6745C14.3906 32.5245 19.15 37.2838 25 37.2838C30.85 37.2838 35.6094 32.5245 35.6094 26.6745C35.6094 24.0996 34.6754 21.6164 32.9796 19.6824ZM21.2714 29.026L20.9892 28.1138H19.7489L19.4733 29.026H18.1148L19.8539 24.3666H20.8908L22.6233 29.026H21.2714ZM24.2442 29.026H22.8727L26.2523 24.3666H27.6305L24.2442 29.026ZM31.5646 28.442C31.4311 28.5776 31.2792 28.6913 31.1085 28.7832C30.9379 28.8751 30.7563 28.9451 30.5639 28.9932C30.3713 29.0413 30.1832 29.0654 29.9995 29.0654C29.6757 29.0654 29.3782 28.9965 29.107 28.8587C28.8357 28.7209 28.6027 28.5383 28.4081 28.3107C28.2133 28.0833 28.0613 27.8251 27.952 27.5363C27.8426 27.2476 27.7879 26.9545 27.7879 26.657C27.7879 26.3726 27.8382 26.0926 27.9389 25.817C28.0395 25.5413 28.1871 25.2942 28.3819 25.0754C28.5765 24.8567 28.8128 24.6795 29.0906 24.5438C29.3684 24.4083 29.6845 24.3404 30.0389 24.3404C30.4545 24.3404 30.8176 24.4334 31.1283 24.6193C31.4389 24.8053 31.6686 25.0514 31.8174 25.3576L30.8396 26.0532C30.8002 25.9395 30.7487 25.8455 30.6854 25.771C30.6219 25.6967 30.553 25.6376 30.4786 25.5938C30.4042 25.5501 30.3255 25.5195 30.2424 25.502C30.1592 25.4845 30.0827 25.4757 30.0128 25.4757C29.8508 25.4757 29.7119 25.5118 29.596 25.584C29.4801 25.6562 29.3837 25.7503 29.3073 25.8662C29.2307 25.9822 29.1749 26.1134 29.14 26.2599C29.1048 26.4065 29.0875 26.552 29.0875 26.6963C29.0875 26.8583 29.1081 27.0136 29.1498 27.1623C29.1914 27.3111 29.2526 27.4423 29.3335 27.556C29.4144 27.6698 29.5129 27.7606 29.6288 27.8284C29.7447 27.8962 29.8771 27.9301 30.0258 27.9301C30.1002 27.9301 30.1768 27.9202 30.2555 27.9006C30.3343 27.8809 30.4097 27.8481 30.482 27.8021C30.5541 27.7562 30.6198 27.6971 30.6789 27.6249C30.7379 27.5527 30.7848 27.4641 30.82 27.3591L31.8634 27.9826C31.7976 28.1532 31.6981 28.3064 31.5646 28.442Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings2.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика системы кондиционирования
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 500 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M36.375 22.8125C35.1688 22.8125 34.1875 23.7938 34.1875 25C34.1875 25.1921 34.2203 25.3749 34.2671 25.5526L28.4103 28.0625H22.375V28.1106C21.8185 27.5419 21.0441 27.1875 20.1875 27.1875C19.3554 27.1875 18.6007 27.5222 18.0481 28.0625H15.8125C15.571 28.0625 15.375 28.2585 15.375 28.5V28.9375H11.4375V29.8125H15.375V30.6875H11.4375V31.5625H15.375V32C15.375 32.2415 15.571 32.4375 15.8125 32.4375H18.0481C18.5018 32.8811 19.0924 33.183 19.75 33.2775V37.25C19.75 37.4915 19.946 37.6875 20.1875 37.6875H22.3579C22.3649 37.8039 22.375 37.9194 22.375 38.0371V38.125C22.375 38.3665 22.571 38.5625 22.8125 38.5625H25.4375C25.679 38.5625 25.875 38.3665 25.875 38.125V38.0681C25.875 35.7572 24.9821 33.5851 23.3646 31.9388L29.4021 31.5616C29.4747 31.5573 29.5452 31.5345 29.6064 31.496L36.5242 27.1722C37.6599 27.0939 38.5625 26.155 38.5625 25C38.5625 23.7938 37.5812 22.8125 36.375 22.8125ZM16.25 28.9375H17.4247C17.2344 29.3361 17.125 29.7797 17.125 30.25C17.125 30.7203 17.2344 31.1639 17.4247 31.5625H16.25V28.9375ZM18 30.25C18 29.0438 18.9813 28.0625 20.1875 28.0625C21.3937 28.0625 22.375 29.0438 22.375 30.25C22.375 31.4562 21.3937 32.4375 20.1875 32.4375C18.9813 32.4375 18 31.4562 18 30.25ZM20.625 36.8125V33.9311L20.709 34.0151C21.4882 34.7943 22.0092 35.7612 22.2389 36.8125H20.625ZM23.2408 37.6875C23.1564 36.0661 22.4844 34.5533 21.3276 33.3965L21.1032 33.1721C21.6387 33.0036 22.1094 32.6899 22.4739 32.28L22.6935 32.4996C24.0909 33.897 24.8985 35.7266 24.9908 37.6875H23.2408ZM29.2372 30.6954L23.1336 31.0769C23.2076 30.8135 23.25 30.5366 23.25 30.25C23.25 29.7797 23.1406 29.3361 22.9503 28.9375H28.5C28.5591 28.9375 28.6181 28.9257 28.6724 28.9021L34.6565 26.3374C34.835 26.5662 35.0564 26.7561 35.3106 26.8992L29.2372 30.6954ZM36.375 26.3125C35.6514 26.3125 35.0625 25.7236 35.0625 25C35.0625 24.2764 35.6514 23.6875 36.375 23.6875C37.0986 23.6875 37.6875 24.2764 37.6875 25C37.6875 25.7236 37.0986 26.3125 36.375 26.3125Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M29.2372 30.6954L23.1336 31.0769C23.2076 30.8135 23.25 30.5366 23.25 30.25C23.25 29.7797 23.1406 29.3361 22.9503 28.9375H28.5C28.5591 28.9375 28.6181 28.9257 28.6724 28.9021L34.6565 26.3374C34.835 26.5662 35.0564 26.7561 35.3106 26.8992L29.2372 30.6954Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M16.25 28.9375H17.4247C17.2344 29.3361 17.125 29.7797 17.125 30.25C17.125 30.7203 17.2344 31.1639 17.4247 31.5625H16.25V28.9375Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M23.2408 37.6875C23.1564 36.0661 22.4844 34.5533 21.3276 33.3965L21.1032 33.1721C21.6387 33.0036 22.1094 32.6899 22.4739 32.28L22.6935 32.4996C24.0909 33.897 24.8985 35.7266 24.9908 37.6875H23.2408Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.375 26.3125C35.6514 26.3125 35.0625 25.7236 35.0625 25C35.0625 24.2764 35.6514 23.6875 36.375 23.6875C37.0986 23.6875 37.6875 24.2764 37.6875 25C37.6875 25.7236 37.0986 26.3125 36.375 26.3125Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.9375 30.25C21.9375 29.2849 21.1526 28.5 20.1875 28.5C19.2224 28.5 18.4375 29.2849 18.4375 30.25C18.4375 31.2151 19.2224 32 20.1875 32C21.1526 32 21.9375 31.2151 21.9375 30.25ZM19.3125 30.25C19.3125 29.7674 19.7049 29.375 20.1875 29.375C20.6701 29.375 21.0625 29.7674 21.0625 30.25C21.0625 30.7326 20.6701 31.125 20.1875 31.125C19.7049 31.125 19.3125 30.7326 19.3125 30.25Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M29.8125 17.125C28.8474 17.125 28.0625 17.9099 28.0625 18.875C28.0625 19.8401 28.8474 20.625 29.8125 20.625C30.7776 20.625 31.5625 19.8401 31.5625 18.875C31.5625 17.9099 30.7776 17.125 29.8125 17.125ZM29.8125 19.75C29.3299 19.75 28.9375 19.3576 28.9375 18.875C28.9375 18.3924 29.3299 18 29.8125 18C30.2951 18 30.6875 18.3924 30.6875 18.875C30.6875 19.3576 30.2951 19.75 29.8125 19.75Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M12.3125 13.625C12.3125 12.9014 12.9014 12.3125 13.625 12.3125C14.3486 12.3125 14.9375 12.9014 14.9375 13.625C14.9375 14.3486 14.3486 14.9375 13.625 14.9375C12.9014 14.9375 12.3125 14.3486 12.3125 13.625Z"
                      fill="#3C3C3C"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M38.5625 18.4375V17.5625H34.625V17.125C34.625 16.8835 34.429 16.6875 34.1875 16.6875H31.9519C31.3993 16.1472 30.6446 15.8125 29.8125 15.8125C28.9559 15.8125 28.1815 16.1669 27.625 16.7356V16.6875H21.5897L15.7329 14.1776C15.7797 13.9999 15.8125 13.8171 15.8125 13.625C15.8125 12.4188 14.8312 11.4375 13.625 11.4375C12.4188 11.4375 11.4375 12.4188 11.4375 13.625C11.4375 14.78 12.3401 15.7189 13.4754 15.7972L20.3931 20.121C20.4548 20.1595 20.5248 20.1822 20.5974 20.1866L26.6349 20.5638C25.0179 22.2101 24.125 24.3822 24.125 26.6931V26.75C24.125 26.9915 24.321 27.1875 24.5625 27.1875H27.1875C27.429 27.1875 27.625 26.9915 27.625 26.75V26.6621C27.625 26.5444 27.6351 26.4289 27.6421 26.3125H29.8125C30.054 26.3125 30.25 26.1165 30.25 25.875V21.9025C30.9076 21.808 31.4982 21.5061 31.9519 21.0625H34.1875C34.429 21.0625 34.625 20.8665 34.625 20.625V20.1875H38.5625V19.3125H34.625V18.4375H38.5625ZM13.625 12.3125C12.9014 12.3125 12.3125 12.9014 12.3125 13.625C12.3125 14.3486 12.9014 14.9375 13.625 14.9375C14.3486 14.9375 14.9375 14.3486 14.9375 13.625C14.9375 12.9014 14.3486 12.3125 13.625 12.3125ZM15.3435 14.9624C15.165 15.1913 14.9436 15.3811 14.6894 15.5242L20.7628 19.3204L26.8664 19.7019C26.7924 19.4385 26.75 19.1616 26.75 18.875C26.75 18.4047 26.8594 17.9611 27.0497 17.5625H21.5C21.4409 17.5625 21.3819 17.5507 21.3276 17.5271L15.3435 14.9624ZM25.0092 26.3125H26.7592C26.8436 24.6911 27.5156 23.1782 28.6724 22.0215L28.8968 21.7971C28.3609 21.6286 27.8906 21.3149 27.5261 20.905L27.3065 21.1246C25.9096 22.522 25.1019 24.3521 25.0092 26.3125ZM29.2906 22.6401C28.5114 23.4198 27.9903 24.3862 27.7606 25.4375H29.375V22.5561L29.2906 22.6401ZM27.625 18.875C27.625 20.0812 28.6063 21.0625 29.8125 21.0625C31.0187 21.0625 32 20.0812 32 18.875C32 17.6688 31.0187 16.6875 29.8125 16.6875C28.6063 16.6875 27.625 17.6688 27.625 18.875ZM32.5753 20.1875H33.75V17.5625H32.5753C32.7656 17.9611 32.875 18.4047 32.875 18.875C32.875 19.3453 32.7656 19.7889 32.5753 20.1875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M14.6894 15.5242C14.9436 15.3811 15.165 15.1913 15.3435 14.9624L21.3276 17.5271C21.3819 17.5507 21.4409 17.5625 21.5 17.5625H27.0497C26.8594 17.9611 26.75 18.4047 26.75 18.875C26.75 19.1616 26.7924 19.4385 26.8664 19.7019L20.7628 19.3204L14.6894 15.5242Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.75 20.1875H32.5753C32.7656 19.7889 32.875 19.3453 32.875 18.875C32.875 18.4047 32.7656 17.9611 32.5753 17.5625H33.75V20.1875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.7592 26.3125H25.0092C25.1019 24.3521 25.9096 22.522 27.3065 21.1246L27.5261 20.905C27.8906 21.3149 28.3609 21.6286 28.8968 21.7971L28.6724 22.0215C27.5156 23.1782 26.8436 24.6911 26.7592 26.3125Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings3.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика тормозной системы
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M32.1537 17.6172H17.8463L16.2056 22.5391H11V30.7422H13.5156C13.5156 28.9325 14.988 27.4609 16.7969 27.4609C18.6057 27.4609 20.0781 28.9325 20.0781 30.7422H29.9219C29.9219 28.9325 31.3943 27.4609 33.2031 27.4609C35.012 27.4609 36.4844 28.9325 36.4844 30.7422H39V22.5391H33.7944L32.1537 17.6172ZM28.3261 27.7421L25.2852 24.7012L26.4452 23.5413L27.5156 24.5986V23.3009C27.5156 22.8483 27.1341 22.4844 26.6823 22.4844H21.7188C21.2669 22.4844 20.8984 22.8483 20.8984 23.3009V25C20.8984 25.4526 21.2669 25.8203 21.7188 25.8203H24.1797V27.4609H21.7188C20.3617 27.4609 19.2578 26.357 19.2578 25V23.3009C19.2578 21.9438 20.3617 20.8438 21.7188 20.8438H26.6823C28.0393 20.8438 29.1562 21.9438 29.1562 23.3009V24.6051L30.2071 23.5413L31.367 24.7012L28.3261 27.7421Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M16.7969 32.3828C17.703 32.3828 18.4375 31.6483 18.4375 30.7422C18.4375 29.8361 17.703 29.1016 16.7969 29.1016C15.8908 29.1016 15.1562 29.8361 15.1562 30.7422C15.1562 31.6483 15.8908 32.3828 16.7969 32.3828Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M33.2031 32.3828C34.1092 32.3828 34.8438 31.6483 34.8438 30.7422C34.8438 29.8361 34.1092 29.1016 33.2031 29.1016C32.297 29.1016 31.5625 29.8361 31.5625 30.7422C31.5625 31.6483 32.297 32.3828 33.2031 32.3828Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings4.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика системы отопления
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 500 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M20.744 18.4057L14.2566 30.9834C13.4252 32.5924 12.8774 33.9672 14.8985 35.0132L18.5738 36.9056C20.5948 37.9515 21.3953 36.7037 22.2266 35.0947L28.714 22.517C29.5453 20.908 30.0932 19.5332 28.0721 18.4872L24.3968 16.5948C22.3757 15.5488 21.5753 16.7967 20.744 18.4057Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.8414 10.4397L35.1364 13.742C34.4774 15.0232 33.6599 15.7953 32.72 16.0462C31.8524 16.2733 31.1906 15.9708 30.9651 15.8348L29.72 15.194C29.5636 15.1154 29.4762 15.1242 29.4039 15.1481C29.0876 15.2529 28.7343 15.7308 28.6285 15.9564L28.6224 15.9685L26.727 19.6347L24.9375 18.7127L26.8239 15.0494C26.9146 14.869 27.5765 13.6269 28.7696 13.2319C29.3842 13.0285 30.0254 13.087 30.639 13.3954L31.9834 14.0937C32.2692 14.1997 32.8058 13.8515 33.3349 12.8139L35.0399 9.51161L36.8414 10.4397Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M14.5038 34.423L12.509 38.2898L14.5228 39.3287L16.5176 35.4619L14.5038 34.423Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M11.7817 37.8008L11.5286 38.2915L15.0907 40.1291L15.3439 39.6384L11.7817 37.8008Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M34.5703 8.78081L34.1731 9.55078L37.3291 11.1789L37.7263 10.4089L34.5703 8.78081Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M14.9496 30.5318L14.7925 30.8364L22.086 34.599L22.2432 34.2944L14.9496 30.5318Z"
                      fill="#FBC22E"
                    />
                    <path
                      d="M20.6571 19.4571L20.5 19.7617L27.7936 23.5243L27.9507 23.2197L20.6571 19.4571Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings5.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика катализатора эндоскопом
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">600 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left"></div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M30.6902 19.0981C30.6902 19.2469 30.7295 19.3912 30.7995 19.5137L30.6945 19.5313H27.496L27.4916 19.5356C27.1849 19.0631 26.8266 18.6213 26.4329 18.2188H30.6897V18.2231V19.0981H30.6902Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M30.6902 18.2188C30.6946 17.7375 31.0831 17.3481 31.5652 17.3481H32.0027H33.3502H37.6902C38.1714 17.3481 38.5652 17.7419 38.5652 18.2231V19.0981C38.5652 19.5798 38.1714 19.9731 37.6902 19.9731H31.5652C31.2318 19.9731 30.9439 19.785 30.7996 19.5138C30.7296 19.3913 30.6902 19.2469 30.6902 19.0981V18.2231V18.2188Z"
                        fill="#FBC22E"
                      />
                      <path
                        d="M14.0598 24.3438C14.0598 20.9619 16.8034 18.2188 20.1848 18.2188C21.6159 18.2188 22.9284 18.7088 23.9692 19.5312H20.1848C17.0265 19.5312 14.4229 21.9244 14.0948 25C14.0734 24.7856 14.0598 24.5669 14.0598 24.3438Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M20.1848 31.7812C16.0771 31.7812 12.7473 28.4475 12.7473 24.3438C12.7473 20.2356 16.0771 16.9062 20.1848 16.9062C24.2934 16.9062 27.6223 20.2356 27.6223 24.3438C27.6223 28.4475 24.2934 31.7812 20.1848 31.7812ZM23.9696 19.5312C22.9288 18.7088 21.6163 18.2188 20.1853 18.2188C16.8038 18.2188 14.0603 20.9619 14.0603 24.3438C14.0603 24.5669 14.0738 24.7856 14.0953 25C14.4234 28.0756 17.0269 30.4688 20.1853 30.4688C23.5671 30.4688 26.3103 27.7252 26.3103 24.3438C26.3098 22.3925 25.3954 20.6512 23.9696 19.5312Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M11.4348 24.3438C11.4348 29.1737 15.3509 33.0938 20.1848 33.0938H32.8815V34.4062H20.1848C15.3509 34.4062 11.4348 30.4906 11.4348 25.6562V24.3438Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M12.7473 24.3438C12.7473 28.4475 16.0771 31.7812 20.1848 31.7812C24.2934 31.7812 27.6223 28.4475 27.6223 24.3438C27.6223 20.2356 24.2934 16.9062 20.1848 16.9062C16.0771 16.9062 12.7473 20.2356 12.7473 24.3438ZM28.9348 24.3438C28.9348 29.1737 25.0196 33.0938 20.1848 33.0938C15.3509 33.0938 11.4348 29.1737 11.4348 24.3438C11.4348 19.5094 15.3509 15.5938 20.1848 15.5938C22.6357 15.5938 24.8442 16.5956 26.4328 18.2188C26.8265 18.6212 27.1848 19.0631 27.4915 19.5356C28.4059 20.9138 28.9348 22.5675 28.9348 24.3438Z"
                        fill="#FFC93D"
                      />
                      <path
                        d="M32.8821 33.0938H34.6277V34.4062H32.8821V33.0938Z"
                        fill="#FBC22E"
                      />
                      <path
                        d="M20.1858 33.5237C15.12 33.5237 10.9983 29.402 10.9983 24.3362C10.9983 19.2699 15.12 15.1487 20.1858 15.1487C25.2516 15.1487 29.3733 19.2699 29.3733 24.3362C29.3733 29.4024 25.2516 33.5237 20.1858 33.5237ZM20.1858 16.0237C15.6021 16.0237 11.8733 19.7525 11.8733 24.3362C11.8733 28.9199 15.6021 32.6487 20.1858 32.6487C24.7695 32.6487 28.4983 28.9199 28.4983 24.3362C28.4983 19.7525 24.7695 16.0237 20.1858 16.0237Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M20.1858 34.8374C15.12 34.8374 10.9983 30.7157 10.9983 25.6499C10.9983 25.4084 11.1939 25.2124 11.4358 25.2124C11.6777 25.2124 11.8733 25.4084 11.8733 25.6499C11.8733 30.2336 15.6021 33.9624 20.1858 33.9624C20.4277 33.9624 20.6233 34.158 20.6233 34.3999C20.6233 34.6418 20.4277 34.8374 20.1858 34.8374Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M20.1858 32.2112C15.8436 32.2112 12.3108 28.6784 12.3108 24.3362C12.3108 19.994 15.8436 16.4612 20.1858 16.4612C24.528 16.4612 28.0608 19.994 28.0608 24.3362C28.0608 28.6784 24.528 32.2112 20.1858 32.2112ZM20.1858 17.3362C16.3262 17.3362 13.1858 20.4766 13.1858 24.3362C13.1858 28.1958 16.3262 31.3362 20.1858 31.3362C24.0454 31.3362 27.1858 28.1958 27.1858 24.3362C27.1858 20.4766 24.0454 17.3362 20.1858 17.3362Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M20.1858 30.8987C16.5672 30.8987 13.6233 27.9548 13.6233 24.3362C13.6233 20.7176 16.5672 17.7737 20.1858 17.7737C23.8043 17.7737 26.7483 20.7176 26.7483 24.3362C26.7483 27.9552 23.8048 30.8987 20.1858 30.8987ZM20.1858 18.6487C17.0498 18.6487 14.4983 21.2002 14.4983 24.3362C14.4983 27.4722 17.0498 30.0237 20.1858 30.0237C23.3218 30.0237 25.8733 27.4722 25.8733 24.3362C25.8733 21.2002 23.3218 18.6487 20.1858 18.6487Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M14.0952 25.4303C14.0799 25.4303 14.0642 25.4294 14.0484 25.4277C13.8082 25.4018 13.6346 25.1866 13.6599 24.9464C14.0165 21.6061 16.8222 19.0874 20.1857 19.0874C20.4276 19.0874 20.6232 19.2834 20.6232 19.5249C20.6232 19.7664 20.4276 19.9624 20.1857 19.9624C17.2706 19.9624 14.839 22.1451 14.5297 25.0392C14.5061 25.264 14.3162 25.4303 14.0952 25.4303Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M23.9745 19.9624H20.1858C19.9439 19.9624 19.7483 19.7664 19.7483 19.5249C19.7483 19.2834 19.9439 19.0874 20.1858 19.0874H23.9745C24.2165 19.0874 24.412 19.2834 24.412 19.5249C24.412 19.7664 24.2165 19.9624 23.9745 19.9624Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M30.6945 19.9612H27.4946C27.2527 19.9612 27.0571 19.7652 27.0571 19.5237C27.0571 19.2822 27.2527 19.0862 27.4946 19.0862H30.6945C30.9364 19.0862 31.132 19.2822 31.132 19.5237C31.132 19.7652 30.936 19.9612 30.6945 19.9612Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M30.6945 18.6487H26.4341C26.1921 18.6487 25.9966 18.4527 25.9966 18.2112C25.9966 17.9697 26.1921 17.7737 26.4341 17.7737H30.6945C30.9364 17.7737 31.132 17.9697 31.132 18.2112C31.132 18.4527 30.936 18.6487 30.6945 18.6487Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M11.4358 26.0871C11.1939 26.0871 10.9983 25.8915 10.9983 25.6496V24.3362C10.9983 24.0947 11.1939 23.8987 11.4358 23.8987C11.6777 23.8987 11.8733 24.0947 11.8733 24.3362V25.6496C11.8733 25.8915 11.6777 26.0871 11.4358 26.0871Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.6285 34.8374H20.1858C19.9439 34.8374 19.7483 34.6418 19.7483 34.3999C19.7483 34.158 19.9439 33.9624 20.1858 33.9624H34.6285C34.8705 33.9624 35.066 34.158 35.066 34.3999C35.066 34.6418 34.8705 34.8374 34.6285 34.8374Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.6285 33.5239H20.1858C19.9439 33.5239 19.7483 33.3284 19.7483 33.0864C19.7483 32.8445 19.9439 32.6489 20.1858 32.6489H34.6285C34.8705 32.6489 35.066 32.8445 35.066 33.0864C35.066 33.3284 34.8705 33.5239 34.6285 33.5239Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M32.8794 34.8511C32.6375 34.8511 32.4419 34.6555 32.4419 34.4136V33.0867C32.4419 32.8447 32.6375 32.6492 32.8794 32.6492C33.1213 32.6492 33.3169 32.8447 33.3169 33.0867V34.4136C33.3169 34.6551 33.1213 34.8511 32.8794 34.8511Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.6284 34.8511C34.3865 34.8511 34.1909 34.6555 34.1909 34.4136V33.0867C34.1909 32.8447 34.3865 32.6492 34.6284 32.6492C34.8704 32.6492 35.0659 32.8447 35.0659 33.0867V34.4136C35.0659 34.6551 34.8704 34.8511 34.6284 34.8511Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M37.25 33.5273H35.9375C35.6956 33.5273 35.5 33.3318 35.5 33.0898C35.5 32.8479 35.6956 32.6523 35.9375 32.6523H37.25C37.4919 32.6523 37.6875 32.8479 37.6875 33.0898C37.6875 33.3318 37.4919 33.5273 37.25 33.5273Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M37.25 34.8398H35.9375C35.6956 34.8398 35.5 34.6443 35.5 34.4023C35.5 34.1604 35.6956 33.9648 35.9375 33.9648H37.25C37.4919 33.9648 37.6875 34.1604 37.6875 34.4023C37.6875 34.6443 37.4919 34.8398 37.25 34.8398Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M37.6892 20.4023H31.5642C30.8406 20.4023 30.2517 19.8135 30.2517 19.0898V18.2148C30.2517 17.4912 30.8406 16.9023 31.5642 16.9023H37.6892C38.4128 16.9023 39.0017 17.4912 39.0017 18.2148V19.0898C39.0017 19.8139 38.4128 20.4023 37.6892 20.4023ZM31.5642 17.7773C31.3227 17.7773 31.1267 17.9738 31.1267 18.2148V19.0898C31.1267 19.3309 31.3227 19.5273 31.5642 19.5273H37.6892C37.9307 19.5273 38.1267 19.3309 38.1267 19.0898V18.2148C38.1267 17.9738 37.9307 17.7773 37.6892 17.7773H31.5642Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M35.5303 19.0906C35.2883 19.0906 35.0906 18.8946 35.0906 18.6531C35.0906 18.4116 35.284 18.2156 35.5255 18.2156H35.5303C35.7718 18.2156 35.9678 18.4116 35.9678 18.6531C35.9678 18.8946 35.7718 19.0906 35.5303 19.0906Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M32.0017 17.7773C31.7598 17.7773 31.5642 17.5813 31.5642 17.3398V16.9023C31.5642 16.6608 31.7598 16.4648 32.0017 16.4648C32.2436 16.4648 32.4392 16.6608 32.4392 16.9023V17.3398C32.4392 17.5813 32.2436 17.7773 32.0017 17.7773Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M33.3511 17.7773C33.1091 17.7773 32.9136 17.5813 32.9136 17.3398V16.9023C32.9136 16.6608 33.1091 16.4648 33.3511 16.4648C33.593 16.4648 33.7886 16.6608 33.7886 16.9023V17.3398C33.7886 17.5813 33.593 17.7773 33.3511 17.7773Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings6.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Диагностика эндоскопом
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">800 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M34.3709 31.1755V19.7981C35.9585 19.4567 37.1521 18.0418 37.1521 16.3537C37.1521 14.4111 35.5718 12.8306 33.629 12.8306C31.6865 12.8306 30.106 14.4111 30.106 16.3537C30.106 18.0418 31.2997 19.4567 32.8874 19.7981V25.2398H25.2438V19.7981C26.8315 19.4567 28.0251 18.0418 28.0251 16.3537C28.0251 14.4111 26.4448 12.8306 24.502 12.8306C22.5594 12.8306 20.9792 14.4111 20.9792 16.3537C20.9792 18.0418 22.1729 19.4567 23.7604 19.7981V25.2398H16.1182V19.7981C17.7059 19.4567 18.8997 18.0418 18.8997 16.3537C18.8997 14.4111 17.3192 12.8306 15.3766 12.8306C13.434 12.8306 11.8535 14.4111 11.8535 16.3537C11.8535 18.0418 13.0471 19.4567 14.635 19.7981V25.9814C14.635 26.3909 14.9671 26.7229 15.3766 26.7229H23.7604V31.1755C22.1729 31.5169 20.9792 32.9318 20.9792 34.62C20.9792 36.5626 22.5594 38.1431 24.502 38.1431C26.4448 38.1431 28.0251 36.5626 28.0251 34.62C28.0251 32.9318 26.8315 31.5169 25.2438 31.1755V26.7229H32.8874V31.1755C31.2998 31.5169 30.106 32.9318 30.106 34.62C30.106 36.5626 31.6865 38.1431 33.629 38.1431C35.5718 38.1431 37.1521 36.5626 37.1521 34.62C37.1521 32.9318 35.9585 31.5169 34.3709 31.1755Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings7.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Первичная диагностика КПП
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 500 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M34.874 14.8945V17.1438C34.874 17.5645 34.5328 17.9055 34.1123 17.9055C33.6915 17.9055 33.3505 17.5645 33.3505 17.1438V14.8945C31.5702 15.2496 30.2243 16.8242 30.2243 18.7075V24.2371H28.1962V23.3964C28.1962 22.8297 27.735 22.3687 27.1683 22.3687H22.8317C22.265 22.3687 21.8038 22.8297 21.8038 23.3964V24.2371H19.7757V18.7075C19.7757 16.8244 18.43 15.2496 16.6497 14.8945V17.1438C16.6497 17.5645 16.3085 17.9055 15.8879 17.9055C15.4672 17.9055 15.1262 17.5645 15.1262 17.1438V14.8945C13.3459 15.2496 12 16.8244 12 18.7075V31.2899C12 33.1732 13.3459 34.7478 15.1262 35.1029V32.8457C15.1262 32.425 15.4672 32.084 15.8879 32.084C16.3085 32.084 16.6497 32.425 16.6497 32.8457V35.1029C18.43 34.7478 19.7757 33.1732 19.7757 31.2899V25.7605H21.8038V26.5931C21.8038 27.1598 22.265 27.6208 22.8317 27.6208H27.1683C27.735 27.6208 28.1962 27.1598 28.1962 26.5931V25.7605H30.2243V31.2899C30.2243 33.1732 31.5702 34.7478 33.3505 35.1029V32.8457C33.3505 32.425 33.6915 32.084 34.1123 32.084C34.5328 32.084 34.874 32.425 34.874 32.8457V35.1029C36.6541 34.7478 38 33.1732 38 31.2901V18.7075C38 16.8244 36.6543 15.2496 34.874 14.8945V14.8945ZM16.6497 29.7052C16.6497 30.1259 16.3085 30.4669 15.8879 30.4669C15.4672 30.4669 15.1262 30.1259 15.1262 29.7052V26.5649C15.1262 26.1442 15.4672 25.8032 15.8879 25.8032C16.3085 25.8032 16.6497 26.1442 16.6497 26.5649V29.7052ZM16.6497 23.4246C16.6497 23.8453 16.3085 24.1863 15.8879 24.1863C15.4672 24.1863 15.1262 23.8453 15.1262 23.4246V20.2843C15.1262 19.8636 15.4672 19.5226 15.8879 19.5226C16.3085 19.5226 16.6497 19.8636 16.6497 20.2843V23.4246ZM34.874 29.7052C34.874 30.1259 34.5328 30.4669 34.1123 30.4669C33.6915 30.4669 33.3505 30.1259 33.3505 29.7052V26.5649C33.3505 26.1442 33.6915 25.8032 34.1123 25.8032C34.5328 25.8032 34.874 26.1442 34.874 26.5649V29.7052ZM34.874 23.4246C34.874 23.8453 34.5328 24.1863 34.1123 24.1863C33.6915 24.1863 33.3505 23.8453 33.3505 23.4246V20.2843C33.3505 19.8636 33.6915 19.5226 34.1123 19.5226C34.5328 19.5226 34.874 19.8636 34.874 20.2843V23.4246Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings8.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Проверка углов установки колес
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 500 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M32.5834 19.1666H33.75C34.715 19.1666 35.5 18.3817 35.5 17.4166V12.75C35.5 11.785 34.715 11 33.75 11H32.5834C31.6183 11 30.8334 11.785 30.8334 12.75V13.9672L26.5854 14.3533C26.3077 13.7531 25.7037 13.3334 25 13.3334C24.2963 13.3334 23.6924 13.753 23.4146 14.3533L19.1666 13.9672V12.75C19.1666 11.785 18.3817 11 17.4166 11H16.25C15.285 11 14.5 11.785 14.5 12.75V17.4166C14.5 18.3817 15.285 19.1666 16.25 19.1666H17.4166C18.3817 19.1666 19.1666 18.3817 19.1666 17.4166V16.1995L23.4146 15.8134C23.5162 16.0331 23.6626 16.2254 23.8411 16.3846L24.2662 22.697C24.0187 22.7645 23.8332 22.9809 23.8332 23.25V26.75C23.8332 27.0091 24.0046 27.2212 24.2381 27.2974L23.8419 32.4481C23.4818 32.7689 23.25 33.2307 23.25 33.75V34.1718L19.1666 33.8005V32.5833C19.1666 31.6183 18.3817 30.8333 17.4166 30.8333H16.25C15.285 30.8333 14.5 31.6183 14.5 32.5833V37.25C14.5 38.215 15.285 39 16.25 39H17.4166C18.3817 39 19.1666 38.215 19.1666 37.25V36.0329L23.25 35.6615V36.0833C23.25 37.0483 24.035 37.8333 25 37.8333C25.965 37.8333 26.75 37.0483 26.75 36.0833V35.6615L30.8334 36.0328V37.25C30.8334 38.215 31.6183 39 32.5834 39H33.75C34.715 39 35.5 38.215 35.5 37.25V32.5834C35.5 31.6183 34.715 30.8334 33.75 30.8334H32.5834C31.6183 30.8334 30.8334 31.6183 30.8334 32.5834V33.8005L26.75 34.1718V33.75C26.75 33.2306 26.5181 32.7686 26.1577 32.4478L25.7577 27.2982C25.9932 27.2232 26.1666 27.0106 26.1666 26.7501V23.2501C26.1666 22.9826 25.9834 22.7669 25.7382 22.6979L26.159 16.3845C26.3374 16.2254 26.4837 16.0331 26.5853 15.8135L30.8333 16.1996V17.4168C30.8334 18.3817 31.6183 19.1666 32.5834 19.1666Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings9.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Комплексная диагностика ходовой части
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M32.7894 21.4177H35.305C35.758 21.4177 36.1253 21.785 36.1253 22.238V24.152H36.9456C37.3986 24.152 37.7659 24.5193 37.7659 24.9723C37.7659 25.4254 37.3986 25.7926 36.9456 25.7926H36.1253V27.7066C36.1253 28.1597 35.758 28.5269 35.305 28.5269H32.7894C32.3364 28.5269 31.9691 28.1597 31.9691 27.7066V22.238C31.9691 21.785 32.3364 21.4177 32.7894 21.4177Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M12.5635 34.4891L14.868 30.4976C15.6648 31.162 16.689 31.5626 17.8052 31.5626H21.8306L18.2466 37.7702C17.7913 38.5589 16.9626 39.0002 16.1114 39.0002C15.6942 39.0002 15.2716 38.8942 14.885 38.6709L13.4642 37.8506C12.2891 37.1722 11.885 35.6642 12.5635 34.4891Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M14.8524 26.969V23.6327C14.8524 23.1796 15.2197 22.8124 15.6727 22.8124H22.0163V20.734H21.5298C19.627 20.734 18.0789 19.1859 18.0789 17.283V12.6406H17.5867C17.1337 12.6406 16.7664 12.2733 16.7664 11.8203C16.7664 11.3673 17.1337 11 17.5867 11H28.0865C28.5395 11 28.9068 11.3673 28.9068 11.8203C28.9068 12.2733 28.5395 12.6406 28.0865 12.6406H27.5943V17.283C27.5943 19.1859 26.0462 20.734 24.1433 20.734H23.6569V22.8124H30.3279V27.1326H28.1367C28.0516 28.6851 26.7617 29.9218 25.1884 29.9218H17.8052C16.177 29.9218 14.8524 28.5971 14.8524 26.969Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="matrix(-1 0 0 1 39 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings10.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Проверка <br />
                    ЛКП
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 200 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M22.6745 18.0896C24.5492 18.1914 26.3962 18.5903 28.1459 19.2716C29.7897 19.9484 31.3211 20.8713 32.6865 22.0093L33.0059 22.2762L23.6033 21.8071L22.6745 18.0896Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M39 28.9537H37.9647C37.9589 28.9151 37.9494 28.8783 37.9424 28.8402C37.934 28.7901 37.926 28.7451 37.9154 28.6979C37.9016 28.6345 37.8846 28.5725 37.8655 28.5101C37.8536 28.4661 37.8419 28.4216 37.8279 28.3786C37.8067 28.3137 37.7824 28.2506 37.7579 28.1876C37.7424 28.1488 37.729 28.1096 37.7128 28.0716C37.697 28.0337 37.676 27.9932 37.657 27.9536H39V28.9537Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M32 29.4535C32 30.8341 33.1193 31.9534 34.4998 31.9534C35.8807 31.9534 37 30.8341 37 29.4535C37 28.0727 35.8807 26.9534 34.4998 26.9534C33.1193 26.9534 32 28.0727 32 29.4535Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M15.0596 18.5811L19.1631 18.1482C19.8672 18.0746 20.5752 18.0379 21.283 18.0386C21.3994 18.0386 21.516 18.0442 21.633 18.0462L22.5601 21.7537L16.7915 21.4655L15.0596 18.5811Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M13.4851 25.5746L13.985 23.5747C14.0222 23.4252 13.9884 23.267 13.8936 23.1457C13.7993 23.0246 13.6539 22.9535 13.4998 22.9535H11.1403L12.8903 20.766C13.0124 20.6137 13.0346 20.4046 12.9474 20.2299L12.2701 18.875L13.9629 18.6965L16.0715 22.2112C16.1572 22.3542 16.3084 22.445 16.4752 22.4536L22.8133 22.7696L23.8594 26.9534H20.4998V27.9536H24.1094L24.3596 28.9537H18.9645C18.959 28.9151 18.9493 28.8782 18.9422 28.8401C18.9339 28.79 18.9259 28.7451 18.9153 28.6978C18.9015 28.6345 18.8844 28.5725 18.8654 28.5101C18.8534 28.466 18.8419 28.4216 18.8278 28.3785C18.8069 28.3137 18.7824 28.2506 18.7579 28.1876C18.7423 28.1487 18.7289 28.1096 18.7127 28.0716C18.6818 28 18.6469 27.9308 18.613 27.8616C18.5988 27.834 18.5868 27.8057 18.5721 27.7786C18.5203 27.6841 18.4645 27.5924 18.4044 27.5031C18.391 27.483 18.3752 27.465 18.362 27.445C18.3119 27.3766 18.2618 27.309 18.2119 27.245C18.1875 27.215 18.1622 27.187 18.1354 27.1575C18.0899 27.1077 18.0448 27.0541 17.9969 27.0075C17.9666 26.9766 17.9345 26.9475 17.9024 26.9182C17.8557 26.8741 17.8094 26.8301 17.7605 26.7885C17.7259 26.7591 17.6898 26.7317 17.6539 26.7035C17.604 26.6651 17.5538 26.6275 17.5039 26.5914C17.466 26.5651 17.4276 26.5415 17.3876 26.5147C17.3377 26.4811 17.2834 26.4485 17.2295 26.4182C17.1889 26.3945 17.148 26.3724 17.1063 26.3508C17.0509 26.3219 16.9951 26.2951 16.9379 26.2696C16.8954 26.25 16.853 26.2312 16.8101 26.2136C16.7509 26.1896 16.6904 26.1686 16.6297 26.1477C16.5865 26.1325 16.5434 26.1173 16.499 26.104C16.435 26.0853 16.37 26.0695 16.3048 26.0541C16.2619 26.0442 16.2198 26.0326 16.1765 26.0241C16.1034 26.0095 16.0291 25.9995 15.9541 25.9898C15.917 25.985 15.8804 25.978 15.8429 25.9747C15.7304 25.9636 15.6159 25.957 15.5004 25.957C15.3278 25.9582 15.1553 25.9724 14.9851 25.9995C14.9509 26.0046 14.9164 26.009 14.8847 26.015C14.7247 26.0433 14.5671 26.083 14.4125 26.1331C14.3846 26.1427 14.3572 26.1539 14.3295 26.164C14.1885 26.2138 14.0515 26.2729 13.9184 26.3404C13.8994 26.3501 13.8794 26.358 13.8611 26.3681C13.7211 26.4439 13.5864 26.5289 13.4579 26.6224C13.4287 26.6436 13.4002 26.6651 13.3716 26.6869C13.2458 26.7833 13.1267 26.8873 13.0148 26.9995C13.0005 27.0137 12.9879 27.0295 12.9746 27.0441C12.8731 27.15 12.7789 27.2623 12.6919 27.3805C12.6736 27.4059 12.6535 27.4307 12.6354 27.4562C12.5456 27.5849 12.4643 27.7201 12.3925 27.8596C12.3764 27.8907 12.3623 27.9221 12.3472 27.9532C12.2778 28.096 12.2184 28.2434 12.1689 28.3945C12.1689 28.3997 12.1645 28.4045 12.163 28.4096L10.9999 27.2465V25.9536H12.9999C13.2295 25.9536 13.4293 25.7974 13.4851 25.5746ZM16.9998 24.4536H19.9999V23.4534H16.9998V24.4536Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M12.8596 23.9536L12.6097 24.9534H11V23.9536H12.8596Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M13 29.4535C13 30.8341 14.1193 31.9534 15.5001 31.9534C16.8807 31.9534 18 30.8341 18 29.4535C18 28.0727 16.8807 26.9534 15.5001 26.9534C14.1193 26.9534 13 28.0727 13 29.4535Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M24.8904 26.9534L23.8575 22.8208L34.6497 23.3589L37.7238 24.5536C38.5128 24.9957 39.0009 25.83 39 26.7346V26.9534H36.9445C36.9308 26.9399 36.916 26.9273 36.9015 26.9144C36.8548 26.8704 36.8086 26.8265 36.7596 26.7852C36.725 26.7555 36.6889 26.7279 36.6532 26.7002C36.6029 26.6615 36.553 26.6239 36.5028 26.5881C36.465 26.5615 36.4265 26.5379 36.3869 26.5109C36.337 26.4775 36.2825 26.4448 36.2285 26.4145C36.188 26.391 36.147 26.3691 36.1055 26.347C36.0501 26.3186 35.994 26.2915 35.9369 26.2659C35.8945 26.2464 35.8519 26.2275 35.809 26.21C35.75 26.1859 35.6894 26.165 35.629 26.1438C35.5854 26.1291 35.5423 26.1135 35.4981 26.1004C35.434 26.0814 35.3689 26.0661 35.3038 26.0505C35.261 26.0404 35.2188 26.029 35.1756 26.0205C35.1026 26.006 35.028 25.996 34.9529 25.9865C34.916 25.9817 34.8794 25.9746 34.8419 25.9711C34.7296 25.9601 34.615 25.9535 34.4995 25.9535C34.384 25.9535 34.2695 25.9601 34.157 25.9711C34.1195 25.9746 34.0829 25.9817 34.0458 25.9865C33.9709 25.996 33.8959 26.006 33.8235 26.0205C33.7801 26.029 33.7381 26.0404 33.6951 26.0505C33.6299 26.0661 33.5649 26.0814 33.5009 26.1004C33.4565 26.1135 33.4134 26.1291 33.37 26.1438C33.3095 26.165 33.249 26.1859 33.1898 26.21C33.1469 26.2275 33.1045 26.2464 33.0619 26.2659C33.0048 26.2915 32.9491 26.3161 32.8937 26.347C32.8519 26.3691 32.811 26.391 32.7704 26.4145C32.7166 26.4448 32.664 26.4775 32.612 26.5109C32.5724 26.536 32.5339 26.5609 32.496 26.5881C32.4461 26.6239 32.3959 26.6615 32.346 26.7002C32.3099 26.7279 32.2737 26.7555 32.2394 26.7852C32.1894 26.8265 32.144 26.8704 32.0975 26.9144C32.0654 26.9438 32.0333 26.9729 32.003 27.0041C31.9528 27.054 31.91 27.1038 31.8645 27.154C31.839 27.1836 31.8145 27.2115 31.788 27.2416C31.7351 27.3065 31.6878 27.374 31.638 27.4416C31.6244 27.4615 31.6089 27.4795 31.5955 27.4994C31.5354 27.5884 31.4796 27.6803 31.4278 27.775C31.4131 27.802 31.4007 27.8304 31.3869 27.858C31.3515 27.9269 31.3165 27.9964 31.2873 28.068C31.2709 28.106 31.2577 28.145 31.242 28.1839C31.2175 28.247 31.1918 28.3099 31.1722 28.3749C31.158 28.4181 31.1465 28.4624 31.1345 28.5063C31.117 28.569 31.0999 28.631 31.0843 28.6944C31.074 28.7416 31.0658 28.7884 31.0577 28.8365C31.0506 28.8744 31.0409 28.9115 31.0354 28.9501H25.3903L25.1404 27.9502H30.5V26.9534H24.8904ZM28.0001 23.4534H25.4999V24.4535H28.0001V23.4534Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="matrix(-1 0 0 1 39 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings11.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Проверка кузова авто перед покупкой
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">от 600 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper">
            <div class="popup-tires__item solo-service">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M29.3448 26.9309C29.3448 26.8421 29.2893 26.762 29.2062 26.7306L26.4482 25.6965V28.1653L29.2058 27.1313C29.2892 27.0999 29.3448 27.0197 29.3448 26.9309Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M16.793 24.5171H26.0532L29.545 25.8264C30.0022 25.9978 30.3102 26.4419 30.3102 26.9309C30.3102 27.42 30.0022 27.8641 29.5446 28.0355L26.0532 29.3447H16.793V37.0689H33.2068V36.1034H31.2757V27.4137H33.2068V26.4482H31.2757V17.7586H33.2068V13.8965H30.2214C30.0215 14.457 29.4905 14.862 28.8619 14.862H21.1378C20.5092 14.862 19.9782 14.457 19.7784 13.8965H16.793V24.5171ZM17.7585 31.2758H18.724V32.2413H17.7585V31.2758ZM17.7585 33.2068H19.6895V34.1723H17.7585V33.2068ZM30.3102 36.1034H17.7585V35.1379H30.3102V36.1034ZM20.655 34.1723V33.2068H28.3792V34.1723H20.655ZM30.3102 34.1723H29.3447V33.2068H30.3102V34.1723ZM30.3102 32.2413H19.6895V31.2758H30.3102V32.2413ZM20.1723 17.758H20.278L20.3041 17.6562C20.573 16.5792 21.5356 15.8275 22.6455 15.8275H26.2203C27.14 15.8275 27.9674 16.3388 28.3792 17.1619L28.6901 17.7836C29.6078 17.9328 30.3102 18.7308 30.3102 19.6896V20.1723C30.3102 20.9708 29.6605 21.6206 28.862 21.6206H28.2903C28.0905 22.1811 27.5595 22.5861 26.9309 22.5861C26.3023 22.5861 25.7713 22.1811 25.5714 21.6206H22.4967C22.2969 22.1811 21.7659 22.5861 21.1373 22.5861C20.5087 22.5861 19.9777 22.1811 19.7778 21.6206H19.2068C18.4083 21.6206 17.7585 20.9708 17.7585 20.1723C17.7585 18.8414 18.8413 17.7586 20.1723 17.758Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M13.8965 25.4827H25.4827V26.4482H13.8965V25.4827Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M21.138 13.8966H28.8622C29.1287 13.8966 29.345 13.6798 29.345 13.4138V11.4828C29.345 11.2168 29.1287 11 28.8622 11H21.138C20.8716 11 20.6553 11.2168 20.6553 11.4828V13.4138C20.6553 13.6798 20.8716 13.8966 21.138 13.8966ZM27.8967 11.9655C28.1632 11.9655 28.3795 12.1818 28.3795 12.4483C28.3795 12.7148 28.1632 12.9311 27.8967 12.9311C27.6302 12.9311 27.4139 12.7148 27.4139 12.4483C27.4139 12.1818 27.6302 11.9655 27.8967 11.9655ZM22.1036 11.9655C22.3701 11.9655 22.5863 12.1818 22.5863 12.4483C22.5863 12.7148 22.3701 12.9311 22.1036 12.9311C21.8371 12.9311 21.6208 12.7148 21.6208 12.4483C21.6208 12.1818 21.8371 11.9655 22.1036 11.9655Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M21.1381 21.6206C21.4047 21.6206 21.6208 21.4044 21.6208 21.1378C21.6208 20.8712 21.4047 20.655 21.1381 20.655C20.8714 20.655 20.6553 20.8712 20.6553 21.1378C20.6553 21.4044 20.8714 21.6206 21.1381 21.6206Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M26.931 21.6206C27.1976 21.6206 27.4138 21.4044 27.4138 21.1378C27.4138 20.8712 27.1976 20.655 26.931 20.655C26.6644 20.655 26.4482 20.8712 26.4482 21.1378C26.4482 21.4044 26.6644 21.6206 26.931 21.6206Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M19.2068 20.6551H19.7784C19.9783 20.0946 20.5093 19.6896 21.1379 19.6896C21.7664 19.6896 22.2974 20.0946 22.4973 20.6551H25.572C25.7719 20.0946 26.3029 19.6896 26.9315 19.6896C27.56 19.6896 28.091 20.0946 28.2909 20.6551H28.862C29.1285 20.6551 29.3448 20.4383 29.3448 20.1723V19.6895C29.3448 19.1571 28.9117 18.724 28.3793 18.724H28.081L27.5157 17.5934C27.2685 17.0995 26.7727 16.793 26.2204 16.793H22.6456C21.9799 16.793 21.402 17.2443 21.2403 17.8898L21.0322 18.7235H20.1724C19.3739 18.7235 18.7241 19.3738 18.7241 20.1723C18.724 20.4383 18.9403 20.6551 19.2068 20.6551Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M15.8276 12.9311H19.6896V11.9656H14.8621V24.5173H15.8276V12.9311Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M32.2415 35.138H39.0001V28.3794H32.2415V35.138ZM33.5483 32.3829L34.1725 33.0071L37.6933 29.4864L38.3759 30.169L34.1725 34.3724L32.8656 33.0656L33.5483 32.3829Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.1724 26.4482H35.1379V27.4137H34.1724V26.4482Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.1724 17.7587H35.1379V11.9656H30.3103V12.9311H34.1724V17.7587Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M32.2415 18.7241V25.4828H39.0001V18.7241H32.2415ZM34.1725 24.7171L32.8657 23.4102L33.5483 22.7276L34.1725 23.3519L37.6933 19.8311L38.3759 20.5137L34.1725 24.7171Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M11 26.9309C11 27.7294 11.6498 28.3792 12.4483 28.3792H12.9311V25.4827H12.4483C11.6498 25.4827 11 26.1325 11 26.9309V26.9309Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M13.8965 27.4138H25.4827V28.3793H13.8965V27.4138Z"
                        fill="#3C3C3C"
                      />
                      <path
                        d="M34.1724 38.0346H15.8276V29.345H14.8621V39.0001H35.1379V36.1036H34.1724V38.0346Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Diagnostic/settings12.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Комплексная диагностика авто перед покупкой
                  </div>
                  <div class="popup-tires__item-subtext">
                    *подвеска, двс, навесное, лкп
                  </div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price">1500 ₽</div>
                <div class="popup-tires__item-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="popup-autoservice" class="popup-wrapper popup">
      <div class="popup-tires popup-default">
        <a href="#" class="popup-tires__close close-popup"
          ><svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9.42713 8.00011L15.8954 1.53216C16.0346 1.39277 16.0346 1.1669 15.8954 1.02751L14.9729 0.104504C14.906 0.0377562 14.815 0 14.7204 0C14.6257 0 14.5348 0.0377562 14.4679 0.104504L7.99981 6.57262L1.5317 0.104504C1.3977 -0.0294971 1.16054 -0.0293285 1.02688 0.104504L0.104546 1.02751C-0.0348487 1.1669 -0.0348487 1.39277 0.104546 1.53216L6.57266 8.00011L0.104546 14.4681C-0.0348487 14.6074 -0.0348487 14.8333 0.104546 14.9727L1.02705 15.8957C1.09396 15.9625 1.18481 16.0002 1.27954 16.0002C1.37427 16.0002 1.46495 15.9625 1.53187 15.8957L7.99998 9.42759L14.4681 15.8957C14.535 15.9625 14.626 16.0002 14.7206 16.0002C14.8151 16.0002 14.9062 15.9625 14.9731 15.8957L15.8956 14.9727C16.0348 14.8333 16.0348 14.6074 15.8956 14.4681L9.42713 8.00011Z"
              fill="#3C3C3C"
            />
          </svg>
        </a>
        <div class="popup-tires__top">
          <div class="popup-tires__title">Автосервис</div>
        </div>
        <div class="popup-tires__body popup-autoservice__body">
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="4.31034" fill="#FBC22E" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M37.0304 20.606H39.9395C40.035 20.6059 40.1296 20.6247 40.2179 20.6612C40.3061 20.6978 40.3863 20.7513 40.4539 20.8189C40.5214 20.8864 40.575 20.9666 40.6115 21.0549C40.648 21.1431 40.6668 21.2377 40.6667 21.3333V34.4242C40.6668 34.5197 40.648 34.6143 40.6115 34.7025C40.575 34.7908 40.5214 34.871 40.4539 34.9386C40.3863 35.0061 40.3061 35.0597 40.2179 35.0962C40.1296 35.1327 40.035 35.1515 39.9395 35.1514H37.0304C36.9349 35.1515 36.8403 35.1327 36.752 35.0962C36.6637 35.0597 36.5835 35.0061 36.516 34.9386C36.4485 34.871 36.3949 34.7908 36.3584 34.7025C36.3218 34.6143 36.3031 34.5197 36.3031 34.4242V32.2423H33.394V35.8787C33.3941 35.9742 33.3753 36.0688 33.3388 36.1571C33.3022 36.2454 33.2487 36.3256 33.1811 36.3931C33.1136 36.4606 33.0334 36.5142 32.9451 36.5507C32.8569 36.5873 32.7623 36.606 32.6667 36.606H18.1213C18.0258 36.606 17.9312 36.5873 17.8429 36.5507C17.7546 36.5142 17.6745 36.4606 17.6069 36.3931C17.5394 36.3256 17.4858 36.2454 17.4493 36.1571C17.4127 36.0688 17.394 35.9742 17.394 35.8787V33.6969H12.3031C12.2076 33.6969 12.113 33.6782 12.0247 33.6416C11.9365 33.6051 11.8563 33.5515 11.7887 33.484C11.7212 33.4165 11.6676 33.3363 11.6311 33.248C11.5946 33.1597 11.5758 33.0651 11.5758 32.9696V27.1514H10.1213V30.0605C10.1213 30.2534 10.0447 30.4384 9.90828 30.5748C9.77189 30.7112 9.58691 30.7878 9.39402 30.7878C9.20114 30.7878 9.01615 30.7112 8.87976 30.5748C8.74337 30.4384 8.66675 30.2534 8.66675 30.0605V22.7878C8.66675 22.5949 8.74337 22.4099 8.87976 22.2735C9.01615 22.1371 9.20114 22.0605 9.39402 22.0605C9.58691 22.0605 9.77189 22.1371 9.90828 22.2735C10.0447 22.4099 10.1213 22.5949 10.1213 22.7878V25.6969H11.5758V19.8787C11.5758 19.7832 11.5946 19.6886 11.6311 19.6003C11.6676 19.5121 11.7212 19.4319 11.7887 19.3643C11.8563 19.2968 11.9365 19.2432 12.0247 19.2067C12.113 19.1701 12.2076 19.1514 12.3031 19.1514H15.9395V16.9696C15.9394 16.8741 15.9582 16.7795 15.9947 16.6912C16.0312 16.603 16.0848 16.5228 16.1524 16.4552C16.2199 16.3877 16.3001 16.3341 16.3884 16.2976C16.4766 16.2611 16.5712 16.2423 16.6667 16.2423H22.4849V14.7878H19.5758C19.383 14.7878 19.198 14.7112 19.0616 14.5748C18.9252 14.4384 18.8486 14.2534 18.8486 14.0605C18.8486 13.8676 18.9252 13.6827 19.0616 13.5463C19.198 13.4099 19.383 13.3333 19.5758 13.3333H26.8486C27.0415 13.3333 27.2264 13.4099 27.3628 13.5463C27.4992 13.6827 27.5758 13.8676 27.5758 14.0605C27.5758 14.2534 27.4992 14.4384 27.3628 14.5748C27.2264 14.7112 27.0415 14.7878 26.8486 14.7878H23.9395V16.2423H29.7577C29.8532 16.2423 29.9478 16.2611 30.036 16.2976C30.1243 16.3341 30.2045 16.3877 30.272 16.4552C30.3396 16.5228 30.3932 16.603 30.4297 16.6912C30.4662 16.7795 30.485 16.8741 30.4849 16.9696V19.1514H32.6667C32.7623 19.1514 32.8569 19.1701 32.9451 19.2067C33.0334 19.2432 33.1136 19.2968 33.1811 19.3643C33.2487 19.4319 33.3022 19.5121 33.3388 19.6003C33.3753 19.6886 33.3941 19.7832 33.394 19.8787V23.5151H36.3031V21.3333C36.3031 21.2377 36.3218 21.1431 36.3584 21.0549C36.3949 20.9666 36.4485 20.8864 36.516 20.8189C36.5835 20.7513 36.6637 20.6978 36.752 20.6612C36.8403 20.6247 36.9349 20.6059 37.0304 20.606ZM25.2843 25.6181C25.3974 25.6557 25.4828 25.7491 25.5103 25.8653C25.5375 25.9811 25.5029 26.103 25.4186 26.1873L21.9794 29.6266C21.8596 29.7463 21.6719 29.7606 21.535 29.6625C21.3983 29.5638 21.3533 29.3804 21.4285 29.2296L22.6269 26.8329L20.9395 26.2703C20.8264 26.2327 20.741 26.1393 20.7135 26.0231C20.6863 25.9072 20.7209 25.7853 20.8052 25.701L24.2444 22.2618C24.3633 22.1422 24.5514 22.1274 24.6888 22.2258C24.8255 22.3246 24.8705 22.508 24.7953 22.6588L23.5969 25.0555L25.2843 25.6181Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/engine.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Двигатель</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 300 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Диагностика бензинового двигателя и электронных систем
                  </div>
                  <div class="item-slider__price">от 400 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Аппаратная прочистка форсунок до 2.4 л
                  </div>
                  <div class="item-slider__price">от 1500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Расширенная диагностика ДВС и электронных систем
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Диагностика эндоскопом</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Другой ремонт двигателя</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Ремонт автоэлектрики</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена ремня ГРМ</div>
                  <div class="item-slider__price">от 2500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Прочистка дроссельной заслонки ДВС до 2.4 л
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена масла и масляного фильтра двигателя
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена свечей зажигания</div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена МСК без снятия ГБЦ</div>
                  <div class="item-slider__price">от 6000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена цепей ДВС</div>
                  <div class="item-slider__price">от 7000 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M21.129 29.0064C21.129 28.5165 21.5252 28.1215 22.0149 28.1215C22.5044 28.1215 22.901 28.5173 22.901 29.0064C22.901 30.0388 23.7399 30.8777 24.7702 30.8777C25.2597 30.8777 25.6561 31.2735 25.6561 31.7626C25.6561 32.2526 25.2599 32.6491 24.7702 32.6491C22.7619 32.6491 21.129 31.0147 21.129 29.0064ZM36.5385 35.3656C36.5385 38.2346 29.1397 39.0002 24.7694 39.0002C20.3978 39.0002 13 38.2334 13 35.3656C13 33.6364 15.6553 32.7285 18.2614 32.2608C17.7677 31.2759 17.4629 30.1831 17.4629 29.0084C17.4629 25.3704 23.3026 12.8795 23.9694 11.4685C24.2592 10.8438 25.2797 10.8438 25.5709 11.4685C26.2365 12.8795 32.0778 25.3704 32.0778 29.0084C32.0778 30.1831 31.7746 31.2759 31.2791 32.2608C33.8888 32.7319 36.5385 33.6396 36.5385 35.3656ZM19.2341 29.0064C19.2341 32.0613 21.7169 34.5429 24.7694 34.5429C27.823 34.5429 30.3056 32.0579 30.3056 29.0064C30.3056 26.6109 26.8284 18.4765 24.7694 13.9527C22.7095 18.4765 19.2341 26.6109 19.2341 29.0064ZM34.7771 35.3154C34.6436 35.1053 33.3353 34.3518 30.1787 33.8764C28.8405 35.3624 26.9225 36.3163 24.77 36.3163C22.6174 36.3163 20.7001 35.3624 19.3622 33.8764C16.202 34.3518 14.8949 35.1121 14.7648 35.4138C15.0093 35.8785 18.2336 37.2295 24.7712 37.2295C31.3091 37.2295 34.5309 35.8785 34.7771 35.3154Z"
                        fill="#3C3C3C"
                      />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.2341 29.0064C19.2341 32.0613 21.7169 34.5429 24.7694 34.5429C27.823 34.5429 30.3056 32.0579 30.3056 29.0064C30.3056 26.6109 26.8284 18.4765 24.7694 13.9527C22.7095 18.4765 19.2341 26.6109 19.2341 29.0064ZM22.0149 28.1215C21.5252 28.1215 21.129 28.5165 21.129 29.0064C21.129 31.0147 22.7619 32.6491 24.7702 32.6491C25.2599 32.6491 25.6561 32.2526 25.6561 31.7626C25.6561 31.2735 25.2597 30.8777 24.7702 30.8777C23.7399 30.8777 22.901 30.0388 22.901 29.0064C22.901 28.5173 22.5044 28.1215 22.0149 28.1215Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/filters.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Жидкость и фильтры</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 100 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена жидкости ГУР</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена жидкости вариатора без снятия поддона
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена жидкости вариатора с снятием поддона
                  </div>
                  <div class="item-slider__price">от 1500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена охлаждающей жидкости
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена охлаждающей жидкости с промывкой системы
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена воздушного фильтра</div>
                  <div class="item-slider__price">от 100 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена масла муфты Haldex</div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена масла в заднем редукторе
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена масла в переднем редукторе
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена масла и масляного фильтра двигателя
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена масла раздаточной коробки
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена салонного фильтра</div>
                  <div class="item-slider__price">от 200 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена тормозной жидкости</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25 11C22.2311 11 19.5243 11.8211 17.222 13.3594C14.9197 14.8978 13.1253 17.0843 12.0657 19.6424C11.0061 22.2006 10.7288 25.0155 11.269 27.7313C11.8092 30.447 13.1426 32.9416 15.1005 34.8995C17.0584 36.8574 19.553 38.1908 22.2687 38.731C24.9845 39.2712 27.7994 38.9939 30.3576 37.9343C32.9157 36.8747 35.1022 35.0803 36.6406 32.778C38.1789 30.4757 39 27.7689 39 25C38.9959 21.2882 37.5195 17.7297 34.8949 15.1051C32.2703 12.4805 28.7118 11.0041 25 11ZM34.4917 21.8149C34.5796 21.8526 34.6742 21.8721 34.7699 21.8723C34.8839 21.8723 34.9961 21.8445 35.0969 21.7912C35.1977 21.7379 35.2839 21.6609 35.3481 21.5667C35.4123 21.4725 35.4526 21.3641 35.4653 21.2508C35.4781 21.1376 35.463 21.0229 35.4214 20.9168C34.602 18.8197 33.1691 17.0186 31.3098 15.7489C29.4505 14.4792 27.2514 13.7999 25 13.7999C22.7485 13.7999 20.5494 14.4792 18.6901 15.7489C16.8309 17.0186 15.3979 18.8197 14.5786 20.9168C14.5281 21.0455 14.5168 21.1863 14.5463 21.3214C14.5757 21.4565 14.6444 21.5799 14.7439 21.6759C14.8433 21.772 14.969 21.8365 15.105 21.8612C15.2411 21.8859 15.3814 21.8698 15.5083 21.8149C20.7419 19.5508 29.2581 19.5508 34.4917 21.8149ZM25 15.1999C26.6819 15.1937 28.3367 15.6238 29.8028 16.4481C31.2689 17.2724 32.4962 18.4628 33.365 19.903C30.6533 19.0826 27.833 18.6776 25 18.7019C22.167 18.6776 19.3467 19.0826 16.635 19.903C17.5037 18.4628 18.731 17.2724 20.1971 16.4481C21.6632 15.6238 23.318 15.1937 25 15.1999ZM35.695 25.1116C35.7908 25.1457 35.8781 25.1999 35.9512 25.2706C36.0238 25.3417 36.08 25.4278 36.1159 25.5228C36.1518 25.6179 36.1665 25.7196 36.159 25.8209C35.9767 28.2405 35.0156 30.536 33.4196 32.3638C31.8237 34.1915 29.6787 35.4532 27.3057 35.96C27.2585 35.9701 27.2104 35.9751 27.1622 35.975C27.0661 35.9751 26.9711 35.9553 26.8829 35.917C26.7948 35.8787 26.7156 35.8227 26.6501 35.7524C26.5846 35.6821 26.5343 35.599 26.5023 35.5084C26.4704 35.4178 26.4574 35.3216 26.4642 35.2258C26.9005 29.001 29.9054 25.5851 35.3961 25.0731C35.4973 25.0644 35.5993 25.0776 35.695 25.1116ZM34.6619 26.579C30.7244 27.2366 28.5212 29.7879 27.9552 34.344C29.6791 33.7917 31.2173 32.7746 32.4006 31.4047C33.5838 30.0347 34.3663 28.3649 34.6619 26.579ZM14.604 25.0732C14.5028 25.0657 14.4011 25.0794 14.3056 25.1134C14.21 25.1474 14.1225 25.201 14.0489 25.2707C13.9763 25.3418 13.9201 25.4279 13.8842 25.5229C13.8483 25.618 13.8336 25.7197 13.8411 25.821C14.0233 28.2406 14.9844 30.5361 16.5804 32.3639C18.1763 34.1916 20.3213 35.4533 22.6943 35.9601C22.7414 35.9702 22.7895 35.9752 22.8378 35.9751C22.9338 35.9752 23.0289 35.9554 23.117 35.9171C23.2051 35.8788 23.2844 35.8228 23.3499 35.7525C23.4154 35.6822 23.4657 35.5991 23.4976 35.5086C23.5296 35.418 23.5426 35.3217 23.5357 35.2259C23.0995 29.0011 20.0946 25.5852 14.604 25.0732ZM15.3381 26.5791C19.2756 27.2367 21.4789 29.7879 22.0448 34.3441C20.3209 33.7918 18.7827 32.7748 17.5995 31.4048C16.4162 30.0348 15.6337 28.3651 15.3381 26.5791ZM27.3282 23.4445C27.6358 23.905 27.8 24.4463 27.8 25.0001C27.7993 25.7425 27.5041 26.4542 26.9791 26.9792C26.4542 27.5041 25.7424 27.7994 25 27.8001C24.4463 27.8001 23.9049 27.6359 23.4444 27.3282C22.984 27.0205 22.6251 26.5832 22.4132 26.0716C22.2013 25.56 22.1458 24.997 22.2538 24.4538C22.3619 23.9107 22.6286 23.4118 23.0201 23.0202C23.4117 22.6286 23.9106 22.3619 24.4538 22.2539C24.9969 22.1459 25.5599 22.2013 26.0716 22.4132C26.5832 22.6252 27.0205 22.984 27.3282 23.4445ZM24.2222 26.1642C24.4525 26.318 24.7232 26.4001 25 26.4001C25.3712 26.3996 25.727 26.252 25.9895 25.9895C26.2519 25.7271 26.3996 25.3713 26.4 25.0001C26.4 24.7232 26.3179 24.4525 26.1641 24.2223C26.0103 23.9921 25.7916 23.8126 25.5358 23.7067C25.28 23.6007 24.9985 23.573 24.7269 23.627C24.4553 23.681 24.2059 23.8144 24.0101 24.0101C23.8143 24.2059 23.681 24.4554 23.6269 24.727C23.5729 24.9985 23.6007 25.28 23.7066 25.5359C23.8126 25.7917 23.992 26.0103 24.2222 26.1642Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/rul.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Рулевое управление</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 450 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена пыльника рулевой тяги
                  </div>
                  <div class="item-slider__price">от 450 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена рулевой тяги</div>
                  <div class="item-slider__price">от 600 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M18.381 14.335C17.3592 14.8842 16.4061 15.561 15.5481 16.3466L16.6561 17.5565C17.4138 16.8627 18.2555 16.265 19.1577 15.7801L18.381 14.335Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M23.9144 12.7163C22.7529 12.8054 21.607 13.0392 20.5085 13.4111L21.0346 14.9651C22.0036 14.637 23.0147 14.4308 24.0399 14.3521L23.9144 12.7163Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M11.428 23.2266C11.144 24.3478 11 25.5079 11 26.6747H12.6406C12.6406 25.6436 12.7677 24.6191 13.0184 23.6294L11.428 23.2266Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M31.7509 14.4067L30.9587 15.8434C31.8561 16.3382 32.6916 16.9452 33.442 17.6472L34.5629 16.4493C33.7133 15.6543 32.7672 14.9671 31.7509 14.4067Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M13.9721 18.0493C13.2543 18.9659 12.6529 19.969 12.1846 21.0308L13.6857 21.6928C14.099 20.7557 14.6299 19.8702 15.2638 19.0609L13.9721 18.0493Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.1206 18.1685L34.8181 19.1661C35.4429 19.9817 35.964 20.8724 36.3671 21.8134L37.8751 21.1675C37.4185 20.1013 36.8281 19.0922 36.1206 18.1685Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M38.6075 23.3701L37.0129 23.756C37.2428 24.7058 37.3593 25.6877 37.3593 26.6745H39C39 25.5578 38.8679 24.446 38.6075 23.3701Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.2328 12.728L26.0901 14.3625C27.1142 14.4519 28.123 14.6688 29.0887 15.0072L29.6313 13.4589C28.5365 13.0752 27.3931 12.8293 26.2328 12.728Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M22.8125 14.9712V21.5337H27.1875V14.9712H22.8125ZM25.5469 19.8931H24.4531V16.6118H25.5469V19.8931Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M20.3723 25.6987L19.9392 27.2606H20.7857L20.3723 25.6987Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M32.9796 19.6824C31.8405 18.3835 30.4124 17.3919 28.8281 16.7783V23.1745H21.1719V16.7786C19.5422 17.4103 18.0775 18.4423 16.9267 19.7908C15.2913 21.7071 14.3906 24.1518 14.3906 26.6745C14.3906 32.5245 19.15 37.2838 25 37.2838C30.85 37.2838 35.6094 32.5245 35.6094 26.6745C35.6094 24.0996 34.6754 21.6164 32.9796 19.6824ZM21.2714 29.026L20.9892 28.1138H19.7489L19.4733 29.026H18.1148L19.8539 24.3666H20.8908L22.6233 29.026H21.2714ZM24.2442 29.026H22.8727L26.2523 24.3666H27.6305L24.2442 29.026ZM31.5646 28.442C31.4311 28.5776 31.2792 28.6913 31.1085 28.7832C30.9379 28.8751 30.7563 28.9451 30.5639 28.9932C30.3713 29.0413 30.1832 29.0654 29.9995 29.0654C29.6757 29.0654 29.3782 28.9965 29.107 28.8587C28.8357 28.7209 28.6027 28.5383 28.4081 28.3107C28.2133 28.0833 28.0613 27.8251 27.952 27.5363C27.8426 27.2476 27.7879 26.9545 27.7879 26.657C27.7879 26.3726 27.8382 26.0926 27.9389 25.817C28.0395 25.5413 28.1871 25.2942 28.3819 25.0754C28.5765 24.8567 28.8128 24.6795 29.0906 24.5438C29.3684 24.4083 29.6845 24.3404 30.0389 24.3404C30.4545 24.3404 30.8176 24.4334 31.1283 24.6193C31.4389 24.8053 31.6686 25.0514 31.8174 25.3576L30.8396 26.0532C30.8002 25.9395 30.7487 25.8455 30.6854 25.771C30.6219 25.6967 30.553 25.6376 30.4786 25.5938C30.4042 25.5501 30.3255 25.5195 30.2424 25.502C30.1592 25.4845 30.0827 25.4757 30.0128 25.4757C29.8508 25.4757 29.7119 25.5118 29.596 25.584C29.4801 25.6562 29.3837 25.7503 29.3073 25.8662C29.2307 25.9822 29.1749 26.1134 29.14 26.2599C29.1048 26.4065 29.0875 26.552 29.0875 26.6963C29.0875 26.8583 29.1081 27.0136 29.1498 27.1623C29.1914 27.3111 29.2526 27.4423 29.3335 27.556C29.4144 27.6698 29.5129 27.7606 29.6288 27.8284C29.7447 27.8962 29.8771 27.9301 30.0258 27.9301C30.1002 27.9301 30.1768 27.9202 30.2555 27.9006C30.3343 27.8809 30.4097 27.8481 30.482 27.8021C30.5541 27.7562 30.6198 27.6971 30.6789 27.6249C30.7379 27.5527 30.7848 27.4641 30.82 27.3591L31.8634 27.9826C31.7976 28.1532 31.6981 28.3064 31.5646 28.442Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/condicioner.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">
                    Система кондиционирования
                  </div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 500 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Дезинфекция системы кондиционирования
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Диагностика системы кондиционирования
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Диагностика системы отопления
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Заправка автокондиционеров
                  </div>
                  <div class="item-slider__price">от 1500 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M36.375 22.8125C35.1688 22.8125 34.1875 23.7938 34.1875 25C34.1875 25.1921 34.2203 25.3749 34.2671 25.5526L28.4103 28.0625H22.375V28.1106C21.8185 27.5419 21.0441 27.1875 20.1875 27.1875C19.3554 27.1875 18.6007 27.5222 18.0481 28.0625H15.8125C15.571 28.0625 15.375 28.2585 15.375 28.5V28.9375H11.4375V29.8125H15.375V30.6875H11.4375V31.5625H15.375V32C15.375 32.2415 15.571 32.4375 15.8125 32.4375H18.0481C18.5018 32.8811 19.0924 33.183 19.75 33.2775V37.25C19.75 37.4915 19.946 37.6875 20.1875 37.6875H22.3579C22.3649 37.8039 22.375 37.9194 22.375 38.0371V38.125C22.375 38.3665 22.571 38.5625 22.8125 38.5625H25.4375C25.679 38.5625 25.875 38.3665 25.875 38.125V38.0681C25.875 35.7572 24.9821 33.5851 23.3646 31.9388L29.4021 31.5616C29.4747 31.5573 29.5452 31.5345 29.6064 31.496L36.5242 27.1722C37.6599 27.0939 38.5625 26.155 38.5625 25C38.5625 23.7938 37.5812 22.8125 36.375 22.8125ZM16.25 28.9375H17.4247C17.2344 29.3361 17.125 29.7797 17.125 30.25C17.125 30.7203 17.2344 31.1639 17.4247 31.5625H16.25V28.9375ZM18 30.25C18 29.0438 18.9813 28.0625 20.1875 28.0625C21.3937 28.0625 22.375 29.0438 22.375 30.25C22.375 31.4562 21.3937 32.4375 20.1875 32.4375C18.9813 32.4375 18 31.4562 18 30.25ZM20.625 36.8125V33.9311L20.709 34.0151C21.4882 34.7943 22.0092 35.7612 22.2389 36.8125H20.625ZM23.2408 37.6875C23.1564 36.0661 22.4844 34.5533 21.3276 33.3965L21.1032 33.1721C21.6387 33.0036 22.1094 32.6899 22.4739 32.28L22.6935 32.4996C24.0909 33.897 24.8985 35.7266 24.9908 37.6875H23.2408ZM29.2372 30.6954L23.1336 31.0769C23.2076 30.8135 23.25 30.5366 23.25 30.25C23.25 29.7797 23.1406 29.3361 22.9503 28.9375H28.5C28.5591 28.9375 28.6181 28.9257 28.6724 28.9021L34.6565 26.3374C34.835 26.5662 35.0564 26.7561 35.3106 26.8992L29.2372 30.6954ZM36.375 26.3125C35.6514 26.3125 35.0625 25.7236 35.0625 25C35.0625 24.2764 35.6514 23.6875 36.375 23.6875C37.0986 23.6875 37.6875 24.2764 37.6875 25C37.6875 25.7236 37.0986 26.3125 36.375 26.3125Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M29.2372 30.6954L23.1336 31.0769C23.2076 30.8135 23.25 30.5366 23.25 30.25C23.25 29.7797 23.1406 29.3361 22.9503 28.9375H28.5C28.5591 28.9375 28.6181 28.9257 28.6724 28.9021L34.6565 26.3374C34.835 26.5662 35.0564 26.7561 35.3106 26.8992L29.2372 30.6954Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M16.25 28.9375H17.4247C17.2344 29.3361 17.125 29.7797 17.125 30.25C17.125 30.7203 17.2344 31.1639 17.4247 31.5625H16.25V28.9375Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M23.2408 37.6875C23.1564 36.0661 22.4844 34.5533 21.3276 33.3965L21.1032 33.1721C21.6387 33.0036 22.1094 32.6899 22.4739 32.28L22.6935 32.4996C24.0909 33.897 24.8985 35.7266 24.9908 37.6875H23.2408Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M36.375 26.3125C35.6514 26.3125 35.0625 25.7236 35.0625 25C35.0625 24.2764 35.6514 23.6875 36.375 23.6875C37.0986 23.6875 37.6875 24.2764 37.6875 25C37.6875 25.7236 37.0986 26.3125 36.375 26.3125Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M21.9375 30.25C21.9375 29.2849 21.1526 28.5 20.1875 28.5C19.2224 28.5 18.4375 29.2849 18.4375 30.25C18.4375 31.2151 19.2224 32 20.1875 32C21.1526 32 21.9375 31.2151 21.9375 30.25ZM19.3125 30.25C19.3125 29.7674 19.7049 29.375 20.1875 29.375C20.6701 29.375 21.0625 29.7674 21.0625 30.25C21.0625 30.7326 20.6701 31.125 20.1875 31.125C19.7049 31.125 19.3125 30.7326 19.3125 30.25Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M29.8125 17.125C28.8474 17.125 28.0625 17.9099 28.0625 18.875C28.0625 19.8401 28.8474 20.625 29.8125 20.625C30.7776 20.625 31.5625 19.8401 31.5625 18.875C31.5625 17.9099 30.7776 17.125 29.8125 17.125ZM29.8125 19.75C29.3299 19.75 28.9375 19.3576 28.9375 18.875C28.9375 18.3924 29.3299 18 29.8125 18C30.2951 18 30.6875 18.3924 30.6875 18.875C30.6875 19.3576 30.2951 19.75 29.8125 19.75Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M12.3125 13.625C12.3125 12.9014 12.9014 12.3125 13.625 12.3125C14.3486 12.3125 14.9375 12.9014 14.9375 13.625C14.9375 14.3486 14.3486 14.9375 13.625 14.9375C12.9014 14.9375 12.3125 14.3486 12.3125 13.625Z"
                      fill="#3C3C3C"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M38.5625 18.4375V17.5625H34.625V17.125C34.625 16.8835 34.429 16.6875 34.1875 16.6875H31.9519C31.3993 16.1472 30.6446 15.8125 29.8125 15.8125C28.9559 15.8125 28.1815 16.1669 27.625 16.7356V16.6875H21.5897L15.7329 14.1776C15.7797 13.9999 15.8125 13.8171 15.8125 13.625C15.8125 12.4188 14.8312 11.4375 13.625 11.4375C12.4188 11.4375 11.4375 12.4188 11.4375 13.625C11.4375 14.78 12.3401 15.7189 13.4754 15.7972L20.3931 20.121C20.4548 20.1595 20.5248 20.1822 20.5974 20.1866L26.6349 20.5638C25.0179 22.2101 24.125 24.3822 24.125 26.6931V26.75C24.125 26.9915 24.321 27.1875 24.5625 27.1875H27.1875C27.429 27.1875 27.625 26.9915 27.625 26.75V26.6621C27.625 26.5444 27.6351 26.4289 27.6421 26.3125H29.8125C30.054 26.3125 30.25 26.1165 30.25 25.875V21.9025C30.9076 21.808 31.4982 21.5061 31.9519 21.0625H34.1875C34.429 21.0625 34.625 20.8665 34.625 20.625V20.1875H38.5625V19.3125H34.625V18.4375H38.5625ZM13.625 12.3125C12.9014 12.3125 12.3125 12.9014 12.3125 13.625C12.3125 14.3486 12.9014 14.9375 13.625 14.9375C14.3486 14.9375 14.9375 14.3486 14.9375 13.625C14.9375 12.9014 14.3486 12.3125 13.625 12.3125ZM15.3435 14.9624C15.165 15.1913 14.9436 15.3811 14.6894 15.5242L20.7628 19.3204L26.8664 19.7019C26.7924 19.4385 26.75 19.1616 26.75 18.875C26.75 18.4047 26.8594 17.9611 27.0497 17.5625H21.5C21.4409 17.5625 21.3819 17.5507 21.3276 17.5271L15.3435 14.9624ZM25.0092 26.3125H26.7592C26.8436 24.6911 27.5156 23.1782 28.6724 22.0215L28.8968 21.7971C28.3609 21.6286 27.8906 21.3149 27.5261 20.905L27.3065 21.1246C25.9096 22.522 25.1019 24.3521 25.0092 26.3125ZM29.2906 22.6401C28.5114 23.4198 27.9903 24.3862 27.7606 25.4375H29.375V22.5561L29.2906 22.6401ZM27.625 18.875C27.625 20.0812 28.6063 21.0625 29.8125 21.0625C31.0187 21.0625 32 20.0812 32 18.875C32 17.6688 31.0187 16.6875 29.8125 16.6875C28.6063 16.6875 27.625 17.6688 27.625 18.875ZM32.5753 20.1875H33.75V17.5625H32.5753C32.7656 17.9611 32.875 18.4047 32.875 18.875C32.875 19.3453 32.7656 19.7889 32.5753 20.1875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M14.6894 15.5242C14.9436 15.3811 15.165 15.1913 15.3435 14.9624L21.3276 17.5271C21.3819 17.5507 21.4409 17.5625 21.5 17.5625H27.0497C26.8594 17.9611 26.75 18.4047 26.75 18.875C26.75 19.1616 26.7924 19.4385 26.8664 19.7019L20.7628 19.3204L14.6894 15.5242Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M33.75 20.1875H32.5753C32.7656 19.7889 32.875 19.3453 32.875 18.875C32.875 18.4047 32.7656 17.9611 32.5753 17.5625H33.75V20.1875Z"
                      fill="#3C3C3C"
                    />
                    <path
                      d="M26.7592 26.3125H25.0092C25.1019 24.3521 25.9096 22.522 27.3065 21.1246L27.5261 20.905C27.8906 21.3149 28.3609 21.6286 28.8968 21.7971L28.6724 22.0215C27.5156 23.1782 26.8436 24.6911 26.7592 26.3125Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/stop-system.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Тормозная система</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 400 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Диагностика тормозной системы
                  </div>
                  <div class="item-slider__price">от 400 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена тормозного суппорта
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена тормозной жидкости</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена тормозных барабанных колодок
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена тормозных дисков</div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена тормозных дисков колодок (задняя ось)
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена тормозных дисков колодок (передняя ось)
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена тормозных шлангов</div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Проточка тормозных дисков
                    <span class="item-slider__subtext">(пока недоступно)</span>
                  </div>
                  <div class="item-slider__price item-slider__gray-price">
                    от 2000 ₽
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M34.3709 31.1755V19.7981C35.9585 19.4567 37.1521 18.0418 37.1521 16.3537C37.1521 14.4111 35.5718 12.8306 33.629 12.8306C31.6865 12.8306 30.106 14.4111 30.106 16.3537C30.106 18.0418 31.2997 19.4567 32.8874 19.7981V25.2398H25.2438V19.7981C26.8315 19.4567 28.0251 18.0418 28.0251 16.3537C28.0251 14.4111 26.4448 12.8306 24.502 12.8306C22.5594 12.8306 20.9792 14.4111 20.9792 16.3537C20.9792 18.0418 22.1729 19.4567 23.7604 19.7981V25.2398H16.1182V19.7981C17.7059 19.4567 18.8997 18.0418 18.8997 16.3537C18.8997 14.4111 17.3192 12.8306 15.3766 12.8306C13.434 12.8306 11.8535 14.4111 11.8535 16.3537C11.8535 18.0418 13.0471 19.4567 14.635 19.7981V25.9814C14.635 26.3909 14.9671 26.7229 15.3766 26.7229H23.7604V31.1755C22.1729 31.5169 20.9792 32.9318 20.9792 34.62C20.9792 36.5626 22.5594 38.1431 24.502 38.1431C26.4448 38.1431 28.0251 36.5626 28.0251 34.62C28.0251 32.9318 26.8315 31.5169 25.2438 31.1755V26.7229H32.8874V31.1755C31.2998 31.5169 30.106 32.9318 30.106 34.62C30.106 36.5626 31.6865 38.1431 33.629 38.1431C35.5718 38.1431 37.1521 36.5626 37.1521 34.62C37.1521 32.9318 35.9585 31.5169 34.3709 31.1755Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/transmition.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Трансмиссия</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 300 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена масла в АКПП б.с.п</div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена масла в АКПП с.с.п</div>
                  <div class="item-slider__price">от 1500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Первичная диагностика КПП</div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена масла в МКПП</div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">Замена сцепления DSG</div>
                  <div class="item-slider__price">от 7000 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <path
                      d="M34.874 14.8945V17.1438C34.874 17.5645 34.5328 17.9055 34.1123 17.9055C33.6915 17.9055 33.3505 17.5645 33.3505 17.1438V14.8945C31.5702 15.2496 30.2243 16.8242 30.2243 18.7075V24.2371H28.1962V23.3964C28.1962 22.8297 27.735 22.3687 27.1683 22.3687H22.8317C22.265 22.3687 21.8038 22.8297 21.8038 23.3964V24.2371H19.7757V18.7075C19.7757 16.8244 18.43 15.2496 16.6497 14.8945V17.1438C16.6497 17.5645 16.3085 17.9055 15.8879 17.9055C15.4672 17.9055 15.1262 17.5645 15.1262 17.1438V14.8945C13.3459 15.2496 12 16.8244 12 18.7075V31.2899C12 33.1732 13.3459 34.7478 15.1262 35.1029V32.8457C15.1262 32.425 15.4672 32.084 15.8879 32.084C16.3085 32.084 16.6497 32.425 16.6497 32.8457V35.1029C18.43 34.7478 19.7757 33.1732 19.7757 31.2899V25.7605H21.8038V26.5931C21.8038 27.1598 22.265 27.6208 22.8317 27.6208H27.1683C27.735 27.6208 28.1962 27.1598 28.1962 26.5931V25.7605H30.2243V31.2899C30.2243 33.1732 31.5702 34.7478 33.3505 35.1029V32.8457C33.3505 32.425 33.6915 32.084 34.1123 32.084C34.5328 32.084 34.874 32.425 34.874 32.8457V35.1029C36.6541 34.7478 38 33.1732 38 31.2901V18.7075C38 16.8244 36.6543 15.2496 34.874 14.8945V14.8945ZM16.6497 29.7052C16.6497 30.1259 16.3085 30.4669 15.8879 30.4669C15.4672 30.4669 15.1262 30.1259 15.1262 29.7052V26.5649C15.1262 26.1442 15.4672 25.8032 15.8879 25.8032C16.3085 25.8032 16.6497 26.1442 16.6497 26.5649V29.7052ZM16.6497 23.4246C16.6497 23.8453 16.3085 24.1863 15.8879 24.1863C15.4672 24.1863 15.1262 23.8453 15.1262 23.4246V20.2843C15.1262 19.8636 15.4672 19.5226 15.8879 19.5226C16.3085 19.5226 16.6497 19.8636 16.6497 20.2843V23.4246ZM34.874 29.7052C34.874 30.1259 34.5328 30.4669 34.1123 30.4669C33.6915 30.4669 33.3505 30.1259 33.3505 29.7052V26.5649C33.3505 26.1442 33.6915 25.8032 34.1123 25.8032C34.5328 25.8032 34.874 26.1442 34.874 26.5649V29.7052ZM34.874 23.4246C34.874 23.8453 34.5328 24.1863 34.1123 24.1863C33.6915 24.1863 33.3505 23.8453 33.3505 23.4246V20.2843C33.3505 19.8636 33.6915 19.5226 34.1123 19.5226C34.5328 19.5226 34.874 19.8636 34.874 20.2843V23.4246Z"
                      fill="#3C3C3C"
                    />
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/tires.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Углы установки колес</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 800 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Проверка углов установки колес
                  </div>
                  <div class="item-slider__price">БЕСПЛАТНО</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Регулировка углов установки колес сложная подвеска
                  </div>
                  <div class="item-slider__price">от 1500 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Регулировка углов установки колес простая подвеска
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
              </div>
            </div>
          </div>
          <div class="popup-tires__item-wrapper popup-autoservice__wrapper">
            <div class="popup-tires__item">
              <div class="popup-tires__item-left">
                <div class="popup-tires__item-icon">
                  <svg
                    width="50"
                    height="50"
                    viewBox="0 0 50 50"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <rect width="50" height="50" rx="6.46552" fill="#FBC22E" />
                    <g clip-path="url(#clip0)">
                      <path
                        d="M32.5834 19.1666H33.75C34.715 19.1666 35.5 18.3817 35.5 17.4166V12.75C35.5 11.785 34.715 11 33.75 11H32.5834C31.6183 11 30.8334 11.785 30.8334 12.75V13.9672L26.5854 14.3533C26.3077 13.7531 25.7037 13.3334 25 13.3334C24.2963 13.3334 23.6924 13.753 23.4146 14.3533L19.1666 13.9672V12.75C19.1666 11.785 18.3817 11 17.4166 11H16.25C15.285 11 14.5 11.785 14.5 12.75V17.4166C14.5 18.3817 15.285 19.1666 16.25 19.1666H17.4166C18.3817 19.1666 19.1666 18.3817 19.1666 17.4166V16.1995L23.4146 15.8134C23.5162 16.0331 23.6626 16.2254 23.8411 16.3846L24.2662 22.697C24.0187 22.7645 23.8332 22.9809 23.8332 23.25V26.75C23.8332 27.0091 24.0046 27.2212 24.2381 27.2974L23.8419 32.4481C23.4818 32.7689 23.25 33.2307 23.25 33.75V34.1718L19.1666 33.8005V32.5833C19.1666 31.6183 18.3817 30.8333 17.4166 30.8333H16.25C15.285 30.8333 14.5 31.6183 14.5 32.5833V37.25C14.5 38.215 15.285 39 16.25 39H17.4166C18.3817 39 19.1666 38.215 19.1666 37.25V36.0329L23.25 35.6615V36.0833C23.25 37.0483 24.035 37.8333 25 37.8333C25.965 37.8333 26.75 37.0483 26.75 36.0833V35.6615L30.8334 36.0328V37.25C30.8334 38.215 31.6183 39 32.5834 39H33.75C34.715 39 35.5 38.215 35.5 37.25V32.5834C35.5 31.6183 34.715 30.8334 33.75 30.8334H32.5834C31.6183 30.8334 30.8334 31.6183 30.8334 32.5834V33.8005L26.75 34.1718V33.75C26.75 33.2306 26.5181 32.7686 26.1577 32.4478L25.7577 27.2982C25.9932 27.2232 26.1666 27.0106 26.1666 26.7501V23.2501C26.1666 22.9826 25.9834 22.7669 25.7382 22.6979L26.159 16.3845C26.3374 16.2254 26.4837 16.0331 26.5853 15.8135L30.8333 16.1996V17.4168C30.8334 18.3817 31.6183 19.1666 32.5834 19.1666Z"
                        fill="#3C3C3C"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect
                          width="28"
                          height="28"
                          fill="white"
                          transform="translate(11 11)"
                        />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="popup-tires__item-m-icon">
                  <img
                    class="popup-tires__img"
                    src="./img/Popups/Car-service/hodovaya.png"
                    alt="engine"
                  />
                </div>
                <div class="popup-tires__item-text-wrap">
                  <div class="popup-tires__item-text">Ходовая часть</div>
                  <div class="popup-tires__item-subtext"></div>
                </div>
              </div>
              <div class="popup-tires__item-right">
                <div class="popup-tires__item-price car-price">от 300 ₽</div>
                <div class="popup-tires__item-arrow car-arrow">
                  <svg
                    width="19"
                    height="10"
                    viewBox="0 0 19 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.5 0L18.5933 9.75H0.406734L9.5 0Z"
                      fill="#FBC22E"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="popup-tires__item-slider item-slider">
              <div class="item-slider__left">
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Комплексная диагностика ходовой части
                  </div>
                  <div class="item-slider__price">БЕСПЛАТНО</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Другие работы по ходовой части
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена ШРУСа приводного вала оси
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена амортизатора подвески
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена амортизатора подвески сложной конструкции
                  </div>
                  <div class="item-slider__price">от 1200 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена внешней стойки стабилизатора передней подвески
                  </div>
                  <div class="item-slider__price">от 300 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена наконечника рулевой тяги
                  </div>
                  <div class="item-slider__price">от 450 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена подшипника ступицы передней оси
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена подшипника ступицы задней оси
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена пружины / рессоры подвески
                  </div>
                  <div class="item-slider__price">от 600 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена пыльника внешнего ШРУСа
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена пыльника внутреннего ШРУСа
                  </div>
                  <div class="item-slider__price">от 1000 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Замена пыльника / отбойника амортизатора
                  </div>
                  <div class="item-slider__price">от 800 ₽</div>
                </div>
                <div class="item-slider__item">
                  <div class="item-slider__text">
                    Смазка шлицевых соединений и крестовины карданного вала
                  </div>
                  <div class="item-slider__price">от 500 ₽</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      id="my-popup-login"
      class="popup-wrapper my-popup__login-wrapper popup"
    >
      <div class="my-popup popup-default">
        <a href="#" class="my-popup__close close-popup"></a>
        <div class="my-popup__top">
          <div class="my-popup__top-title my-popup__login-top-title">
            Вход в личный кабинет
          </div>
        </div>
        <div class="my-popup__body my-popup__login-body">
          <div class="my-popup__body-item">
            <label for="phone" class="my-popup__body-item-text"
              >Номер телефона</label
            >
            <input
              id="phone"
              class="maskphone my-popup__body-item-input"
              placeholder="+7 (928) 11-22-333"
              name="phone"
              type="phone"
            />
          </div>
          <div class="my-popup__body-item">
            <label for="lc-car-gos" class="my-popup__body-item-text"
              >Гос. номер авто</label
            >
            <input
              class="my-popup__body-item-input"
              id="lc-car-gos"
              name="car-gos"
              type="text"
            />
          </div>
          <div class="my-popup__body-item">
            <label for="lc-car-gos" class="my-popup__body-item-text"
              >Пароль</label
            >
            <input
              class="my-popup__body-item-input"
              id="my-popup__password"
              name="password"
              type="password"
            />
          </div>
          <a href="#" class="my-popup__drop-password">Забыли пароль?</a>
        </div>
        <div class="my-popup__bottom my-popup__login-bottom">
          <button class="my-popup__login">Войти</button>
          <div class="my-popup__registration-box">
            <span class="my-popup__registration-text">Нет аккаунта?</span>
            <a
              href="#my-popup-register"
              class="my-popup__registration-link popup-link"
              >Зарегестрируйтесь</a
            >
          </div>
        </div>
      </div>
    </div>
    <div
      id="my-popup-register"
      class="popup-wrapper my-popup__register-wrapper popup"
    >
      <div class="my-popup popup-default">
        <a href="#" class="my-popup__close close-popup"></a>
        <div class="my-popup__top">
          <div
            class="
              my-popup__top-title
              my-popup__login-top-title
              my-popup__register-top-title
            "
          >
            Регистрация
          </div>
        </div>
        <div class="my-popup__body my-popup__login-body">
          <div class="my-popup__body-item">
            <label for="phone" class="my-popup__body-item-text"
              >Номер телефона</label
            >
            <input
              id="phone"
              class="maskphone my-popup__body-item-input"
              placeholder="+7 (928) 11-22-333"
              name="phone"
              type="phone"
            />
          </div>
          <div class="my-popup__body-item">
            <label for="lc-car-gos" class="my-popup__body-item-text"
              >Гос. номер авто</label
            >
            <input
              class="my-popup__body-item-input"
              id="lc-car-gos"
              name="car-gos"
              type="text"
            />
          </div>
        </div>
        <div class="my-popup__bottom my-popup__login-bottom">
          <button class="my-popup__login">Зарегестрироваться</button>
        </div>
      </div>
    </div>
    <div class="overlay_order_now">
      <div class="order_now_form_wrap">
        <form action="send_now.php" id="order_now_form">
          <div class="form_header">
            <h2>Записаться сейчас</h2>
          </div>
          <div class="form_row">
            <label for="phone">Номер телефона</label>
            <input
              class="maskphone"
              id="phone"
              name="phone"
              type="text"
              required
            />
          </div>
          <div class="form_row">
            <label for="name">Ваше имя</label>
            <input id="name" name="name" type="text" required />
          </div>
          <input type="submit" value="Отправить" />
        </form>
        <span class="close_order_now"></span>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="jquery.mask.js"></script>
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
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

      ym(82471825, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
      });
    </script>
    <script src="template.js"></script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/82471825"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript>
  </body>
</html>
