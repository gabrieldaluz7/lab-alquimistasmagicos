<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Simula o login buscando o usuário no banco de dados
        $usuario = Usuarios::where('email', $request->email)->where('senha', $request->senha)->first();
        if ($usuario) {
            session(['user' => $usuario->id]);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors(['msg' => 'Credenciais inválidas']);
    }

    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}