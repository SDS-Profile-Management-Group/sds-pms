<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function listPosts(){}

    public function createPosts(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
    }

}
