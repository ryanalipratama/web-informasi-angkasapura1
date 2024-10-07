<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welcome;
use Illuminate\Support\Facades\Validator;
use File;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $welcome = Welcome::get();
        return view('admin.welcome', compact('welcome'));
    }

    public function welcome_edit(string $id)
    {
        $welcome = Welcome::find($id);
        return view('admin.welcome_edit', compact('welcome'));
    }

    public function welcome_update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->withInput();
        }

        $welcome = Welcome::find($id);
        if (!$welcome){
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        $welcome->judul = $request->judul;
        $welcome->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/welcome'), $nama_gambar);

            $welcome->gambar = 'uploads/welcome/' . $nama_gambar;
        }

        $welcome->save();
        return redirect()->route('admin.welcome');
    }
}
