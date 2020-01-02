<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index(){

        return Post::all();//راح ترجع كل الريكورد الموجودة
    }

    public function create(){

        return view('posts.create');
    }

    public function store(Request $request){
//هنا بخزن في الDB
        //الطريقة الأولى
        $post = new Post();
        $post->content = $request->input('content');
        $post->user_id = null;
        $post->save();

       return redirect('/posts');
//       return redirect()->action('index');


        //الطريقة الثانيةولكن لازم أعمل في المودل أمر ال fillable
//        Post::create([
//            'content'=> $request->input('content'),
//            'user_id'=>null,
//        ]);

        //الطريقة الثالثة
////        Post::create($request->all([]));//هذه بجيب الكل
//        Post::create($request->only([
//            'content',
//            'user_id'
//        ]));

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
