@extends('layouts.app')

@section('content')
<div class="dashboard-header">
    <h2>Bookstore</h2>
    </div>
<div class="form-container">
    <h2>Update Book</h2>
    <form class="add-book-form" action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ $book->price }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ $book->stock }}" required>
        </div>
        <div class="form-buttons">
            <button type="submit" class="submit-btn">Update</button>
            <a href="{{ route('books.index') }}" class="back-link">Back</a>
        </div>
    </form>
</div>
@endsection