<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>{{$pageTitle}} | setting('site.title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href={{secure_asset('assets/favicon.ico')}} />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" rel="stylesheet">

    <!-- STYLESHEETS -->
    <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/icons/fuse-icon-font/style.css')}}>
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/vendor/animate.css/animate.min.css')}}>
    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/vendor/pnotify/pnotify.custom.min.css')}}>
    <!-- Nvd3 - D3 Charts -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/vendor/nvd3/build/nv.d3.min.css')}} />
    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}} />
    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/vendor/fuse-html/fuse-html.min.css')}} />
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href={{secure_asset('assets/css/main.css')}}>
    <!-- / STYLESHEETS -->

    <!-- JAVASCRIPT -->
    <!-- jQuery -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/jquery/dist/jquery.min.js')}}></script>
    <!-- Mobile Detect -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/mobile-detect/mobile-detect.min.js')}}></script>
    <!-- Perfect Scrollbar -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}></script>
    <!-- Popper.js -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/popper.js/index.js')}}></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/bootstrap/bootstrap.min.js')}}></script>
    <!-- Nvd3 - D3 Charts -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/d3/d3.min.js')}}></script>
    <script type="text/javascript" src={{secure_asset('assets/vendor/nvd3/build/nv.d3.min.js')}}></script>
    <!-- Data tables -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}></script>
    <script type="text/javascript" src={{secure_asset('assets/vendor/datatables-responsive/js/dataTables.responsive.js')}}></script>
    <!-- PNotify -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/pnotify/pnotify.custom.min.js')}}></script>
    <!-- Fuse Html -->
    <script type="text/javascript" src={{secure_asset('assets/vendor/fuse-html/fuse-html.min.js')}}></script>
    <!-- Main JS -->
    <script type="text/javascript" src={{secure_asset('assets/js/main.js')}}></script>
    <!-- / JAVASCRIPT -->
</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
    <main>
        <div id="wrapper">
        @include('fusehtml.shared.partials.sidebar')
            <div class="content-wrapper">

                @include('fusehtml.shared.partials.toolbar')

                <div class="content custom-scrollbar">

                    <div id="project-dashboard" class="page-layout simple right-sidebar">

                        <div class="page-content-wrapper custom-scrollbar">

                            @include('fusehtml.shared.partials.pageheader')

                            @yield('content')

                        </div>

                        @includeWhen($useAside,'fusehtml.shared.partials.pageaside')
                    </div>

                    {{--<script type="text/javascript" src={{secure_asset('assets/js/apps/dashboard/project.js')}}></script>--}}
                    @includeWhen($useQuickPannel,'fusehtml.shared.partials.quickpannel')

                </div>
            </div>

        </div>
    </main>
</body>

</html>