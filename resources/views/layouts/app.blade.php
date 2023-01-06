<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercatus africa</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href=" {{ asset('favicon.ico') }} " />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

</body>

</html>
