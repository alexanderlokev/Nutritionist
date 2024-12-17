<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Healthcare App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home', ['locale' => app()->getLocale()])}}">Healthcare App</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">{{__('about.judul')}}</h1>
        <p class="text-center">
            {{__('about.text')}}
        </p>

        <!-- <h1 style="text-align:center">{{__('test.title')}}</h1> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
