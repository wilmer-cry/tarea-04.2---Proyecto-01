<?php
session_start();

// Verificar si el carrito está vacío
if (empty($_SESSION['carrito'])) {
    echo '<p>El carrito está vacío.</p>';
} else {
    // Aquí puedes agregar la lógica para procesar la compra, como guardar en la base de datos, enviar correos, etc.
    
    // Luego de procesar la compra, vaciar el carrito
    $_SESSION['carrito'] = array();
    
    echo '<p>¡Compra realizada con éxito!</p>';
}
?>