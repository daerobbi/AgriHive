<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? 'AgriHive' }}</title>
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

@include('rekantani.navbar')

<main>
    @yield('content')
</main>

</body>
</html>
