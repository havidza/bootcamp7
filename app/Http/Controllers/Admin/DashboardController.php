<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }

    public function pdf(Checkout $checkout)
    {
        $checkouts = Checkout::with('Camp')->get();

        $pdf = PDF::loadview('admin.print', ['checkouts' => $checkouts])->setPaper('a4', 'landscape');;
        return $pdf->download('laporan-bulanan.pdf');
    }

    public function addMentor(User $user)
    {
        $users = DB::table('users')->where('is_mentor', 1)->get();
        return view('admin.addmentor', ['users' => $users]);
    }
}
