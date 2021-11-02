<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{


    function one_to_one() {


        // $user = User::where('name', 'like', '%Mohammed%')->get();
        // $user = User::findOrFail(1);
        // $phone = Phone::where('user_id', $user->id)->first();
        // dd($user, $phone);

        // $phone = Phone::where('user_id', $user->id)->first();
        // dd($user, $phone);


        // $user = User::join('phones', 'users.id', 'phones.user_id')->first();
        // dd($user);

        // $user = User::find(1);
        // dd($user->phone);

        $phone = Phone::find(1);
        dd($phone->user);

    }

    public function one_to_many()
    {
        // $post = Post::find(1);
        // dd($post->comments);

        // $comment = Comment::find(1);
        // dd($comment->post, $comment->user);

        $user = User::find(2);
        dd($user->comments);
    }

}
