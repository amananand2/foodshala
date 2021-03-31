<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class RestaurantController extends Controller
{
    public function register(Request $req)
    {
        $data[] = $req->all();
        $insert = DB::table('restaurants')->insert(['Restaurant_Name'=>$req->name, 'email'=>$req->email, 'password'=>Hash::make($req->password), 'Location'=>$req->locality]);
    }

    public function add_menu()
    {
        $restro = DB::table('restaurants')->select('Restro_name','id')->get();
        $user_id = auth()->user();
        // dd($user_id);
        return view('add_menu')->with('restro', $restro)->with('user', $user_id);
    }

    public function add_item(Request $req)
    {
        $data[] = $req->except(['_token']);
        $insert = DB::table('menu')->insert($data);
        return redirect('/menu');
    }

    public function menu()
    {
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->Restro_name;
        // print_r($user);
        // die();
        $menu = DB::table('menu')->where('restaurant_name', $user_name)->get();
        return view('menu')->with('menu', $menu)->with('user', $user_name);
    }

    public function view_order()
    {
        $user_name = auth()->user()->Restro_name;
        $data = DB::table('orders')->where('restro_name', $user_name)->get();
        // dd($data);
        return view('view_order')->with('user', $user_name)->with('orders', $data);
    }
}
