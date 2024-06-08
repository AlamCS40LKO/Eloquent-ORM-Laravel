<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ORM Eloquent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center p-3 mb-2 bg-secondary text-white ">CRUD Using Eloquent ORM</h1>
        <h3 class="text-center p-3 mb-2 bg-info text-white ">@yield('title')</h3>

        <div class="row">
            <div class="col-7">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class=" col-7">
              @yield('content')
            </div>
        </div>
    </div>
</body>
</html>