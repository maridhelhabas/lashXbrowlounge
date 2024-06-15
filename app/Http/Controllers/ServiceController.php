<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        \Log::info($services);
        return view('services', compact('services'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|max:2048'
        ]);

        // Debugging: Check if the file is present in the request
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = $file->store('service-images', 'public');

            // Debugging: Log the file and path
            \Log::info('File Uploaded: ' . $file->getClientOriginalName());
            \Log::info('Image Path: ' . $imagePath);

            if (!$imagePath) {
                return redirect()->back()->with('error', 'Image upload failed.');
            }
        } else {
            return redirect()->back()->with('error', 'No image file found.');
        }

        // Save the service to the database
        $service = new Service();
        $service->name = $request->name;
        $service->category = $request->category;
        $service->price = $request->price;
        $service->image = $imagePath;
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service added successfully.');
    }
}
