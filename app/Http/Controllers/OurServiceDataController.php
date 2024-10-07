<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurServiceData;
use Illuminate\Support\Facades\Validator;
use File;

class OurServiceDataController extends Controller
{
    public function ourservicedata()
    {
        $ourservicedata = OurServiceData::get();
        return view('admin.ourservicedata', compact('ourservicedata'));
    }

    public function ourservicedata_create()
    {
        return view('admin.ourservicedata_create');
    }

    public function ourservicedata_store(Request $request)
    { 
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $ourservicedata = new OurServiceData();

        $ourservicedata->judul = $request->judul;
        $ourservicedata->deskripsi = $request->deskripsi;

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/ourservice'), $nama_gambar);
            $ourservicedata->gambar = 'uploads/ourservice/' . $nama_gambar;
        }
        $ourservicedata->save();

        return redirect()->route('admin.ourservicedata');
    }

    public function ourservicedata_edit($id)
    {
        $ourservicedata = OurServiceData::find($id);
        return view('admin.ourservicedata_edit', compact('ourservicedata'));
    }

    public function ourservicedata_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $ourservicedata = OurServiceData::find($id);
        if(!$ourservicedata){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $ourservicedata->judul = $request->judul;
        $ourservicedata->deskripsi = $request->deskripsi;

        if($request->hasFile('gambar')) {
            if($ourservicedata->gambar){
                $oldImagePath = public_path(). '/uploads/ourservice/' . $ourservicedata->gambar;
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/ourservice'), $nama_gambar);
            $ourservicedata->gambar = 'uploads/ourservice/' . $nama_gambar;
            $ourservicedata->save();
        }
        $ourservicedata->save();

        return redirect()->route('admin.ourservicedata');
    }

    public function ourservicedata_delete($id)
    {
        $ourservicedata = OurServiceData::find($id);
        if($ourservicedata){
            $ourservicedata->delete();
        }
        return redirect()->route('admin.ourservicedata');
    }
}
