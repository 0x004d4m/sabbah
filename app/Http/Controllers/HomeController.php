<?php

namespace App\Http\Controllers;

use App\Models\{
    Expert,
    Feature,
    Main,
    Plan,
    Screenshot,
    Section,
    Service,
    Sponser,
    Team,
    Video
};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $Main = Main::select('*')->first();
        $Services = Service::select('*')->get();
        $Features = Feature::select('*')->get();
        $Plans = Plan::select('*')->get();
        $Screenshots = Screenshot::select('*')->get();
        $Video = Video::select('*')->first();
        $Teams = Team::select('*')->get();
        $Experts = Expert::select('*')->get();
        $Sponsers = Sponser::select('*')->get();
        $Sections = Section::select('*')->get();
        return view('welcome', compact('Main', 'Services', 'Features', 'Plans', 'Screenshots', 'Video', 'Teams', 'Experts', 'Sponsers', 'Sections'));
    }
}
