<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>James Latten</title>

        <!-- Meta -->
        <meta charset="UTF-8">

        <meta name="description" content="James Latten's portfolio website showcasing who he is and what he does">
        <meta name="keywords" content="portfolio, web developemnt, development, web, james latten">
        <meta name="author" content="James Latten">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="alternate" hreflang="en" href="https://jameslatten.com/" />
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <!-- Specific page stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="{{ asset('css/'.$stylesheet.'.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Script -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

        <?php if(env('APP_ENV') === 'production'){ ?>
            <!-- Ads -->

        <?php } ?>
    </head>
    <body>
        <div class="website container-fluid">
            <!-- Cont -->
            <div class="innerWebsite row">
                <div class="sidebarParent" style=''>
                    @include('templates.sidebar')
                </div>
                <div class="websiteParent container-fluid" style=''>
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('templates.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}" type="text/javascript" language="javascript"></script>
        <script src="{{ asset('js/main.js') }}" type="text/javascript" language="javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>