@section('content')

<link rel="stylesheet" href="{{ asset('css/reading-list.css') }}">

<div class="form-page">
    <h1 class="page-title">Edit Book</h1>

    <form class="form-card" action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}">
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}">
            @error('author')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="status">Status:</label>
            <select id="status" name="status">
    <option value="to_read" {{ old('status', $book->status) == 'to_read' ? 'selected' : '' }}>To Read</option>
    <option value="reading" {{ old('status', $book->status) == 'reading' ? 'selected' : '' }}>Reading</option>
    <option value="finished" {{ old('status', $book->status) == 'finished' ? 'selected' : '' }}>Finished</option>
</select>
            @error('status')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Update Book</button>
        </div>
    </form>

    <div class="form-back">
        <a class="btn btn-soft" href="{{ route('books.index') }}">Cancel</a>
    </div>
</div>