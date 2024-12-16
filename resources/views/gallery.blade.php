@extends('layouts.main')

@section('head')
<style>
    /* Adjust card size to make them slightly bigger but not too wide */
    .card {
        border-radius: 10px; /* Rounded corners for the cards */
        overflow: hidden; /* Ensures content does not overflow */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        height: 100%; /* Ensure the card takes full available height */
        width: 220px; /* Ensure cards take full width of the column */
    }

    .card-img {
        object-fit: cover; /* Ensures the image covers the space without distortion */
        height: 220px; /* Adjusted height for the image */
        width: 100%; /* Make the image span the entire width of the card */
        border-radius: 10px 10px 0 0; /* Rounded corners for the image */
    }

    /* Adjust card body styling */
    .card-body {
        padding: 15px; /* Increased padding inside the card */
    }

    .card-body .category {
        font-size: 14px; /* Increased font size for category */
        color: #6c757d;
        margin-bottom: 10px;
    }

    .card-body .price {
        font-size: 18px; /* Increased font size for price */
        font-weight: bold;
        color: #007bff;
    }

    /* Adjust the column size to display 5 cards per row on large screens */
    /* Set col-lg-2 to fit 5 cards per row (5 x 2% = 100%) */
    .col-lg-2, .col-md-2, .col-sm-3 {
        padding: 20px; /* Add padding around the cards */
    }

    /* Center the cards on the page */
    .container {
        max-width: 90%; /* Maximum width of the container */
    }

    .row {
        justify-content: center; /* Centers the row of cards */
    }

    /* Style for the pagination */
    .pagination .page-item .page-link {
        color: #007bff;
    }

    /* Style the search form */
    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-form input[type="text"] {
        width: 50%;
        max-width: 500px;
        padding: 10px 15px; /* Added left padding for more space */
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 25px 0 0 25px; /* Rounded left corners */
        outline: none;
        transition: all 0.3s ease;
    }

    .search-form input[type="text"]:focus {
        border-color: #007bff;
    }

    .search-form button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 0 25px 25px 0; /* Rounded right corners */
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-form button:hover {
        background-color: #0056b3;
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        {{-- Search Form --}}
        <form action="{{ route('search') }}" method="GET" class="search-form">
            <input type="text" name="term" placeholder="Search for a book..." class="form-control">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <hr>
    <h3 class="my-3">{{ $title }}</h3>

    <div class="mt-50 mb-50">
        <div class="row">
            @if ($books->count())
                {{-- Loop through all books if they are available --}}
                @foreach ($books as $book)
                    @if ($book->number_of_copies > 0) {{-- Only show books with available copies --}}
                        <div class="col-lg-2 col-md-3 col-sm-4 mt-2">
                            <div class="card mb-3">
                                <div>
                                    <div class="card-img-actions">
                                        {{-- The book image --}}
                                        <img src="{{ asset($book->cover_image) }}" class="card-img img-fluid" alt="{{ $book->name }}">
                                    </div>
                                </div>
                                <div class="card-body bg-light text-center">
                                    <div class="text-sm">
                                        {{$book->name}}
                                    </div>
                                    <div class="mb-2">
                                        {{-- Book category display --}}
                                        @if ($book->category != NULL)
                                            <span class="category">{{ $book->category->name }}</span>
                                        @endif
                                    </div>
                                    {{-- Book price --}}
                                    <h3 class="mb-0 font-weight-semibold price">{{ $book->price }} $</h3>
                                    <div>
                                        {{-- Star rating (inactive stars for now) --}}
                                        <span class="score">
                                            <div class="score-wrap pt-2">
                                                <span class="stars-inactive">
                                                    <i class="bx bxs-star" aria-hidden="true"></i>
                                                    <i class="bx bxs-star" aria-hidden="true"></i>
                                                    <i class="bx bxs-star" aria-hidden="true"></i>
                                                    <i class="bx bxs-star" aria-hidden="true"></i>
                                                    <i class="bx bxs-star" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                {{-- Display message if no books are found --}}
                <div class="alert alert-info" role="alert">
                    No Results
                </div>
            @endif
        </div>
    </div>

    {{-- Pagination --}}
    {{ $books->links() }}
</div>
@endsection
