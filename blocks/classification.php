<section class="classification" id="anchor-order-classification">

  <div class="container">
    <h2 class="title">Выберите ваш вид деятельности</h2>
    <span class="subtitle">и получите от нас <b>персональное</b> коммерческое предложение с расчётом стоимости на резиновую крошку в течении часа.</span>
  </div>

  <!-- форма с уточнениями заказа крошки  -->
  <form action="" method="POST">

    <input type="hidden" name="subject" value="форма с уточнениями заказа крошки">

    <div class="container">

      <ul class="classification__checkbox-list">

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-2" name="kind[]" value="Резиновые дорожные покрытия">
          <label for="choice-form__checkbox-2">
            <img src="/images/bg__decision-checkbox-item-2.png" alt="картинка">
            <b>Резиновые дорожные покрытия:</b>
            резиновая плитка, бордюры, брусчатка, фибробетон, наливные полы, асфальтовый модификатор.
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-3" name="kind[]" value="Спорт">
          <label for="choice-form__checkbox-3">
            <img src="/images/bg__decision-checkbox-item-3.png" alt="картинка">
            <b>Спорт:</b>
            Стадионы, футбольные поля, инвентарь (беговые дорожки, боксерские груши, резиновые маты).
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-4" name="kind[]" value="Детские">
          <label for="choice-form__checkbox-4">
            <img src="/images/bg__decision-checkbox-item-4.png" alt="картинка">
            <b>Детские:</b>
            игровые комплексы, игрушки...
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-5" name="kind[]" value="Для автомобилей">
          <label for="choice-form__checkbox-5">
            <img src="/images/bg__decision-checkbox-item-5.png" alt="картинка">
            <b>Для автомобилей:</b>
            покрышки, коврики, запчасти, отбойники...
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-6" name="kind[]" value="Обслуживание дорог и трубопроводов">
          <label for="choice-form__checkbox-6">
            <img src="/images/bg__decision-checkbox-item-6.png" alt="картинка">
            <b>Обслуживание дорог и&nbsp;трубопроводов:</b>
            Ремонт мостов, муфты для ж/д шпал, опоры для трубопроводов в&nbsp;условиях вечной мерзлоты...
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-7" name="kind[]" value="Строительство">
          <label for="choice-form__checkbox-7">
            <img src="/images/bg__decision-checkbox-item-7.png" alt="картинка">
            <b>Строительство:</b>
            Дороги и&nbsp;кровля, загородные дома, ландшафтный дизайн...
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-8" name="kind[]" value="Сорбент для нефтепроводов">
          <label for="choice-form__checkbox-8">
            <img src="/images/bg__decision-checkbox-item-8.png" alt="картинка">
            <b>Сорбент для нефтепроводов:</b>
            Для тампонирования нефтяных скважин, сбора нефтепродуктов...
          </label>
        </li>

        <li class="classification__checkbox-item">
          <input type="checkbox" id="choice-form__checkbox-1" name="kind[]" value="Другое">
          <label for="choice-form__checkbox-1">
            <img src="/images/bg__decision-checkbox-item-1.png" alt="картинка">
            <b>Другое</b>
            Прочие виды продукции и&nbsp;цели.
          </label>
        </li>

      </ul>
    </div>

    <div class="classification__bottom-wrapper">

      <div class="container">

        <ul class="classification__select-list">
          <li class="classification__select-item">
            <label for="choice-form__select-1"><b>Желаемый объем в&nbsp;кг.</b></label>
            <select name="volume" id="choice-form__select-1">
              <option value="до 1000 кг" selected>до&nbsp;1000</option>
              <option value="от 10 000 до 20 000 кг">от&nbsp;10&nbsp;000 до&nbsp;20&nbsp;000</option>
              <option value="от 20 000 кг">от&nbsp;20&nbsp;000</option>

            </select>
          </li>

          <li class="classification__select-item">
            <label for="choice-form__select-2"><b>Какая фракция в&nbsp;мм.</b></label>
            <select name="fraction" id="choice-form__select-2">
              <option value="фракция 0-1" selected>0-1</option>
              <option value="фракция 1-3">1-3</option>
              <option value="фракция 2-4">2-4</option>
            </select>
          </li>

          <li class="classification__select-item">
            <label for="choice-form__input-1"><b>Имя</b></label>
            <input type="text" name="name" value="" id="choice-form__input-2" autocomplete="off" required>
          </li>
          <li class="classification__select-item">
            <label for="choice-form__input-2"><b>Телефон</b></label>
            <input type="text" name="phone" value="" id="choice-form__input-2" autocomplete="off" required class="phone">
          </li>
        </ul>

        <div class="classification__wrapper-button">
          <span class="classification__sale-title">Скидка&nbsp;10%<br> новым клиентам</span>
          <button type="submit" class="button--transparent">Получить скидку и КП</button>
        </div>

      </div>

    </div>
  </form>

</section>
