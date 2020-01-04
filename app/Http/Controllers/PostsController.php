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
//            'content',.
//            'user_id'
//        ]));

    }

    public function edit($id){

       $post = Post::find($id);
       if (!$post){
          return redirect('/posts');
       }
//        return view('posts.edit',compact(['post']));//compact قمت بعمل  لإرجاع القيم ال


//        return view('posts.edit',[       //حل آخر لإرجاع القيم
//            'post'=>$post
//        ]);


         return view('posts.edit')->with([        //حل آخر لإرجاع القيم
            'post'=>$post
        ]);
    }



    public function update(Request $request, $id){

        $post = Post::find($id);
        if (!$post){
            return redirect('/posts');
        }
        //الطريقة الأولى لعمل الupdate
        $post->content =$request->input('content');
        $post->save();
        return redirect('/posts');


        //الطريقة الثانية هنا يطبق على جميع الريكورد
//        $post->update([
//            'content'=> $request->input('content')
//        ]);


        //الطريقة الثالثةهنا قمت بعمل شرط وتحديد  من سيرجع
//        Post::where('id',$id)->update([
//           'content' => $request->input('content')
//        ]);
    }


    public function destroy($id){

        $post = Post::find($id);
        if (!$post){
            return redirect('/posts');
        }
        //الطريقة الأولى
        $post->delete();
        return redirect('/posts');

        //الطريقة الثانيةوهذه الطريقة تغنيني عن كل الخطوات السابقة
        Post::where('id',$id)->delete();
    }
}
