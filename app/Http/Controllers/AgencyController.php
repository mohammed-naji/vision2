<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index() {
        return view('agency.index');
    }

    public function contact(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name', 'email'));
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'phone' => 'min:8|max:20',
            'message' => 'max:300'
        ]);



    }
}
