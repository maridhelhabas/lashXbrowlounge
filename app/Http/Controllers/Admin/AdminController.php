<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
