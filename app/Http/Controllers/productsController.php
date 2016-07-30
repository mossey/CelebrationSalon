<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use App\products;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class productsController extends Controller
{
    /*
     *show the form for creating a new resource
     */
    public function index(){
        $products = DB::table('products')->get();
        return $products;

    }
    public function create(){
        return View('products.addForm');
    }
    /*store a newly create d resource in the database
     * */

    public function store(){

        $products=new products();
        $destinationPath = 'images'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName);


        $products->productQuantity=Input::get("quantity");
        $products->productName=Input::get("name");
        $products->productPic=("$destinationPath"."/"."$fileName");
        $products->productDescription=Input::get("description");
        $products->productCost=Input::get("cost");

        if ($products->save()){

            echo "done";
        }
        else {
            echo "not done";
        }



    }
    public function show($id){
        $products = DB::table('products')->where('productName',$id)->get();

        return View("sales.addForm")->with('products',$products);


    }
    public function edit($id){

    }
    public function update($id){
        $products = DB::table('products')->where('productsName',$id)->update();
        return $products;
    }
    public function destroy($id){
        $products = Products::find($id);
        $products->delete();

        /*
         * Session::flash('message', 'Successfully deleted ' ,$id);
        return Redirect::to('');
*/
    }

}
