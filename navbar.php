<?php
  $register_link = ["home", "loginForm"] ;
  $login_link = ["home", "registerForm"] ;
  $main_link = ["main"] ;
?>

<nav>
    <div class="nav-wrapper green">
      <a href="?" class="brand-logo"><i class="material-icons center hide-on-med-and-down">home</i><?= $_SESSION["user"] ?? " " ?></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
      <!-- Menu Items -->
      <?php
      $menu_items = [
        "desktop" => '<ul id="nav-mobile" class="right hide-on-med-and-down">',
        "mobile" => '<ul class="sidenav" id="mobile-demo">'
      ];
      ?>
      <ul id="nav-mobile" class="right">
        <li>
            <a href="?page=home"><i class="material-icons left">refresh</i></a>
        </li>
      </ul>
      <?php foreach($menu_items as $type => $menu)  : ?>
          <?= $menu ?>
          <?php if ( $type == "mobile") : ?>
            <li class=" center"><img src="img/logo.png" alt=""></li>
            <li class="divider"></li>
          <?php endif ?>
          <?php if ( $type == "mobile") : ?>
            <li class="black-text center">Board v1.0</li>
            <li class="divider"></li>
          <?php endif ?>
          <?php if ( in_array($page, $main_link)) : ?>
            <li>
                <a href="?page=logout"><i class="material-icons left">exit_to_app</i>Exit</a>
            </li>
          <?php endif ?>
      </ul>
      <?php endforeach ?>
    </div>
  </nav>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });
  </script>