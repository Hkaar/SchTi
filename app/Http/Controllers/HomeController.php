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
        return view('about.index');
    }

    /**
     * Show the facilities page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function facilities()
    {
        return view('about.facilities');
    }

    /**
     * Show the majors page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function majors()
    {
        return view('about.majors');
    }

    /**
     * Show the page containing school staff
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function staff()
    {
        return view('about.staff');
    }

    /**
     * Show the public relations page
     */
    public function publicRelations()
    {
        return view('public-relations.index');
    }

    /**
     * Show the alumni page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function alumni()
    {
        return view('public-relations.alumni');
    }

    /**
     * Show the student affairs page
     */
    public function studentAffairs()
    {
        return view('student-affairs.index');
    }

    /**
     * Show the awards page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function awards()
    {
        return view('student-affairs.awards');
    }

    /**
     * Show the club page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function clubs()
    {
        return view('student-affairs.clubs');
    }

    /**
     * Show the counsellor page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function counsellor()
    {
        return view('student-affairs.counsellor');
    }

    /**
     * Show the student organizations page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function studentOrg()
    {
        return view('student-affairs.student-org');
    }
}
