<?php

class titlesController
{
    function getGlobalVariable($variableName) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "elisapagina";

      // Crear conexión
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Verificar conexión
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Preparar la consulta SQL
      $sql = "SELECT value FROM global_variables WHERE name = ?";
      
      // Usar prepared statements para evitar inyecciones SQL
      if ($stmt = $conn->prepare($sql)) {
          // Bind del parámetro
          $stmt->bind_param("s", $variableName);
          
          // Ejecutar la consulta
          $stmt->execute();
          
          // Obtener el resultado
          $stmt->bind_result($value);
          $stmt->fetch();
          
          // Cerrar el statement
          $stmt->close();
      }

      // Cerrar la conexión
      $conn->close();
      
      // Retornar el valor de la variable (o NULL si no se encuentra)
      return $value ? $value : "Variable not found";
  }
}

?>

