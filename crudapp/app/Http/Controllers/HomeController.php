<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function add_product(Request $request)
    {
       $data =new Product;
       $data-> Title = $request->title;
       $data-> Description = $request->description;

       $image = $request ->image;
       if($image)
       {
        $imagename = time().'.'.$image ->getClientOriginalExtension();
        $request -> image ->move('product',$imagename);
        $data ->image =$imagename;
       }
     

       $data-> save();
       return redirect()->back();
    }

    public function show_product(){
        $data = Product::all();
        // echo 'This is ', $data ;
    return view('product',compact('data'));
}
    public function delete_product($id){

        $data = Product::find($id);
        $data -> delete();
        return redirect()->back();


    }

    public function update_product($id){
     
    $product = Product::find($id);
    return view ('product_update', compact('product'));
}
    public function edit_product(Request $request,$id){
        $data = Product::find($id);
        $data->Title =$request->title;
        $data->Description =$request->description;
       
        $image = $request->image;
        if($image){
          
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
        
    }
}
