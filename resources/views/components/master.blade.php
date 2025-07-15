<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factures | {{$title}}</title>
    @yield('style')
</head>
<body>
    <main>  
        <div class="container">
            @include('partials.flashbag')
            {{$slot}}
        </div>
    </main>
</body>
</html>