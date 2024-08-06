@extends('layouts.struct')

@section('title','about us')

@section('content')

<style>
    body{

        margin: 0;

    }
    p {
        font-family: Arial, sans-serif;
        text-align: center;
        color: black;
    }
    .y {
        display: inline-block;
        text-align: left;
    }
    .container {
        width: 80%;
        margin: auto;
        padding-top: 50px;
    }
    .product {
        margin-bottom: 30px;
        padding: 20px;
        background-color: rgba(0, 129, 161, 0.76);
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    textarea {
        width: 800px;
        height: 80px;
        background-color: transparent;
    }
    input{
        background-color: transparent;
    }
    @media (max-width: 500px){
        html #text{
            display: inline;
        }
    }
</style>


<header>
    <!-- Nav para moverse entre las paginas -->
        @extends('layouts.menu')
</header>
<body>
    <div class="container">
        <h1>Acerca de Nosotros</h1>
        
        <div class="product">
            <h2>Informacion General</h2>

<p>Nuestra Historia</p>
Fundada en 2005, nuestra distribuidora de fármacos ha crecido desde una pequeña empresa familiar hasta convertirse en un líder en la industria de distribución farmacéutica. Con más de 15 años de experiencia, hemos logrado importantes hitos, como la expansión a nivel nacional y la implementación de sistemas logísticos de vanguardia.

<p>Misión</p>
Nuestra misión es proporcionar fármacos de alta calidad de manera eficiente y segura, contribuyendo al bienestar y la salud de las comunidades a las que servimos.

<p>Visión</p>
Aspiramos a ser la distribuidora de fármacos más confiable y respetada en el país, liderando con innovación y excelencia en el servicio.

<p>Valores</p>
<h4>Ética: Operamos con integridad y transparencia en todas nuestras acciones.</h4>
<h4>Responsabilidad Social: Estamos comprometidos con la salud de nuestras comunidades y el cuidado del medio ambiente.</h4>
<h4>Innovación: Continuamente buscamos mejorar nuestros procesos y servicios a través de la tecnología y la creatividad.</h4>

<p>Nuestros Servicios y Productos</p>
Distribuimos una amplia gama de fármacos, incluyendo medicamentos genéricos y de marca, productos hospitalarios y suministros médicos. Además, ofrecemos asesoramiento especializado y soluciones logísticas adaptadas a las necesidades de nuestros clientes.

<p>Nuestro Equipo</p>
Nuestro equipo está compuesto por profesionales altamente cualificados con amplia experiencia en la industria farmacéutica. Nos enorgullece contar con un equipo directivo comprometido y un personal dedicado a proporcionar el mejor servicio.

*Compromiso con la Calidad*
Contamos con certificaciones de calidad que garantizan la seguridad y eficacia de nuestros productos. Nuestros rigurosos procedimientos de control aseguran que cada paso del proceso de distribución cumpla con los más altos estándares.

*Responsabilidad Social Corporativa*
Participamos activamente en programas de salud comunitarios y proyectos de sostenibilidad ambiental. Creemos en retribuir a la sociedad y en trabajar por un futuro más saludable y sostenible.

*Innovación y Tecnología*
Utilizamos tecnologías de última generación para optimizar nuestras operaciones y asegurar la entrega puntual y segura de los fármacos. Estamos siempre a la vanguardia de las innovaciones en la industria farmacéutica.

*Contáctenos*
Para más información, visítenos en nuestras oficinas, síganos en nuestras redes sociales, o contáctenos a través de nuestro sitio web.

---

Este formato te ayudará a comunicar de manera clara y atractiva quiénes son, qué hacen y por qué los clientes deberían confiar en su empresa.</p>

            <p><strong>Creadores:</strong> Amato Santiago, Luna Dylan, Romero Mauro</p>
            <p><strong>Diseñador del Logo:</strong> Ramiro Lob</p>
    </div>
    <div class="product">
        <h2>Informacion legal</h2>
        <p>
            por la declaracion jurada de el año 1987 de la reconcha puta de mi abuela declreto que nuestra</p>
            <p> empresa sera un ente legal y regulado</p>
            <p>permiso: me dejo mi mama </p>
            <p>locacion: mi casa</p>
            <p>firma: mi mama</p>


        </p>
    </div>
    <div class="product">
        <p><strong>Si tenes alguna inquietud, completa este formulario</strong></p>
        <form action="/reclamo" method="post">
            <p class="y"><strong>Nombre & Apellido:</strong> <input type="text" value=""></input></p>
            <p class="y"><strong>Usuario:</strong> <input type="text" value=""></input></p>
            <p class="y"><strong>Correo Electronico:</strong> <input type="text" value=""></input></p>
            <br>
            <strong>Consulta:</strong> 
            <br>
            <textarea></textarea>
            <br>
            <input type="submit" value="Confirmar" >
        </form>
    </div>
</body>

@endsection

