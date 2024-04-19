<?php

require_once 'noabrir.php';
$funciono = 0;


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("La conexion fallo: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : '';
    $message = isset($_POST['message']) ? mysqli_real_escape_string($conn, $_POST['message']) : '';
    
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "No trajo datos";
    }
        else {


    $query = "CALL SP_ADD_MENSAJES(?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $message);
        
        if (mysqli_stmt_execute($stmt)) {
            $funciono = 1;
        } else {
            echo "Error al insertar los datos: " . mysqli_error($conn);
        }
        

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta: " . mysqli_error($conn);
    }
        }
} 

$conn->close();

$url = "fin.php?funciono=" . urlencode($funciono);


header("Location: " . $url);
exit;

?>
