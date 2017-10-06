<?php

namespace App\Http\Controllers\Admin\FamousPlaces;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Models\Admin\FamousPlace;
use App\Models\Admin\cityinfo;
use App\Models\Admin\DivisionorState;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use File;
use Illuminate\Support\Facades\Redirect;




class FamousPlaceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function anyData()
    {
        $famousplace = FamousPlace::select(['id','name','cityinfo_id','img']);
         return Datatables::of($famousplace)
            ->addColumn('action', function ($famousplace) {
                return View('Admin.delete')
                ->with('id', $famousplace->id)
                ->with('deleteurl', 'famousplaces');
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.famousplaces.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selected = [];
        $cityinfos = cityinfo::orderBy('name', 'asc')->get();
        return view('Admin.famousplaces.form')
            ->with('cityinfos',$cityinfos)
            ->with('selected', $selected);
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
            'name'             => 'required',
            'cityinfo_id'      => 'required',
            'lat'       => 'required',
            'long'         => 'required',
            'description'         => 'required',
            'img'         => 'required|max:490',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('admin/famousplaces/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $famousplace = new FamousPlace;
            $famousplace->name  = Input::get('name');
            $famousplace->cityinfo_id  = Input::get('cityinfo_id');
            //$famousplace->img  = Input::get('img');
            $famousplace->lat  = Input::get('lat');
            $famousplace->long  = Input::get('long');
            $famousplace->save();
            $imageName = $famousplace->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/famousplace/', $imageName
            );
            $famousplace->img   = $imageName;
            $famousplace->save();

            // redirect
            //Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('admin/famousplaces');
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
        $famousplace = FamousPlace::find($id);
        $cityinfos = cityinfo::select('name','id')->orderBy('name', 'asc')->get();

        $selected = $famousplace->cityinfo->toArray();
        return View('Admin.famousplaces.form')
            ->with('cityinfos', $cityinfos)
            ->with('selected', $selected)
            ->with('famousplace', $famousplace);
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
            'name'             => 'required',
            'cityinfo_id'      => 'required',
            'lat'       => 'required',
            'long'         => 'required',
            'description'         => 'required',
            'img'         => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/famousplaces/'. $id . '/edit')
                ->withErrors($validator);
        } else {
            $famousplace = FamousPlace::find($id);
            File::delete(base_path().'/public/images/famousplace/'.$famousplace->img);
            //$famousplace->update(Input::all());
            $famousplace->name  = Input::get('name');
            $famousplace->cityinfo_id  = Input::get('cityinfo_id');
            //$famousplace->img  = Input::get('img');
            $famousplace->lat  = Input::get('lat');
            $famousplace->long  = Input::get('long');
            $famousplace->save();
            $imageName = $famousplace->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/famousplace/', $imageName
            );
            $famousplace->img   = $imageName;
            $famousplace->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('admin/famousplaces');
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
        $famousplace = FamousPlace::findOrFail($id);
        $famousplace->delete();

        return Redirect::to('admin/famousplaces');
    }
}
