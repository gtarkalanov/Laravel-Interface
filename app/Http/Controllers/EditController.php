<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.edit');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->group = $request->input('group');

        if ( ! $request->input('password') == '' && ! $request->input('password_confirmation') == '')
        {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        return redirect()->route('home');
    }
}
