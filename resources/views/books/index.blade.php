@extends('layouts.app')

@section('content')
<div class="dashboard-header">
    <h2>Bookstore</h2>
    </div>
    <div class="actions">
    <div class="search-container">
        <form action="{{ route('books.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search books..." value="{{ request('search') }}">
    </div>
            <button type="submit" class="search-btn">Search</button>
        </form>
        <a href="{{ route('books.create') }}" class="new-book-btn">New Book</a>
    </div>

<table class="dashboard-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td class="action-buttons">
                <a href="{{ route('books.show', $book->id) }}" class="details-btn">Details</a>
                <a href="{{ route('books.edit', $book->id) }}" class="update-btn">Update</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- Custom Pagination --}}
<div class="pagination-container">
    {{ $books->links('vendor.pagination.custom') }}
</div>
@endsection