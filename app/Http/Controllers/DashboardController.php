<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shedule;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $shedules = Shedule::with('user','location')->get();
        $guards = User::where('type','guard')->get();
        return view('dashboard',compact(['guards', 'shedules']));
    }
}
