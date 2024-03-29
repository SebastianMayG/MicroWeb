@extends('layouts.admin')
@section('contenido')
    <link rel="stylesheet" href="{{ asset('css/impuestos.css') }}">
    </head>

    <body>
        <header class = "blog">
            <h1>Blog sobre Impuestos</h1>
        </header>

        <main>
            <article class="article-Content">
                <h2 class="subtitulo" id="que-son-los-impuestos">¿Qué son los impuestos?</h2>
                <p>
                    Los impuestos son una forma de contribución que todos los ciudadanos estamos obligados a realizar, ya
                    sea en forma de dinero o bienes, con
                    el fin de fortalecer la economía de nuestro país. Estos fondos recaudados a través de los impuestos son
                    utilizados por el gobierno para financiar
                    una amplia gama de servicios y programas destinados al bienestar público, como la educación, la salud,
                    la seguridad, la infraestructura y otros aspectos
                    fundamentales para el desarrollo y funcionamiento de la sociedad. En esencia, los impuestos son una
                    forma de participar en la construcción y el mantenimiento
                    de nuestro entorno social y económico, contribuyendo así al progreso y al cumplimiento de los objetivos
                    establecidos por las autoridades gubernamentales.
                </p>
            </article>
            <article class="article-Content">
                <h2 class="subtitulo" id="ejemplos-de-impuestos">Ejemplos de impuestos en México</h2>
                <p>
                    En México, existen varios impuestos que se aplican a diferentes aspectos de la vida económica. Algunos
                    ejemplos comunes de impuestos en México incluyen:
                </p>
                <ul>
                    <li>Impuesto sobre la renta (ISR): Este impuesto se aplica a los ingresos que una persona o empresa
                        obtiene
                        durante un período de tiempo determinado.</li>
                    <li>Impuesto al valor agregado (IVA): Este impuesto se aplica al valor agregado en cada etapa de la
                        producción y distribución de bienes y servicios.</li>
                    <li>Impuesto especial sobre producción y servicios (IEPS): Este impuesto se aplica a la producción y
                        venta
                        de ciertos bienes y servicios, como gasolina, tabaco y bebidas alcohólicas.</li>
                    <li>Impuesto sobre nómina: Este impuesto se aplica a los salarios y sueldos pagados por las empresas a
                        sus
                        empleados.</li>
                    <li>Impuesto predial: Este impuesto se aplica a la propiedad inmobiliaria, como casas, terrenos y
                        edificios.
                    </li>
                    <li>Impuesto sobre adquisición de inmuebles (ISAI): Este impuesto se aplica a la compra de bienes
                        inmuebles,
                        como casas y terrenos.</li>
                </ul>
                <p>
                    Estos son solo algunos ejemplos de impuestos en México, y la lista puede variar según las leyes fiscales
                    y
                    regulaciones vigentes.
                </p>
            </article>
            <article class="article-Content">
                <h2 class="subtitulo" id="por-que-debemos-pagar-tributos">¿Por qué debemos pagar tributos?</h2>
                <p>
                    Contribuir mediante el pago de impuestos es una responsabilidad que recae en todos los ciudadanos, ya
                    que es fundamental para el funcionamiento de nuestra sociedad. Es como trabajar en equipo, donde cada
                    uno cumple
                    su parte para lograr un objetivo común: el desarrollo y el bienestar de la comunidad. Estos impuestos
                    son requeridos por ley,
                    de acuerdo con nuestra Constitución, y representan nuestra contribución proporcional y equitativa a los
                    gastos públicos del país.
                </p>
            </article>
            <article class="article-Content">
                <h2 class="subtitulo" id="si-no-quiero-pagar-impuestos">¿Qué pasa si no quiero pagar impuestos?</h2>
                <p>
                    Es crucial para las pequeñas y medianas empresas cumplir con el pago de impuestos de manera puntual,
                    tanto mensualmente como en la declaración anual.
                    No hacerlo puede acarrear recargos y multas, lo que afectaría negativamente a la empresa y su
                    reputación. Además, puede dificultar el acceso a créditos
                    y generar problemas con los clientes. En casos extremos, la autoridad podría embargar bienes de la
                    empresa o de su representante legal hasta que se realice el pago.
                    Por eso, es importante implementar tecnología para llevar un seguimiento adecuado de los flujos de
                    dinero, utilizar los recursos económicos de manera eficiente,
                    buscar asesoramiento adecuado y asegurarse de cumplir con las fechas establecidas para el pago de
                    impuestos.
                    En el siguiente apartado veremos bajo que régimen nos conviene más tributar.
                </p>
            </article>
        </main>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> Conociendo los impuestos </p>
        </footer>

    </body>
@endsection
