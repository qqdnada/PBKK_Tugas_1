<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    
    public function index()
    {
    	// mengambil data dari table customer
        // $pelanggan = DB::select('select * from sales.customers where customer_id > 480 and customer_id < 501', array('publish'));
        $pelanggan = DB::table('sales.customers')->whereBetween('customer_id', [481, 500])->get();

    	// mengirim data customer ke view customer
    	return view('customer',['pelanggan' => $pelanggan]);
 
    }
}
