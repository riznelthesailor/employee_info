<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>EIR Sample</title>
</head>
<body class="bg-gradient-to-bl from-blue-100 via-blue-200 to-green-200">
    <div class="grid sm:grid-cols-2 sm:place-items-center sm:h-screen">
        <img src="images/bulbasaur.jpg" class="hidden sm:block sm:w-1/2 rounded-2xl shadow-md"/>
        <img src="images/bulbasaur_text.jpg" class="w-full sm:hidden"/>
        @yield('auth_card')
    </div>
</body>
</html>
