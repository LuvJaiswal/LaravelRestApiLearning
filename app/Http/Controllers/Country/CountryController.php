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
       $country = CountryModel::find($id);
       if(is_null($country)){  //validation made
           return response()->json('Record Not found!', 404); 
       }
    return response()->json($country,200);

}

public function countrySave(Request $request){
    $country = CountryModel::created($request->all());
    return response()->json($country,201);
}

//update
public function countryUpdate(Request $request,CountryModel $country){
      $country->update($request->all());
      return response()->json($country,200);
}

//delete

public function countryDelete(Request $request,CountryModel $country){
    $country->delete();
    return response()->json(null,204);
}

}
