<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Data Pembeli Baju</title>
        

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <nav class="navbar bg-dark ">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto">
                   <a class="navbar-brand text-white" href="{{ route('pembeli.index') }}">Data Pembeli baju</a>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <a href="{{ route('transaksi.index') }}" type="button" class="nav-link text-white">Data Transaksi</a>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <a href="{{ route('barang.index') }}" type="button" class="nav-link text-white">Data Barang</a>
                </ul> 
              
            </div>
            <div class="ms-auto">
                 <a href="{{ route('logout') }}" class=" btn btn-danger btn-block">Logout</a>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>