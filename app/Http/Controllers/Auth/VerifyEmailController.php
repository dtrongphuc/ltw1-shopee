<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class VerifyEmailController extends Controller
{

    public function __invoke(Request $request): RedirectResponse
    {
        $user = User::find($request->route('id')); //takes user ID from verification link. Even if somebody would hijack the URL, signature will be fail the request
        if ($user->hasVerifiedEmail()) {
            return redirect('/');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }
        
        $message = __('Your email has been verified.');
        \Auth::login($user);

        return redirect('/')->with('status', $message); //if user is already logged in it will redirect to the dashboard page
    }
}