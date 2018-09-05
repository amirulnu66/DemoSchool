<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;

class BlogController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function create(){

    	return view('admin.blog.create');
    }

    	// gallery data insert into database
    public function storeBlog(Request $request){
   
    	$blogTitle=$request->input('blog_title');
		$blogRoute=$request->input('blog_slug');
		$datepicker=$request->input('date_picker');
		$title=$request->input('title');
		$blogDesc=$request->input('blog_desc');

			
		//background iamge storing
		 $photoFile = $request->file('blog_image');
		 $fileExtension = $photoFile->getClientOriginalExtension();
		$filename = str_random(30).".".$fileExtension;
		$destinationPath = 'asset/gallery/';
		$uploaded = $photoFile->move($destinationPath, $filename);

		//Page model object hear........... 
		$blog = new Blog;
    	 // input teacher deatails 
    	  
    	  $blog->blog_title = $blogTitle;
    	  $blog->blog_slug = $blogRoute;
    	  $blog->date_picker = $datepicker;
    	  $blog->title = $title;
    	  $blog->blog_desc = $blogDesc;
    	 
    	  // image file name
    	  $blog->blog_image =$filename; 
    	  
    	 // saving teacher profile
    	 $blogtData = $blog->save(); 

    	 Session::flash('message','Data Posted Successfully');
    	 return redirect()->back();

    }

    // all data show form database
    public function showBlog(){
		 $galleryInfo = Blog::all();
	 return view('admin.blog.show', compact('galleryInfo'));
	}

		// details gallery data in table
	public function editBlog($id){
		 $blog =Blog::where('id',$id)->first();
		 return view('admin.blog.edit', compact('blog'));

	}

	// update data insert into table
	public function updateBlog(Request $request){
		$blogId = $request->input('id');
			if(!empty($blogId)) {

		if(!empty($request->file('blog_image'))) {
			
			//Gallery iamge storing
			$photoFile = $request->file('blog_image');
			$fileExtension = $photoFile->getClientOriginalExtension();
			$filename = str_random(30).".".$fileExtension;
			$destinationPath = 'asset/gallery/';
			$uploaded = $photoFile->move($destinationPath, $filename);
			$blogData = Blog::findOrFail($blogId);
			$blogData->blog_image =$filename;
			$blogData->update();

		}

			$blogData = Blog::findOrFail($blogId);
	        $blogData->blog_title =$request->input('blog_title');
	        $blogData->blog_slug =$request->input('blog_slug');
	        $blogData->date_picker =$request->input('date_picker');
	        $blogData->title =$request->input('title');   
	        $blogData->blog_desc =$request->input('blog_desc');
	        
	        $blogData->update();

	         Session::flash('message', 'Data updated successfully');

	         return redirect()->back();
			}
	}

	public function deleteBlog($id){
		$blog = Blog::find($id)->delete();
		Session::flash('message', 'Data deleted successfully');
	    return redirect()->back();
	}





}
