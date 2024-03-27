@extends ('layouts.admin')
@section ('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <div class="chart-container" style="width: 400px; height: 300px;">
                        <h2>{{ $chart->options['chart_title'] }}</h2>
                        {!! $chart->renderHtml() !!}
                    </div>
                    <div class="chart-container" style="width: 200px; height: 200px;">
                    </div>
                    <div class="chart-container" style="width: 400px; height: 300px;">
                        <h2>{{ $chart1->options['chart_title'] }}</h2>
                        {!! $chart1->renderHtml() !!}
                    </div>

                </div>

            </div>
        </div> 
    </div>
</div>

@endsection

@section('scripts')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}

{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
@endsection

