<?php
require_once 'inc/connect_db.php';
if (!empty($_POST['show_application'])) {
   try {
      $STH = $DBH->prepare("SELECT * FROM `application` ORDER BY `application_id`");
      $STH->execute();

      printf('  <div class="main-form__info">
  <table class="table">
  <tr>
    <th>ID</th>
    <th>ФИО заказчика</th>
    <th>Город</th>
   </tr>');
      while ($array = $STH->fetch(PDO::FETCH_ASSOC)) {
         printf('
   <tr>
   <td>' . $array['application_id'] . '</td>
   <td>' . htmlspecialchars($array['name']) . '</td>
   <td>' . htmlspecialchars($array['city']) . '</td>
   </tr>');
      }
      printf('</table></div>');
   } catch (PDOException $e) {
      echo "error" . $e->getMessage();
   }
}
