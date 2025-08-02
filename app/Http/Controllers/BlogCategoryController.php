<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;

class BlogCategoryController extends Controller
{
    public function index(){
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }

        $blogcategories = BlogCategory::orderBy('created_at', 'desc')->get();        
        return view('admin.blogs_category.index', compact('blogcategories'));
    }

    public function create(){ 
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }       
        return view('admin.blogs_category.add');
    }

    public function edit($id){
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }
        $blogcategory = BlogCategory::find($id);
        // dd($blogcategory); exit;        
        return view('admin.blogs_category.add', compact('blogcategory'));
    }


    public function store(Request $request){
                
        // dd($request->all()); exit;
        $request->validate([
            'category_title' =>'required'
        ]);
        
        // dd($request->all()); exit;

    
        if (!empty($request->id)) {            
            // Fetch the existing blog
            $category = BlogCategory::findOrFail($request->id);

            $category->update([
                'title' => $request->category_title,  
                'status' => 1,                                            
            ]);
                    
            return redirect()->route('admin.blogs.category.index')->with('message', 'Blog Category updated successfully!');
        } else {                                                       
            $category = Blogcategory::create([
                'title' => $request->category_title, 
                'status' => 1,                                              
            ]); 

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Blog Category updated successfully!',
                    'category' => [
                        'id' => $category->id,
                        'title' => $category->title
                    ]
                ]);
            }                    
            return redirect()->route('admin.blogs.category.index')->with('message', 'Blog Category created successfully!');
        }    
    }

    public function destroy($id){  
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }      
        $blog = BlogCategory::find($id);        
        $blog->delete();
        return redirect()->back()->with('message', 'Blog Category deleted successfully!');
    }
}
