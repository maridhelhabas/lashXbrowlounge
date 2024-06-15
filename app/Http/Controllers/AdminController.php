<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Service;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function services()
    {
        return view('admin.services');
    }

    public function bookings()
    {
        return view('admin.bookings');
    }

    public function dashboard()
    {
        $bookingsCount = Booking::count();
        $servicesCount = Service::count();
        $bookings = Booking::all(); // assuming you need this for the bookings table
        $services = Service::all(); // assuming you need this for the services list

        return view('admin.dashboard', compact('bookingsCount', 'servicesCount', 'bookings', 'services'));
    }
}
