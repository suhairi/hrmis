<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','show']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(10);
        return view('users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        $ppk = [
                'HQ' => 'HQ', 'BPIP' => 'BPIP', 'BPW' => 'BPW',
                'W1' => 'Wilayah 1', 'W2' => 'Wilayah 2', 'W3' => 'Wilayah 3', 'W4' => 'Wilayah 4',
                'A1' => 'A1', 'B1' => 'B1', 'C1' => 'C1', 'D1' => 'D1', 'E1' => 'E1',
                'A2' => 'A2', 'B2' => 'B2', 'C2' => 'C2', 'D2' => 'D2', 'E2' => 'E2', 'F2' => 'F2', 'G2' => 'G2', 'H2' => 'H2', 'I2' => 'I2',
                'A3' => 'A3', 'B3' => 'B3', 'C3' => 'C3', 'D3' => 'D3', 'E3' => 'E3', 'F3' => 'F3',
                'A4' => 'A4', 'B4' => 'B4', 'C4' => 'C4', 'D4' => 'D4', 'E4' => 'E4', 'F4' => 'F4', 'G4' => 'G4'
            ];
        return view('users.create', compact('roles', 'ppk'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $admin = User::find(1);

        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $ppk = [
                'HQ' => 'HQ', 'BPIP' => 'BPIP', 'BPW' => 'BPW',
                'W1' => 'Wilayah 1', 'W2' => 'Wilayah 2', 'W3' => 'Wilayah 3', 'W4' => 'Wilayah 4',
                'A1' => 'A1', 'B1' => 'B1', 'C1' => 'C1', 'D1' => 'D1', 'E1' => 'E1',
                'A2' => 'A2', 'B2' => 'B2', 'C2' => 'C2', 'D2' => 'D2', 'E2' => 'E2', 'F2' => 'F2', 'G2' => 'G2', 'H2' => 'H2', 'I2' => 'I2',
                'A3' => 'A3', 'B3' => 'B3', 'C3' => 'C3', 'D3' => 'D3', 'E3' => 'E3', 'F3' => 'F3',
                'A4' => 'A4', 'B4' => 'B4', 'C4' => 'C4', 'D4' => 'D4', 'E4' => 'E4', 'F4' => 'F4', 'G4' => 'G4'
            ];
        $userPpk = $user->ppk;

        return view('users.edit', compact('user','roles','userRole', 'ppk', 'userPpk'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'email'         => 'required|email|unique:users,email,'.$id,
            'password'      => 'same:confirm-password',
            'roles'         => 'required',
        ]);

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

}
