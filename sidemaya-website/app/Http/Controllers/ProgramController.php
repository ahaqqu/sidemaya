<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stephenjude\FilamentBlog\Models\Post;

class ProgramController extends Controller
{

    public function index()
    {
        $posts = Post::published()->where(['blog_category_id' => 2])->orderBy('published_at', 'DESC')->get();

        return view('program.index', compact('posts'));
    }

    public function view($id)
    {
        $post = Post::find($id);

        return view('program.view', compact('post'));
    }
}
