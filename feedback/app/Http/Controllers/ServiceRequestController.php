<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service_type' => 'required',
            'message' => 'required',
        ]);

        // Save data to the database
        ServiceRequest::create($request->all());

        // Redirect back with success message
        return back()->with('success', 'Service request submitted successfully!');
    }
}
