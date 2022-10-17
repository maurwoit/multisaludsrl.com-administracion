<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Inicio</title>
</head>
<style>
:root {
    --white: #FFFFFF;
    --black: #000000;
    --very-light-pink: #C7C7C7;
    --text-input-field: #F7F7F7;
    --hospital-green: #ACD9B2;
    --multisalud-grey: #94949d;
    --sm: 14px;
    --md: 16px;
    --lg: 18px;
}

body {
    margin: 0;
    font-family: 'Quicksand', sans-serif;
}

/*navbar css*/

nav {
    display: flex;
    justify-content: space-between;
    padding: 0 24px;
    border-bottom: 1px solid var(--very-light-pink);
    z-index: 1;
}

.menu {
    display: none;
    width: 50px;
    height: 50px;
    position: relative;
    top: 5px;
}

.logo {
    width: 100px;
}

.navbar-left ul,
.navbar-right ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    height: 60px;
}

.navbar-left {
    display: flex;
}

.navbar-left ul {
    margin-left: 12px;
}

.navbar-left .logo {
    width: 120px;
}

.navbar-left ul li a,
.navbar-right ul li a {
    text-decoration: none;
    text-align: left;
    color: var(--black);
    border: 1px solid var(--white);
    padding: 8px;
    border-radius: 8px;
    width: 150px;

}

.navbar-left ul li a:hover,
.navbar-right ul li a:hover {
    border: 1px solid var(--multisalud-grey);
    color: var(--black);

}

.navbar-email {
    color: var(--very-light-pink);
    font-size: var(--sm);
    margin-right: 12px;
}

.navbar-shopping-cart {
    position: relative;
}

.navbar-shopping-cart div {
    width: 16px;
    height: 16px;
    background-color: var(--hospital-green);
    border-radius: 50%;
    font-size: var(--sm);
    font-weight: bold;
    position: absolute;
    top: -6px;
    right: -3px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/*buscador css*/

.form_container {
    width: 100%;
    height: 100px;
    display: grid; 
    place-items: center;
    position: relative;
     top: -200px;
    /* left: 50vh; */
    z-index: 2;
}

.form_content {
    height: 50%;
}

.title h1 {
    font-size: 32px;
    margin-bottom: 0px;
}

.manejo_de_datos {
    display: grid;
    width: 400px;
}

.cuadro_de_formulario {
    width: 100%;
    height: 32px;
    border: 1px solid black;
    border-radius: 12px;
    padding-left: 12px;
    padding-right: 12px;
}

textarea {
    resize: none;
}

#cuadro_de_descripcion {
    padding-top: 12px;
    height: 200px ;
}
.boton_buscador {
    margin-top: 50px;
    background-color: #bfc3c6;
    border: 1px solid black;
    border-radius: 12px;
    width: 70%;
    height: 30px;
    position: relative;
    left: 70px;
}

.boton_buscador:hover {
    cursor: pointer;
}

@media (max-width: 1343px) {
    .menu {
        display: block;
    }

    .navbar-left ul {
        display: none;
    }

    .navbar-email {
        display: none;
    }
}
</style>

<body>
    <nav>
        <img src="/administracion/assets/icono_menu.png" alt="menu" class="menu">

        <div class="navbar-left">
            <img src="/administracion/assets/cropped-logo.jpeg" alt="logo" class="logo">

            <ul>
                <li>
                    <a href="https://multisaludsrl.com/administracion/">Buscador de
                        productos</a>
                </li>
                <li>
                    <a href="/administracion/pagina-registrar-nuevo-producto.php">Registrar un nuevo producto</a>
                </li>
                <li>
                    <a href="/administracion/pagina-crear-proforma.php">Crear una proforma</a>
                </li>
                <li>
                    <a href="/administracion/pagina-crear-nota-de-entrega.php">Crear una nota de entrega</a>
                </li>
                <li>
                    <a href="/administracion/pagina-crear-salida-de-almacen.php">Crear una salida de almacen</a>
                </li>
                <li>
                    <a href="/">...</a>
                </li>
            </ul>
        </div>

        <div class="navbar-right">
            <ul>
                <li class="navbar-email">correo@ejemplo.com</li>
                <li class="navbar-shopping-cart">

                </li>
            </ul>
        </div>
    </nav>




    <?php 
     include("buscarProducto.php");
     //$resultado = buscar ();
 ?>

<h1> PAGINA EN CONSTRUCCION, INTENTE MAS TARDE</h1>

    <!-- <div class="form_container">
        <div class="form_content">
            <div class="title">
                <h1>Registrar un nuevo producto</h1>
            </div>
            <form class="form" action="" method="get">
                <p>Ingrese la información del producto</p>
                <div class="manejo_de_datos">
                    <p>Código del producto:</p>
                    <input type="text" class="cuadro_de_formulario" id="cuadro_de_busqueda" name="cuadro_de_busqueda"
                        placeholder="Código">

                    <p>Descripción del producto:</p>
                    <textarea class="cuadro_de_formulario" id="cuadro_de_descripcion" name="cuadro_de_busqueda"
                        placeholder="Descripción"></textarea>

                    <p>Precio del producto:</p>
                    <input type="number" step="0.01" class="cuadro_de_formulario" id="cuadro_de_busqueda" name="cuadro_de_busqueda"
                        placeholder="Precio en Bolivianos (Bs.)">

                    <p>Fecha de registro:</p>
                    <input type="date" class="cuadro_de_formulario" id="cuadro_de_busqueda" name="cuadro_de_busqueda"
                        placeholder="Fecha">

                    <input type="submit" class="boton_buscador" id="boton_buscador" name="boton_buscador"
                        value="Registrar">
                </div>
            </form>


            <div id="lista_dinamica">

            </div>
            <ul id="resultado">

            </ul>
        </div>



        <script>
        const botonBuscador = document.querySelector("#boton_buscador");
        const valorFormulario = document.querySelector("#cuadro_de_busqueda");
        var peticion = valorFormulario.value;

        botonBuscador.addEventListener("click", busqueda);

        function busqueda(e) {
            e.preventDefault();
            console.log("apretaste la funcion " + valorFormulario.value);
        }
        </script>

        <?php

    include("buscarProducto.php");
    //buscar (peticion);
    
?> -->

</body>

</html>