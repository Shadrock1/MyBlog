<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {

       return view('user.login');
    }


    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        App\User::create($request->all());
        return redirect()
            ->route('user.index')
            ->with('success', 'User created successfully');
    }


    public function show(Users $users)
    {
        //
    }


    public function edit(Users $users)
    {
        //
    }


    public function update(Request $request, Users $users)
    {
        //
    }


    public function destroy(Users $users)
    {
        //
    }
}
