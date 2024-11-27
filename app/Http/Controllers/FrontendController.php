<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Branch;
use App\Models\Vacancy;
use App\Models\Category;
use App\Models\Position;
class FrontendController extends Controller
{
    public function home()
    {
        // Fetch all teams (or as many as needed) and order them
        $teams = Team::orderBy('id', 'DESC')->get();

        // Slice the teams collection into two separate subsets
        $firstTwoTeams = $teams->take(2);
        $nextTwoTeams = $teams->skip(2)->take(2);

        // Pass the subsets to the view
        return view('frontend.index')
            ->with('firstTwoTeams', $firstTwoTeams)
            ->with('nextTwoTeams', $nextTwoTeams);
    }
    public function positionDetail($slug)
    {
        // Fetch the position by its slug
        $position = Position::where('slug', $slug)->firstOrFail();

        // Pass the position data to the view
        return view('frontend.pages.position-detail', compact('position'));
    }


    public function bizningJamoa()
    {
        $teams = Team::orderBy('id', 'DESC')->get();
        return view('frontend.pages.bizning-jamoa')->with('teams', $teams);
    }
    public function filial()
    {
        $branches = Branch::orderBy('id', 'DESC')->get();
        return view('frontend.pages.bizning-filiallar')->with('branches', $branches);
    }

    public function job(Request $request)
    {
        $vacancies = Vacancy::query();
        $categories = Category::all();
    
        // Check if a category filter is applied
        if ($request->has('category')) {
            $vacancies = $vacancies->where('category_id', $request->category);
        }
    
        // Check if the number of items to show is provided
        if ($request->has('show')) {
            $vacancies = $vacancies->orderBy('id', 'DESC')->paginate($request->show);
        } else {
            $vacancies = $vacancies->orderBy('id', 'DESC')->paginate(9);
        }
    
        $recent_vacancies = Vacancy::orderBy('id', 'DESC')->limit(3)->get();
    
        return view('frontend.pages.job')
            ->with('vacancies', $vacancies)
            ->with('recent_vacancies', $recent_vacancies)
            ->with('categories', $categories);
    }
    

    public function jobDetail($slug)
    {
        $vacancy = Vacancy::where('slug', $slug)->firstOrFail();
        $recent_vacancies = Vacancy::orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.pages.job-detail')->with('vacancy', $vacancy)->with('recent_vacancies', $recent_vacancies);
    }


    public function jobSearch(Request $request)
    {
        $recent_vacancies = Vacancy::orderBy('id', 'DESC')->limit(3)->get();
        $vacancies = Vacancy::where('title', 'like', '%' . $request->search . '%')
            ->orWhere('description', 'like', '%' . $request->search . '%')
            ->orWhere('slug', 'like', '%' . $request->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(8);
        return view('frontend.pages.vacancies')->with('vacancies', $vacancies)->with('recent_vacancies', $recent_vacancies);
    }

}