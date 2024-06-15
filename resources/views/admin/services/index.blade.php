<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin-bottom: 20px;
        }
        .card {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .table td {
            border-color: #dee2e6;
        }
    </style>
</head>
<body>
@include('layouts.sidebar')
<div class="container mt-5">
    <h1>Services List</h1>
    <div class="card p-3">
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">Add Service</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover" id="servicesTable">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Service Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td><img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" style="width: 100px;"></td>
                            <td>{{ $service->name }}</td>
                            <td>{{ $service->category }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add New Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addServiceForm" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="serviceName" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="serviceName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="serviceCategory" class="form-label">Category</label>
                        <select class="form-select" id="serviceCategory" name="category" required>
                            <option value="Lashes">Lashes</option>
                            <option value="Brows">Brows</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="servicePrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="servicePrice" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="serviceImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="serviceImage" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
