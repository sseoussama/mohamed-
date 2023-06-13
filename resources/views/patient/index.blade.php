<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{{ asset('assets/main/app.css')}}" />
    <title>CHU | Patient</title>
</head>
<body>
    @include('navbar.navbarpatient')

    @yield('content');

    <!--JS Files -->
    @include('script')

</body>
</html>
