<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function logout()
    {
      Auth::logout();
      return redirect('login');
    }
    public function home()
    {
      return view('home');
    }
}