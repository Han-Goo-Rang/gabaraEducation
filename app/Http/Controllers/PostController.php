<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class PostController extends Controller
{
    public function index()
    {

        $categories = Cache::remember('categories',Carbon::now()->addDays(3),function(){
            return Category::whereHas('posts', function($query){
                $query->published();
            })->take(10)->get();
        });

        return view('posts.index', [
            'categories' => $categories
        ]
    );
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]
    );
    }
}
