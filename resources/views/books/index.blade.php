<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Reading List</title>
    <link rel="stylesheet" href="{{ asset('css/reading-list.css') }}">
</head>
<body>

    <header class="hero">
        <h1 class="hero-title">My Reading List</h1>
    </header>

    <main class="container">

        <div class="toolbar" id="books">
    <a class="btn btn-add" href="{{ route('books.create') }}">Add Book</a>

    <nav class="filters">
        <a class="pill {{ !$status ? 'active' : '' }}" href="{{ route('books.index') }}#books">All</a>
        <a class="pill {{ $status === 'to_read' ? 'active' : '' }}" href="{{ route('books.index', ['status' => 'to_read']) }}#books">To Read</a>
        <a class="pill {{ $status === 'reading' ? 'active' : '' }}" href="{{ route('books.index', ['status' => 'reading']) }}#books">Reading</a>
        <a class="pill {{ $status === 'finished' ? 'active' : '' }}" href="{{ route('books.index', ['status' => 'finished']) }}#books">Finished</a>
    </nav>
</div>

        <div class="book-grid">
            @forelse($books as $book)

                <div class="book-card card-{{ ($loop->index % 5) + 1 }}">
                    <h3 class="book-title">{{ $book->title }}</h3>
                    <p class="book-author">Author: {{ $book->author }}</p>
                    <p class="book-status">Status:
                        <span class="badge status-{{ $book->status }}">{{ ucwords(str_replace('_', ' ', $book->status)) }}</span>
                    </p>

                    <div class="book-actions">
                        <a class="btn btn-edit" href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-delete" type="submit" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

            @empty
                <p class="empty">No books added yet.</p>
            @endforelse
        </div>

    </main>

</body>
</html>