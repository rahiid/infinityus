<?php

namespace App\Http\Controllers;

use App\RegisterClient;
use Illuminate\Http\Request;
use App\Invest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Mail;

class InvestmenthistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {

            $user_id = Auth::user()->id;
            //$wallet['wallet'] = DB::table('topups')->where('user_id','=', $id)->get()->toArray();

            $users = User::all()->toArray();
            $users = collect($users)->where('userid', $user_id)->all();

            $invest = Invest::all()->toArray();
            $invest = collect($invest)->where('userid', $user_id)->all();
            //$wallet = Addcash::all()->toArray();

            //return $wallet['user_id'] == 1;
            return view('/investmenthistory', compact('invest','users'));

        }

        return Redirect::route('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
