<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class catController extends Controller
{
    //
    public function manageCategory()
    {
        return view('blog.manage-category', ['posts' => Category::latest()->paginate(6)]);
    }
    
  //show add post page
  public function addCategory()
  {
      return view('blog.add-category');
  }

  //store posts
  public function storeCategory(Request $request)
  {

    $formFields= $request->validate([
       "title" => 'required',
       "body" => 'required',
       "featured" => 'required',
    ]);


    Category::create($formFields);

    return redirect("/admin/manage-category")->with('message', 'Category added successfully');
  }

    //show edit post page
    public function editCategory($id)
     {
      $cat = Category::find($id);
      return view('blog.edit-category', compact('cat'));
    }

    public function updateCat(Request $request, $post)
    {
      $formFields= $request->validate([
        "title" => 'required',
        "body" => 'required',
       ]);

      // $post->update($formFields);
      Category::where('id', $post)->update([
        "title" => $request->input('title'),
        "body" => $request->input('body')
      ]);

    
      // dd($request);
      return back()->with('message', 'Category updated successfully');

    }

    public function destroy(Request $request, $post)
    {
        Category::where('id', $post)->delete();
        return redirect('/admin/manage-category')->with('message', 'Category deleted successfully');
    }
}
