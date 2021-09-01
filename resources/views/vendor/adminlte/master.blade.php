<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')

    {{-- Base Stylesheets --}}
    @if(!config('adminlte.enabled_laravel_mix'))
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

        {{-- Configured Stylesheets --}}
        @include('adminlte::plugins', ['type' => 'css'])

        <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @else
        <link rel="stylesheet" href="{{ mix(config('adminlte.laravel_mix_css_path', 'css/app.css')) }}">
    @endif

    {{-- Livewire Styles --}}
    @if(config('adminlte.livewire'))
        @if(app()->version() >= 7)
            @livewireStyles
        @else
            <livewire:styles />
        @endif
    @endif

    {{-- Custom Stylesheets (post AdminLTE) --}}
    @yield('adminlte_css')

    {{-- Favicon --}}
    @if(config('adminlte.use_ico_only'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
    @elseif(config('adminlte.use_full_favicon'))
        <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicons/android-icon-192x192.png') }}">
        <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    @endif

</head>

<body class="@yield('classes_body')" @yield('body_data')>

    {{-- Body Content --}}
    @yield('body')

    {{-- Base Scripts --}}
    @if(!config('adminlte.enabled_laravel_mix'))
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

        {{-- Configured Scripts --}}
        @include('adminlte::plugins', ['type' => 'js'])

        <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @else
        <script src="{{ mix(config('adminlte.laravel_mix_js_path', 'js/app.js')) }}"></script>
    @endif

    {{-- Livewire Script --}}
    @if(config('adminlte.livewire'))
        @if(app()->version() >= 7)
            @livewireScripts
        @else
            <livewire:scripts />
        @endif
    @endif

    {{-- Custom Scripts --}}
    @yield('adminlte_js')

    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"></link>
    <script src="js/datatables.min.js"></script>
    <script src="js/chart.min.js"></script>

    <script>
        function confirmarExclusao(event) {
            event.preventDefault();
            swal({
                title: "Voce tem certeza que deseja excluir esse registro?",
                icon: "warning",
                dangerMode: true,
                buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Excluir",
                    value: true,
                },
                }
            })
            .then((willDelete) => {
                if (willDelete) {
                event.target.submit();
                } else {
                return false;
                }
            });
        }

        $(function () {
            $('#datatable').DataTable({
                language: {
                    url: "/js/translate_pt-br.json"
                },
                paging: false
            });

            $('[data-toggle="tooltip"]').tooltip()

            /* ChartJS
            * -------
            * Here we will create a few charts using ChartJS
            */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#estoque').get(0).getContext('2d')

            var areaChartData = {
                labels  : ['Eletronicos', 'Smartphone', 'Computadores', 'Notebooks', 'Softwares', 'Perifericos'],
                datasets: [
                    {
                    label               : 'Produtos em Estoque',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                    },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                    gridLines : {
                        display : false,
                    }
                    }],
                    yAxes: [{
                    gridLines : {
                        display : false,
                    }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(areaChartCanvas, {
                type: 'bar',
                data: areaChartData,
                options: areaChartOptions
            })

            //-------------
            //- LINE CHART -
            //--------------
            var myChart1 = document.getElementById('receita-despesa').getContext('2d');

            var massPopChart = new Chart(myChart1, {
            type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
                labels:['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
                datasets:[
                    {
                        label:'Receitas',
                        data:[
                            25350,
                            14800,
                            17853,
                            27905,
                            14600,
                            20252
                        ],
                        backgroundColor:'green',
                        // backgroundColor:[
                        //     'rgba(255, 99, 132, 0.6)',
                        //     'rgba(54, 162, 235, 0.6)',
                        //     'rgba(255, 206, 86, 0.6)',
                        //     'rgba(75, 192, 192, 0.6)',
                        //     'rgba(153, 102, 255, 0.6)',
                        //     'rgba(255, 159, 64, 0.6)',
                        //     'rgba(255, 99, 132, 0.6)'
                        // ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                    },
                    {
                        label:'Despesas',
                        data:[
                            3560,
                            8000,
                            1853,
                            1500,
                            13000,
                            2052
                        ],
                        backgroundColor:'red',
                        // backgroundColor:[
                        //     'rgba(255, 99, 132, 0.6)',
                        //     'rgba(54, 162, 235, 0.6)',
                        //     'rgba(255, 206, 86, 0.6)',
                        //     'rgba(75, 192, 192, 0.6)',
                        //     'rgba(153, 102, 255, 0.6)',
                        //     'rgba(255, 159, 64, 0.6)',
                        //     'rgba(255, 99, 132, 0.6)'
                        // ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                    }
                ]
            },
            options:{
                title:{
                display:true,
                text:'Largest Cities In Massachusetts',
                fontSize:25,
                responsive: true
                },
                legend:{
                display:true,
                position:'right',
                labels:{
                    fontColor:'#000'
                }
                },
                layout:{
                padding:{
                    left:50,
                    right:0,
                    bottom:0,
                    top:0
                }
                },
                tooltips:{
                enabled:true
                }
            }
            });

        });




    </script>
    @yield('javascript')

</body>

</html>
