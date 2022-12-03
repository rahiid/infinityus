<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use app\User;
use Illuminate\Support\Facades\DB;

class investnow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invest:now';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Commmand will add interest to invest';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /***
        old code
        DB::table('users')->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.035)'),
        ]);
         ***/

        /***seperate all the users who's package is beginar, then increase their wallet value**/
        $beginar = DB::table('users')->where('package', '=', 'beginar')->get();
        foreach ($beginar as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.03)'),
            ]);
        }


        /***seperate all the users who's package is pro, then increase their wallet value**/
        $pro = DB::table('users')->where('package', '=', 'pro')->get();
        foreach ($pro as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.03)'),
            ]);
        }

        /***seperate all the users who's package is sweep, then increase their wallet value**/
        $sweep = DB::table('users')->where('package', '=', 'sweep')->get();
        foreach ($sweep as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.0325)'),
            ]);
        }

        /***seperate all the users who's package is ethnic, then increase their wallet value**/
        $ethnic = DB::table('users')->where('package', '=', 'ethnic')->get();
        foreach ($ethnic as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.0325)'),
            ]);
        }

        /***seperate all the users who's package is silver, then increase their wallet value**/
        $silver = DB::table('users')->where('package', '=', 'silver')->get();
        foreach ($silver as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.035)'),
            ]);
        }

        /***seperate all the users who's package is golden, then increase their wallet value**/
        $golden = DB::table('users')->where('package', '=', 'golden')->get();
        foreach ($golden as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.035)'),
            ]);
        }

        /***seperate all the users who's package is diamond, then increase their wallet value**/
        $diamond = DB::table('users')->where('package', '=', 'diamond')->get();
        foreach ($diamond as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.035)'),
            ]);
        }

        /***seperate all the users who's package is platinum, then increase their wallet value**/
        $platinum = DB::table('users')->where('package', '=', 'platinum')->get();
        foreach ($platinum as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'wallet' => DB::raw('(wallet) + ((invest)*0.04)'),
            ]);
        }




        /****Daily increment user table inf value if invest is not "none"
        $users = DB::table('users')->where('package', '!=', 'none')->get();
        foreach ($users as $user) {
            DB::table('users')->where('id', '=', $user->id)->update([
                'inf' => DB::raw('(inf) + ((inf) + 1)'),
            ]);
        }
        **********/

    }
}
