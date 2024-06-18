<?php
// Incluir el archivo de la clase Connection
include_once 'Config.php';

// Realizar la conexión y verificar datos
$connection = Connection::_connect();
$query = $connection->query("SELECT * FROM tbl_persons");
$results = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $person) {
    echo "ID: " . $person['PER_ID'] . " - Nombre: " . $person['PER_NAMES'] . "<br>";
}

$query = $connection->query("SELECT * FROM tbl_products");
$results = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $product) {
    echo "ID: " . $product['PRO_ID'] . " - Producto: " . $product['PRO_NAMES'] . "<br>";
}
?>
