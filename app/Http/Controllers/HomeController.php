<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function dashboard(){
        return view('layouts/dashboard');
    }

    public function order(){
        return view('order');
    }

    public function new_order(){
        return view('new_order');
    }

    public function profile(){
        return view ('profile');
    }

    public function product(){
        return view ('product');
    }


    //admin pages
    public function admin_home(){
        return view ('admin.admin_home');
    }

    public function addProduct(){
        return view ('admin.addProduct');
    }

    public function view_orders(){
        return view ('admin.view_orders');
    }

}
