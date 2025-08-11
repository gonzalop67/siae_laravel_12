<?php

namespace App\Http\Controllers\Seguridad;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seguridad\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('theme.matrix-admin-bootstrap5.seguridad.login.index');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended('admin-backend');
        }

        return back()->withErrors([
            'name' => 'Error de acceso, credenciales incorrectas.',
        ])->onlyInput('name');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
