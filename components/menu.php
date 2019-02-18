<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">RECREA</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
        <a class="nav-link" href="./index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./promos.php">Jugar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="./ver_cupones.php">Mis Cupones(<?php echo "$row_cnt"; ?>)</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a class="nav-link disabled" href="#"><i class="fas fa-user-circle"></i>
    <?php
    echo "$nombre";
    ?>

        </a>
    </form>
  </div>
</nav>