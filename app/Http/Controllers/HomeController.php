<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
		$key = "example_key";

		dd(JWT::decode($request->input('token'), $key, array('HS256')));
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function getUser($token)
	{
        $key = "example_key";

		dd(JWT::decode($token, $key, array('HS256')));
	}
}
