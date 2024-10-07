<?php

namespace App\Http\Controllers;
use App\Models\Development;
use Illuminate\Support\Facades\Validator;
use File;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function development()
    {
        $development = Development::get();
        return view('admin.development', compact('development'));
    }

    public function development_create()
    {
        return view('admin.development_create');
    }

    public function development_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $development = new Development();
        $development->judul = $request->judul;
        $development->deskripsi = $request->deskripsi;
        $development->tanggal = $request->tanggal;

        if ($request->hasfile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/development'), $nama_gambar);
            $development->gambar = 'uploads/development/' . $nama_gambar;
        }
        $development->save();

        return redirect()->route('admin.development');
    }

    public function development_edit($id)
    {
        $development = Development::find($id);
        return view('admin.development_edit', compact('development'));
    }

    public function development_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'nullable',
            'deskripsi' => 'nullable',
            'tanggal' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 404);
        }

        $development = Development::find($id);
        if(!$development){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $development->judul = $request->judul;
        $development->deskripsi = $request->deskripsi;
        $development->tanggal = $request->tanggal;
        
        if($request->hasFile('gambar')){
            if($development->gambar){
                $oldImagePath = public_path(). '/uploads/development/' . $development->gambar;
                if(File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/development'), $nama_gambar);
            $development->gambar = 'uploads/development/' . $nama_gambar;
            $development->save();
        }
        $development->save();
        return redirect()->route('admin.development');
    }

    public function development_delete($id)
    {
        $development = Development::find($id);
        if($development){
            $development->delete();
        }
        return redirect()->route('admin.development');
    }
}
