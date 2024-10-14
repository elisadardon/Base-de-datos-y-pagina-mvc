<?php
// Incluir este código PHP en la parte superior del archivo index.php o donde tengas el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    // Recibir los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO contacto (nombre_completo, correo_electronico, numero_telefono, mensaje) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Mostrar mensaje de éxito en la misma página
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Message sent successfully',
                showConfirmButton: false,
                timer: 1500
            });
          </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
