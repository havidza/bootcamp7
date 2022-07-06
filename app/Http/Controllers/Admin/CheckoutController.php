<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout\Paid;
use App\Models\User;

class CheckoutController extends Controller
{
    //
    public function update(Request $request, Checkout $checkout, User $user)
    {
        # code...
        $checkout->is_paid = true;
        $checkout->save();

        // send email to user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Checkout dengan nama {$checkout->User->name} berhasil di update");
        return redirect(route('admin.dashboard'));
    }
}
