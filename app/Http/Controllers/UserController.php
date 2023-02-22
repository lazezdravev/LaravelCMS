<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller

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
        $users = User::all();
        $data = ['users' => $users];
       return view('dashboard.users.index')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        $data = ['roles' => $roles];

        return view('dashboard.users.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required|unique:users',
            'password' => 'required',
            'role_id'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('dashboard/users/create')
                ->withErrors($validator)
                ->withInput();
        }



        $name = $request->get('name');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));
        $role_id = $request->get('role_id');


        User::create([
            "name"     => $name,
            "email"    => $email,
            "password" => $password,
            "role_id"  => $role_id,

        ]);

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::FindOrFail($id);
        $data = ['user' => $user];
        return view('dashboard.users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::FindOrFail($id);


        $data = ['user' => $user];

        return view('dashboard.users.edit')->with($data);
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
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('dashboard/users/'. $id .'/edit')
                ->withErrors($validator)
                ->withInput();
        }


        $user = User::FindOrFail($id);

        $user->fill($request->all())->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }

}
