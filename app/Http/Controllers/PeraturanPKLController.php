<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeraturanPKL;
use Illuminate\Support\Facades\Validator;
use File;

class PeraturanPKLController extends Controller
{
    public function peraturanpkl()
    {
        $peraturanpkl = PeraturanPKL::get();
        return view('admin.peraturanpkl', compact('peraturanpkl'));
    }

    public function peraturanpkl_create()
    {
        return view('admin.peraturanpkl_create');
    }

    public function peraturanpkl_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paragraf' => 'nullable',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $peraturanpkl = new PeraturanPKL();
        $peraturanpkl->paragraf = $request->paragraf;
        
        if ($request->hasfile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/peraturan'), $nama_gambar);
            $peraturanpkl->gambar = 'uploads/peraturan/' . $nama_gambar;
        }
        $peraturanpkl->save();

        return redirect()->route('admin.peraturanpkl');
    }

    public function peraturanpkl_edit($id)
    {
        $peraturanpkl = PeraturanPKL::find($id);
        return view('admin.peraturanpkl_edit', compact('peraturanpkl'));
    }

    public function peraturanpkl_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'paragraf' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $peraturanpkl = PeraturanPKL::find($id);
        if(!$peraturanpkl){
            return response()->json([
                'status' => false,
                'message' => 'data not found',
            ], 404);
        }

        $peraturanpkl->paragraf = $request->paragraf;
        
        if ($request->hasfile('gambar')){
            if($peraturanpkl->gambar){
                $oldImagePath = public_path(). '/uploads/peraturan/' . $peraturanpkl->gambar;
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/peraturan'), $nama_gambar);
            $peraturanpkl->gambar = 'uploads/peraturan/' . $nama_gambar;
        }
        $peraturanpkl->save();

        return redirect()->route('admin.peraturanpkl');
    }

    public function peraturanpkl_delete(Request $request, $id)
    {
        $peraturanpkl = PeraturanPKL::find($id);
        if($peraturanpkl){
            $peraturanpkl->delete();
        }
        return redirect()->route('admin.peraturanpkl');
    }
}
