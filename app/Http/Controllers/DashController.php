<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class DashController extends Controller
{
    public function index(){
        return Inertia::render('Home');
    }
    
    public function list(){
        $filepath = resource_path('data/PostDB.json');
        $jsoncontent= file_get_contents($filepath);
        $data = json_decode($jsoncontent,true);
        return Inertia::render('Post/Index',['posts'=>$data]);
    }

    public function show(Request $request, $id){
        $filepath = resource_path('data/PostDB.json');
        $jsoncontent= file_get_contents($filepath);
        $data = json_decode($jsoncontent,true);
       
        $post = collect($data)->where('id',1)->first();
        return Inertia::render('Post/Show',['post'=>$post]);
    }

    public function create()
    {
        return Inertia::render('Post/Create');
    }

    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->id = random_int(3,10);

        $filepath = resource_path('data/PostDB.json');
        $jsoncontent= file_get_contents($filepath);
        $data = json_decode($jsoncontent,true);

        $updated = collect($data)->push($post);

        file_put_contents(
            resource_path('data/PostDB.json'),
            $updated->toJson()
        );

        return redirect('/');
    }
}
