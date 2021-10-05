<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $name = "Mohammed Naji";
        $avg = 80.5;

        // return view('content')->with('avg', $avg)->with('name', $name); // With Variable
        // return view('content', compact('name', 'avg'));
        // return view('content', [
        //     'name' => $name,
        //     'avg' => $avg
        // ]);
    }

    public function avg($name, $avg)
    {
        // $name = 'Ahmed Ali';
        // $avg = 99.8;
        return view('students.avg', compact('name', 'avg'));
    }

    public function students()
    {

        $stds = [
            ['Sarah Alhayk', 96],
            ['Rahaf Qahwaji', 96],
            ['Hamza Almadhoun', 86],
            ['Mahmoud Alhour', 88],
            ['Ezz Kullab', 101],
            ['Fawzi Abu Shaban', 86.9],
            ['Hany Alsemry', 60],
            ['Khalid Naser', 86.9],
            ['Mohammed Naji', 90.2]
        ];

        return view('students.std', compact('stds'));
    }
}
