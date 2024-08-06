@extends('layouts.struct')

@section('title','News')

@section('content')
    <style>
        body{

            margin: 0;

        }
         .container {
            width: 80%;
            margin: auto;
            padding-top: 50px;
        }
        h1 {
            color: rgb(0, 0, 0);
        }
        h2 {
            color: #333;
        }
        p {
            color: #333;
        }
        .product {
            margin-bottom: 30px;
            padding: 20px;
            background-color: rgba(0, 129, 161, 0.76);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .lol {
            color: rgb(255, 255, 255);
        }
    </style>
</head>
<header>
@extends('layouts.menu')
</header>
<body>
    <div class="container">
        <h1  class="lol">Nuestros Noticias</h1>
        
        <div class="product">
            <h1><strong>Titulo de la noticia</strong></h1>
            <h2>Sub titulo de la noticia</h2>
            <p>kriogjnskldngeodkmvlkaejgpokajdgjkelñkgjefkgjklñdjgñklajgklglkjefkgjsfklñgjdlkfjg
                f,olsjjwndkgljekgjeflkgnsdfklgmklasfgnkljfjgnklfjgkojefgkjefijogjfjgioefjgfgkjng
                kdfjiosdjgdgjklsfngkfjgklmnfklgbndfklbfdkljbkldfjbkldfjbkfbnkldfnbkldfjbkdfjbklj
                ropdfgjsladkjgvlkdfjbklsdfjbpldfkb
            </p>
            <p><a href="">Enlace a la pestaña</a></p>
        </div>
    </div>
</body>
@endsection