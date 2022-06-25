<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    //
    public function update(Request $request, Checkout $checkout)
    {
        # code...
        $checkout->is_paid = true;
        $checkout->save();
        $request->session()->flash('success', "Checkout dengan id {$checkout->id} berhasil di update");
        return redirect(route('admin.dashboard'));
    }
}
