<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Product;
use App\Category;
use App\Blog;
use App\User;
use Auth;
use Session;
use Redirect;
class CommentsController extends Controller
{
        public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $category_id)
    {

 $this->validate($request, array(
 
  'name'       => 'required|min:3',
  'comment'            =>'required',
  'price'            =>'required',
  'quality'            =>'required',
  'value'            =>'required',
  'email'            =>'email|required',

));
         
         $user=Auth::user('id'); 

        $product = Product::find($id);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->product()->associate($product);
        $comment->user()->associate($user);
        $comment->price = $request->price;
        $comment->quality = $request->quality;
        $comment->value = $request->value;

        $comment->save();

      

        Session::flash('comments', 'Thanks for your feedback!');
        $reviews = Comment::where('product_id', $id)->get();
       
        $totalstar=0;
        $number=0;
        foreach ($reviews as $calculate) {
            $number++;
            $singlestar=$calculate->quality;
            $totalstar+=$singlestar;
        }
      
       
        $average = $totalstar/$number;
         $review = round($average);
        
        \DB::table('products')
            ->where('id', $id)
            ->update(['review' => $review]);


          return Redirect::back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $comment = Comment::find($id);
        return view('comments.edit')->withComment($comment);
    }



    public function update(Request $request, $id)
    {
         $this->validate($request, array(
 
  //'name'       => 'required|alpha|min:3',
  'comment'            =>'required|min:3'
 // 'email'            =>'email|required',

));
         $comment = Comment::find($id);

        $this->validate($request, array('comment' => 'required'));

        $comment->comment = $request->comment;
        $comment->save();

        Session::flash('success', 'Review Updated successfully!');

        return redirect()->route('item.show', $comment->product->id);
    }



  public function edituser($id, $proid, $catid)
    {
         $comment = Comment::find($id);
        return view('comments.edituser')->withComment($comment)->withproid($proid)->withcatid($catid);
    }



    public function updateuser(Request $request, $id, $proid, $catid)
    {


                $this->validate($request, array(
 
  'name'       => 'required|min:3',
  'comment'            =>'required',
  'email'            =>'email|required',

));
         $comment = Comment::find($id);

        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->save();

        Session::flash('review', 'Review Updated successfully!');

        return Redirect::back();
    }

        public function delete($id)
    {
        $comment = Comment::find($id);
        return view('comments.delete')->withComment($comment);
    }

   
   
    public function destroy($id)
    {
        
        $comment = Comment::find($id);
        $id = $comment->product->id;
        $comment->delete();

        Session::flash('success', 'Review deleted successfully!');

        return redirect()->route('item.show', $id);
    }

     public function destroyuser($id)
    {

        $comment = Comment::find($id);
        $id = $comment->product->id;
        $comment->delete();

        Session::flash('success', 'Review deleted successfully!');

         return Redirect::back();
    }
}
