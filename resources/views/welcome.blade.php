<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 5%;
            
        }
        


    </style>
</head>
<body>
    <nav class="navbar navbar-light" >
        <h1>Feline's Book Shop</h1>


        <ul class="nav justify-content-end float-right nav-pills">
        <li class="nav-item">
    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}" >
        <div class="nav-box">
            <span class="nav-text">Home</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('users') ? 'active' : ''}}" href="{{url('/users')}}">
        <div class="nav-box">
            <span class="nav-text">Users</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('trainors') ? 'active' : ''}}" href="{{url('/trainors')}}">
        <div class="nav-box">
            <span class="nav-text">Trainors</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('trainees') ? 'active' : ''}}" href="{{url('/trainees')}}">
        <div class="nav-box" >
            <span class="nav-text" >Trainees</span>
        </div>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{Route::is('courses') ? 'active' : ''}}" href="{{url('/courses')}}">
        <div class="nav-box">
            <span class="nav-text">Courses</span>
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