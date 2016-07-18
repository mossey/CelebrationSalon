<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


use App\Http\Requests;

class stylesController extends Controller
{
    /*
     *show the form for creating a new resource
     */
    public function index(){
        $styling = DB::table('styling')->get();
        return $styling;

    }
    public function create(){
        return View('styling.addForm');
    }
    /*store a newly create d resource in the database
     * */

    public function store(){

        $styling=new styling();
        $destinationPath = 'images'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName);


        $styling->stylingName=Input::get("name");
        $styling->stylingPic=("$destinationPath"."/"."$fileName");
        $styling->productCost=Input::get("cost");

        if ($styling->save()){

            echo "done";
        }
        else {
            echo "not done";
        }



    }
    public function show($id){
        $styling = DB::table('styling')->where('stylingName',$id)->get();
        return $styling;

    }
    public function edit($id){

    }
    public function update($id){
        $styling = DB::table('styling')->where('stylingName',$id)->update();
        return $styling;
    }
    public function destroy($id){
        $styling = styling::find($id);
        $styling->delete();

        /*
         * Session::flash('message', 'Successfully deleted ' ,$id);
        return Redirect::to('');
*/
    }
  
    
}
