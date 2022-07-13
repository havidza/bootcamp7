<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        // switch (Auth::user()->is_admin) {
        //     case true:
        //         return redirect(route('admin.dashboard'));
        //         break;

        //     default:
        //         return redirect(route('user.dashboard'));
        //         break;
        // }

        if (Auth::user()->is_admin) {
            return redirect(route('admin.dashboard'));
        } elseif (Auth::user()->is_mentor) {
            return redirect(route('mentor.dashboard'));
        } else {
            return redirect(route('user.dashboard'));
        }
    }
}
