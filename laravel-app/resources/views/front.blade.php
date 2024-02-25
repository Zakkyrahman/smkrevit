<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
   <div class="container">
    <div class="mt-2">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a href="#"><img src="{{ asset('gambar/LOGO.jpg') }}" alt=""></a>
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">Cart</li>
                    <li class="nav-item">Register</li>
                    <li class="nav-item">Email</li>
                    <li class="nav-item">Login</li>
                    <li class="nav-item">Logout</li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-2">
           <ul class="list-group">
            @foreach ($kategoris as $kategori)
            <li class="list-group-item">{{ $kategori -> kategori }}</li>
            @endforeach
           </ul>
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>
    <div>
        footer
    </div>
   </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>