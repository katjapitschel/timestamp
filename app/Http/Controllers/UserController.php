<?php

namespace App\Http\Controllers;

use App\PublicCases;
use App\User;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $data = User::all();
        return view('user')->with('data', $data);
    }
}
