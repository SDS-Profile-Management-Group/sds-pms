<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Posts\Post;

class PostController extends Controller
{
    public function listActivity(){
        $userID = Auth::user()->asg_username;

        $allPosts = Post::latest()->get();
        // $ownPosts = $allPosts->filter(fn($post)=> $post->user_id === $userID);
        // $otherPosts = $allPosts->reject(fn($post)=> $post->user_id === $userID);

        return view('information/posts', compact('allPosts'));
    }

    public function createPosts(Request $request){
        $userID = Auth::user()->asg_username;

        $incomingFields = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'is_announcement' => 'required|boolean',
            'is_academic' => 'required|boolean',
            'is_on_campus' => 'required|boolean',
        ]);

        $postData = [
            'title' => $incomingFields['title'],
            'content' => [
                'text' => $incomingFields['content'],
                'file' => null // placeholder for file paths
            ],
        ];

        Post::create([
            'user_id' => $userID,
            'content' => json_encode($postData),
            'is_announcement' => $incomingFields['is_announcement'],
            'is_academic' => $incomingFields['is_academic'],
            'is_on_campus' => $incomingFields['is_on_campus'],
        ]);

        return back()->with('success', 'Post was successful!');
    }

}
