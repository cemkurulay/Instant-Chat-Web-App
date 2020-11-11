<?php

  require "db.php" ;

  $nick = $_SESSION["user"];

  
      $stmt = $db->prepare("delete from nickinuse where nick = :id") ;
      $stmt->execute(["id" => $nick]) ;
  
  unset($_SESSION["user"]);
  $_SESSION = [] ;

  session_destroy(); // delete session file in tmp folder
  setcookie("PHPSESSID", "", 1, "/") ;

  header("Location: index.php") ;