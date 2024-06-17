<?php
session_start();
include_once "../templeates_login_register/header.php";
include_once "../template_index/nav.php";
include_once "../data/crudEntry.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no hay sesión activa
    exit();
}

$userData = CrudEntry::_sessionUser($_SESSION['user']);

if ($userData) {
    foreach ($userData as $value) {
        $names = $value['PER_NAMES'];
        $dni = $value['PER_DNI'];
        $email = $value['PER_EMAIL'];
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Bienvenido:</h1>
                <h2>Sr(a): <?php echo $names; ?></h2>
            </div>
            <div class="card-body">
                Cedula:
                <p><?php echo $dni; ?></p>
            </div>
            <div class="card-body">
                Email:
                <p><?php echo $email; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
    }
} else {
    echo "Error al obtener los datos del usuario.";
}
?>

<?php } ?>
