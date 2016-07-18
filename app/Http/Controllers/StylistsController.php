<?php

namespace App\Http\Controllers;

use App\salonists;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class StylistsController extends Controller
{
    public function index(){
        $salonists = DB::table('salonists')->get();
        return $salonists;

    }
    /*
     *show the form for creating a new resource
     */
    public function create(){
        return View('salonists.addForm');
    }
    /*store a newly create d resource in the database
     * */

    public function store(){
        
        $salonist=new salonists;
        $destinationPath = 'images'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName);


        $salonist->stylistSpecialization=Input::get("description");
        $salonist->stylistName=Input::get("name");
        $salonist->stylistPic=("$destinationPath"."/"."$fileName");
        
        if ($salonist->save()){

            echo "done";
        }
        else {
            echo "not done";
        }
        


    }
    public function show($id){
        $salonists = DB::table('salonists')->where('stylistName',$id)->get();
        return $salonists;

    }
    public function edit($id){

    }
    public function update($id){
        $salonists = DB::table('salonists')->where('stylistName',$id)->update();
        return $salonists;
    }
    public function destroy($id){
        $salonist = Salonists::find($id);
        $salonist->delete();

        /*
         * Session::flash('message', 'Successfully deleted ' ,$id);
        return Redirect::to('');
*/
    }


}
