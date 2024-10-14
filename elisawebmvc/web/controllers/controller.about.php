<?php

class AboutController
{
    public function getAboutSections()
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

            // Realizamos la consulta a la tabla about_sections
            $stmt = $pdo->query('SELECT description_about_section FROM about_sections');

            // Inicializamos un contador para controlar el layout de las columnas
            $counter = 0;

            // Recorremos todos los registros usando un while
            while ($row = $stmt->fetch()) {
                $description_about_section = htmlspecialchars($row['description_about_section']);

                // Inicia una nueva fila cada 4 columnas
                if ($counter % 4 == 0) {
                    echo '<div class="row mb-4 justify-content-center">';
                }

                // Colocamos la descripción en una columna con un diseño de 4 columnas por fila
                echo '
                <div class="col-lg-3 ms-auto">
                    <p class="lead text-center">' . $description_about_section . '</p>
                </div>
                ';

                $counter++;

                // Cierra la fila cada 4 columnas
                if ($counter % 4 == 0) {
                    echo '</div>';
                }
            }

            // Si la fila no ha sido cerrada al final, cerrarla y centrar el contenido
            if ($counter % 4 != 0) {
                echo '</div>';
            }

        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
        }
    }
}
?>
