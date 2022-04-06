<?php
try {
$DBH = new PDO("mysql:host=localhost;dbname=goloshubov_example", 'root', 'root');  
$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}
catch(PDOException $e) {  
   echo $e->getMessage();  
}