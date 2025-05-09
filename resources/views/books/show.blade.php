@extends('layouts.app')

@section('content')
<div class="dashboard-header">
    <h2>Bookstore</h2>
    </div>
<div class="form-container">
    <h2>Book Details</h2>
    <div class="book-details">
        <p><strong>ID:</strong> {{ $book->id }}</p>
        <p><strong>Title:</strong> {{ $book->title }}</p>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
        <p><strong>Price:</strong> ${{ number_format($book->price, 2) }}</p>
        <p><strong>Stock:</strong> {{ $book->stock }}</p>
    </div>
    <div class="form-buttons">
        <a href="{{ route('books.edit', $book->id) }}" class="submit-btn">Edit</a>
        <a href="{{ route('books.index') }}" class="back-link">Back</a>
    </div>
</div>
@endsection