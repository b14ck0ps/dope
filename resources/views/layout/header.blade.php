<!doctype html>
<html lang="en">

<head>
    @vite('resources/js/app.js')
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 mb-3 my-5">
        <nav class="nav justify-content-center">
            <h4><a class="nav-link" href="/">Home</a></h4>
            <h4><a class="nav-link" href="/users/views">Users</a></h4>
            <h4><a class="nav-link" href="/contact">Contact</a></h4>
            <h4><a class="nav-link" href="/about">About</a></h4>
            <h4><a class="nav-link" href="/register">Register</a></h4>
        </nav>
    </div>
