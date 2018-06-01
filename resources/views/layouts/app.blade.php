<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        body{
            background-image: url("{{asset('img/bg.jpg')}}");
            background-attachment: fixed;
            background-position-x: center;
            background-position-y: center;
            background-size: cover;
        }
        .navbar{
            margin-bottom: unset;
        }
        #app>.container-fluid{
            background: rgba(255, 255, 255, 0.95);
            height: 100%;
            padding-top: 20px;
        }
    </style>
    @yield('css')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            }
        })
        $(".destroy").click(function(){
            event.preventDefault()
            $.ajax({
                url: $(this).attr("href"),
                method: "DELETE",
                success: function(data){
                    location.reload()
                }
            })
        })
        containerSize()
        function containerSize(){
            $("#app>.container-fluid").css("min-height", windowSize()-52);
        }
        function windowSize(){
            return $(window).innerHeight();
        }
    </script>
    @yield('scripts')
</body>
</html>
