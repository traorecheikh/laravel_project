@extends('components.navbar-admin')
@section('content')
    <div class="col-md-9 p-4">
        <h2>Manage Books</h2>
        <a href="{{route('books.create')}}" class="btn btn-primary mb-3">Add New Book</a>

        <!-- Books Display (Library Grid) -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Example of a Book Card -->
            <div class="col">
                <div class="card h-100">
                    <img src="#" class="card-img-top" alt="Book Title">
                    <div class="card-body">
                        <h5 class="card-title">The Great Gatsby</h5>
                        <p class="card-text"><strong>Author:</strong> F. Scott Fitzgerald</p>
                        <p class="card-text"><strong>Genre:</strong> Fiction</p>
                        <p class="card-text"><strong>Release Date:</strong> 10-04-1925</p>
                        <p class="card-text"><strong>Quantity:</strong> 12</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
            @foreach($books as $book)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{Storage::url($book->image)}}" class="card-img-top" alt="Book Title">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <p class="card-text"><strong>Author:</strong> {{$book->title}}</p>
                            <p class="card-text"><strong>Genre:</strong> {{$book->genre}}</p>
                            <p class="card-text"><strong>Release Date:</strong> {{$book->release_date}}</p>
                            <p class="card-text"><strong>Quantity:</strong> {{$book->quantity}}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection
