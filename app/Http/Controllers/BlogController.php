<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Author;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //
    public function index(){

        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }
        $blogs = Blog::with('author')->with('categories')
        ->orderBy('created_at', 'desc')->get();    
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create(){
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }
        $authors = Author::where('status', 1)->get();
        $categories = BlogCategory::where('status', 1)->get();
        return view('admin.blogs.add', compact('authors', 'categories'));
    }

    public function edit($id){
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }
        $blog = Blog::find($id);
        $authors = Author::where('status', 1)->get();

        $current_author = Author::where('status', 1)->where('id', $blog->author_id)->first();
        $categories = BlogCategory::where('status', 1)->get();
        return view('admin.blogs.add', compact('blog', 'authors', 'current_author', 'categories'));
    }

    public function store(Request $request){
        
        
        $request->validate([
            'blog_title'      => 'required|string|max:255',
            'description'     => 'required|string',
            'image'           => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg,png',
            'author_id'       => 'required',                 
            'author_designation' => 'required|string|max:255',
            'seo_url'         => 'required|string|max:255',
            'meta_title'      => 'nullable|string|max:255',
            'meta_keywords'   => 'nullable|string|max:255',
            'meta_keywords.*' => 'string|max:50',
            'meta_description'=> 'nullable|string|max:500',
            'category_ids'     => 'required|array',  // Ensure categories are selected
            'category_ids.*'   => 'exists:blog_categories,id' // Ensure valid category IDs
        ],[
            'blog_title.required'         => 'Please enter the blog title.',
            'description.required'        => 'The blog description is required.',
            'image.image'                 => 'The uploaded file must be an image.',
            'image.mimes'                 => 'Allowed image formats: jpeg, png, jpg, gif, svg.',
            'author_id.required'          => 'Please select an author.',
            'author_designation.required'=> 'Author designation is required.',
            'seo_url.required'            => 'SEO URL is required.',
            'category_ids.required'       => 'Please select at least one category.',
            'category_ids.*.exists'       => 'One or more selected categories are invalid.',
        ]
    
        );

                
        
        $metaKeywordsString = $request->meta_keywords;
    
        if (!empty($request->id)) {            
            // Fetch the existing blog
            $blog = Blog::findOrFail($request->id);
                    
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if (!empty($blog->image) && file_exists(public_path($blog->image))) {
                    unlink(public_path($blog->image));
                }
                        
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('blogs'), $imageName);
                $imagePath = 'blogs/' . $imageName;
            } else {
                $imagePath = $blog->image;
            }

            
            if ($request->hasFile('author_image')) {                
                if (!empty($blog->author_image) && file_exists(public_path($blog->author_image))) {
                    unlink(public_path($blog->author_image));
                }
                        
                $image_auth = $request->file('author_image');
                $imageName_auth = time() . '.' . $image_auth->getClientOriginalExtension();
                $image_auth->move(public_path('blogs'), $imageName_auth);
                $imagePath_auth = 'blogs/' . $imageName_auth;
            } else {
                $imagePath_auth = $blog->author_image;
            }
            
            $blog->update([
                'blog_title'      => $request->blog_title,
                'description'     => $request->description,
                'image'           => $imagePath,
                'author_id'       => $request->author_id,                    
                'seo_url'         => $request->seo_url,
                'meta_title'      => $request->meta_title,
                'meta_keywords'   => $metaKeywordsString, // Ensure it's a string
                'meta_description'=> $request->meta_description,
            ]);

            // Sync the selected categories (removes old, adds new)
            $blog->categories()->sync($request->category_ids);
        
            return redirect()->route('admin.blogs.index')->with('message', 'Blog updated successfully!');
        } else {                       
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('blogs'), $imageName);
                $imagePath = 'blogs/' . $imageName;
            } else {
                $imagePath = null;
            }                        

            // dd($request->all()); exit;
                    
            // $blog = new Blog();

            $blog = Blog::create([
                'blog_title'      => $request->blog_title,
                'description'     => $request->description,
                'image'           => $imagePath,
                'author_id'       => $request->author_id,                
                'seo_url'         => $request->seo_url,
                'meta_title'      => $request->meta_title,
                'meta_keywords'   => $metaKeywordsString,
                'meta_description'=> $request->meta_description,
            ]); 
            
            $blog->categories()->attach($request->category_ids);
            return redirect()->route('admin.blogs.index')->with('message', 'Blog created successfully!');
        }
        

    }
    
    public function destroy($id){   
        if (Auth::user()->name != 'admin'  && Auth::user()->name != 'Admin') {
            abort(403, 'No permission to access this resource.');
        }     
        $blog = Blog::find($id);
        if (!empty($blog->image) && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }
        $blog->delete();
        return redirect()->back()->with('message', 'Blog deleted successfully!');
    }
}
