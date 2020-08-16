<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CountryModel;

class CountryController extends Controller
{
   public function country(){
       return response()->json(CountryModel::get(),200);

   }

   public function countryByID($id){
    return response()->json(CountryModel::find($id),200);

}

public function countrySave(Request $request){
    $country = CountryModel::created($request->all());
    return response()-> json($country,201);
}
}
