<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AccessVerificationController extends Controller
{
    // Step 1 & Step 2 display
    public function showForm(Request $request)
    {
        // We don't need step logic here because JS handles it
        return view('AccessVerification');
    }

    // Handle Step 2 submission
    public function save(Request $request)
    {
        // Validate Step 2 input
        $request->validate([
            'upm' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // You can save the data to the database
        // For example:
        // \App\Models\AccessVerification::create($request->only('upm', 'category', 'email'));

        // Redirect with success message
        return redirect()->route('Form')->with('success', 'Access Verified and Saved!');
    }
}
