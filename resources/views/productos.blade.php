@extends('layouts.struct')

@section('title','Productos')

@section('content')
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
    @extends('layouts.menu')
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
    <div class="container">
    <div class="row">
        <!-- Elementos generados a partir del JSON -->
        <main id="items" class="col-sm-8 row"></main>
        <!-- Carrito -->
        <aside class="col-sm-4">
            <h2>Carrito</h2>
            <!-- Elementos del carrito -->
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <!-- Precio total -->
            <p class="text-right">Total: <span id="total"></span>&euro;</p>
            <button id="boton-vaciar" class="btn btn-danger">Vaciar</button>
        </aside>
    </div>
</div>


<!-- Elementos generados a partir del JSON -->

<main id="items" class="col-sm-8 row"></main>

<!-- Carrito -->

    <!-- <aside class="carrito">

        <h2>Carrito</h2>

            <!-- Elementos del carrito -->

<!--           <ul id="carrito" class="list-group"></ul>
        
         <hr>

        <!-- Precio total -->

   <!-- <p class="text-right">Total: <span id="total"></span>$;</p>

<button id="boton-vaciar" class="btn btn-danger">Vaciar</button>

</aside> -->

</div>
</body>
@endsection