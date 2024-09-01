<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experiences;

class PortofolioController extends Controller
{
    public function index() {
        $profile = Profile::first();
        return view('portofolio.index', compact('profile'));
    }

    public function about(){
        $profile = Profile::first();
        $edu = Education::all();
        $skill = Skill::all();
        return view('portofolio.about', compact('profile', 'skill', 'edu'));
    }

    public function experiences(){
        $profile = Profile::first();
        $exp = Experiences::all();
        return view('portofolio.experiences', compact('exp', 'profile'));
    }

}
