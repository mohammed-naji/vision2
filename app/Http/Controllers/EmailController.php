<?php

namespace App\Http\Controllers;

use App\Mail\PersonalMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index() {
        return view('email.index');
    }

    public function emailData(Request $request)
    {
        /*
        1. Request Validate => $request->validate
        2. Validator Class
        3. File Request
        */

        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:300'
        ],[
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'الايميل مطلوب',
            'email.email' => 'الحقل المدخل ليس بريد الكتروني صحيح',
            'message.required' => 'الرسالة مطلوبة',
        ])->validate();
        // dd($request->all());

        $data = $request->except('_token');

        Mail::to('info@test.com')->send(new TestMail($data));
        return 'Message sent';
    }



    public function cv()
    {
        return view('email.cv');
    }

    public function cvData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'education' => 'required',
            'cv' => 'required|mimes:pdf',
        ]);


        // Uplad CV File
        $ex = $request->file('cv')->getClientOriginalExtension();
        $new_name = 'cv_'.time().'_'.rand().'.'.$ex;
        $request->file('cv')->move(public_path('uploads/cvfiles'), $new_name);

        $data = $request->except('_token', 'cv');
        $data['pdf'] = $new_name;

        // Send Message to the site admin
        Mail::to('admin@test.com')->send(new PersonalMail($data));

        // dd($request->except('_token'));
    }
}
