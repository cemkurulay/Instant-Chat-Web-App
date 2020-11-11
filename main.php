<?php
   
   require "db.php" ;

    
    //fix this to choose our user
    $user = $db->query("select * from nickinuse")->fetchAll(PDO::FETCH_ASSOC) ;
    $messages = $db->query("select nick, content, created
                            from messages 
                            order by created desc")->fetchAll(PDO::FETCH_ASSOC) ;



?>


<div class="row " style="margin : 0px ; padding : 0px">
    <div class="col s12" style="background-color : pink; height : 500px ; margin : 0px ; padding : 0px">
      <table class="striped" id="main-table">
      <?php foreach($messages as $msg)  : ?>
        <tr>
              <td><?php
                $date = new DateTime($msg['created']);
                echo $date->format("h:m:s"); 
              ?>
              </td>
            <td style="font-weight:bold"><?= $msg['nick'] ?></td>
            <td><?= $msg['content'] ?></td>
          
        </tr>
      <?php endforeach ?>
      </table>
    </div>
</div>

<div class="row" style="margin : 0px ; padding : 0px">
    <form action="?page=addMSG" method="post" class="col s12 " style="background-color : lightgreen ; margin : 0px ; padding : 0px">
      <div class="row " style="margin : 0px ; padding : 0px">
      <input type="hidden" id="username" name="username" value="<?= $_SESSION["user"]?>">
        <div class="input-field col s8" style="background-color : white ; margin-left : 20px;">
          <input name="message" type="text" class="validate">
        </div>
        <div class="col s3 center-align ">
            <button class="btn waves-effect waves-light" style="margin-top:30px;" type="submit" name="action">Send
                <i class="material-icons right">send</i>
            </button>
        </div>
      </div>
    </form>
  </div>

