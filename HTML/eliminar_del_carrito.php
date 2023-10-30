<?php
session_start();

if (isset($_GET['producto_id']) && is_numeric($_GET['producto_id'])) {
    $producto_id = intval($_GET['producto_id']);
    
    if (isset($_SESSION['carrito']) && in_array($producto_id, $_SESSION['carrito'])) {
        // Buscar el índice del producto en el array del carrito
        $indice = array_search($producto_id, $_SESSION['carrito']);
        
        // Eliminar el producto del carrito
        unset($_SESSION['carrito'][$indice]);
        
        // Reorganizar los índices del array
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
    }
}

// Redirigir de nuevo a la página del carrito
header('Location: productos.php');
exit();
?>