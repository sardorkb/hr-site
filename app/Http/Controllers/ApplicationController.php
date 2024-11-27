<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource for admin.
     */
    public function index()
    {
        // Check if user is authenticated (admin)
        if (Auth::check()) {
            $applications = Application::orderBy('created_at', 'desc')->paginate(10);

            // Return the view for admins showing all applications
            return view('backend.application.index')->with('applications', $applications);
        }

        // If the user is not authenticated, redirect to the application form
        return redirect()->route('application.create');
    }

    /**
     * Show the form for creating a new application (for non-authenticated users).
     */
    public function create()
    {
        return view('frontend.pages.application');
    }

    /**
     * Store a newly created application in storage.
     */
    public function store(Request $request)
    {
        // Validation logic
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'job_location' => 'required|string|max:255',
            'job_location_type' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'has_car' => 'required|boolean',
            'education' => 'required|string|max:255',
            'expected_salary' => 'required|string',
            'upload_resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // File upload handling
        if ($request->hasFile('upload_resume')) {
            $validatedData['upload_resume'] = $request->file('upload_resume')->store('resumes', 'public');
        }

        // Store the validated data in the database
        Application::create($validatedData);

        // Redirect to the same form with a success message
        return redirect()->route('application.create')->with('success', 'Anketa muvaffaqqiyatli to\'ldirildi, iltimos bizdan javob kuting!');
    }

    public function edit($id)
    {
        $application = Application::findOrFail($id);
        return view('backend.application.edit', compact('application'));
    }
    

public function updateStatus(Request $request, $id)
{
    $validatedData = $request->validate([
        'status' => 'required|string|max:255',
        'comments' => 'nullable|string|max:1000',
    ]);

    $application = Application::findOrFail($id);
    $application->update($validatedData);

    return redirect()->route('application.index', $id)->with('success', 'Application status updated successfully!');
}

}