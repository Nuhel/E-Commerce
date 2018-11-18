<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use\App\Requestproduct;

use Session;
use Image;
use Redirect;


class RequestproductController extends Controller
{
    

   public $flagrequest;

  public function __construct()
  {
        //blockio init
   $flagrequest=__class__;
   
   session()->put('flagrequest',$flagrequest);
 }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requestproduct = Requestproduct::orderBy('id', 'asc')->paginate(20);
        return view('requestproduct.index')->withrequestproduct($requestproduct);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requestproduct.create');
    }
 

    public function store(Request $request)
    {

         $this->validate($request, array(
 
  'description'       => 'required',
  'mobile'            =>'required|regex:/(01)[0-9]{9}/'

));


        

            $requestproduct = new Requestproduct;

            $requestproduct->description = $request->description;
            $requestproduct->mobile = $request->mobile;

 if ($request->hasFile('image')) {

  $image = $request->image;
  $filename = time() . '.' . $image->getClientOriginalExtension();
  $location =('blogs/' . $filename);
  Image::make($image)->save($location);

  $requestproduct->image = $filename;

}
$requestproduct->save();

       

            return Redirect::to('/')->with('success', 'Thanks for your product request!');
          
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        $requestproduct = Requestproduct::where('id', $id)->get();
        return view('requestproduct.show', ['requestproduct' => $requestproduct]);
    }

    
    
    public function destroy($id)
    {
         $requestproduct = requestproduct::find($id);
         
        $requestproduct->delete();

        return redirect()->route('requestproductinfo')->with('success', 'requestproduct Deleted!');
    }
}
