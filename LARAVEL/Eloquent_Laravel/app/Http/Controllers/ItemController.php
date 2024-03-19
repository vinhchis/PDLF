<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
    //1. Read
    public function index(){
        $rs = Item::all();
        return view('item.vwIndex') -> with(['items' => $rs]);
    }

    public function create(){
        return view('item.vwCreate');
        
    }

    public function createProcess(Request $rqst){
        $id = $rqst -> txtID;
        $name = $rqst -> txtName;
        $price = $rqst -> txtPrice;
        
        Item::create([
            // 'ID'  => $id,
            'Name' => $name,
            'Price' => $price
        ]);

        return redirect() -> action([ItemController::class, 'index']);
    }

    public function update($id){
        $rs = Item::where('ID', $id)->first();
        return view('item.vwUpdate', ['rs'=> $rs]);
    }

    public function updateProcess(Request $rqst, $id){
        $name = $rqst -> txtName;
        $price = $rqst -> txtPrice;

        $rs = Item::where('ID', $id)->update(['Name' => $name, 'Price'=> $price]);
        return redirect() -> action([ItemController::class, 'index']);
    }

    public function delete($id){
        $rs = Item::where('ID', $id)-> delete();

        return redirect() -> action([ItemController::class, 'index']);
    }
}
