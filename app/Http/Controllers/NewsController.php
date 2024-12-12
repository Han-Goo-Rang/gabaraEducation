<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show(News $news) {
        return view('news.show', [
            'news' => $news
        ]
    );
    }
}
