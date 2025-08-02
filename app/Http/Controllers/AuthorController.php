<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){

        $authors = Author::orderBy('created_at')->get();

        return view('admin.authors.index', compact('authors'));
    }

    public function create(){
        return view('admin.authors.add');
    }


    public function edit($id){
        $author = Author::find($id);        
        return view('admin.authors.add', compact('author'));
    }


    public function store(Request $request){
        

        $request->validate([            
            'about_author'     => 'required|string',            
            'author_image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,png',
            'author_name'    => 'required|string|max:255',
            'author_designation' => 'required|string|max:255',            
        ]);

        // dd($request->all(), 'hello !'); exit;
                
    
        if (!empty($request->id)) {            
            // Fetch the existing blog
            $author = Author::findOrFail($request->id);
            
            
            if ($request->hasFile('author_image')) {                
                if (!empty($author->author_image) && file_exists(public_path($author->author_image))) {
                    unlink(public_path($author->author_image));
                }
                        
                $image_auth = $request->file('author_image');
                $imageName_auth = time() . '.' . $image_auth->getClientOriginalExtension();
                $image_auth->move(public_path('authors'), $imageName_auth);
                $imagePath_auth = 'authors/' . $imageName_auth;
            } else {
                $imagePath_auth = $author->author_image;
            }
            
            $author->update([                
                'author_image'    => $imagePath_auth,
                'name'    => $request->author_name,
                'designation'    => $request->author_designation,
                'about' => $request->about_author                
            ]);
        
            return redirect()->route('admin.authors.index')->with('message', 'Author updated successfully!');
        } else {                                   
            
            // dd($request->all(), 'hii !'); exit;
            if ($request->hasFile('author_image')) {                        
                $image_auth = $request->file('author_image');
                $imageName_auth = time() . '.' . $image_auth->getClientOriginalExtension();
                $image_auth->move(public_path('authors'), $imageName_auth);
                $imagePath_auth = 'authors/' . $imageName_auth;
            } else {
                $imagePath_auth = null;
            }

            // dd($request->all(), 'hii !'); exit;
                    
            Author::create([
                'author_image'    => $imagePath_auth,
                'name'    => $request->author_name,
                'designation'    => $request->author_designation,
                'about' => $request->about_author 
            ]);        
            return redirect()->route('admin.authors.index')->with('message', 'Author created successfully!');
        }
        

    }
}
