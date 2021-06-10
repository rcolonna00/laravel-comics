<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Collega html e CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Collega html e FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>

    @include('partials.header')

    <main>
        @yield('main_content')
    </main>

    @include('partials.footer')

</body>
</html>