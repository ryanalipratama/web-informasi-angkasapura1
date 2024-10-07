<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarNilai;
use Illuminate\Support\Facades\Validator;
use File;

class DaftarNilaiController extends Controller
{
    public function daftarnilai()
    {
        $daftarnilai = DaftarNilai::get();
        return view('admin.daftarnilai', compact('daftarnilai'));
    }

    public function daftarnilai_create()
    {
        return view('admin.daftarnilai_create');
    }

    public function daftarnilai_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namafile' => 'required',
            'link' => 'required',
            'remarks' => 'nullable',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $daftarnilai = new DaftarNilai();
        $daftarnilai->namafile = $request->input('namafile');
        $daftarnilai->link = $request->input('link');
        $daftarnilai->remarks = $request->input('remarks');
        $daftarnilai->save();

        return redirect()->route('admin.daftarnilai');
    }

    public function daftarnilai_edit($id)
    {
        $daftarnilai = DaftarNilai::find($id);
        return view('admin.daftarnilai_edit', compact('daftarnilai'));
    }

    public function daftarnilai_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'namafile' => 'nullable',
            'link' => 'nullable',
            'remarks' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $daftarnilai = DaftarNilai::find($id);
        if(!$daftarnilai){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $daftarnilai->namafile = $request->namafile;
        $daftarnilai->link = $request->link;
        $daftarnilai->remarks = $request->remarks;
        $daftarnilai->save();
        return redirect()->route('admin.daftarnilai');
    }

    public function daftarnilai_delete(Request $request, $id)
    {
        $daftarnilai = DaftarNilai::find($id);
        if($daftarnilai){
            $daftarnilai->delete();
        }
        return redirect()->route('admin.daftarnilai');
    }
    
}
