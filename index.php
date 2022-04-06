<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css\style.css">
   <title>Document</title>
</head>

<body class="block">
   <div class="message">
      <h2 class="message__text">Введите ваши данные, и в течении 24 часов мы отправим вам предложения с лучшими путевками по всему миру!</h2>
   </div>
   <form action="" method="post" id="form" class="main-form">
      <label class="main-form__label">Введите ФИО</label>
      <input type="text" name='name' id='name' onkeyup="validation_name()" class="main-form__inpit">
      <span id="text_name"></span>
      <label class="main-form__label">Введите город</label>
      <input type="text" name='city' id='city' onkeyup="validation_city()" class="main-form__inpit">
      <span id="text_city"></span>
      <button type="submit" name="sub" value="Submit" id="sub" class="main-form__button">Отправить</button>
      <button type="submit" name="show_application" value="Submit" class="main-form__button">Показать уже существующие заявки</button>
      <?php require_once 'inc/show_application.php';?>
   </form>
</body>
<?php require_once 'inc/add_city.php'; ?>

<script src="assets\js\validation.js"></script>
</body>

</html>