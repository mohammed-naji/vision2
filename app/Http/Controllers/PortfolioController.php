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
        // $data = explode('.', 'one_dd.ahmed.student.jpg');
        // $ex = $data[ count($data) - 1 ];
        // $ex = end($data);
        // dd($data, $ex);

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
            'image' => 'mimes:jpg'
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        // $name = $request->input('name');
        // dd($request->name, $request->email);
        $imgname = $request->file('image')->getClientOriginalName();
        $ex = $request->file('image')->getClientOriginalExtension();
        $imgname = 'vision_'.time().'_'.rand().'.'.$ex;
        $request->file('image')->move(public_path('uploads'), $imgname);

        return view('portfolio.welcome', compact('name', 'email', 'phone', 'message'));

    }
}
