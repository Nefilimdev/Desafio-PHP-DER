<?php

  $user = isset($_SESSION["user"]) ? $_SESSION["user"] : [];

?>


<header>

  <nav class="navbar justify-content-between">
  
    <a class="navbar-brand" href="/desafio-fakeinsta/posts">
      <img width="90" src="views/img/logo.png" alt="" srcset="">Instagram
    </a>

    <div>
      <?php if(isset($user) && $user != []){ ?>
        Olá, <?= $user->firstName ?>
        <a href="/desafio-fakeinsta/logout">Sair</a>
      <?php }else { ?>
        <a class="btn btn-signup" href="/desafio-fakeinsta/sign-up">Cadastre-se</a>
        <a class="btn btn-signup" href="/desafio-fakeinsta/sign-in">Login</a>
      <?php } ?>
    </div>

  </nav>

</header>
