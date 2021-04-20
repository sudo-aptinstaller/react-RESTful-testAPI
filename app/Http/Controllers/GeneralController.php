<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appreciation;
class GeneralController extends Controller
{
    public function createAppreciation(Request $request){
        $appreciation = New Appreciation;
        $appreciation->user = $request->username;
        $appreciation->appreciation = $request->appreciation;
        $appreciation->rating = $request->rating;
        $appreciation->save();

        return response()->json('Appreciation Created Successfully - #'.$appreciation->id);
    }
    public function updateAppreciation(Request $request, $id){
        $appreciation = Appreciation::find($id);
        $appreciation->user = $request->username;
        $appreciation->appreciation = $request->appreciation;
        $appreciation->rating = $request->rating;
        $appreciation->save();

        return response()->json('Appreciation Updated Successfully - #'.$id);

    }
    public function deleteAppreciation(Request $request, $id){
        $appreciation = Appreciation::find($id);
        $appreciation->delete();

        return response()->json('Appreciation Deleted Successfully - #'.$id);
    }
    public function listAllAppreciation(Request $request){
        $appreciation = Appreciation::all();
        return response()->json($appreciation);
    }
    public function listOneAppreciation(Request $request, $id){
        $appreciation = Appreciation::find($id);
        return response()->json($appreciation);
    }

}
