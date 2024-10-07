<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CheckEmailRegistered
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $email = $request->input('email');

        // Cek apakah email ada di database
        if ($email && User::where('email', $email)->exists()) {
            return $next($request);
        }

        // Redirect ke halaman sebelumnya dengan pesan error jika email tidak ditemukan
        return redirect()->route('learningcenter')->with('error', 'Email tidak terdaftar!');
    }
}
