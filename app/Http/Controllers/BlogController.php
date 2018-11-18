<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use App\Newsletter;
use Image;
use Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use DB;
use Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

  public $flag;

  public function __construct()
  {
        //blockio init
   $flag=__class__;
   
   session()->put('flag10',$flag);
 }


    public function index()
    {
        $posts =  Blog::orderBy('id', 'desc')->paginate(10);
        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{   
  
  return view('blog.create');
}



public function store(Request $request)
{
 $this->validate($request, array(
  
        'title' =>'required'
));


 $blog = new Blog;

 $blog->title = $request->title;
 $blog->description = $request->description;

 if ($request->hasFile('image')) {

  $image = $request->image;
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location =('front/images/' . $filename);
  Image::make($image)->save($location);

  $blog->image = $filename;

}
$blog->save();



    $latestpost = Blog::orderBy('id', 'DESC')->take(1)->get();
    
    foreach ($latestpost as $latestpost1) {
        $id = $latestpost1->id;
        
    }

 session()->put('id',$id);


Session::flash('blog', 'New post Added!');

$newsletter = Newsletter::all();

foreach ($newsletter as $sendemail) {
     $allemail = $sendemail->emails;
     Session::flash('email', $allemail);
      

$user = [
           
            'email' => $allemail,
        ];

        
        {

       
            Mail::send('blog.newslettertext', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Warehouse');
            });




            DB::commit(); 

        }
        
}



return redirect()->route('blog.create', $blog->id);
}


public function newslettertext(){


    $latestpost = Blog::orderBy('id', 'DESC')->take(1)->get();
    
    foreach ($latestpost as $latestpost1) {
        $id = $latestpost1->id;
        
    }
   
     return view('blog.newslettertext')->with('id', $id);

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showsingle($id)
    {
        
        
        $blog = Blog::find($id);
        $posts = Blog::all();
        $latestblogs = Blog::orderBy('id', 'desc')->paginate(3);
        $olderblogs = Blog::orderBy('id', 'asc')->paginate(8);
        return view('blog.showsingle')->with('blog', $blog)->with('posts', $posts)->with('latestblogs', $latestblogs)->with('olderblogs', $olderblogs);
    }


     public function blogmanage()
    {
        
        
        $posts = Blog::all();
        $posts = Blog::orderBy('id', 'desc')->paginate(100);
        return view('blog.blogmanage')->with('posts', $posts);
    }



     public function blogdetails($id)
    {
        
        
        $blogdetails = Blog::find($id);
        return view('blog.blogdetails')->with('blogdetails', $blogdetails);
    }


    public function edit($id)
    {
        $blogdetails = Blog::find($id);
        return view('blog.edit')->with('blogdetails', $blogdetails);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    $blogs = Blog::find($id);

 $blogs->title = $request->input('title');
 $blogs->description = $request->input('description');

 if ($request->hasFile('image')) {

  $image = $request->file('image');
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location =('blogs/' . $filename);
  Image::make($image)->save($location);

  $oldFilename = $blogs->image;  
  $blogs->image = $filename;

  Storage::delete($oldFilename);


}
$blogs->save();

Session::flash('success', 'Blog Info Updated!');

return redirect()->route('blogdetails', $blogs->id);
}


public function destroy($id)
{
 $blogs = BLog::find($id);

 Storage::delete($blogs->image);

 $blogs->delete();
 return redirect()->route('blogmanage');
}

public function unsubscribe($email){

    DB::table('newsletters')->where('emails', $email)->delete();
    Session::flash('success', 'Succefully unsubscribed!');
    return redirect()->route('index2');
}



}
