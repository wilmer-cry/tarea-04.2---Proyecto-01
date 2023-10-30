<?php
// Iniciar la sesión (si aún no está iniciada)
session_start();

// Obtener el ID del producto que se va a agregar al carrito desde la URL
if(isset($_GET['producto_id'])){
    $producto_id = $_GET['producto_id'];

    // Agregar el ID del producto al carrito en la sesión
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); // Inicializar el carrito si aún no existe
    }

    // Verificar si el producto ya está en el carrito
    if (!in_array($producto_id, $_SESSION['carrito'])) {
        $_SESSION['carrito'][] = $producto_id;
    }

    // Redirigir de vuelta a la página de productos
    header('Location: productos.php');
} else {
    echo "No se proporcionó el ID del producto.";
}
?>
