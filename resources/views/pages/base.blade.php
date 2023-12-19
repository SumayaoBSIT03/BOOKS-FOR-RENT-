<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Renting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 5%;
            background-image: url("https://wallpaperbat.com/img/295857-library-wallpaper-top-free-library-background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }



    </style>
</head>
<body>
    <nav class="navbar navbar-none">
        <h1 class="text-light"></h1>


        <ul class="nav justify-content-end float-right nav-pills">
        <li class="nav-item">
    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}" >
        <div class="nav-box">
            <span class="nav-text">Home</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('customers') ? 'active' : ''}}" href="{{url('/customers')}}">
        <div class="nav-box">
            <span class="nav-text">Customer</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('authors') ? 'active' : ''}}" href="{{url('/authors')}}">
        <div class="nav-box">
            <span class="nav-text">Author</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('books') ? 'active' : ''}}" href="{{url('/books')}}">
        <div class="nav-box" >
            <span class="nav-text" >Books</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('BookRenteds') ? 'active' : ''}}" href="{{url('/bookRenteds')}}">
        <div class="nav-box">
            <span class="nav-text">BookRented</span>
        </div>
    </a>
</li>

            </ul>
    </nav>

    <div class="container mt-5" >
        @yield('content')
    </div>
</body>
</html>

<style>
    h1 {
      margin-left: 30px
    }
</style>
