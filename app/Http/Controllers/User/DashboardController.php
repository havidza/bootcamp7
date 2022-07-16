<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        // return $checkout;

        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }

    public function cetakInvoice()
    {
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        $pdf = PDF::loadview('user.printInvoice', ['checkouts' => $checkouts])->setPaper('a5', 'potrait');;
        return $pdf->download('laporan-invoice.pdf');
    }

    public function cetakInvoiceDone()
    {
        # code...
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        $pdf = PDF::loadview('user.printInvoiceDone', ['checkouts' => $checkouts])->setPaper('a5', 'potrait');;
        return $pdf->download('laporan-invoiceDone.pdf');
    }
}
