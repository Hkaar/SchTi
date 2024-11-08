<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show()
    {
        return view('auth.login');
    }

    /**
     * Handle the login attempt
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (! Auth::validate($credentials)) {
            return back()->withErrors([
                'username' => 'Data yang telah diberikan tidak sesuai dengan rekor kita',
            ])->withInput();
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user, $request->get('remember'));

        return redirect()->intended(route('home'));
    }
}
