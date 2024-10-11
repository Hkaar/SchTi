<?php

namespace App\Http\Controllers\SignUp;

use App\Http\Controllers\Controller;

class SignUpController extends Controller
{
    /**
     * Show the index page of the signup
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view('signups.index');
    }
}
