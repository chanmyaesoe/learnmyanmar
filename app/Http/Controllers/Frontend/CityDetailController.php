<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Slides;
use App\Models\Admin\cityinfo;

class CityDetailController extends Controller
{
    function showdetail($id){
    	$slides = Slides::all();
    	$cityinfos = cityinfo::select('name','id')->get();
        return view('Frontend.cityinfo')
        ->with('slides', $slides)
        ->with('cityinfos', $cityinfos);
    }
}
