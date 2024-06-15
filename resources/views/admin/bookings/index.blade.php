<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Bookings</title>
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
        .table {
            background-color: #ffffff;
            border-radius: 5px;
            overflow: hidden;
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
        .btn-accept {
            background-color: #28a745;
            color: #fff;
        }
        .btn-reject {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
@include('layouts.sidebar')
<div class="container mt-5">
    <h1>Bookings</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->serviceName }}</td>
                        <td>{{ $booking->userName }}</td>
                        <td>{{ $booking->userEmail }}</td>
                        <td>{{ $booking->userPhone }}</td>
                        <td>{{ $booking->bookingDate }}</td>
                        <td>{{ $booking->bookingTime }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>
                            <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="status" value="accepted" class="btn btn-sm btn-accept">Accept</button>
                                <button type="submit" name="status" value="rejected" class="btn btn-sm btn-reject">Reject</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
