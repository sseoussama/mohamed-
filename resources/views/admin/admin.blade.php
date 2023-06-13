<!DOCTYPE html>
<html>
<head>
    <title>Interface administrateur</title>
    <link rel="stylesheet"  href="{{ asset('assets/main/app.css')}}" />
</head>
<body>
    <header>

    </header>
    @include('navbar.navbar')

    @include('user.admin.users')
    <footer>
        <p>&copy; {{ date('Y') }} Votre hôpital. Tous droits réservés.</p>
    </footer>

    @include('script')
</body>
</html>
