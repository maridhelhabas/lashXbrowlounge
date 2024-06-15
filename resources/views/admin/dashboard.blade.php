<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #343a40;
            color: #ffffff;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
@include('layouts.sidebar')
<div class="container mt-5">
    <h1>Dashboard Summary</h1>
    <div class="row">
        <!-- Dashboard Card for Bookings and Services Count -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><i class="fas fa-calendar-alt"></i>
                    Bookings
                </div>
                <div class="card-body">
                    <div>
                        <p>Total Bookings: <strong>{{ $bookingsCount }}</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><i class="fas fa-concierge-bell"></i>
                    Services
                </div>
                <div class="card-body">
                    <div>
                        <p>Total Services: <strong>{{ $servicesCount }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
