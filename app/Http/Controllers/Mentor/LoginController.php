<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mentor;
use App\Models\CampFeed;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $camp_feeds = CampFeed::with('Camp')->get();

        return view('mentor.dashboard', compact('camp_feeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('camp_feeds')->insert([
        //     'title' => $request->title,
        //     'feed' => $request->feed,
        //     'image' => $request->image,
        //     'camp_id' => $request->camp_id,
        // ]);

        $data = new \App\Models\CampFeed;
        $data->title = $request->title;
        $data->feed = $request->feed;
        $data->header = $request->header;
        $data->image = $request->image;
        $data->camp_id = $request->camp_id;
        $data->save();


        $camp_feeds = CampFeed::with('Camp')->get();

        return view('mentor.dashboard', compact('camp_feeds'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        //
        return view('mentor.login-mentor');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $camp_feeds = DB::table('camp_feeds')->where('id', $id)->get();

        return view('mentor.form-edit', compact('camp_feeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('camp_feeds')->where('id', $request->id)->update([
            'title' => $request->title,
            'header' => $request->header,
            'feed' => $request->feed,
            'image' => $request->image,
            'camp_id' => $request->camp_id,
        ]);

        $camp_feeds = CampFeed::with('Camp')->get();

        return view('mentor.dashboard', compact('camp_feeds'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function formAdd()
    {
        $camp_feeds = CampFeed::with('Camp')->get();
        return view('mentor.form-add', ['camp_feeds' => $camp_feeds]);
    }

    public function destroy($id)
    {
        //
        // menghapus data camp berdasarkan id yang dipilih
        DB::table('camp_feeds')->where('id', $id)->delete();

        $camp_feeds = CampFeed::with('Camp')->get();

        return view('mentor.dashboard', compact('camp_feeds'));
    }
}
