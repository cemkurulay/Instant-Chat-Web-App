

<?php
 
 if ( $_SERVER["REQUEST_METHOD"] == "POST") {
     require "db.php";

     extract($_POST) ;  // nickname
     if(preg_match('/^\w{2,}$/', $nickname)) { //
        $stmt = $db->prepare("select * from nickinuse where nick = ?") ;
     $stmt->execute([$nickname]) ;
     if ( $stmt->rowCount() == 1) {
        addMessage("Nick already exists!") ;
        header("Location: ?page=home");
        exit;
    } else{
        $sql = "insert into nickinuse (nick) values (?)" ;
        $stmt = $db->prepare($sql);
        $stmt->execute([$nickname]);
        $_SESSION["user"] = $nickname ;
        addMessage("Registered");
        header("Location: ?page=main") ;
        exit ;
    }
    }
      

     addMessage("Nickname cannot be empty!");
     header("Location: ?page=home") ;
     exit ;
 }