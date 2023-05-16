<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="conteiner">
        @component('sistema')
        @endcomponent
        <main role="main" class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>
</body>
</html>