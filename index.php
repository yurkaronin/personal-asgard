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

      <?php include("blocks/classification.php");?>

      <?php include ("blocks/benefits.php");?>

      <?php include ("blocks/catalog.php");?>

      <?php include ("blocks/related-products.php");?>

      <?php include ("blocks/addition-catalog.php");?>

      <?php include ("blocks/promo.php");?>

      <?php include ("blocks/form.php");?>

    </main>

    <?php include ("blocks/footer.php");?>
  </div>

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
