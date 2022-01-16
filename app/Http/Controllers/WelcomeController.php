<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        if (auth()->check()) 
        {
            if (auth()->user()->email_verified_at != null) 
            {
                return view('welcome');
            }
            else
            {
                return redirect()->route('verification');
            }
        }
        else
        {
            return view('welcome');
        }        
    }
}
