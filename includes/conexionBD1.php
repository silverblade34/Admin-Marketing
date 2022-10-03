<?php
$servername = "localhost";
$database = "prestacl_landing";
$username = "prestacl_mpachec";
$password = "a_c?A}DyU*]=";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Sus datos no lograron ser enviados correctamente";
}
?>
