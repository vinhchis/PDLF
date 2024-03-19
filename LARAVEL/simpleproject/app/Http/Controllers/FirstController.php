<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FirstController extends Controller
{
    public function sayGreeting($name)
    {
        return 'Hello, <span style="color: red; size: 3em;">' . $name . ' </span>';
    }

    public function showContent()
    {
        return view('vwContent', ['data' => 'This is content from Controller']);
    }

    //8. Modify Controller - #callForm | #showForm
    public function callForm()
    {
        return view('vwForm', ['data' => '']);
    }

    public function showForm(Request $request)
    {
        // $code = $request->input('txtCode');
        $code = $request->txtCode;
        $name = $request->txtName;
        $price = $request->txtPrice;

        $result = 'Code: ' . $code . '_ Name: ' . $name . '_ Price: ' . $price;
        return view('vwForm', ['data' => $result]);
    }

    public function callSession()
    {
        return view('vwSession', ['ses' => '']);
    }

    public function getSession(Request $rqst)
    {
        if ($rqst->session()->has('user')) {
            $ses = session('user');
        } else {
            $ses = 'No any Account information';
        }
        return view('vwShop', ['ses' => $ses]);
    }
    public function clearSession(Request $rqst)
    {
        $rqst->session()->forget('user');
        echo 'Checkout sucessfully';
    }
    public function showSession(Request $rqst)
    {
        session(['user' => $rqst->input('txtUser')]);
        $ses = session('user');
        return view('vwSession', ['ses' => $ses]);
    }


    public function callPassword(){
        return view('auth.vwLogin');
    }

    public function getPassword(Request $rest){
        $password = $rest->input('txtPass');
        $passEncore = Hash::make($password);
        $isCheck  = false;
        if(Hash::check($password, $passEncore)){
            $isCheck = true;
        }
        return view('auth.index', ['e_pass'=> $passEncore, 'pass' => $password, 'isCheck'=> $isCheck]);
    }


    
}
