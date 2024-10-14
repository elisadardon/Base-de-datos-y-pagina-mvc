<!-- About Section Content-->
<div class="row justify-content-center">
<?php 
require_once 'controllers/controller.about.php';
$about = new AboutController();
$about->getAboutSections();
?>  
</div>