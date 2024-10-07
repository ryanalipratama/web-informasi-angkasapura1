<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirportTechnology;
use Illuminate\Support\Facades\Validator;
use File;

class AirportTechnologyController extends Controller
{
    public function airporttechnology()
    {
        $airporttechnology = AirportTechnology::get();
        return view('admin.airporttechnology', compact('airporttechnology'));
    }

    public function airporttechnology_edit(string $id)
    {
        $airporttechnology = AirportTechnology::find($id);
        return view('admin.airporttechnology_edit', compact('airporttechnology'));
    }

    public function airporttechnology_update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'konten' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->withInput();
        }

        $airporttechnology = AirportTechnology::find($id);
        if (!$airporttechnology){
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        $airporttechnology->judul = $request->judul;
        $airporttechnology->konten = $request->konten;

        $airporttechnology->save();
        return redirect()->route('admin.airporttechnology');
    }
}
