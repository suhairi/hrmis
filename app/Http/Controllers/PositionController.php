<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

use DataTables;

class PositionController extends Controller
{
    function __construct() {
        
         $this->middleware('permission:position-list|position-create|position-edit|position-delete', ['only' => ['index','show']]);
         $this->middleware('permission:position-create', ['only' => ['create','store']]);
         $this->middleware('permission:position-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:position-delete', ['only' => ['destroy']]);
         $this->middleware('permission:position-show', ['only' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $positions = Position::withTrashed()->get();
        
        // foreach($positions as $position) {

        //     echo 'Name : ' . $position->name . '<br />';
        // }

        // return;

        if($request->ajax()) {

            $positions = Position::withTrashed()->get();

            return Datatables::of($positions)
                    ->addIndexColumn()
                    ->addColumn('name', function($position){

                        if($position->deleted_at != NULL)
                            return $position->grade . ' - ' . $position->name . ' <small><sup>*</sup><font color=red><sup>deleted</sup></font></small>';
                        else
                            return $position->grade . ' - ' . $position->name;
                    })
                    ->addColumn('scheme', function($position){
                        return $position->scheme;
                    })
                    ->addColumn('actions', function($position) {
                        return view('partials.positions.index', compact('position'));
                    })
                    ->rawColumns(['name', 'scheme', 'actions'])
                    ->make(true);
        }

        return view('positions.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('positions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = Position::find($id);

        return view('positions.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $position = Position::find($id);

        // return $position->scheme;
        return view('positions.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'grade'         => 'required',
            'scheme'        => 'required',
        ]);

        $position = Position::find($id);
        $position->update($request->all());

        return redirect()->route('positions.index')
                        ->with('success','Position ' . $position->grade . ' - ' . $position->name . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::find($id);
        Position::find($id)->delete();

        return redirect()->route('positions.index')
                        ->with('success','Position ' . $position->name . ' deleted successfully');
    }
}
