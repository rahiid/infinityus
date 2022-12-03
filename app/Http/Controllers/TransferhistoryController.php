<?php



namespace App\Http\Controllers;
use App\User;
use App\RegisterClient;
use Illuminate\Http\Request;
use App\Balancetransfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TransferhistoryController extends Controller
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
            $username = Auth::user()->username;

            $balancetransfer = Balancetransfer::all()->toArray();
            $totalbalancetransfer = collect($balancetransfer)->where('senderuserid', $user_id)->all();
            $morebalancetransfer = collect($balancetransfer)->where('receiverusername', $username)->all();



            return view('/transferhistory', compact('totalbalancetransfer','morebalancetransfer'));

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
