<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class blogController extends Controller
{
    //index page
    function index () {

     
      $category= Category::where("featured", "yes")->get();
      $users= User::with('posts')->get();

      // dd($users);
        return view('blog.index', ['posts' => Post::latest()->paginate(6)],  compact('category', "users"));
    }

    //admin page
    function admin () {

      $category= Category::where("featured", "yes")->get();
        return view('blog.dashboard', ['posts' => Post::latest()->paginate(6)], compact('category'));
    }
    //show edit post page
    public function singlePost($id)
    {

      $category = Category::where("featured", "yes")->get();
      $post = Post::find($id);
      return view('blog.posts', compact('post', 'category'));
    }

    //show add post page
    public function addPost()
    {
      $category= Category::where("featured", "yes")->get();
        return view('blog.add-post', compact("category"));
    }

    //store posts
    public function storePost(Request $request)
    {

      $formFields= $request->validate([
         "title" => 'required',
         "body" => 'required',
         "category" => 'required',
         "featured" => "required"
      ]);

      $formFields['image']="";
      if($request->hasFile('image')){
        $formFields['image']=$request->file('image')->store('images', 'public');
        
      }
      $formFields['user_id']= auth()->id();
      Post::create($formFields);

      return redirect("/admin")->with('message', 'Post added successfully');;
    }

      //show edit post page
      public function editPost($id)
      {

        $category = Category::where("featured", "yes")->get();
        $post = Post::find($id);
        return view('blog.edit-post', compact('post', 'category'));
      }

      public function updatePost(Request $request, $post)
      {
        
      //   $formFields= $request->validate([
      //     "title" => 'required',
      //     "body" => 'required',
      //     "category" => 'required',
      //     "featured" => "required",
      //     "image" => "nullable"
      //  ]);

      //  dd($formFields);
      // $formFields['image']="";
       
      //  if($request->hasFile('image')){
      //    $formFields['image']=$request->file('image')->store('images', 'public');
      //  }
       
      //  dd($request->all());

        // $post->update($formFields);
        Post::where('id', $post)->update([
          "title" => $request->input('title'),
          "body" => $request->input('body'),
          "category" => $request->input('category'),
          "featured" => $request->input('featured'),
          "image" => $request->file('image')->store('images', 'public')
        ]);


        // dd($request);
        return back()->with('message', 'Post updated successfully');

      }


      public function destroy(Request $request, $post)
    {
        Post::where('id', $post)->delete();
        return redirect('/admin')->with('message', 'Post deleted successfully');
    }
      

    public function about()
    {
      return view('blog.about');
    }

    public function blog()
    {
      $posts = Post::latest()->get();
      $users= User::with('posts')->get();

      return view('blog.blog', compact('posts', 'users'));
    }

    public function contact()
    {
      return view('blog.contact');
    }

    public function services()
    {
      return view('blog.service');
    }
}
