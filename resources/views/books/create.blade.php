

@section('content')

<h1>Add a Book</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label>Title</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Author</label>
    <input type="text" name="author" value="{{ old('author') }}">
    @error('author')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Status</label>
    <select name="status">
        <option value="to_read" {{ old('status') == 'to_read' ? 'selected' : '' }}>To Read</option>
        <option value="reading" {{ old('status') == 'reading' ? 'selected' : '' }}>Reading</option>
        <option value="finished" {{ old('status') == 'finished' ? 'selected' : '' }}>Finished</option>
    </select>

    @error('status')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Save Book</button>
</form>

<a href="{{ route('books.index') }}">Back to Books</a>

