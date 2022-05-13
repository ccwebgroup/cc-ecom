<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<livewire:styles />

<body>
    <div class="h-full w-full absolute">
        <div class="text-4xl">Welcome Page</div>
    </div>

    @yield('content')
    <livewire:scripts />
</body>

</html>
