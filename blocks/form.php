<section class="form" id="anchor-contact-form">
  <div class="container">
    <h2 class="title">Форма обратной связи</h2>
    <form class="main-form" action="" method="POST">
      <input type="hidden" name="subject" value="Форма обратной связи">
      <div class="main-form__container">

        <div class="items-wrapper">
          <label class="main-form__label" for="main-form__name">Введите имя</label>
          <input class="main-form__field" type="text" id="main-form__name" name="name" autocomplete="off" required>
          <label class="main-form__label" for="main-form__telephone">Введите телефон</label>
          <input class="main-form__field phone" type="tel" id="main-form__telephone" name="phone" autocomplete="off" required>
        </div>

        <div class="items-wrapper">
          <label class="main-form__label" for="main-form__text">Ваш вопрос:</label>
          <textarea class="main-form__textarea" name="question" id="main-form__text" rows="8"></textarea>
        </div>

      </div>
      <button class="button" type="submit">Отправить</button>
    </form>
  </div>
</section>
