<?php
  session_start();
  $_SESSION['GET'] = $_GET;
  include ("blocks/products_db.php");
  ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="address=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Асгард - производство и продажа резиновой крошки от производителя.</title>
  <link rel="icon" sizes="192x192" href="favicon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- шапка сайта спозиционирована как флекс-элемент: слева   -->
  <?php include ("blocks/header.php");?>
  <!-- контент и подвал обёрнуты в div и спозиционированы как флекс элементы -->
  <div class="page-wrapper">
    <main class="main">

      <?php include ("blocks/first-screen.php");?>

      <?php include ("blocks/production.php");?>

      <?php include ("blocks/classification.php");?>

      <?php include ("blocks/benefits.php");?>

      <?php include ("blocks/catalog.php");?>

      <?php include ("blocks/related-products.php");?>

      <?php include ("blocks/addition-catalog.php");?>

      <?php include ("blocks/promo.php");?>

      <?php include ("blocks/form.php");?>

    </main>

    <?php include ("blocks/footer.php");?>
  </div>

  <!-- Заказ обратного звонка - модалка  -->
  <div class="modal" id="callback-modal">
    <div class="modal__container">
      <h2 class="title">Заказ звонка</h2>
      <form class="main-form" action="" method="POST">
        <input type="hidden" name="subject" value="Заказ звонка">
        <div class="items-wrapper">
          <label class="main-form__label" for="callback-form__name">Введите имя</label>
          <input class="main-form__field" type="text" id="callback-form__name" name="name" autocomplete="off" required>
          <label class="main-form__label" for="callback-form__telephone">Введите телефон</label>
          <input class="main-form__field phone" type="tel" id="callback-form__telephone" name="phone" autocomplete="off" required>
        </div>
        <button class="button" type="submit">Перезвоните мне</button>
      </form>
      <button class="button--transparent" onclick="closeModal()">
        <img src="/images/icon__close.svg" title="Закрыть окно" alt="Иконка крестика">
      </button>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
