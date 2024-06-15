<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'serviceName' => 'required|string|max:255',
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|email',
            'userPhone' => 'required|string|max:15',
            'bookingDate' => 'required|date',
            'bookingTime' => 'required|date_format:H:i',
        ]);

        $validated['status'] = 'pending';

        Booking::create($validated);

        return redirect()->back()->with('success', 'Booking created successfully.');
    }

    public function index()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->input('status');
        $booking->save();

        return redirect()->back()->with('success', 'Booking status updated successfully.');
    }

    public function myBookings(Request $request)
    {
        $bookings = Booking::all();
        return view('userBookings', compact('bookings'));
    }



}
