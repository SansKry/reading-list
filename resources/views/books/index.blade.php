
<html>
<head>
    <title>My Reading List</title>
</head>
<body>

    <h1>My Reading List</h1>

    <a href="{{ route('books.create') }}">Add Book</a>

    <br><br>

    <a href="{{ route('books.index') }}">All</a> |
    <a href="{{ route('books.index', ['status' => 'to_read']) }}">To Read</a> |
    <a href="{{ route('books.index', ['status' => 'reading']) }}">Reading</a> |
    <a href="{{ route('books.index', ['status' => 'finished']) }}">Finished</a>

    <br><br>

    @forelse($books as $book)

        <div>
            <h3>{{ $book->title }}</h3>
            <p>Author: {{ $book->author }}</p>
            <p>Status: {{ $book->status }}</p>

            <a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>

            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>
        </div>

        <hr>

    @empty
        <p>No books added yet.</p>
    @endforelse

</body>
</html>
