<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;

class quotescontroller extends Controller
{
    //
    public function createQuote(Request $request)
    {
        //return $request->input('name');
        $product=new Quotes();

        $product->firstName = $request->input('firstName');
        $product->lastName = $request->input('lastName');
        $product->email = $request->input('email');
        $product->rooms = $request->input('rooms');
        $product->phoneNumber = $request->input('phoneNumber');
        $product->currentAddress = $request->input('currentAddress');
        $product->newAddress = $request->input('newAddress');
        $product->date = $request->input('date');
       

        $saveData= $product->save();
        if($saveData==true)
        {
            return response()->json($product);
        }

        return response()->json([
            'message' => 'Oops something went wrong'], 404);
       
        
    }

    public function deleteQuote($id)
    {
        if(!is_null($id))
        {
            $Category= Quotes::where('id',$id)->first();
            if(!is_null($Category))
            {
                $Category->delete();
                return response()->json( $Category);
            }
        }
        return response()->json([
            'message' => 'Oops something went wrong'], 404);

    }
    public function quotes()
    {
        
        return response()->json(Quotes::all());
    }
    
}
