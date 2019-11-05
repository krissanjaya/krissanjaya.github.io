<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Login | Kiara Bali Harum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="Admin page for Kiara Bali Harum">
        <meta name="msapplication-tap-highlight" content="no">

        <!-- CSS -->
        <link type="text/css" href="css/custom.css" rel="stylesheet">
        <link type="text/css" href="css/main.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/logo.png" />
        
    </head>
    <body>
        <div class="preloader">
            <div class="loading">
                <img src="{{ asset('images/loader.gif') }}" width="80">
            </div>
        </div>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-main" style="padding:0px;">
                <div class="app-main__outer" style="padding-left:0px;">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- js --}}
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".preloader").fadeOut();
            });
        </script>
    </body>
</html>
