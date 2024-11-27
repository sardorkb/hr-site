<?php

namespace App\Http\Controllers;

use App\Models\LavozimCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LavozimCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=LavozimCategory::paginate(10);
        // return $category;
        return view('backend.lavozim-categories.index')->with('categories',$category);
    }

    public function create()
    {
        return view('backend.lavozim-categories.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new category
        $category = new LavozimCategory();
        $category->name = $request->input('name');
        $category->save();

        // Redirect with success message
        return redirect()->route('lavozim_categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $category=LavozimCategory::findOrFail($id);
        return view('backend.lavozim-categories.edit')->with('category', $category);
    }
    public function update(Request $request, $id)
    {
        // Find the category by ID
        $category = LavozimCategory::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update the category
        $category->name = $request->input('name');
        $category->save();

        // Redirect with success message
        return redirect()->route('lavozim_categories.index')->with('success', 'Category updated successfully.');

    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=LavozimCategory::findOrFail($id);
        $status=$category->delete();
        
        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }
        return redirect()->route('lavozim_categories.index');

    }
}
