<script>
    const agregarCarritoButtons = document.querySelectorAll('.agregar-carrito');

    agregarCarritoButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();

            // Aquí puedes agregar la lógica para manejar la adición al carrito
            // Puedes utilizar una estructura de datos (como un array) para almacenar los productos en el carrito

            alert('Producto agregado al carrito');
        });
    });
</script>
