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
}
