<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

         <!-- Style -->
         <link rel="stylesheet" href="/css/styles.css">
         <script src="/js/scripts.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>

        @if($usuario != null && $senha != null)
            <p>Usúario logado com sucesso!</p>
            <p>Usúario = {{$usuario}}</p>
            <p>Idade = {{$idade}}</p>
        @else
            <p>Falha ao logar!</p>
        @endif

        <?php $nome = 'arthur';
        if($nome){
            echo 'arhuasdsad';
        }
        ?>

        {{-- Comentário do blade, não aparece na tela. --}}
    </body>
</html>