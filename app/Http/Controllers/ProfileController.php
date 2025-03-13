<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Menampilkan form edit profil
    public function edit()
    {
        $user = Auth::user();  // Ambil data pengguna yang sedang login
        return view('profile.edit', compact('user'));  // Menampilkan view untuk mengedit profil
    }

    // Menangani update profil
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}
