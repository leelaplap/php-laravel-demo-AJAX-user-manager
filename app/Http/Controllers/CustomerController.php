<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $customers = Customer::where('name', 'LIKE', "%$request->keyword%")->get();
            return response()->json($customers);
        }
    }
}
