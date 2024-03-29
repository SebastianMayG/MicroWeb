@extends ('layouts.admin')
@section ('contenido')
<style>

    .card {
    background-color: #fff;
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    }
    
</style>
<div id="asesores">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">

                        <div class="chart-container" style="width: 400px; height: 450px;">
                            <h2>{{ $chart->options['chart_title'] }}</h2>
                            {!! $chart->renderHtml() !!}
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-container" style="width: 400px; height: 300px;">
                            <h2>{{ $chart1->options['chart_title'] }}</h2>
                            {!! $chart1->renderHtml() !!}
                        </div>
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

