<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name') }}</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('front/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ url('front/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>

    @yield('content')
    <script type="text/javascript" src="{{ url('front/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('front/js/bootstrap.js') }}"></script>



    <script>
        function openNav() {
            document.getElementById("myNav").classList.toggle("menu_width")
            document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        }
    </script>


</body>

</html>
