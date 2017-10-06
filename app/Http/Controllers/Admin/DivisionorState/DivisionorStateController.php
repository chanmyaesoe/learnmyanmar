<?php

namespace App\Http\Controllers\Admin\DivisionorState;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use Datatables;
use App\Models\Admin\DivisionorState;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use File;
use Illuminate\Support\Facades\Redirect;

class DivisionorStateController extends Controller
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
        return view('Admin.divisionorstate.index');
    }

    public function anyData()
    {

        $divisionorstates = DivisionorState::select(['id', 'category', 'name']);
         return Datatables::of($divisionorstates)
            ->addColumn('action', function ($divisionorstates) {
                return View('Admin.divisionorstate.delete')
                ->with('id', $divisionorstates->id);
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
        return view('Admin.divisionorstate.create');
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
            'name'       => 'required',
            'category'       => 'required'
            //'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/divisionorstate/create')
                ->withErrors($validator);
        } else {
            // store
            $divisionorstates = new DivisionorState;
            $divisionorstates->category   = Input::get('category');
            $divisionorstates->name   = Input::get('name');
            $divisionorstates->latitude   = Input::get('latitude');
            $divisionorstates->longitude   = Input::get('longitude');
            $divisionorstates->save();
            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('admin/divisionorstate');
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
        $divisionorstates = DivisionorState::find($id);

        // show the edit form and pass the nerd
        return View('Admin.divisionorstate.edit')
            ->with('divisionorstates', $divisionorstates);
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
            'name'       => 'required',
            'category'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/divisionorstate/'. $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $divisionorstates = DivisionorState::find($id);
    
            $divisionorstates->name       = Input::get('name');
            $divisionorstates->category = Input::get('category');
            $divisionorstates->latitude       = Input::get('latitude');
            $divisionorstates->longitude = Input::get('longitude');
            $divisionorstates->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('admin/divisionorstate');
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
        $divisionorstates = DivisionorState::findOrFail($id);
        $divisionorstates->delete();
        return Redirect::to('admin/divisionorstate');
    }
}
