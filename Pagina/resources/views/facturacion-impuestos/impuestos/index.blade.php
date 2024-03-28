@extends ('layouts.admin')
@section ('contenido')
<link rel="stylesheet" href="{{ asset('css/impuestos.css') }}">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog sobre Regímenes Fiscales en México</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #666;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <h1>Blog sobre Regímenes Fiscales en México</h1>
    
    <h2>¿Qué son los Regímenes Fiscales en México?</h2>
    <p>Los regímenes fiscales en México son los distintos esquemas bajo los cuales los contribuyentes pueden realizar el pago de sus impuestos, de acuerdo con su actividad económica y otros factores. Algunos de los regímenes más comunes son el Régimen General de Ley, el Régimen de Incorporación Fiscal (RIF) y el Régimen de Pequeños Contribuyentes (Repecos).</p>
    
    <h2>Próxima Declaración Anual del SAT</h2>
    <?php
    $fecha_actual = strtotime(date("Y-m-d"));
    $fecha_limite = strtotime("31 de marzo");
    if ($fecha_actual > $fecha_limite) {
        $proxima_declaracion = date("Y") + 1;
    } else {
        $proxima_declaracion = date("Y");
    }
    ?>
    <p>La próxima declaración anual del SAT será para el ejercicio fiscal del año <?php echo $proxima_declaracion; ?>. ¡Prepárate con tiempo para cumplir con tus obligaciones fiscales!</p>
    
    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> Blog elaborado por Xeoz </p>
    </div>
</body>
</html>

@endsection