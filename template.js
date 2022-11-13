$(document).ready(function () {
  $(".mobile_menu").click(function () {
    $(".descktop_menu ").addClass("open");
  });

  $(".close").click(function () {
    $(".descktop_menu ").removeClass("open");
  });

  $(".order_now").click(function () {
    $(".overlay_order_now ").addClass("open");
  });

  $(".close_order_now").click(function () {
    $(".overlay_order_now ").removeClass("open");
    $('#order_now_form input[type="text"]').each(function () {
      this.value = "";
    });
  });
  $("#order_now_form").submit(function (e) {
    e.preventDefault();

    var form = $("#order_now_form");

    $.ajax({
      method: "POST",
      url: "send_now.php",
      data: form.serialize(),
      dataType: "json",
      success: function (result) {
        $(".overlay_order_now ").removeClass("open");
      },
      error: function (result) {},
    });
  });

  $("#repair").click(function (e) {
    e.preventDefault();

    let data = {
      carModel: $("#car-model .select__in").text().trim(),
      service: $("#service .select__in").text().trim(),
      repairType: $("#repair-type .select__in").text().trim(),
      date: $("#date").val().trim(),
      phone: $("#phone").val().trim(),
      faster: $("#faster").prop("checked"),
      service2: $("#service2").find(".select__in").text().trim(),
      service3: $("#service3").find(".select__in").text().trim(),
    };

    $.ajax({
      method: "POST",
      url: "telegram.php",
      data,
      dataType: "json",
      success: function (result) {
        $("#repair-form").remove();
      },
      error: function (e) {
        console.log(e);
      },
    });
  });

  $(".maskphone").mask("+7 (000) 00-00-000", {
    placeholder: "+7 (928) 11-22-333",
  });

  $(".maskdate").mask("00.00.00", {
    placeholder: "дд.мм.гг",
  });

  $(document).ready(function () {
    $(document).on("click", ".select__in", function () {
      var $thisSelect = $(this).closest(".select");

      $(".select").not($thisSelect).removeClass("is-opened");
      $(this).closest(".select").toggleClass("is-opened");
    });

    $(document).on("click", ".select__item", function () {
      var $thisSelect = $(this).closest(".select");

      $thisSelect
        .find(".select__input")
        .val($(this).attr("data-value"))
        .trigger("change");
      $thisSelect.find(".select__in").html($(this).html());
      $thisSelect.find(".select__item").removeClass("is-active");
      $(this).addClass("is-active");
      $thisSelect.removeClass("is-opened");
    });

    $(document).on("click", ".select__service-item", function () {
      $("#service2").remove();
      $("#service3").remove();
      const title = $(this).text().trim();
      selectType(title, this);
    });

    $(document).on("click", ".select__subservice-item", function () {
      $("#service3").remove();
      const title = $(this).text().trim();
      selectSubservice(title, this);
    });

    $(document).on("click", function (e) {
      var container = $(".select");
      if (
        !$(e.target).closest(container).length &&
        $(".select").hasClass("is-opened")
      )
        $(".select").removeClass("is-opened");
    });

    $(document).on("keyup", function (e) {
      if (e.keyCode == 27) $(".select").removeClass("is-opened");
    });
  });
  // popup
  $(".popup-tires__item").click(function (event) {
    $(this).toggleClass("popup-active").next().toggleClass("hidden");
  });

  const popupLinks = document.querySelectorAll(".popup-link");
  const body = document.querySelector("body");
  const lockPadding = document.querySelectorAll(".lock-padding");

  let unlock = true;

  const timeout = 400;
  if (popupLinks.length > 0) {
    for (let index = 0; index < popupLinks.length; index++) {
      const popupLink = popupLinks[index];
      popupLink.addEventListener("click", function (e) {
        const popupName = popupLink.getAttribute("href").replace("#", "");
        const curentPopup = document.getElementById(popupName);

        popupOpen(curentPopup);
        e.preventDefault();
      });
    }
  }

  const popupCloseIcon = document.querySelectorAll(".close-popup");
  if (popupCloseIcon.length > 0) {
    for (let index = 0; index < popupCloseIcon.length; index++) {
      const el = popupCloseIcon[index];
      el.addEventListener("click", function (e) {
        popupClose(el.closest(".popup"));
        e.preventDefault();
      });
    }
  }

  function popupOpen(curentPopup) {
    if (curentPopup && unlock) {
      const popupActive = document.querySelector(".popup-wrapper.popup-open");
      if (popupActive) {
        popupClose(popupActive, false);
      } else {
        // bodyLock();
      }
      curentPopup.classList.add("popup-open");
      curentPopup.addEventListener("click", function (e) {
        if (!e.target.closest(".popup-default")) {
          popupClose(e.target.closest(".popup-wrapper"));
        }
      });
    }
  }
  function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
      popupActive.classList.remove("popup-open");
      if (doUnlock) {
        // bodyUnlock();
      }
    }
  }

  $(function () {
    $(".radio-category__radio-btn").on("click", function () {
      const Id = $(this).attr("id");
      if (Id === "free") {
        $(".promotions__item").hide();
        $(".promotions-free").show();
      }
      if (Id === "radio1") {
        $(".promotions__item").show();
      }
      if (Id === "radio3") {
        $(".promotions__item").hide();
        $(".promotions-profit").show();
      }
    });
  });

  if (Swiper) {
    const swiper = new Swiper(".swiper-container", {
      // Optional parameters

      loop: true,
      autoplay: {
        delay: 2500,
      },
      // If we need pagination
      pagination: {
        el: ".swiper-pagination",
      },

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      // And if we need scrollbar
      scrollbar: {
        el: ".swiper-scrollbar",
      },
    });
  }

  // const lcBtn = document.querySelector(".personal-area__label");
  // const shellBtn = document.getElementById("avatar");
  // shellBtn.addEventListener("change", function () {
  //   const file = this.files[0];
  //   if (file) {
  //     const reader = new FileReader();
  //     reader.onload = function () {
  //       const result = reader.result;
  //       img.src = result;
  //       console.log(result);
  //     };

  //     let govno = reader.readAsDataURL(file);
  //     console.log(govno);
  //   }
  // });

  const services = [
    {
      id: "car-service",
      title: "Автосервис",
      items: [
        {
          id: "engine",
          title: "Двигатель",
          items: [
            {
              title: "Диагностика бензинового двигателя и электронных систем",
              price: 500,
            },
            {
              title: "Аппаратная прочистка форсунок до 2.4 л",
              price: 1500,
            },
            {
              title: "Расширенная диагностика ДВС и электронных систем",
              price: 800,
            },
            {
              title: "Диагностика эндоскопом",
              price: 800,
            },
            {
              title: "Другой ремонт двигателя",
              price: 800,
            },
            {
              title: "Ремонт автоэлектрики",
              price: 800,
            },
            {
              title: "Замена ремня ГРМ",
              price: 2500,
            },
            {
              title: "Прочистка дроссельной заслонки ДВС до 2.4 л",
              price: 800,
            },
            {
              title: "Замена масла и масляного фильтра двигателя",
              price: 300,
            },
            {
              title: "Замена свечей зажигания",
              price: 300,
            },
            {
              title: "Замена МСК без снятия ГБЦ",
              price: 6000,
            },
            {
              title: "Замена цепей ДВС",
              price: 7000,
            },
          ],
        },
        {
          id: "engine",
          title: "Жидкость и фильтры",
          items: [
            {
              title: "Замена жидкости ГУР",
              price: 800,
            },
            {
              title: "Замена жидкости вариатора без снятия поддона",
              price: 800,
            },
            {
              title: "Замена жидкости вариатора с снятием поддона",
              price: 1500,
            },
            {
              title: "Замена охлаждающей жидкости",
              price: 1500,
            },
            {
              title: "Замена охлаждающей жидкости с промывкой системы",
              price: 1000,
            },
            {
              title: "Замена воздушного фильтра",
              price: 100,
            },
            {
              title: "Замена воздушного фильтра",
              price: 100,
            },
            {
              title: "Замена масла муфты Haldex",
              price: 500,
            },
            {
              title: "Замена масла в заднем редукторе",
              price: 300,
            },
            {
              title: "Замена масла в переднем редукторе",
              price: 300,
            },
            {
              title: "Замена масла и масляного фильтра двигателя",
              price: 300,
            },
            {
              title: "Замена масла раздаточной коробки",
              price: 300,
            },
            {
              title: "Замена салонного фильтра",
              price: 300,
            },
            {
              title: "Замена тормозной жидкости",
              price: 300,
            },
          ],
        },
        {
          id: "engine",
          title: "Рулевое управление",
          items: [
            {
              title: "Замена пыльника рулевой тяги",
              price: 450,
            },
            {
              title: "Замена рулевой тяги",
              price: 600,
            },
          ],
        },
        {
          id: "engine",
          title: "Система кондиционирования",
          items: [
            {
              title: "Дезинфекция системы кондиционирования",
              price: 450,
            },
            {
              title: "Диагностика системы кондиционирования",
              price: 600,
            },
            {
              title: "Диагностика системы отопления",
              price: 600,
            },
            {
              title: "Заправка автокондиционеров",
              price: 600,
            },
          ],
        },
        {
          id: "engine",
          title: "Тормозная система",
          items: [
            {
              title: "Диагностика тормозной системы",
              price: 450,
            },
            {
              title: "Замена тормозного суппорта",
              price: 600,
            },
            {
              title: "Замена тормозной жидкости",
              price: 600,
            },
            {
              title: "Замена тормозных барабанных колодок",
              price: 600,
            },
            {
              title: "Замена тормозных дисков",
              price: 600,
            },
            {
              title: "Замена тормозных дисков колодок (задняя ось)",
              price: 600,
            },
            {
              title: "Замена тормозных дисков колодок (передняя ось)",
              price: 600,
            },
            {
              title: "Замена тормозных шлангов",
              price: 600,
            },
            {
              title: "Проточка тормозных дисков",
              price: 600,
            },
          ],
        },
        {
          id: "engine",
          title: "Трансмиссия",
          items: [
            {
              title: "Замена масла в АКПП б.с.п",
              price: 450,
            },
            {
              title: "Замена масла в АКПП с.с.п",
              price: 600,
            },
            {
              title: "Первичная диагностика КПП",
              price: 600,
            },
            {
              title: "Замена масла в МКПП",
              price: 600,
            },
            {
              title: "Замена сцепления DSG",
              price: 600,
            },
          ],
        },
        {
          id: "engine",
          title: "Углы установки колес",
          items: [
            {
              title: "Проверка углов установки колес",
              price: 450,
            },
            {
              title: "Регулировка углов установки колес сложная подвеска",
              price: 600,
            },
            {
              title: "Регулировка углов установки колес простая подвеска",
              price: 600,
            },
          ],
        },
        {
          id: "engine",
          title: "Ходовая часть",
          items: [
            {
              title: "Комплексная диагностика ходовой части",
              price: 450,
            },
            {
              title: "Другие работы по ходовой части",
              price: 600,
            },
            {
              title: "Замена ШРУСа приводного вала оси",
              price: 600,
            },
            {
              title: "Замена амортизатора подвески",
              price: 600,
            },
            {
              title: "Замена амортизатора подвески сложной конструкции",
              price: 600,
            },
            {
              title: "Замена внешней стойки стабилизатора передней подвески",
              price: 600,
            },
            {
              title: "Замена внешней стойки стабилизатора передней подвески",
              price: 600,
            },
            {
              title: "Замена наконечника рулевой тяги",
              price: 600,
            },
            {
              title: "Замена подшипника ступицы передней оси",
              price: 600,
            },
            {
              title: "Замена подшипника ступицы задней оси",
              price: 600,
            },
            {
              title: "Замена пружины / рессоры подвески",
              price: 600,
            },
            {
              title: "Замена пыльника внешнего ШРУСа",
              price: 600,
            },
            {
              title: "Замена пыльника внутреннего ШРУСа",
              price: 600,
            },
            {
              title: "Замена пыльника / отбойника амортизатора",
              price: 600,
            },
            {
              title: "Смазка шлицевых соединений и крестовины карданного вала",
              price: 600,
            },
          ],
        },
      ],
    },
    {
      id: "car-service",
      title: "Диагностика",
      items: [
        {
          title: "Диагностика бензинового двигателя и электронных систем",
          price: 500,
        },
        {
          title: "Диагностика системы кондиционирования",
          price: 500,
        },
        {
          title: "Диагностика тормозной системы",
          price: 500,
        },
        {
          title: "Диагностика системы отопления",
          price: 500,
        },
        {
          title: "Диагностика катализатора эндоскопом",
          price: 500,
        },
        {
          title: "Диагностика эндоскопом",
          price: 500,
        },
        {
          title: "Первичная диагностика КПП",
          price: 500,
        },
        {
          title: "Проверка углов установки колес",
          price: 500,
        },
        {
          title: "Комплексная диагностика ходовой части",
          price: 500,
        },
        {
          title: "Проверка ЛКП",
          price: 500,
        },
        {
          title: "Проверка кузова авто перед покупкой",
          price: 500,
        },
        {
          title: "Комплексная диагностика авто перед покупкой",
          price: 500,
        },
      ],
    },
    {
      id: "car-service",
      title: "Шиномонтаж",
      items: [
        {
          title: "Нанесение герметика на колесный диск",
          price: 500,
        },
        {
          title: "Ремонт покрышки жгутом",
          price: 500,
        },
        {
          title: "Установка вентиля бескамерной шины",
          price: 500,
        },
        {
          title: "Ремонт покрышки заплаткой",
          price: 500,
        },
        {
          title: "Сезонный шиномонтаж",
          price: 500,
          items: [
            {
              title: "R13/14",
            },
            {
              title: "R15/16",
            },
            {
              title: "R17",
            },
            {
              title: "R18",
            },
            {
              title: "R19",
            },
            {
              title: "R20",
            },
            {
              title: "R21",
            },
          ],
        },
        {
          title: "Установка камеры колеса",
          price: 500,
        },
      ],
    },
  ];

  function selectType(title, node) {
    const service = services.find((service) => service.title === title);

    let items = service.items.map((item) => {
      return `<div class="select__item select__subservice-item is-active" data-value="1">
      ${item.title}
    </div>`;
    });

    $(node).parent().parent().parent().after(`<div id="service2" class="select">
    <div class="select__title">
      <span class="select__text">Вид ремонта</span>
    </div>
    <div class="select__box">
      <input name="service" class="select__input" type="hidden" value="1">
      <div class="select__in">
          
      </div>
      <div class="select__list">
        ${items.join()}
      </div>
    </div>
  </div>`);
    // console.log($(node).parent().parent().parent());
    // $(node).parent().append("<p>Test</p>");
    // const select = $("#service").clone();
    // console.log(select);
  }

  function selectSubservice(title, node) {
    const parentTitle = $(node)
      .parent()
      .parent()
      .parent()
      .prev()
      .find(".select__in")
      .text()
      .trim();

    const parentService = services.find(
      (service) => service.title === parentTitle
    );

    const service = parentService.items.find(
      (service) => service.title === title
    );

    let items = service.items.map((item) => {
      return `<div class="select__item is-active" data-value="1">
      ${item.title}
    </div>`;
    });

    $(node).parent().parent().parent().after(`<div id="service3" class="select">
    <div class="select__title">
      <span class="select__text">Услуга</span>
    </div>
    <div class="select__box">
      <input name="service" class="select__input" type="hidden" value="1">
      <div class="select__in">
          
      </div>
      <div class="select__list">
        ${items.join()}
      </div>
    </div>
  </div>`);

    // $(node).parent().append("<p>Test</p>");
    // const select = $("#service").clone();
    // console.log(select);
  }
  let carService;
  let repairType;
  let clickedService;
  let linkRepair;
  $(".popup-link").click(function () {
    carService = $(this)
      .parent()
      .parent()
      .find(".service__title")
      .text()
      .trim();
  });
  $(".popup-tires__item").click(function () {
    repairType = $(this).find(".popup-tires__item-text").text().trim();
    linkRepair = this;
  });
  $(".item-slider__item").click(autoLink);
  $(".solo-service").click(autoLink);
  function autoLink() {
    clickedService = $(this).find(".item-slider__text").text().trim();
    // if (clickedService) {
    //   clickedService = $(linkRepair)
    //     .find(".popup-tires__item-text")
    //     .text()
    //     .trim();
    // }

    [...document.querySelectorAll(".select__item")]
      .find((item) => item.textContent.trim() === carService)
      .click();
    [...document.querySelectorAll(".select__item")]
      .find((item) => item.textContent.trim() === repairType)
      .click();
    clickedService &&
      [...document.querySelectorAll(".select__item")]
        .find((item) => item.textContent.trim() === clickedService)
        .click();
    [...document.querySelectorAll(".close-popup")].forEach((el) => el.click());
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#repair-form").offset().top - 40,
      },
      600
    );
  }

  $(document).on("click", ".select__item", function () {
    var $thisSelect = $(this).closest(".select");

    $thisSelect
      .find(".select__input")
      .val($(this).attr("data-value"))
      .trigger("change");
    $thisSelect.find(".select__in").html($(this).html());
    $thisSelect.find(".select__item").removeClass("is-active");
    $(this).addClass("is-active");
    $thisSelect.removeClass("is-opened");
  });

  function selectType(title, node) {
    const service = services.find((service) => service.title === title);

    let items = service.items.map((item) => {
      return `<div class="select__item select__subservice-item is-active" data-value="1">
      ${item.title}
    </div>`;
    });

    $(node).parent().parent().parent().after(`<div id="service2" class="select">
    <div class="select__title">
      <span class="select__text">Вид ремонта</span>
    </div>
    <div class="select__box">
      <input name="service" class="select__input" type="hidden" value="1">
      <div class="select__in">
          
      </div>
      <div class="select__list">
        ${items.join()}
      </div>
    </div>
  </div>`);

    // $(node).parent().append("<p>Test</p>");
    // const select = $("#service").clone();
    // console.log(select);
  }

  function selectSubservice(title, node) {
    const parentTitle = $(node)
      .parent()
      .parent()
      .parent()
      .prev()
      .find(".select__in")
      .text()
      .trim();

    const parentService = services.find(
      (service) => service.title === parentTitle
    );

    const service = parentService.items.find(
      (service) => service.title === title
    );
    if (service.items) {
      let items = service.items?.map((item) => {
        return `<div class="select__item is-active" data-value="1">
          ${item.title}
        </div>`;
      });

      $(node).parent().parent().parent()
        .after(`<div id="service3" class="select">
        <div class="select__title">
          <span class="select__text">Услуга</span>
        </div>
        <div class="select__box">
          <input name="service" class="select__input" type="hidden" value="1">
          <div class="select__in">
              
          </div>
          <div class="select__list">
            ${items.join()}
          </div>
        </div>
      </div>`);
    }

    // $(node).parent().append("<p>Test</p>");
    // const select = $("#service").clone();
    // console.log(select);
  }
});
