

@section('content')

<h1>Edit Book</h1>

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ old('title', $book->title) }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Author:</label>
    <input type="text" name="author" value="{{ old('author', $book->author) }}">
    @error('author')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Status:</label>
    <select name="status">
        <option value="To read" {{ old('status', $book->status) == 'To read' ? 'selected' : '' }}>To read</option>
        <option value="Reading" {{ old('status', $book->status) == 'Reading' ? 'selected' : '' }}>Reading</option>
        <option value="Finished" {{ old('status', $book->status) == 'Finished' ? 'selected' : '' }}>Finished</option>
    </select>

    @error('status')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Update Book</button>
</form>

<a href="{{ route('books.index') }}">Cancel</a>

