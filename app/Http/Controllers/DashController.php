<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        $filepath = resource_path('data/posts_db.json');
        $jsoncontent= file_get_contents($filepath);
        $data = json_decode($jsoncontent,true);
        return Inertia::render('Post/Index',['posts'=>$data]);
    }

    public function create()
    {
        return Inertia::render('Post/Create');
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());

        $filepath = resource_path('data/posts_db.json');
        $jsoncontent= file_get_contents($filepath);
        $data = json_decode($jsoncontent,true);

        $updated = collect($data)->push($post);

        file_put_contents(
            resource_path('data/posts_db.json'),
            $updated->toJson()
        );

        return redirect()->route('posts.index');
    }
}
