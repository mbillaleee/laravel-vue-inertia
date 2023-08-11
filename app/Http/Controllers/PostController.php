<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // return Inertia::render('Post/Index');
        return inertia()->render('Post/Index', [
            'posts' => PostResource::collection(Post::with('user')->latest()->get())
        ]);
    }
}
