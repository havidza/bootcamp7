<?php

namespace App\Http\Controllers\User;

use App\Models\CampFeed;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\Camp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    //


    public function index()
    {
        # code...
        return view('user.class');
    }
}
