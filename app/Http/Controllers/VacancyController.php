<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Vacancy;
use App\Models\Category; // Include Category Model
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::orderBy('id', 'DESC')->paginate(10);
        return view('backend.vacancy.index')->with('vacancies', $vacancies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // Fetch categories for selection
        return view('backend.vacancy.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'requirements' => 'string|required',
            'conditions' => 'string|required',
            'skills' => 'string|required',
            'location' => 'string|required',
            'phone_number' => 'string|required',
            'close_date' => 'date|required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id', // Validate category
        ]);

        // Initialize the photoPath variable
        $photoPath = null;

        // Check if a photo was uploaded
        if ($request->hasFile('photo')) {
            // Store the file and get the path
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $data = $request->except('photo');

        if ($photoPath) {
            $data['photo'] = $photoPath;
        }

        // Generate slug
        $slug = Str::slug($request->title);
        $count = Vacancy::where('slug', $slug)->count();
        if ($count > 0) {
            $slug .= '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        // Store vacancy
        $vacancy = Vacancy::create($data);

        if ($vacancy) {
            session()->flash('success', 'Vakansiya muvaffaqqiyatli qo\'shildi.');
        } else {
            session()->flash('error', 'Iltimos yana urinib ko\'ring!!');
        }

        return redirect()->route('jobs.index');
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);
        $categories = Category::all(); // Fetch categories for selection
        return view('backend.vacancy.edit')->with(['vacancy' => $vacancy, 'categories' => $categories]);
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
        $vacancy = Vacancy::findOrFail($id);

        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'requirements' => 'string|required',
            'conditions' => 'string|required',
            'skills' => 'string|required',
            'location' => 'string|required',
            'phone_number' => 'string|required',
            'close_date' => 'date|required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id', // Validate category
        ]);

        $data = $request->all();
        $photoPath = $vacancy->photo;

        // Check if a new photo was uploaded
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($vacancy->photo) {
                Storage::disk('public')->delete($vacancy->photo);
            }

            // Store the new photo
            $photoPath = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $photoPath;
        }

        $status = $vacancy->fill($data)->save();

        if ($status) {
            Session::flash('success', 'Vakansiya yangilandi');
        } else {
            Session::flash('error', 'Iltimos yana urinib ko\'ring!!');
        }

        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::findOrFail($id);

        // Delete photo if it exists
        if ($vacancy->photo) {
            Storage::disk('public')->delete($vacancy->photo);
        }

        $status = $vacancy->delete();

        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('jobs.index');
    }
}
