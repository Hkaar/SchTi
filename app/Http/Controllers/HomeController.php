<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the welcome page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the home page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the about us page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the public relations page
     */
    public function publicRelations()
    {
        return view('public-relations');
    }

    /**
     * Show the student affairs page
     */
    public function studentAffairs()
    {
        return view('student-affairs');
    }
}
