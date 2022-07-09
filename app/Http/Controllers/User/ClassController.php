<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\CampFeed;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    //


    public function index()
    {
        # code...
        $camp_feeds = DB::table('camp_feeds')->simplePaginate(1);
        return view('user.class', [
            'camp_feeds' => $camp_feeds
        ]);
    }
}
