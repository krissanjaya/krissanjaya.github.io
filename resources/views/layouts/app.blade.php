<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Kiara Bali Harum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="Admin page for Kiara Bali Harum">
        <meta name="msapplication-tap-highlight" content="no">

        <!-- CSS -->
        <link type="text/css" href="css/main.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            @include('includes/header')
            <div class="app-main">
                @include('includes/sidebar')
                <div class="app-main__outer">
                    @yield('content')
                    @include('includes/footer')
                </div>
            </div>
        </div>

        {{-- js --}}
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
