<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/sisu.css')}}">
    <title>Nuestros Productos - Happy Pills</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            padding-top: 50px;
        }
        h1 {
            color: #333;
        }
        .product {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .product h2 {
            color: #007bff;
        }
        .product p {
            color: #666;
        }
    </style>
</head>
<header>
    <!-- Nav para moverse entre las paginas -->
    <nav>
        <img src="" class="imagen">
        <li class="nav_li"><span><i class="fas fa-home"></i><a href="/welcome" class="nav_a">Home</a></span></li>
        <li class="nav_li"><span><i class="fas fa-user-friends"></i><a href="/nosotros" class="nav_a">About us</a></span></li>
        <li class="nav_li"><span><i class="fas fa-solid fa-car-side"></i><a href="/productos" class="nav_a">Products</a></span></li>
        <li class="nav_li"><span><i class="fas fa-solid fa-wrench"></i><a href="/news" class="nav_a">News</a></span></li>
        <div class="sun">
        <li class="nav_li"><span><i class="fas fa-solid fa-sun"></i></span></li>
        <div class="search-container">
            <input type="text" placeholder="Buscar...">
            <button type="submit" value="confirm"><i class="fas fa-search"></i></button>
        <div class="sun">
        <li class="nav_li"><span><i class="fas fa-solid fa-sun"></i></span></li>
    </div>

        
    </div>
    </nav>
</header>
<body>
<script src="refacciones.js"></script>
    <div class="container">
        <h1>Nuestros Productos</h1>
        
        <div class="product">
            <!-- <img class="image"src="p2.jpg"> -->
            <h2>Medicamento A</h2>
            <p>Descripción del medicamento A.</p>
            <p>Precio: $X.XX</p>
            <button>Añadir al carrito</button>
        </div>
        
        <div class="product">
            <h2>Medicamento B</h2>
            <p>Descripción del medicamento B.</p>
            <p>Precio: $X.XX</p>
            <button>Añadir al carrito</button>
        </div>
        
        <!-- Agrega más productos según sea necesario -->
        
    </div>
    <div class="row">

<!-- Elementos generados a partir del JSON -->

<main id="items" class="col-sm-8 row"></main>

<!-- Carrito -->

    <aside class="carrito">

        <h2>Carrito</h2>

            <!-- Elementos del carrito -->

             <ul id="carrito" class="list-group"></ul>
        
         <hr>

        <!-- Precio total -->

    <p class="text-right">Total: <span id="total"></span>$;</p>

<button id="boton-vaciar" class="btn btn-danger">Vaciar</button>

</aside>

</div>
</body>
</html>