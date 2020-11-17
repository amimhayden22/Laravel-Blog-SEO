<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      => 'required|min:3|max:100',
            'email'     => 'required|email|unique:users',
            'role'      => 'required'
        ]);

        if ($request->input('password')) {
            $password = Hash::make($request->password);
        } else {
            $password = Hash::make('default123');
        }

        $createUser = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $password,
            'role'      => $request->role,
        ]);
        
        return redirect()->back()->with('success', 'Data berhasil ditambah');
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
        $editUser = User::findOrFail($id);
        return view('admin.user.edit', compact('editUser'));
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
        $this->validate($request,[
            'name'      => 'required|min:3|max:100',
            'role'      => 'required'
        ]);

        if ($request->input('password')) {
            $updateUser = [
                'name'      => $request->name,
                'password'  => Hash::make($request->password),
                'role'      => $request->role,
            ];
        } else {
            $updateUser = [
                'name'      => $request->name,
                'role'      => $request->role,
            ];
        }

        User::whereId($id)->update($updateUser);

        return redirect()->route('user.index')->with('success', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil di hapus!');
    }
}
