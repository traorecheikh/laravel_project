@extends('components.navbar')

@section('content')
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg rounded p-4">
                    <div class="card-header text-center">
                        <h3>Add a New Book</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('books.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Book Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter book title" required>
                            </div>

                            <!-- Author and Genre Fields side by side -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="author" class="form-label">Author</label>
                                    <input type="text" class="form-control" name="author" placeholder="Enter book author" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="genre" class="form-label">Genre</label>
                                    <input type="text" class="form-control" name="genre" placeholder="Enter book genre" required>
                                </div>
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter book description" required></textarea>
                            </div>

                            <!-- Quantity and Release Date Fields side by side -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" name="quantity" placeholder="Enter book quantity" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Release Date</label>
                                    <input type="date" class="form-control" name="release_date" required>
                                </div>
                            </div>

                            <!-- Image Upload Field -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Book Cover Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*" required>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 py-2">Add Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
