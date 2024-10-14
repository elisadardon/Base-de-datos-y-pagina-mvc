<!-- About Section Heading-->
<h2 class="page-section-heading text-center text-uppercase text-white">
<?php
require_once 'controllers/controller.titles.php';
$titles = new titlesController();
echo $titles->getGlobalVariable('aboutme'); ?>    
</h2>
<!-- Icon Divider-->
<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
    <div class="divider-custom-line"></div>
</div>