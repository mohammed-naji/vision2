<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $content = 'This is home page content';
        return view('site.index')->with('content', $content);
        // return view('site.index', compact('content'));
        // return view('site.index', [
        //     'content' => $content
        // ]);
    }

    public function about()
    {
        $content = 'This is about page content';
        return view('site.about')->with('content', $content);
    }

    public function contact()
    {
        $content = 'This is contact page content';
        return view('site.contact')->with('content', $content);
    }

    public function team()
    {
        $content = 'This is team page content';
        return view('site.team')->with('content', $content);
    }

    public function services()
    {
        $content = 'This is services page content';
        return view('site.services')->with('content', $content);
    }

    public function blog()
    {
        $content = 'This is blog page content';
        return view('site.blog')->with('content', $content);
    }
}
