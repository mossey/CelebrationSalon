<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class products extends Controller
{
    public function read()
    {
        // get all the nerds
        $products= DB::table('products')->get();


        return json_encode($products);
    }
    public function update($id)
    {
        // get the nerd
        $nerd = Nerd::find($id);

        // show the edit form and pass the nerd
        return View::make('nerds.edit')
            ->with('nerd', $nerd);
    }
    public function destroy($id)
    {
        // delete
        $products = products::find($id);
        $products->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the nerd!');
        return Redirect::to('nerds');
    }
    //
}
