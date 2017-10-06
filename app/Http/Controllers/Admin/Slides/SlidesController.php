<?php

namespace App\Http\Controllers\Admin\Slides;
use Datatables;
use App\Models\Admin\Slides;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use File;
use Illuminate\Support\Facades\Redirect;

class SlidesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.slides.index');
    }
    public function anyData()
    {

        $slides = Slides::select(['id', 'title', 'description', 'img']);
         return Datatables::of($slides)
            ->addColumn('action', function ($slides) {
                return View('Admin.slides.delete')
                ->with('id', $slides->id);
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            //'img'       => 'required',
            'title'       => 'required',
            'description'       => 'required'
            //'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/slides/create')
                ->withErrors($validator);
        } else {
            // store
            $slides = new Slides;
            $slides->title   = Input::get('title');
            $slides->description   = Input::get('description');
            $slides->save();
            // redirect
            $imageName = $slides->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/slides/', $imageName
            );
            $slides->img   = $imageName;
            $slides->save();
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('admin/slides');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slides = Slides::find($id);

        // show the edit form and pass the nerd
        return View('Admin.slides.edit')
            ->with('slides', $slides);
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
        $rules = array(
            //'img'       => 'required',
            'title'       => 'required',
            'description'       => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/slides/'. $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $slides = Slides::find($id);
            File::delete(base_path().'/public/images/slides/'.$slides->img);
            $slides->title       = Input::get('title');
            $slides->description = Input::get('description');
            $imageName = $slides->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/slides/', $imageName
            );
            $slides->img   = $imageName;
            $slides->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('admin/slides');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slides = slides::findOrFail($id);
        $slides->delete();
        return Redirect::to('admin/slides');
    }
}
