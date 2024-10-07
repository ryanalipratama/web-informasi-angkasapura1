<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TakingCare;
use Illuminate\Support\Facades\Validator;
use File;


class TakingCareController extends Controller
{
    public function takingcare()
    {
        $takingcare = TakingCare::get();
        return view('admin.takingcare', compact('takingcare'));
    }

    public function takingcare_create()
    {
        return view('admin.takingcare_create');
    }

    public function takingcare_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $takingcare = new TakingCare();

        $takingcare->judul = $request->input('judul');
        $takingcare->deskripsi = $request->input('deskripsi');
        
        if($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $nama_icon = time() . '_' . $icon->getClientOriginalName();
            $path = $icon->move(public_path('uploads/takingcareicon'), $nama_icon);
            $takingcare->icon = 'uploads/takingcareicon/' . $nama_icon;
        }
        $takingcare->save();

        return redirect()->route('admin.takingcare');
    }

    public function takingcare_edit($id)
    {
        $takingcare = TakingCare::find($id);
        return view('admin.takingcare_edit', compact('takingcare'));
    }

    public function takingcare_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $takingcare = TakingCare::find($id);
        if(!$takingcare){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $takingcare->judul = $request->judul;
        $takingcare->deskripsi = $request->deskripsi;

        if($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $nama_icon = time() . '_' . $icon->getClientOriginalName();
            $path = $icon->move(public_path('uploads/takingcareicon'), $nama_icon);
            $takingcare->icon = 'uploads/takingcareicon/' . $nama_icon;
            $takingcare->save();
        }
        $takingcare->save();
        return redirect()->route('admin.takingcare');
    }

    public function takingcare_delete(Request $request, $id){
        $takingcare = TakingCare::find($id);
        if($takingcare){
            $takingcare->delete();
        }
        return redirect()->route('admin.takingcare');
    }
}
