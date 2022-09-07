<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>{{config('app.name')}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/admin/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/admin/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/admin/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('/admin/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('/admin/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">


    <!-- Custom styles for this template-->
    <link href="{{ url('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- booostrap 5 --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

</head>

<body class="bg-gradient-primary">

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
