<?php
session_start();

// Ejemplo de array asociativo de productos (esto debería provenir de una base de datos)
$productos = array(
    1 => array('nombre' => 'Smartphone UltraX Pro'),
    2 => array('nombre' => 'Auriculares SoundWave 360'),
    3 => array('nombre' => 'Tablet Nexus TabBook'),
    4 => array('nombre' => 'Cámara VisualTech Pro 4K'),
    //Agregar más productos aquí...
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
    <h1>Productos en el Carrito</h1>

    <?php
    if (!empty($_SESSION['carrito'])) {
        echo '<ul>';
        foreach ($_SESSION['carrito'] as $producto_id) {
            // Verificar si el producto existe en el array $productos
            if (isset($productos[$producto_id])) {
                echo '<li>Producto ID: ' . $producto_id . ', Nombre: ' . $productos[$producto_id]['nombre'] . ' ';
                echo '<a href="eliminar_del_carrito.php?producto_id=' . $producto_id . '"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</a>';
                echo '</li>';
                echo '<a href="realizar_compra.php" class="comprar-btn"><i class="fa-solid fa-shopping-cart"></i> Realizar Compra</a>';
            }
        }
        echo '</ul>';
    } else {
        echo '<p>El carrito está vacío.</p>';
    }
    ?>

</body>
</html>