<header class="header">
  <!-- Обёртка контента внутри шапки сайта  -->
  <div class="header__wrapper">
    <!-- блок с логотипом и подписью к нему  -->
    <div class="header__logo">
      <img src="images/logo__asgard.svg" alt="Логотип" width="146" height="50">
      <span class="header__logo-info">Производство резиновой крошки</span>
    </div>


    <!-- Блок с главным меню сайта  -->
    <?php include ("blocks/top-menu.php");?>

    <!-- Обёртка для позиционирования контейнера с контактами  -->
    <div class="header-bottom-wrapper">
      <!-- блок с мессенджерами и телефонным номером  -->
      <div class="header__contacts">
        <ul class="messengers__list">
          <li class="messengers__item">
            <a href="" class="messengers__link" title="Телеграм">
              <img src="images/icon__telegram.svg" alt="Телеграм иконка" width="25" height="25">
            </a>
          </li>
          <li class="messengers__item">
            <a href="" class="messengers__link" title="Вайбер">
              <img src="images/icon__viber.svg" alt="Wiber иконка" width="25" height="25">
            </a>
          </li>
          <li class="messengers__item">
            <a href="" class="messengers__link" title="Ватсапп">
              <img src="images/icon__whatsapp.svg" alt="WhatsApp иконка" width="25" height="25">
            </a>
          </li>
        </ul>
        <a href="" class="messengers__link messengers__link--phone" title="Наш телефонный номер">
          <img class="messengers__icon--phone" src="images/icon__phone.svg" alt="Иконка телефона" width="25"
               height="25"><span>8 (918) 089-60-09</span>
        </a>
      </div>
      <!-- кнопка вызова модального окна с формой -->
      <button class="button--link">Заказать звонок</button>
      <!-- блок с графиком работы организации  -->
      <div class="work-time">
        <b>Режим работы:</b> <br>
        Понедельник-Пятница<br>
        с&nbsp;9:00 до&nbsp;19:00
      </div>
    </div>
  </div>
</header>
