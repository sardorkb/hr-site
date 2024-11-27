<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderBy('id','DESC')->paginate(10);
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teams.create');
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
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Initialize the photoPath variable
        $photoPath = null;

        // Check if a photo was uploaded
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Create a new team member with the validated data
        $team = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'photo' => $photoPath, // Store the photo path if it exists
        ]);

        // Set a flash message based on the result
        if ($team) {
            session()->flash('success', 'Jamoadosh muvaffaqqiyatli qo\'shildi.');
        } else {
            session()->flash('error', 'Iltimos yana urinib ko\'ring!!');
        }

        // Redirect to the index route
        return redirect()->route('teams.index');
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
        $team=Team::findOrFail($id);
        return view('backend.teams.edit', compact('team'))->with('team', $team);
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
        $team = Team::findOrFail($id);
    
        // Validate the request
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Initialize photo path variable
        $photoPath = $team->photo;
    
        // Check if a new photo was uploaded
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($team->photo) {
                Storage::disk('public')->delete($team->photo);
            }
    
            // Store the new photo
            $photoPath = $request->file('photo')->store('photos', 'public');
        }
    
        // Update the team member with new data
        $team->update([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'photo' => $photoPath, // Store the new photo path
        ]);
    
        // Set flash message based on the result
        if ($team->wasChanged()) {
            Session::flash('success', 'Jamoadosh muvaffaqqiyatli yangilandi.');
        } else {
            Session::flash('error', 'Iltimos yana urinib ko\'ring!!');
        }
    
        return redirect()->route('teams.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team=Team::findOrFail($id);
        $status=$team->delete();

        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('teams.index');
    }
}