<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addshareholder()
    {
        return view('shareholder');
    }

    public function saveshareholders(Request $request)
    {
        #will get the new shareholders details here and saving to the database
        $validatedData = $request->validate([
            'sharehold_name'     => 'required',
            'sharholdemail'      => 'required',
            'sharehold_mob'      => 'required',
            'sharehold_country'  => 'required',
            'sharehold_area'     => 'required',
            'sharehold_unit'     => 'required',
            'sharehold_emirates' => 'required',
            'sharehold_add'      => 'required',
        ]);

        // dd($request->all());

        #save data to share_holders table

        DB::table('share_holders')->insert(
            [
            'sharehold_name'    => $request->sharehold_name, 
            'sharholdemail'     => $request->sharholdemail,
            'sharehold_mob'     => $request->sharehold_mob,
            'sharehold_country' => $request->sharehold_country,
            'sharehold_area'    => $request->sharehold_area,
            'sharehold_unit'    => $request->sharehold_unit,
            'sharehold_emirates'=> $request->sharehold_emirates,
            'sharehold_add'     => $request->sharehold_add,
            ]
        );

        return view('shareholder');
    }
}
