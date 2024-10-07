<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CarousellAwal;
use Illuminate\Support\Facades\Validator;
use File;

class CarousellAwalController extends Controller
{
    public function carousellawal()
    {
        $carousellawal = CarousellAwal::get();
        return view('admin.carousellawal', compact('carousellawal'));
    }

    public function carousellawal_create()
    {
        return view('admin.carousellawal_create');
    }

    public function carousellawal_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $carousellawal = new CarousellAwal();

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/carousellawal'), $nama_gambar);
            $carousellawal->gambar = 'uploads/carousellawal/' . $nama_gambar;
        }
        $carousellawal->save();

        return redirect()->route('admin.carousellawal');
    }

    public function carousellawal_edit($id)
    {
        $carousellawal = CarousellAwal::find($id);
        return view('admin.carousellawal_edit', compact('carousellawal'));
    }

    public function carousellawal_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $carousellawal = CarousellAwal::find($id);
        if(!$carousellawal){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $carousellawal->gambar = $request->gambar;

        if($request->hasFile('gambar')) {
            if($carousellawal->gambar){
                $oldImagePath = public_path(). '/uploads/carousellawal/' . $carousellawal->gambar;
                if(File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/carousellawal'), $nama_gambar);
            $carousellawal->gambar = 'uploads/carousellawal/' . $nama_gambar;
            $carousellawal->save();
        }
        $carousellawal->save();
        
        return redirect()->route('admin.carousellawal');
    }

    public function carousellawal_delete(Request $request, $id){
        $carousellawal = CarousellAwal::find($id);
        if($carousellawal){
            $carousellawal->delete();
        }
        return redirect()->route('admin.carousellawal');
    }
}
