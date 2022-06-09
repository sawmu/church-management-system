<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Church Management System</title> 
    {{-- {{ asset('backend')}} --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('backend/images/logo.png') }}">
    <link href="{{ asset('backend/css/themes/lite-purple.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/plugins/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/css/plugins/fontawesome-5.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/css/plugins/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('backend/css/plugins/datatables.min.css')}}" rel="stylesheet" />
    
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        @include('admin.body.sidebar')
       
        <div class="main-content-wrap mobile-menu-content bg-off-white m-0">
        @include('admin.body.header')
        @yield('content')
        @yield('admin')

        </div>
       
    </div>
    {{-- {{ asset('backend')}} --}}
    <script src="{{ asset('backend/js/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/tooltip.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/script_2.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/sidebar.large.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/feather.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/layout-sidebar-vertical.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/echarts.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/echart.options.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/dashboard.v1.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/sidebar-horizontal.script.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/datatables.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/contact-list-table.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/datatables.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/tooltip.script.min.js')}}"></script>
    <script>
        $('#ul-contact-list').DataTable();
    </script>
</body>

</html>