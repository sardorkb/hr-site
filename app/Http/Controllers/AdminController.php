<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(){    
        $user = auth()->user();
        return view('backend.index', compact('user'));
    }
}
