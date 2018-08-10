<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name')}}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('theme/assets/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('theme/css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('theme/css/style.red.css')}}" id="theme-stylesheet">
    <!--Toastr-->
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <!--DataTables-->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!--Select2-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    @yield('css')
</head>
<body>
    <div class="page">
        <!-- Main Navbar-->
        @include('layouts.navbar')
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            @auth
            @include('layouts.sidebar')
            @endauth
            <div class="content-inner" @guest style="width: 100%" @endguest>
                <!-- Page Footer-->
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{asset('theme/assets/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('theme/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('theme/assets/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <!-- Main File-->
    <script src="{{asset('theme/js/front.js')}}"></script>
    <script src="{{asset('js/axolotl.js')}}"></script>
    <script>
        toastr.options = {
            positionClass: "toast-bottom-right",
            closeButton: true,
            progressBar: true,
            timeout: 5000
        }
    </script>
    @if(Session::has('errors'))
    @foreach($errors->all() as $error)
    <script>
        toastr.error("{{$error}}")
    </script>
    @endforeach
    @endif
    @if(Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}")
    </script>
    @endif
    @yield('scripts')
</body>
</html>
