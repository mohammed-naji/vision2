<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    function index() {
        return view('portfolio.index');
    }

    function portfolio() {
        return view('portfolio.portfolio');
    }

    function about() {
        return view('portfolio.about');
    }

    function contact() {
        return view('portfolio.contact');
    }

    function contactSubmit(Request $request) {
        // dd($request->all());

        // Validation
        // 1 . Request Validate
        // 2 . Validator Class
        // 3 . File Request

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|min:8|max:20',
            'message' => 'required|max:200',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        // $name = $request->input('name');
        // dd($request->name, $request->email);

        return view('portfolio.welcome', compact('name', 'email', 'phone', 'message'));

    }
}
