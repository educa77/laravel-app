<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 6;
        $posts = DB::table('posts')->where('id', '=', 5)->delete();
        dd($posts);
    }
}