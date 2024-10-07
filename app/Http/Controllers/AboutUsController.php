<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Validator;
use File;

class AboutUsController extends Controller
{
    public function aboutus()
    {
        $aboutus = AboutUs::get();
        return view('admin.aboutus', compact('aboutus'));
    }

    public function aboutus_edit($id)
    {
        $aboutus = AboutUs::find($id);
        return view('admin.aboutus_edit', compact('aboutus'));
    }

    public function aboutus_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'nullable',
            'gambardeskripsi' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'strukturkantorpusat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'struktursams' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'strukturitsams' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->withInput();
        }

        $aboutus = AboutUs::find($id);
        if(!$aboutus){
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        $aboutus->deskripsi = $request->deskripsi;

        if($request->hasFile('gambardeskripsi')) {
            $gambardeskripsi = $request->file('gambardeskripsi');
            $nama_gambardeskripsi = time() . '_' . $gambardeskripsi->getClientOriginalName();
            $path = $gambardeskripsi->move(public_path('uploads/aboutus'), $nama_gambardeskripsi);
            
            $aboutus->gambardeskripsi = 'uploads/aboutus/' . $nama_gambardeskripsi;
        }

        if($request->hasFile('strukturkantorpusat')) {
            $strukturkantorpusat = $request->file('strukturkantorpusat');
            $nama_strukturkantorpusat = time() . '_' . $strukturkantorpusat->getClientOriginalName();
            $path = $strukturkantorpusat->move(public_path('uploads/aboutus'), $nama_strukturkantorpusat);
            
            $aboutus->strukturkantorpusat = 'uploads/aboutus/' . $nama_strukturkantorpusat;
        }

        if($request->hasFile('struktursams')) {
            $struktursams = $request->file('struktursams');
            $nama_struktursams = time() . '_' . $struktursams->getClientOriginalName();
            $path = $struktursams->move(public_path('uploads/aboutus'), $nama_struktursams);
            
            $aboutus->struktursams = 'uploads/aboutus/' . $nama_struktursams;
        }

        if($request->hasFile('strukturitsams')) {
            $strukturitsams = $request->file('strukturitsams');
            $nama_strukturitsams = time() . '_' . $strukturitsams->getClientOriginalName();
            $path = $strukturitsams->move(public_path('uploads/aboutus'), $nama_strukturitsams);
            
            $aboutus->strukturitsams = 'uploads/aboutus/' . $nama_strukturitsams;
        }

        $aboutus->save();
        return redirect()->route('admin.aboutus');

    }




}
