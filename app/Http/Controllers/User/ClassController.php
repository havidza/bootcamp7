<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\CampFeed;
use App\Models\Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class ClassController extends Controller
{
    //


    public function index()
    {
        # code...
        $camp_feeds = CampFeed::with('Camp')->simplePaginate(1);
        return view('user.class', [
            'camp_feeds' => $camp_feeds
        ]);
    }

    public function question()
    {
        # code...
        return view('user.question');
    }

    public function certificate()
    {
        # code...
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();

        $pdf = PDF::loadview('user.printCertificate', ['checkouts' => $checkouts])->setPaper('a4', 'landscape');;
        return $pdf->download('SERTIFIKAT.pdf');
    }
}
