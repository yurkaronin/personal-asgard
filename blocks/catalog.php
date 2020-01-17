<section class="catalog" id="anchor-catalog">
  <div class="container">
    <h2 class="title">Оптовые цены на&nbsp;резиновую крошку</h2>
    <ul class="catalog__list">
      <li class="catalog-card product-in-stock">
        <img class="catalog-card__photo" src="/images/catalog__item-1.png" alt="картинка резиновой крошки">
        <table class="catalog-card__characteristics">
          <tr>
            <th class="catalog-card__title" colspan="2">Резиновая крошка черная</th>
          </tr>
          <tr class="catalog-card__size">
            <td>Фракция:</td>
            <td>0-1</td>
          </tr>
          <tr class="catalog-card__price">
            <td>Цена:</td>
            <td>от&nbsp;20&nbsp;руб/кг</td>
          </tr>
        </table>
        <button class="button--transparent ask-price__window-call">Запрос цены</button>
      </li>
      <li class="catalog-card product-in-stock">
        <img class="catalog-card__photo" src="/images/catalog__item-1.png" alt="картинка резиновой крошки">
        <table class="catalog-card__characteristics">
          <tr>
            <th class="catalog-card__title" colspan="2">Резиновая крошка черная</th>
          </tr>
          <tr class="catalog-card__size">
            <td>Фракция:</td>
            <td>1-3</td>
          </tr>
          <tr class="catalog-card__price">
            <td>Цена:</td>
            <td>от&nbsp;20&nbsp;руб/кг</td>
          </tr>
        </table>
        <button class="button--transparent ask-price__window-call">Запрос цены</button>
      </li>
      <li class="catalog-card product-in-stock">
        <img class="catalog-card__photo" src="/images/catalog__item-1.png" alt="картинка резиновой крошки">
        <table class="catalog-card__characteristics">
          <tr>
            <th class="catalog-card__title" colspan="2">Резиновая крошка черная</th>
          </tr>
          <tr class="catalog-card__size">
            <td>Фракция:</td>
            <td>2-4</td>
          </tr>
          <tr class="catalog-card__price">
            <td>Цена:</td>
            <td>от&nbsp;19&nbsp;руб/кг</td>
          </tr>
        </table>
        <button class="button--transparent ask-price__window-call">Запрос цены</button>
      </li>
      <li class="catalog-card product-in-stock">
        <img class="catalog-card__photo" src="/images/catalog__item-1.png" alt="картинка резиновой крошки">
        <table class="catalog-card__characteristics">
          <tr>
            <th class="catalog-card__title" colspan="2">Резиновая крошка черная</th>
          </tr>
          <tr class="catalog-card__size">
            <td>Фракция:</td>
            <td>3-5</td>
          </tr>
          <tr class="catalog-card__price">
            <td>Цена:</td>
            <td>от&nbsp;19&nbsp;руб/кг</td>
          </tr>
        </table>
        <button class="button--transparent ask-price__window-call">Запрос цены</button>
      </li>
    </ul>
  </div>
</section>

<!-- Запрос цены на крошку МОДАЛКА  -->
<div class="modal" id="ask-price-modal">
  <div class="modal__container">
    <h2 class="title">Отправить запрос на уточнение цены</h2>
    <form class="main-form" action="" method="POST">
      <input type="hidden" name="subject" value="Отправить запрос на уточнение цены">
      <input type="hidden" name="product" value="">
      <div class="items-wrapper">
        <label class="main-form__label" for="ask-price-form__name">Введите имя</label>
        <input class="main-form__field" type="text" id="ask-price-form__name" name="name" autocomplete="off" required>
        <label class="main-form__label" for="ask-price-form__telephone">Введите телефон</label>
        <input class="main-form__field phone" type="tel" id="ask-price-form__telephone" name="phone" autocomplete="off" required>
        <label class="main-form__label" for="ask-price-form__email">Куда отправить КП?</label>
        <input class="main-form__field" type="email" id="ask-price-form__email" name="email" autocomplete="off" required>
      </div>
      <button class="button ask-price-button" type="submit">Узнать цену</button>
    </form>
    <button class="button--transparent" onclick="closeModal()">
      <img src="/images/icon__close.svg" title="Закрыть окно" alt="Иконка крестика">
    </button>
  </div>
</div>
