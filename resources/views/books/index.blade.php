<html>
<head>
    <title>My Reading List</title>
</head>
<body>

    <h1>My Reading List</h1>

    <a href="{{ route('books.create') }}">Add Book</a>

    @forelse($books as $book)
        <div>
            <h3>{{ $book->title }}</h3>
            <p>Author: {{ $book->author }}</p>
            <p>Status: {{ $book->status }}</p>
        </div>
    @empty
        <p>No books added yet.</p>
    @endforelse

</body>
</html>