@extends ('layouts.admin')
@section ('contenido')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .tarjeta {
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px;
        display: flex;
        justify-content: space-between;
        transition: background-color 1s;
    }

    .tarjeta .contenido {
        flex: 1;
    }

    .tarjeta img {
        max-width: 100%;
        display: block; 
    }

    .tarjeta a:last-child img {
        margin-left: auto; /* Alineamos las imágenes a la derecha */
    }

    h2 {
        color: #333;
    }

    p {
        color: #666;
        line-height: 1.5;
    }
    .tarjeta:hover {
        background-color:#fff;

    }
</style>





<div class="tarjeta">
    <a href="https://www.programa2024-emprendedores.org.mx/"  target="blank">
    <h2>APOYOS A EMPRENDEDORES 2024</h2>
        <p>Esta iniciativa tiene como objetivo abordar tanto las necesidades inmediatas como a largo plazo, incluyendo la liquidez y el capital de trabajo, y el fortalecimiento general de las microempresas en el territorio nacional.</p>
        <p>Haga click para saber màs informacion.</p>
        <img src="https://th.bing.com/th/id/OIP.p7NLpIL-vd3EhzyrUDPDKgHaE8?rs=1&pid=ImgDetMain" width="200px">
    </a>
</div>
<div class="tarjeta">
    <a href="https://www.gob.mx/becasbenitojuarez/articulos/conoce-las-reglas-de-operacion-2024-de-las-becas-para-el-bienestar-benito-juarez?idiom=es"  target="blank">
    <h2>Becas para el Bienestar Benito Juárez</h2>
        <p>Si eres estudiante y cumples con los requisitos, puedes aspirar para esta beca, no la dejes perder, cualquier apoyo es importante, para el crecimiento de tu negocio, ademas de aportar capital, puedes conseguir experiencia en algún trabajo más adelante</p>
        <p>Haga click para saber màs informacion.</p>
        <img  id="becas"src="https://th.bing.com/th/id/OIP.z_EwW4bGROeEQQ8gp62icwHaFB?rs=1&pid=ImgDetMain" width="200px">
    </a>
</div>
<div class="tarjeta">
    <a href="https://www.gob.mx/covid19medidaseconomicas/acciones-y-programas/apoyos-financieros-a-microempresas-y-trabajadores-independientes"  target="blank">
    <h2>APOYOS FINANCIEROS A MICROEMPRESAS Y TRABAJADORES INDEPENDIENTES</h2>
        <p>El gobierno de mexico ha decidido dar un financiamiento de 25 mil pesos por negocio o persona, a pagar en tres años, incluidos tres meses de gracia.
        Es decir, los beneficiarios pagarán 824 pesos en 33 abonos.</p>
        <p>Haga click para saber màs informacion.</p>
        <img src="https://www.gob.mx/cms/uploads/image/file/584669/portada-credito-palabra.jpg" width="200px">
    </a>
</div>
@endsection