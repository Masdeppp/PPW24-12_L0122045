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
</body>
</html>
