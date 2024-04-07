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

class KegiatanController extends Controller
{

    public function index()
    {
        $posts = Post::published()->where(['blog_category_id' => 1])->orderBy('published_at', 'DESC')->get();

        return view('kegiatan.index', compact('posts'));
    }

    public function view($id)
    {
        $post = Post::find($id);

        return view('kegiatan.view', compact('post'));
    }
}
