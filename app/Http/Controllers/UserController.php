<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;


use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show()
    {
        return view('pages.dashboard.profile', [
            'user' => Auth::user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'bio' => 'string'
        ]);

        if ($validator->fails()) {
            return back()->withInput()
                    ->withErrors($validator);

        } else {
            // store
            $user->first_name  = Input::get('firstName');
            $user->last_name  = Input::get('lastName');
            $user->email = Input::get('email');
            $user->bio = Input::get('bio');
            $user->save();

            return Redirect::route('profile');
        }
    }

}
