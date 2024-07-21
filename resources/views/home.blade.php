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
        ];
    @endphp
    @foreach ($movilizacion as $movi)
        @if ($n==0)
            <div class="row">
        @endif
        @if ($n<3)
            <div class="col-xs-12 col-sm-12 col-md-4">
                {{--<div class="card text-white bg-primary mb-3 mr-3 border-dark shadow-lg rounded">--}}
                @php
                    if ($m > 6)
                        $m = 0;
                @endphp               
                <div class="card text-white {{$colores[$m]}} mb-3 mr-3 border-dark shadow-lg rounded">
                    <div class="card-header">{{$movi['territorio']}}-({{$n}})</div>
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
        @if ($m > 6)
            @php
                $m = 0;
            @endphp
        @else
            @php
                $m++;
            @endphp
        @endif        
    @endforeach
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
@stop
