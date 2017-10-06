<?php
namespace App\Http\Controllers\Admin\CityInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Datatables;
use App\Models\Admin\cityinfo;
use App\Models\Admin\DivisionorState;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Support\Facades\Redirect;
class CityInfoController extends Controller
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
    public function anyData()
    {
        //return Datatables::of(cityinfo::query())->make(true);
        //nerds/{id}/edit
        $cityinfo = cityinfo::select(['id','name','divisionor_state_id','population']);
         return Datatables::of($cityinfo)
            ->addColumn('action', function ($cityinfo) {
                return View('Admin.delete')
                ->with('id', $cityinfo->id)
                ->with('deleteurl', 'cityinfo');
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }
    public function index()
    {
        return view('Admin.cityinfo.index');
        //return view('Frontend.home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selected = [];
        $divisionorstates = DivisionorState::orderBy('name', 'asc')->get();
        return view('Admin.cityinfo.form')
            ->with('divisionorstates',$divisionorstates)
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
            'divisionor_state_id'       => 'required',
            'population'       => 'required',
            'latitude'         => 'required',
            'longitude'        => 'required',
            //'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/cityinfo/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $cityinfo = new cityinfo;
            $cityinfo->name  = Input::get('name');
            $cityinfo->divisionor_state_id  = Input::get('divisionor_state_id');
            $cityinfo->population  = Input::get('population');
            $cityinfo->latitude  = Input::get('latitude');
            $cityinfo->longitude  = Input::get('longitude');
            $cityinfo->save();
            $imageName = $cityinfo->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/cityinfo/', $imageName
            );
            $cityinfo->img   = $imageName;
            $cityinfo->save();
            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('admin/cityinfo');
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
        $cityinfo = cityinfo::find($id);
        $divisionorstates = DivisionorState::select('name','id')->orderBy('name', 'asc')->get();
        $selected = $cityinfo->divisionorstate->toArray();
        return View('Admin.cityinfo.form')
            ->with('divisionorstates', $divisionorstates)
            ->with('selected', $selected)
            ->with('cityinfo', $cityinfo);
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
            'divisionor_state_id'       => 'required',
            'population'       => 'required',
            'latitude'         => 'required',
            'longitude'        => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/cityinfo/'. $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $cityinfo = cityinfo::find($id);
            $cityinfo->name             = Input::get('name');
            $cityinfo->divisionor_state_id       = Input::get('divisionor_state_id');
            $cityinfo->population       = Input::get('population');
            $cityinfo->latitude         = Input::get('latitude');
            $cityinfo->longitude        = Input::get('longitude');
            $cityinfo->save();
            $imageName = $cityinfo->id . '.' . 
                $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move(
                base_path() . '/public/images/cityinfo/', $imageName
            );
            $cityinfo->img   = $imageName;
            $cityinfo->save();

            // redirect
            Session::flash('message', 'Successfully updated nerd!');
            return Redirect::to('admin/cityinfo');
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
        $cityinfo = cityinfo::findOrFail($id);
        $cityinfo->delete();

        return Redirect::to('admin/cityinfo');
    }
}
