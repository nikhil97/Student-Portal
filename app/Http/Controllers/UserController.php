<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);

        return view(('user'),compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view(('edit'),compact('user'));
    }

    public function update(Request $request)
    {

        $id =Auth::id();
        $user = User::find($id);

        $user->update($request->all());

       return redirect('user');
    }


}
