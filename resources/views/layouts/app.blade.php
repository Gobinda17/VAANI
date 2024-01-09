<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @livewireStyles
</head>
<body>
    <div class="main-body">
        <h1>Index</h1>
        {{ $slot }}
    </div>
    @livewireScripts
</body>
</html>