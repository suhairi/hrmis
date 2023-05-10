<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;

use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::find(Auth::user()->id);

        // dd($user->name);

        return view('profiles.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find(Auth::user()->id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('profiles.edit',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        $user = User::find($id);

        $user->update(['password' => bcrypt($request['password'])]);

        return redirect()->route('profiles.index')
                        ->with('success','Kata Laluan ' . $user->name . ' telah dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
