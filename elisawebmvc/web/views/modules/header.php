<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="<?php
            require_once 'controllers/controller.titles.php';
            $titles = new titlesController();
            echo $titles->getGlobalVariable('img_title'); ?>" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">
        <?php
            require_once 'controllers/controller.titles.php';
            $titles = new titlesController();
            echo $titles->getGlobalVariable('title'); ?>
        </h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">
        <?php
            require_once 'controllers/controller.titles.php';
            $titles = new titlesController();
            echo $titles->getGlobalVariable('subtitle'); ?>
        </p>
    </div>
</header>