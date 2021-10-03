<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function calculate($op, $x, $y) {
        $result = 0;
        if($op == 'add') {
            $result = $x + $y;
        }elseif($op == 'sub') {
            $result = $x - $y;
        }elseif($op == 'div') {
            $result = $x / $y;
        }elseif($op == 'mul') {
            $result = $x * $y;
        }else {
            $result = "This Operation not allowed";
        }

        return view('result')->with('value', $result);
    }



    function full_name($fname, $lname) {
        $full_name = "$fname $lname";

        return view('home')->with('full_name', $full_name);
    }
}
