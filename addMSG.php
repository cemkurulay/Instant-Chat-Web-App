<?php
require "db.php" ;
//var_dump($_POST);
if ( $_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST) ;
    if($message==""){
      addMessage("Empty Message can not be sent!") ;
      header("Location: index.php?page=main") ;
      exit;
    }
    $sql = "insert into messages (nick, content) values (?,?)" ;
    try{
      $stmt = $db->prepare($sql) ;
      $stmt->execute([$username, $message ?? ""]) ;
      addMessage("Success") ;
    }catch(PDOException $ex) {
       addMessage("Insert Failed!") ;
    }
}

header("Location: index.php?page=main") ;

