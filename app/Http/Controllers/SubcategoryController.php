<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use\App\Subcategory;
use\App\Category;
use\App\Product;

use Session;

class SubcategoryController extends Controller
{
    public $flag3;

    public function __construct()
      {
        //blockio init
       $flag3=__class__;
   
       session()->put('flag3',$flag3);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = Subcategory::orderBy('subcategory', 'asc')->paginate(2);
        return view('subcategory.index')->withsubcategory($subcategory);
    }
public function subcategoryinfo($category_id)
    {
          $subcategories = Subcategory::where('category_id', $category_id)->paginate(20);
        return view('subcategory.subcategoryinfo')->withsubcategories($subcategories);
    }

    public function subcategoryinfoblade($category_id)
    {
          $subcategory = Subcategory::where('category_id', $category_id)->paginate(500);
        return view('subcategory.subcategoryinfoblade')->withsubcategory($subcategory);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {   
        $data=Category::pluck('category', 'id')->toArray(); 
         return view('subcategory.create')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
               
                'subcategory'         => 'required'
                            
                
                
                 ));
            

   $subcategory = new Subcategory;

        $subcategory->subcategory = $request->subcategory;
        $subcategory->category_id = $request->category_id;
       

           $subcategory->save();

            return redirect('categoryinfo');
          
    }


          public function subcategoryshow($id)
    {
         $products = Product::where('subcategory_id', $id)->get();
        return view('subcategory.subcategoryshow', ['products' => $products]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$subcategory = subcategory::find($id);
        return view('subcategory.show')->withsubcategory($subcategory);*/


         $products = Product::all();
        //$product = Product::find($id);
        $products = Product::where('subcategory_id', $id)->get();
        return view('subcategory.show', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        
        return view('subcategory.edit')->withsubcategories($subcategory);
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
        $this->validate($request, array(

                'subcategory'         => 'required'
                             
                 ));
            


             $subcategory = Subcategory::find($id);

            $subcategory->subcategory = $request->input('subcategory');
              
       
            $subcategory->save();

             return redirect('categoryinfo');
    }


       public function subcategory($id)
    {
        {

        $products = Product::all();
        //$product = Product::find($id);
        $products = Product::where('subcategory_id', $id)->get();
        return view('shop.shopping-details', ['products' => $products], ['product' => $product]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $subcategory = Subcategory::find($id);
         
        $subcategory->delete();
          return redirect('categoryinfo');
    }
}
