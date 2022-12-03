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
use TCG\Voyager\Alert;
use TCG\Voyager\Traits\AlertsMessages;



class BalancetransferController extends Controller
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

            $balancetransfer = Balancetransfer::all()->toArray();
            $balancetransfer = collect($balancetransfer)->where('senderuserid', $user_id)->all();

            return view('/balancetransfer', compact('balancetransfer'));

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
        $rusername = $request->input('receiverusername');

        if (DB::table('users')->where('username', $rusername)->exists()) {
            $tranfererusername = Auth::user()->id;
            $tranfererchilds = DB::table('users')->where('hashd', $tranfererusername)->value('id');

            // check if any tranfererchilds form users table has more than 0 in invest column
            $chlidinvestcheck = DB::table('users')->where('id', $tranfererchilds)->sum('invest');

            if ($chlidinvestcheck > 0) {

            $Balancetransfer = new Balancetransfer;
            $Balancetransfer->senderuserid = $request->senderuserid;
            $Balancetransfer->senderusername = $request->senderusername;
            $Balancetransfer->receiverusername = $request->receiverusername;
            $Balancetransfer->ammount = $request->ammount;
            $Balancetransfer->save();



            $remail = Auth::user()->email;
            $rname = Auth::user()->name;

            $inputs = [
                'receiverusername'=> $request->input('receiverusername'),
                'ammount'=> $request->input('ammount'),
                'senderusername'=> $request->input('username')
            ];

            Mail::send('emails.balancetransfermail', $inputs, function ($mail) use ($inputs, $remail, $rname) {
                $mail->from('info@INFINITYUS.com', "INFINITYUS", )
                ->to($remail, $rname)
                ->subject("INFINITYUS Balance Transfer");
            });

            $transferammount = $request->input('ammount');


            $racc = DB::table('users')->where('username', $rusername)->value('wallet');
            $newreceiveracc =  ($racc + $transferammount);
            DB::table('users')->where('username', $rusername)->update(array('wallet' => $newreceiveracc));


            $sendername = $request->input('senderusername');
            $senderacc = DB::table('users')->where('username', $sendername)->value('wallet');
            $newsenderacc = ($senderacc - $transferammount);
            DB::table('users')->where('username', $sendername)->update(array('wallet' => $newsenderacc));


            return redirect('/dashboard');
            }

            else{
                echo "<script>alert('Clid did not Not Invest! Please try later.');</script>";


                return redirect('/balancetransfer')->with('alert', 'Child did not Not Invest! Please try later!');

            }



        }

        else{
            echo "<script>alert('User Not Found! Please try again.');</script>";

            return redirect('/balancetransfer')->with('alert', 'User Not Found! Please try again!');
        }




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
