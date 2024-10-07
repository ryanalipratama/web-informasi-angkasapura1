<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planning;
use Illuminate\Support\Facades\Validator;
use File;

class PlanningController extends Controller
{
    public function planning(){

        $planning = Planning::get();
        return view('admin.planning', compact('planning'));
    }

    public function planning_create(){
        return view('admin.planning_create');
    }

    public function planning_store(Request $request){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $planning = new Planning();
        $planning->judul = $request->judul;
        $planning->deskripsi = $request->deskripsi;
        $planning->tanggal = $request->tanggal;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/planning'), $nama_gambar);
            $planning->gambar= 'uploads/planning/' . $nama_gambar;
        }
        $planning->save();

        return redirect()->route('admin.planning');
    }

    public function planning_edit($id){
        $planning = Planning::find($id);
        return view('admin.planning_edit', compact('planning'));
    }

    public function planning_update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $planning = Planning::find($id);
        if(!$planning){
            return response()->json([
                'status' => false,
                'message' => 'data not found',
            ], 404);
        }

        $planning->judul = $request->judul;
        $planning->deskripsi = $request->deskripsi;
        $planning->tanggal = $request->tanggal;

        if($request->hasFile('gambar')){
            if($planning->gambar){
                $oldImagePath = public_path(). '/uploads/planning/' . $planning->gambar;
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/planning'), $nama_gambar);
            $planning->gambar = 'uploads/planning/' . $nama_gambar;
        }
        $planning->save();

        return redirect()->route('admin.planning');
    }

    public function planning_delete($id){
        $planning = Planning::find($id);
        if($planning){
            $planning->delete();
        }
        return redirect()->route('admin.planning');
    }
}
