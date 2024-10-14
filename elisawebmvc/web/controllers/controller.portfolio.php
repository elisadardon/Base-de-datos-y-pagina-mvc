<?php

class PortfolioController
{
  // Método para obtener las URLs de las imágenes
  public function getPortfolioImages()
  {
      $host = 'localhost';
      $db   = 'elisapagina';
      $user = 'root';
      $pass = '';
      $charset = 'utf8mb4';
  
      $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
      $options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false,
      ];
  
      try {
          $pdo = new PDO($dsn, $user, $pass, $options);
  
          $stmt = $pdo->query('SELECT image_url, portfolio_id, title, description, github_url FROM portfolio');
  
          while ($row = $stmt->fetch()) {
              $image_url    = htmlspecialchars($row['image_url']);
              $portfolio_id = htmlspecialchars($row['portfolio_id']);
              $title = htmlspecialchars($row['title']);
              $description = htmlspecialchars($row['description']);
              $github_url = htmlspecialchars($row['github_url']);
  
              echo '
              <div class="col-md-6 col-lg-4 mb-5 mb-md-0"> 
                <div class="portfolio-item mx-auto" 
                     data-bs-toggle="modal" 
                     data-bs-target="#portfolioModal"
                     data-portfolio-id="' . $portfolio_id . '"
                     data-title="' . $title . '"
                     data-description="' . $description . '"
                     data-image-url="' . $image_url . '"
                     data-github-url="' . $github_url . '">
                  <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                  </div>
                  <img class="img-fluid" src="' . $image_url . '" alt="..." />
                </div>
              </div>
              ';
          }
  
      } catch (PDOException $e) {
          echo 'Error de conexión: ' . $e->getMessage();
      }
  }
  
}

?>
