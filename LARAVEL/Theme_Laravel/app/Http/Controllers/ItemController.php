<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function home(){
        return view('layout.layout');
    }

    public function index(){
        $items = DB::table('Item') -> get();
        return view('item.index') -> with(['items' => $items]);
    }

    public function create(){
        return view('item.create');	
    }

    public function createProcess(Request $rqst){
        $code = $rqst -> txtCode;
        $name = $rqst -> txtName;
        $price = $rqst -> txtPrice;
        
        DB::table('Item') -> insert([
            'Code'  => $code,
            'Name' => $name,
            'Price' => intval($price)
        ]);

        return redirect() -> action([ItemController::class, 'index']);
    }

    public function update($code){
        $rs = DB::table('Item') -> where('Code', $code)-> first();
        return view('item.update', ['rs'=> $rs]);
    }

    public function updateProcess(Request $rqst, $code){
        $name = $rqst -> txtName;
        $price = $rqst -> txtPrice;

        $rs = DB::table('Item')-> where('code', $code)->update(['Name' => $name, 'Price'=> intval($price)]);
        return redirect() -> action([ItemController::class, 'index']);

    }

    public function delete($code){
        $rs = DB::table('Item') -> where('Code', $code)-> delete();

        return redirect() -> action([ItemController::class, 'index']);
    }

}
