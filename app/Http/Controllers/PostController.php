<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        post::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        return back();
    }
}
