<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VAANI</title>

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @livewireStyles
</head>
<body>
    <div class="main-body">
        {{-- @livewire('HomePage') --}}
        <h1>
            <a href="/homepage" wire:navigate>Click Me</a>
            
        </h1>
    </div>
    @livewireScripts
</body>
</html>