<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\car;

class cars_Controller extends Controller
{
    public function getCar(){
        $carjson = car::all();
        return response()->json($carjson);
    }
    public function getCarId($id){
        $carjsonid = car::find($id);
        if(!$carjsonid){
            return response()->json(['message' => 'No existen datos del auto.'],404);
        }
        return response()->json($carjsonid);
    }
}
