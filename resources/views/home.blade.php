@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Tablero</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-primary mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">HABILITADOS PARA VOTAR</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_electores['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_electores['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_electores['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-success mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">ESTUDIANTES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                    <li><h3>Total: {{ number_format($total_estudiantes['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_estudiantes['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_estudiantes['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>                    
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card text-white bg-warning text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">TRABAJADORES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                    <li><h3>Total: {{ number_format($total_trabajadores['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_trabajadores['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_trabajadores['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-info mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">ADMINISTRATIVOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_administrativos['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_administrativos['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_administrativos['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">DOCENTES</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_docentes['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_docentes['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_docentes['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>                    
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-light text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">OBREROS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_obreros['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_obreros['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_obreros['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>                       
                </div>
            </div>            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card bg-secondary text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">PENSIONADOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_pensionados['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_pensionados['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_pensionados['total_pormovilizar'], 0, ',', '.')}}</h3></li>

                    </ul>   
                </div>
            </div>            
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="card text-white bg-danger text-dark mb-3 mr-3 border-dark shadow-lg rounded">
                <div class="card-header">JUBILADOS</div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <ul>
                        <li><h3>Total: {{ number_format($total_jubilados['total'], 0, ',', '.') }}</h3></li>
                        <li><h3>Movilizados: {{ number_format($total_jubilados['total_movilizados'], 0, ',', '.')}}</h3></li>
                        <li><h3>Por Movilizar: {{ number_format($total_jubilados['total_pormovilizar'], 0, ',', '.')}}</h3></li>
                    </ul>  
                </div>
            </div>            
        </div>
    </div>
    @include("dashboard.partials.mov-gen")
    @include("dashboard.partials.mov-tra")
@stop
@section('css')
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="{{ asset('assets/css/bootstrap-table.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap-table-group-by.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
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
        document.addEventListener("DOMContentLoaded", function () {
            generarGraficaToroide(
                {!! $gr_total_electores !!},
                'grf-mov-gen',
                ["MOVILIZACIÓN"],
                ['#4407ed', '#012e7a'],
                'UNESR - ELECTORES MOVILIZADOS Y POR MOVILIZAR',
                'fullscreenBtnGr1'
            );
            //************************************* */
const movilizacionTra = @json($movilizacion_tra);
const categories = movilizacionTra.map(item => item.TIPO.toUpperCase().replace("TOTAL_", ""));
const movilizadosData = movilizacionTra.map(item => item.MOVILIZADOS);
const porMovilizarData = movilizacionTra.map(item => item.FALTANTES);
const el = document.getElementById('gr-mov-tra');
const data = {
    categories: categories,
    series: [
        {
            name: 'MOVILIZADOS',
            data: movilizadosData,
        },
        {
            name: 'FALTANTES',
            data: porMovilizarData,
        },
    ],
};
var theme = {
    series: {
        colors:['#38c1eb','#e538eb'],
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
const options = {
    chart: { title: 'MOVILIZACIÓN POR TIPO DE TRABAJADOR', width: 600, height: 400 },
    series: {
        clockwise: false
    },
    theme
};
const chart = toastui.Chart.radialBarChart({ el, data, options });
var fullscreenBtn = document.getElementById('fullscreenBtnGr2');
let isFullscreen = false;
let originalPosition;
fullscreenBtn.addEventListener('click', function() {
    if (!isFullscreen) {
        fullscreenBtn.style.position = 'fixed';
        fullscreenBtn.style.left = '10%';
        fullscreenBtn.style.top = '2%';
        fullscreenBtn.style.zIndex = 100000;
        originalPosition = el.getBoundingClientRect();
        el.style.position = 'fixed';
        el.style.top = '50px';
        el.style.left = '80px';
        el.style.width = 'calc(100vw - 20px)';
        el.style.height = 'calc(100vh - 100px)';
        options.chart.width = window.innerWidth - 100;
        options.chart.height = window.innerHeight;
        chart.resize({
            width: window.innerWidth - 100,
            height: window.innerHeight
        });
        fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
        fullscreenBtn.title = "Contraer gráfico";
    } else {
        el.style.position = 'static';
        el.style.top = '';
        el.style.left = '';
        el.style.width = originalPosition.width + 'px';
        el.style.height = originalPosition.height + 'px';
        options.chart.width = originalPosition.width;
        options.chart.height = originalPosition.height;
        chart.resize({
            width: originalPosition.width,
            height: originalPosition.height
        });
        fullscreenBtn.style.position = 'relative';
        fullscreenBtn.style.left = '0%';
        fullscreenBtn.style.top = '0%';
        fullscreenBtn.style.zIndex = 0;
        fullscreenBtn.innerHTML = '<i class="fas fa-expand-alt"></i>';
        fullscreenBtn.title = "Expandir gráfico";
    }
    isFullscreen = !isFullscreen;
});            
            //************************************* */
            //////////////////////////////////
            // const el = document.getElementById('gr-mov-tra');
            // const data = {
            //     categories: ['ADMINISTRATIVOS', 'DOCENTES', 'OBREROS', 'JUBILADOS', 'PENSIONADOS'],
            //     series: [
            //     {
            //         name: 'MOVILIZADOS',
            //         data: [541, 1770, 483, 976, 198],
            //     },
            //     {
            //         name: 'POR MOVILIZAR',
            //         data: [543, 1719, 542, 978, 207],
            //     },
            //     ],
            // };
            // var theme = {
            //     exportMenu: {
            //         button: {
            //             backgroundColor: '#000000',
            //             borderRadius: 5,
            //             borderWidth: 2,
            //             borderColor: '#000000',
            //             xIcon: {
            //                 color: '#ffffff',
            //                 lineWidth: 3,
            //             },
            //             dotIcon: {
            //                 color: '#ffffff',
            //                 width: 10,
            //                 height: 3,
            //                 gap: 1,
            //             },
            //         },
            //     },
            // }
            // const options = {
            //     chart: { title: 'MOVILIZACIÓN POR TIPO DE TRABAJADOR', width: 600, height: 400 },
            //     series: {
            //         clockwise: false
            //     },
            //     theme
            // };
            // const chart = toastui.Chart.radialBarChart({ el, data, options });
            // var fullscreenBtn = document.getElementById('fullscreenBtnGr2');
            // let isFullscreen = false;
            // let originalPosition;
            // fullscreenBtn.addEventListener('click', function() {
            //     if (!isFullscreen) {
            //         fullscreenBtn.style.position = 'fixed';
            //         fullscreenBtn.style.left = '10%';
            //         fullscreenBtn.style.top = '2%';
            //         fullscreenBtn.style.zIndex = 100000;
            //         originalPosition = el.getBoundingClientRect();
            //         el.style.position = 'fixed';
            //         el.style.top = '50px';
            //         el.style.left = '80px';
            //         el.style.width = 'calc(100vw - 20px)';
            //         el.style.height = 'calc(100vh - 100px)';
            //         options.chart.width = window.innerWidth - 100;
            //         options.chart.height = window.innerHeight;
            //         chart.resize({
            //             width: window.innerWidth - 100,
            //             height: window.innerHeight            
            //         });
            //         fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
            //         fullscreenBtn.title = "Contraer gráfico"
            //     } else {
            //         el.style.position = 'static';
            //         el.style.top = '';
            //         el.style.left = '';
            //         el.style.width = originalPosition.width + 'px';
            //         el.style.height = originalPosition.height + 'px';
            //         options.chart.width = originalPosition.width;
            //         options.chart.height = originalPosition.height;
            //         chart.resize({
            //             width: originalPosition.width,
            //             height: originalPosition.height
            //         });
            //         fullscreenBtn.style.position = 'relative';
            //         fullscreenBtn.style.left = '0%';
            //         fullscreenBtn.style.top = '0%';
            //         fullscreenBtn.innerHTML = '<i class="fas fa-expand-alt"></i>';
            //         fullscreenBtn.title = "Expander gráfico"
            //     }
            //     isFullscreen = !isFullscreen;
            // });
        });
        function generarGraficaToroide(dataFromController, containerId, categories, colors, chartTitle, fullscreenBtnId) {
            const el = document.getElementById(containerId);
            var originalObj = dataFromController;
            var newObj = {
                categories: categories,
                series: []
            };
            for (var key in originalObj) {
                if (originalObj.hasOwnProperty(key)) {
                    var percentage = originalObj[key];
                    newObj.series.push({
                        name: key,
                        data: percentage
                    });
                }
            }    
            var data = newObj;
            var theme = {
                series: {
                    colors: colors,
                    dataLabels: {
                        fontFamily: 'arial',
                        fontSize: 15,
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
            };
            const options = {
                chart: { title: chartTitle, width: 600, height: 400 },
                series: {
                    radiusRange: {
                        inner: '60%',
                        outer: '100%',
                    },
                    dataLabels: { 
                        visible: true, 
                        anchor:'outer',
                        pieSeriesName: {
                            visible: true,
                            anchor: 'outer'
                        }
                    },
                },
                theme
            };
            const chart = toastui.Chart.pieChart({ el, data, options });
            var fullscreenBtn = document.getElementById(fullscreenBtnId);
            let isFullscreen = false;
            let originalPosition;
            fullscreenBtn.addEventListener('click', function() {
                if (!isFullscreen) {
                    fullscreenBtn.style.position = 'fixed';
                    fullscreenBtn.style.left = '10%';
                    fullscreenBtn.style.top = '2%';
                    fullscreenBtn.style.zIndex = 100000;
                    originalPosition = el.getBoundingClientRect();
                    el.style.position = 'fixed';
                    el.style.top = '50px';
                    el.style.left = '80px';
                    el.style.width = 'calc(100vw - 20px)';
                    el.style.height = 'calc(100vh - 100px)';
                    options.chart.width = window.innerWidth - 100;
                    options.chart.height = window.innerHeight;
                    chart.resize({
                        width: window.innerWidth - 100,
                        height: window.innerHeight            
                    });
                    fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
                    fullscreenBtn.title = "Contraer gráfico"
                } else {
                    el.style.position = 'static';
                    el.style.top = '';
                    el.style.left = '';
                    el.style.width = originalPosition.width + 'px';
                    el.style.height = originalPosition.height + 'px';
                    options.chart.width = originalPosition.width;
                    options.chart.height = originalPosition.height;
                    chart.resize({
                        width: originalPosition.width,
                        height: originalPosition.height
                    });
                    fullscreenBtn.style.position = 'relative';
                    fullscreenBtn.style.left = '0%';
                    fullscreenBtn.style.top = '0%';
                    fullscreenBtn.style.zIndex = 0;
                    fullscreenBtn.innerHTML = '<i class="fas fa-expand-alt"></i>';
                    fullscreenBtn.title = "Expander gráfico"
                }
                isFullscreen = !isFullscreen;
            });
        }
    </script>
@stop
