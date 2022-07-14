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

    public function formAddMentor(Request $request)
    {
        $users = DB::table('users')->where('is_mentor', 1)->get();
        return view('admin.form-add', ['users' => $users]);
    }

    public function store(Request $request)
    {
        # code...
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_mentor' => $request->is_mentor
        ]);
        $users = DB::table('users')->where('is_mentor', 1)->get();
        return view('admin.form-add', ['users' => $users]);
    }

    public function edit($id)
    {
        # code...
        // mengambil data users berdasarkan id yang dipilih
        $users = DB::table('users')->where('id', $id)->get();
        // passing data users yang didapat ke view edit.blade.php
        return view('admin.form-edit', ['users' => $users]);
    }

    public function update(Request $request)
    {
        # code...
        // update data users
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_mentor' => $request->is_mentor
        ]);
        // alihkan halaman ke halaman users
        $users = DB::table('users')->where('is_mentor', 1)->get();
        return view('admin.addmentor', ['users' => $users]);
    }

    public function destroy($id)
    {
        # code...
        DB::table('users')->where('id', $id)->delete();

        $users = DB::table('users')->where('is_mentor', 1)->get();
        return view('admin.addmentor', ['users' => $users]);
    }
}
