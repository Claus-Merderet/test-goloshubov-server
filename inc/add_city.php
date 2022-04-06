<?php
require_once 'connect_db.php';

if (!empty($_POST['sub'])) {
   if (empty($_POST['name']) || empty($_POST['city'])) {
      echo ("Заполните все поля!");
   } else {
      try {
         $STH = $DBH->prepare("INSERT INTO application (name, city) values (:name, :city)");
         $STH->execute(['name' => $_POST['name'], 'city' => $_POST['city']]);
         echo "Заявка отправлена!";
         header("Location: index.php");
         return;
      } catch (PDOException $e) {
         echo "error" . $e->getMessage();
      }
   }
}
