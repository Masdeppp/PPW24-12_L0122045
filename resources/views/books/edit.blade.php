<!DOCTYPE html>
<html>
<head>
    <title>Library Management - Edit Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Book</h1>
        <a href="{{ route('books.index') }}" class="btn btn-primary mb-3">Back</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" placeholder="Enter Author">
            </div>
            <div class="form-group">
                <label for="year">Year:</label>
                <input type="text" name="year" class="form-control" value="{{ $book->year }}" placeholder="Enter Year">
            </div>
            <div class="form-group">
                <label for="image">Book Image:</label>
                <input type="file" name="image" class="form-control">
                @if($book->image)
                    <img src="{{ asset('images/' . $book->image) }}" class="book-image mt-2" alt="{{ $book->title }}">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>
