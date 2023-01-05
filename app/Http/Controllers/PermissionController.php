<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = Permission::orderBy('id', 'ASC')->paginate(10);

        return view('permissions.index', compact('permissions'))->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'guard_name'    => 'required',
        ]);

        $data['name']       = $request->input('name') . '-create';
        $data['guard_name'] = $request->input('guard_name');
        $permission = Permission::create($data);

        $data['name']       = $request->input('name') . '-delete';
        $data['guard_name'] = $request->input('guard_name');
        $permission = Permission::create($data);

        $data['name']       = $request->input('name') . '-edit';
        $data['guard_name'] = $request->input('guard_name');
        $permission = Permission::create($data);

        $data['name']       = $request->input('name') . '-list';
        $data['guard_name'] = $request->input('guard_name');
        $permission = Permission::create($data);

        return redirect()->route('permissions.index')
                        ->with('success','Permission : ' . $request->name . ' created successfully');


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
        $permission = Permission::find($id);

        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        request()->validate([
            'name' => 'required',
        ]);
    
        $permission->update($request->all());
    
        return redirect()->route('permissions.index')
                        ->with('success','Permission ' . $request->name . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('permissions.index')
                        ->with('success','Permission deleted successfully');
    }
}
