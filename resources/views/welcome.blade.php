<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .jumbotron {
            background: url('https://images.unsplash.com/photo-1512820790803-83ca734da794') no-repeat center center;
            background-size: cover;
            color: white;
        }
        .jumbotron h1 {
            text-shadow: 2px 2px 4px #000000;
        }
        .jumbotron p {
            text-shadow: 1px 1px 2px #000000;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to the Library Management System</h1>
        <p class="lead">Manage your books easily and efficiently</p>
        <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg">View Books</a>
        <a href="{{ route('books.create') }}" class="btn btn-success btn-lg">Add New Book</a>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top" alt="Books">
                    <div class="card-body">
                        <h5 class="card-title">Manage Books</h5>
                        <p class="card-text">View and manage all your books.</p>
                        <a href="{{ route('books.index') }}" class="btn btn-primary">View Books</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" class="card-img-top" alt="Add Book">
                    <div class="card-body">
                        <h5 class="card-title">Add New Book</h5>
                        <p class="card-text">Easily add new books to your collection.</p>
                        <a href="{{ route('books.create') }}" class="btn btn-success">Add Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
