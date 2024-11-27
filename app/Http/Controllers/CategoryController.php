<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::getAllCategory();
        // return $category;
        return view('backend.category.index')->with('categories',$category);
    }
    
    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new category
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return view('backend.category.edit')->with('category',$category);
    }

    public function update(Request $request, $id)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update the category
        $category->name = $request->input('name');
        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findOrFail($id);
        $status=$category->delete();
        
        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }
        return redirect()->route('categories.index');
    }

}