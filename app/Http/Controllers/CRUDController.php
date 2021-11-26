<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CRUDController extends Controller
{
    public function getOffers()
    {

        return        Offer::select('price', 'photo')->get();
    }
    public  function create(){
            return view('offer.add');
    }

    public function add(Request  $request)
    {
            $rules=[
                "name_offer" =>'required | max:100 | unique:offers,name',
                 'price'=>'numeric | required',
            ];
            $messages=[
                "name_offer.required"=>'this is for me',
                "name_offer.max:100"=>'This field is required',
            ];
            $Validator=Validator::make($request->all(),$rules,$messages);
            if($Validator->fails()){
                    return $Validator->errors();
            }
                 Offer::create([
                     "name_offer" =>$request->name_offer,
                      "price"=>$request->price
                 ]);
                return   "offer added successfully ";
    }
}
