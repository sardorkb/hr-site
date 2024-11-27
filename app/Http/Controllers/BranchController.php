<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::orderBy('id','DESC')->paginate(10);
        return view('backend.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.branches.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'location' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Initialize the photoPath variable
        $photoPath = null;

        // Check if a photo was uploaded
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Create a new team member with the validated data
        $branch = Branch::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'photo' => $photoPath, // Store the photo path if it exists
        ]);

        // Set a flash message based on the result
        if ($branch) {
            session()->flash('success', 'Jamoadosh muvaffaqqiyatli qo\'shildi.');
        } else {
            session()->flash('error', 'Iltimos yana urinib ko\'ring!!');
        }

        // Redirect to the index route
        return redirect()->route('branches.index');
    }

    /**
     * Display the specified resource.
    */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch=Branch::findOrFail($id);
        return view('backend.branches.edit', compact('branch'))->with('branch', $branch);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $branch = Branch::findOrFail($id);
    
        // Validate the request
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'location' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Initialize photo path variable
        $photoPath = $branch->photo;
    
        // Check if a new photo was uploaded
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($branch->photo) {
                Storage::disk('public')->delete($branch->photo);
            }
    
            // Store the new photo
            $photoPath = $request->file('photo')->store('photos', 'public');
        }
    
        // Update the team member with new data
        $branch->update([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'photo' => $photoPath, // Store the new photo path
        ]);
    
        // Set flash message based on the result
        if ($branch->wasChanged()) {
            Session::flash('success', 'Jamoadosh muvaffaqqiyatli yangilandi.');
        } else {
            Session::flash('error', 'Iltimos yana urinib ko\'ring!!');
        }
    
        return redirect()->route('branches.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch=Branch::findOrFail($id);
        $status=$branch->delete();

        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('branches.index');
    }

}
