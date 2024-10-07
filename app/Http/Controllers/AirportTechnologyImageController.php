<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirportTechnologyImage;
use Illuminate\Support\Facades\Validator;
use File;

class AirportTechnologyImageController extends Controller
{
    public function airporttechnologyimage()
    {
        $airporttechnologyimage = AirportTechnologyImage::get();
        return view('admin.airporttechnologyimage', compact('airporttechnologyimage'));
    }

    public function airporttechnologyimage_create()
    {
        return view('admin.airporttechnologyimage_create');
    }

    public function airporttechnologyimage_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $airporttechnologyimage = new AirportTechnologyImage();

        $airporttechnologyimage->judul = $request->judul;
        $airporttechnologyimage->deskripsi = $request->deskripsi;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/airporttechnologyimage'), $nama_gambar);
            $airporttechnologyimage->gambar = 'uploads/airporttechnologyimage/' . $nama_gambar;
        }
        $airporttechnologyimage->save();

        return redirect()->route('admin.airporttechnologyimage');
    }

    public function airporttechnologyimage_edit($id)
    {
        $airporttechnologyimage = AirportTechnologyImage::find($id);
        return view('admin.airporttechnologyimage_edit', compact('airporttechnologyimage'));
    }

    public function airporttechnologyimage_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $airporttechnologyimage = AirportTechnologyImage::find($id);
        if(!$airporttechnologyimage){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $airporttechnologyimage->judul = $request->judul;
        $airporttechnologyimage->deskripsi = $request->deskripsi;

        if($request->hasFile('gambar')) {
            if($airporttechnologyimage->gambar){
                $oldImagePath = public_path(). '/uploads/airporttechnologyimage/' . $airporttechnologyimage->gambar;
                if(File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/airporttechnologyimage'), $nama_gambar);
            $airporttechnologyimage->gambar = 'uploads/airporttechnologyimage/' . $nama_gambar;
            $airporttechnologyimage->save();
        }
        $airporttechnologyimage->save();

        return redirect()->route('admin.airporttechnologyimage');
    }

    public function airporttechnologyimage_delete($id)
    {
        $airporttechnologyimage = AirportTechnologyImage::find($id);
        if($airporttechnologyimage){
            $airporttechnologyimage->delete();
        }
        return redirect()->route('admin.airporttechnologyimage');
    }
}
