<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
