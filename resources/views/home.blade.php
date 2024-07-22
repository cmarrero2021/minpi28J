@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Tablero</h1>
@stop

@section('content')
    @php
        $n=0;
        $m = 0;
        $colores = [
            'bg-primary',
            'bg-success',
            'bg-naranja',
            'bg-info',
            'bg-dark',
            'bg-danger',
            'bg-malva',
            'bg-light',
            'bg-warning',
        ];
    @endphp
    @foreach ($movilizacion as $movi)
        @if ($n==0)
            <div class="row">
        @endif
        @if ($n<3)
            <div class="col-xs-12 col-sm-12 col-md-4">
                @php
                    if ($m > 8)
                        $m = 0;
                @endphp               
                <div class="card text-white {{$colores[$m]}} mb-3 mr-3 border-dark shadow-lg rounded">
                    <div class="card-header">{{$movi['territorio']}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <ul>
                            <li><h3>Total: {{ number_format($movi['total'], 0, ',', '.') }}</h3></li>
                            <li><h3>Movilizados: {{ number_format($movi['movilizados'], 0, ',', '.')}}</h3></li>
                            <li><h3>Por Movilizar: {{ number_format($movi['por_movilizar'], 0, ',', '.')}}</h3></li>
                        </ul>
                    </div>
                </div>            
            </div>
            @if ($n==2)
                </div>
                @php
                    $n = 0;
                @endphp
            @else
                @php
                    $n++;
                @endphp
            @endif
        @endif
        @if ($m > 8)
            @php
                $m = 0;
            @endphp
        @else
            @php
                $m++;
            @endphp
        @endif        
    @endforeach
    </div>
    @include("dashboard.partials.mov-gen")
    @include('graficos.partials.nucleos')   
    @include('movilizacion.partials.resumen') 
    @include('graficos.partials.resumen')    
@stop
@section('css')
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/bootstrap-table.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-table-group-by.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/colores.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@toast-ui/chart/dist/toastui-chart.min.css">
@stop
@section('js')
    <script src="{{ asset('/assets/js/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table-locale-all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/multiple-sort/bootstrap-table-multiple-sort.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/print/bootstrap-table-print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/extensions/sticky-header/bootstrap-table-sticky-header.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.3/dist/bootstrap-table-locale-all.min.js"></script>    
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/bootstrap-table-export.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/tableExport.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/export/xlsx.full.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap-table-group-by.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@toast-ui/chart"></script>
    <script>
        function obtenerFechaHoraActual() {
            let fecha = new Date();
            let dia = String(fecha.getDate()).padStart(2, '0');
            let mes = String(fecha.getMonth() + 1).padStart(2, '0'); // Los meses en JavaScript empiezan en 0
            let año = fecha.getFullYear();
            let horas = String(fecha.getHours()).padStart(2, '0');
            let minutos = String(fecha.getMinutes()).padStart(2, '0');
            let segundos = String(fecha.getSeconds()).padStart(2, '0');
            let fechaFormateada = año + '-' + mes + '-' + dia + ' ' + horas + ':' + minutos + ':' + segundos;
            return fechaFormateada;
        }

        /// MOVILIZACION HORA
        var movilizacion = @json($movilizacion_hora);
        var el = document.getElementById('grf-resumen-hora');
        var categories = movilizacion.map(item => item.hora);
        var cantidadData = movilizacion.map(item => item.cant);
        var acumuladoData = movilizacion.map(item => parseInt(item.acumulado));
        var data = {
            categories: categories,
            series: [
                {
                    name: 'Cantidad',
                    data: cantidadData,
                },
                {
                    name: 'Acumulado',
                    data: acumuladoData,
                },
            ],
        };
        var theme = {
            series: {
                lineWidth: 5,
                colors: ['#4407ed', '#012e7a'],
                dataLabels: {
                    fontFamily: 'arial',
                    fontSize: 10,
                    fontWeight: 'bold',
                    useSeriesColor: false,
                    textBubble: {
                        visible: true,
                        paddingY: 3,
                        paddingX: 6,
                        arrow: {
                            visible: true,
                            width: 5,
                            height: 5,
                            direction: 'bottom'
                        }
                    }
                }
            },	
            exportMenu: {
                button: {
                    backgroundColor: '#000000',
                    borderRadius: 5,
                    borderWidth: 2,
                    borderColor: '#000000',
                    xIcon: {
                        color: '#ffffff',
                        lineWidth: 3,
                    },
                    dotIcon: {
                        color: '#ffffff',
                        width: 10,
                        height: 3,
                        gap: 1,
                    },
                },
            },		
        }
        var nomarch = obtenerFechaHoraActual()+" Movilización general por hora"
        var options = {
            chart: { title: 'Movilización general acumulada por hora', width: 1000, height: 500 },
            xAxis: {
                title: 'Hora',
            },
            yAxis: {
                title: 'Cantidad',
            },
            tooltip: {
                grouped: true,
            },
            legend: {
                align: 'bottom',
            },
            exportMenu: {
                filename: nomarch
            },
            series: {
                spline: true,
                dataLabels: { 
                    visible: true, 
                    offsetY: -10 
                },
            },
            theme,
        };
        var chart = toastui.Chart.lineChart({ el, data, options });
	// // /////////MOVILIZACION NUCLEOS
	var nucleos = @json($nucleos);
	var el = document.getElementById('grf-nucleos');
	var series = [];
	nucleos.forEach(function(item) {
		series.push({
			name: item.nucleo,
			data: [parseInt(item.acumulado)],
			dataLabels: {
				visible: true,
				formatter: function(value, category, series) {
					return series.name + ': ' + value;
				}
			}
		});
	});
	var data = {
		categories: ['Acumulado'],
		series: series,
	};
	var theme = {
		series: {
			dataLabels: {
				fontSize: 13,
				fontWeight: 500,
				color: '#000',
				textBubble: { visible: true, arrow: { visible: true } },
			},
		},
		exportMenu: {
			button: {
				backgroundColor: '#000000',
				borderRadius: 5,
				borderWidth: 2,
				borderColor: '#000000',
				xIcon: {
					color: '#ffffff',
					lineWidth: 3,
				},
				dotIcon: {
					color: '#ffffff',
					width: 10,
					height: 3,
					gap: 1,
				},
			},
		},
	};
	var nomarch = obtenerFechaHoraActual()+" Movilización por territorio"
	var options = {
		chart: { title: 'Movilización acumulada por territorio', width: 1000, height: 900 },
		series: {
          selectable: true,
          dataLabels: {
            visible: true,
          },
        },
		xAxis: {
			title: 'Núcleo',
		},
		yAxis: {
			title: 'Acumulado',
		},
		tooltip: {
			grouped: true,
		},
		legend: {
			align: 'bottom',
		},
		exportMenu: {
			filename: nomarch
		},
		theme,
	};
	var chart2 = toastui.Chart.barChart({ el, data, options });

    </script>
@stop
