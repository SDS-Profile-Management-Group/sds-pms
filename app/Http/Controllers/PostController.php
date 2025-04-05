<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Posts\Post;

class PostController extends Controller
{
    public function listPosts(){
        $userID = Auth::user()->asg_username;

        $ownPosts = Post::where('user_id', $userID)->get();
        $publicPosts = Post::where('privacy', false)
            ->where('user_id', '!=', $userID)
            ->get();

        // return view('/home');
    }

    public function createPosts(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $isPrivate = $request->has('is_private') ? true : false;
        $userID = Auth::user()->asg_username;

        $postData = [
            'title' => $incomingFields['title'],
            'content' => [
                'text' => $incomingFields['content'],
                'file' => null // placeholder for file paths
            ],
            'category' => null,
            'tags' => null,
        ];

        Post::create([
            'user_id' => $userID,
            'privacy' => $isPrivate,
            'posts' => json_encode($postData),
        ]);

        return redirect('/home');
    }

}
