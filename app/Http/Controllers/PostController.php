<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;
use App\Models\Category;



use Termwind\Components\Dd;

class PostController extends Controller
{
    public function index ()
    { 
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        $title='';
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name;
        }
        return view ('posts', [
            "title" => "All Posts" . $title,
            "active"=> "posts",
            "posts" => Post::latest()->filter(request(['search' , 'category', 'author']))
            ->paginate(7)->withQueryString()
        ]); 
    }
    public function show(Post $post)
    {
        return view ('post', [
            "title"=>"Single post",
            "active"=> "posts",
            "post" => $post
            ]);
    }
}
