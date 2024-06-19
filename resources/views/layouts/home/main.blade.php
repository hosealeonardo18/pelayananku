<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    {{-- icon --}}
    <link rel="icon" id="favicon" type="image/x-icon" href="/assets/images/navbar/logo.png"
        style="height: 7rem" />

    {{-- google fonts monstserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- font gills sans --}}
    <link href="https://fonts.cdnfonts.com/css/gill-sans-2" rel="stylesheet">

    {{-- my css --}}
    <link rel="stylesheet" href="/assets/css/my-css.css" />

    {{-- css aos library --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- moment js --}}
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js" crossorigin="anonymous"></script>

    {{-- font awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>

    {{-- js aos library --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

</head>

<body>
    @yield('body')
    <script>
        AOS.init();
    </script>
</body>

</html>
