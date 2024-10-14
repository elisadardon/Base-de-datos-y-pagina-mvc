<!-- Footer-->
<?php
    require_once 'controllers/controller.titles.php';
    $titles = new titlesController();
    $ubication = $titles->getGlobalVariable('ubication');
    $facebook = $titles->getGlobalVariable('facebook');
    $twitter = $titles->getGlobalVariable('twitter');
    $instagram = $titles->getGlobalVariable('instagram');
    $tiktok = $titles->getGlobalVariable('tiktok');
?>
<footer class="footer text-center">
            <div class="container mt-5 ">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-md-6  mb-lg-3">
                        <h4 class="text-uppercase mb-4">Keep Posted</h4>
                        <p class="lead mb-0"><?php echo $ubication ?></p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-md-6  mb-lg-3">
                        <h4 class="text-uppercase mb-4">Social Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $facebook ?>"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $twitter ?>"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $tiktok ?>"><i class="fab fa-fw fa-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="<?php echo $instagram ?>"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    
                </div>
            </div>
        </footer>