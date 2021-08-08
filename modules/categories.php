<?php
require_once './content.php';
$page_name =  $_SERVER['REQUEST_URI'];
?>
<!-- BreadCrumb Start-->
<div class="section">

  <div class="row">
    <div class="col-lg-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li><a href="index.html">Anasayfa</a><i class="fas fa-chevron-right"></i></li>
          <li aria-current="page"><a href="product.html" class="breadcrumb-active"><?= $content[$page_name]['title']; ?></a></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- BreadCrumb End-->

<div class="container">
  <div class="title1" style=" text-align: center;">
    <h6 style="color:#FF7F50;">Evcil Hayvanlar</h6>
    <h2 class="title-inner1"><?= $content[$page_name]['title']; ?></h2>
  </div>
  <div class="card-columns">
    <?php
      foreach ($content[$page_name]['content'] as $value) {
    ?>
    <div class="card">
     <a href=""><img class="card-img-top" loading="lazy" src="<?= $value['image']; ?>" alt="Card image cap"></a>
      <div class="card-body">
        <a href=""><h5 class="card-title"><?= $value['title']; ?></h5></a>
        <p class="card-text"><?= $value['text']; ?></p>
        <a href="<?= $value['href']; ?>" class="btn" style="background-color:#963EFF; color:white;border-radius: 10px;">Devamını Oku</a>
      </div>
    </div>
    <?php
      }
    ?>

  </div>

</div>

