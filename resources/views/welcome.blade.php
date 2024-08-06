@extends('layouts.struct')

@section('title','Welcome')

@section('content')


        <!-- Styles -->
        <style>
            
        </style>
    <header>
    <!-- Nav para moverse entre las paginas -->
     @extends('layouts.menu')

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <style>
        title{
            text-align: center; 
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a Happy Pills</h1>
        <p>Tu destino confiable para todos tus productos farmacéuticos.</p>
        <a href="/productos" class="btn">Ver nuestros productos</a>
    </div>
    
</body>
@endsection