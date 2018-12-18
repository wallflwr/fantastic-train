<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    
    public function index ()
    {
    	$tests = Test::all();

    	return $tests; 

    	return view ('tests.index') ;
    }
    public function create ()
    {
       return view ('tests.create');
    }
    public function store ()
    {
    	$tests = new test ();
    	$tests -> item = request ('item');
    	$tests -> description = request ('description');

        $tests -> save ();

        return redirect ('/tests');

    }
}


        $users -> save ();
