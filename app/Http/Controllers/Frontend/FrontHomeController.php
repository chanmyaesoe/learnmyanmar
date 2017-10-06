<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Slides;
use App\Models\Admin\cityinfo;
use App\Models\Admin\FamousPlace;

class FrontHomeController extends Controller
{
    public function index()
    {
    	$slides = Slides::all();
    	$famousplaces = FamousPlace::all();
    	$cityinfos = cityinfo::select('name','id')->get();
        return view('Frontend.home')
        ->with('slides', $slides)
        ->with('cityinfos', $cityinfos)
        ->with('famousplaces', $famousplaces);
    }
}
