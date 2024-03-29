<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Carbon\Carbon;


class GraficasController extends Controller    {



    public function __construct()
    {
    }
    public function index()
    {
        // Obtener la fecha de inicio (hace 3 días) y fin (hoy)
        $inicio_3_dias = Carbon::now()->subDays(2)->toDateString(); // Se restan 2 días porque incluye hoy
        $fin_hoy = Carbon::now()->toDateString();
    
        $chart_options = [
            'chart_title' => 'Cantidad de Artículos Vendidos ',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\DetalleVenta',
            'group_by_relationship' => 'articulo', // Relación en el modelo DetalleVenta con Articulo
            'group_by_field' => 'nombre', // Campo que queremos mostrar en el gráfico (nombre del artículo)
            'aggregate_function' => 'sum', // Función de agregación para sumar la cantidad vendida
            'aggregate_field' => 'cantidad', // Campo que contiene la cantidad vendida
            'chart_type' => 'pie', // Tipo de gráfico de pastel
            'relationship_name' => 'articulo',
            'show_blank_data' => 'null',
            'filter_days'=>3
            
        ];
    
        $chart = new LaravelChart($chart_options);

// Obtener la fecha de inicio (hace 7 días) y fin (hoy)

$fecha_fin = Carbon::now()->endOfDay();
$fecha_inicio = Carbon::now()->subDays(6)->startOfDay(); // Hace 6 días porque incluye hoy

// Configurar las opciones del gráfico
$chart_options1 = [
    'chart_title' => 'Venta diaria de los Últimos 7 Días',
    'report_type' => 'group_by_date',
    'model' => 'App\Models\Venta',
    'group_by_field' => 'fecha_hora', // Campo que queremos mostrar en el gráfico
    'aggregate_function' => 'sum', // Función de agregación para sumar la cantidad vendida
    'aggregate_field' => 'total_venta', // Campo que contiene el total de ventas
    'chart_type' => 'bar', // Tipo de gráfico de barras
    'filter_field' => 'fecha_hora', // Campo utilizado para filtrar por fecha
    
    'filter_start_date' => $fecha_inicio,
    'filter_end_date' => $fecha_fin,
    'group_by_period' => 'day', 
    'chart_color' => '0, 123, 255',
];
    
        $chart1 = new LaravelChart($chart_options1);
    
        return view('ventas.graficas.index', compact('chart','chart1'));
    }

}