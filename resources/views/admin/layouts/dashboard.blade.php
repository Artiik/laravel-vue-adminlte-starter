<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ isset($title) ? $title.' :: '.config('app.name').' Admin' : config('app.name').' Admin' }}
    </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before_styles')

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('vendor/AdminLTE') }}/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/AdminLTE') }}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ asset('vendor/AdminLTE') }}/dist/css/skins/skin-blue.min.css">

    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/dashboard.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    @stack('after_styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode($Laravel) !!};
    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper" id="dashboard">

        <Dashboard>
            <div slot="header">@yield('header')</div>
            <div slot="content">@yield('content')</div>
        </Dashboard>

    </div>

    {{--<div class="wrapper" id="dashboard">--}}
        {{--<Dashboard @if (Auth::check()) :user-logged-in="true" :user="{{ Auth::user() }}" @endif--}}
                   {{--logo-url="{{ url('admin/dashboard') }}">--}}
            {{--@yield('content')--}}
        {{--</Dashboard>--}}
    {{--</div>--}}


    @stack('before_scripts')

    <!-- Scripts -->
    <!-- jQuery 2.2.3 -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('vendor/AdminLTE') }}/plugins/jQuery/jQuery-2.2.3.min.js"><\/script>')</script>

    <!-- page script -->
    <script type="text/javascript">
        // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('vendor/AdminLTE') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/AdminLTE') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/AdminLTE') }}/plugins/fastclick/fastclick.js"></script>

    <script src="{{ elixir('assets/admin/js/dashboard.js') }}"></script>

    <script src="{{ asset('vendor/AdminLTE') }}/dist/js/app.min.js"></script>

    @stack('after_scripts')
</body>
</html>