<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class CustomerController extends Controller
{
    public function view_menu()
    {
        $menu = DB::table('menu')->get();
        // print_r($menu);
        // die();
        return view('view_menu')->with('menu',$menu);
    }

    public function order(Request $req)
    {
        // print_r($req->restro_name);
        // die();
        if($user = Auth::user()) {
            // The user is logged in...
            $user_id = auth()->user()->id;
            $user_name = auth()->user()->Customer_name;
        // dd($user_id);
            $menu = DB::table('orders')->insert(['restro_name'=>$req->restro_name, 'item_name'=>$req->item_name, 'customer_id'=>$user_id, 'customer_name'=>$user_name, 'menu_id'=>$req->id]);
        }

        else{
            return Redirect::to('/login/customer');
        }
    }
}
