<section class="page-section portfolio" id="portfolio">
  <div class="container">
    <!-- Portfolio Section Heading-->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
    <?php
    require_once 'controllers/controller.titles.php';
    $titles = new titlesController();
    echo $titles->getGlobalVariable('portfolio'); ?>    
    </h2>
    <!-- Icon Divider-->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
    </div>
    <!-- Portfolio Grid Items-->
    <div class="row justify-content-center">
      <?php

      include 'items/portfolio_item.php';
      ?>

    </div>
  </div>
</section>