<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
@include('layouts.sidebar')
<div class="container">
    <div class="card p-4">
        <h1>Edit Service</h1>
        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="serviceName" class="form-label">Service Name</label>
                <input type="text" class="form-control" id="serviceName" name="name" value="{{ $service->name }}" required>
            </div>
            <div class="mb-3">
                <label for="serviceCategory" class="form-label">Category</label>
                <input type="text" class="form-control" id="serviceCategory" name="category" value="{{ $service->category }}" required>
            </div>
            <div class="mb-3">
                <label for="servicePrice" class="form-label">Price</label>
                <input type="number" class="form-control" id="servicePrice" name="price" value="{{ $service->price }}" required>
            </div>
            <div class="mb-3">
                <label for="serviceImage" class="form-label">Image</label>
                <input type="file" class="form-control" id="serviceImage" name="image" accept="image/*">
                <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
