<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Canvas\Models\Settings;
use Canvas\Helpers\CanvasHelper;
use Illuminate\Support\Facades\App;
use Canvas\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Post::all(),
            'recentPosts' => Post::orderBy('created_at', 'desc')->take(4)->get(),
            'analytics' => Settings::gaId(),
            'canvasVersion' => Settings::canvasVersion(),
            'latestRelease' => Settings::latestRelease(),
        ];

        return view('home', compact('data'));
    }
}
