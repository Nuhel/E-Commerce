<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use\App\Category;
use\App\Product;

use Session;

class CategoryController extends Controller
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
        $category = Category::orderBy('category', 'asc')->paginate(2);
        return view('category.index')->withcategory($category);
    }
public function categoryinfo()
    {
          $category = category::orderBy('id', 'asc')->paginate(500);
        return view('category.categoryinfo')->withcategory($category);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, array(
               
                'category'         => 'required'
                            
                
                
                 ));
            

   $category = new Category;

        $category->category = $request->category;
       

           $category->save();

            return redirect()->route('categoryinfo')->with('success', 'Category Added!');;
          
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $products = Product::all();
        $products = Product::where('category_id', $id)->get();
        return view('category.show', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        
        return view('category.edit')->withcategories($category);
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

                /*'category'         => 'required'*/
                             
                 ));
            


   $categories = Category::find($id);

        $categories->category = $request->input('category');
              
       
           $categories->save();

             return redirect('categoryinfo');
    }


       public function category($id)
    {
        {

        $products = Product::all();
        //$product = Product::find($id);
        $products = Product::where('category_id', $id)->get();
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
         $category = Category::find($id);
         
        $category->delete();

        return redirect()->route('categoryinfo')->with('success', 'Category Deleted!');
    }
}
