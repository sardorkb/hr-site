<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\LavozimCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::orderBy('id', 'DESC')->paginate(10);
        return view('backend.position.index')->with('positions', $positions);
    }

    public function create()
    {
        $categories = LavozimCategory::all();
        return view('backend.position.create')->with('categories', $categories);
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
            'title' => 'string|required|max:50',
            'requirements' => 'string|required',
            'description' => 'string|required',
            'lavozim_category_id' => 'required|exists:lavozim_categories,id',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Position::where('slug', $slug)->count();

        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }

        $data['slug'] = $slug;

        // Create the position
        $status = Position::create($data);
        
        if ($status) {
            Session::flash('success', 'Vakansiya qo\'shildi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('positions.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::findOrFail($id);
        $categories = LavozimCategory::all(); // Fetch categories for the edit form
        return view('backend.position.edit')->with(['position' => $position, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        
        $this->validate($request, [
            'title' => 'string|required|max:50',
            'requirements' => 'string|required',
            'description' => 'string|required',
            'lavozim_category_id' => 'required|exists:lavozim_categories,id',
        ]);

        $data = $request->all();

        $status = $position->fill($data)->save();
        
        if ($status) {
            Session::flash('success', 'Vakansiya yangilandi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('positions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::findOrFail($id);
        $status = $position->delete();
        
        if ($status) {
            Session::flash('success', 'Vakansiya o\'chirildi');
        } else {
            Session::flash('error', 'Xatolik');
        }

        return redirect()->route('positions.index');
    }
}