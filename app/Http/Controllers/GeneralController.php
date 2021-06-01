<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class GeneralController extends Controller
{
    public function createItem(Request $request){
        $Item = New Item;
        $Item->item_name = $request->task_name;
        $Item->item_description = $request->task_description;
        $Item->item_deadline = $request->task_deadline;
        $Item->save();

        return response()->json('Item Created Successfully - #'.$Item->id);
    }
    public function updateItem(Request $request, $id){
        $Item = Item::find($id);
        $Item->item_name = $request->task_name;
        $Item->item_description = $request->task_description;
        $Item->item_deadline = $request->task_deadline;
        $Item->save();

        return response()->json('Item Updated Successfully - #'.$id);

    }
    public function deleteItem(Request $request, $id){
        $Item = Item::find($id);
        $Item->delete();

        return response()->json('Item Deleted Successfully - #'.$id);
    }
    public function listAllItem(Request $request){
        $Item = Item::all();
        return response()->json($Item);
    }
    public function listOneItem(Request $request, $id){
        $Item = Item::find($id);
        return response()->json($Item);
    }

}
