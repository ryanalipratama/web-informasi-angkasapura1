<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\VissionMissionTarget;
use File;

class VissionMissionTargetController extends Controller
{
    public function vissionmissiontarget()
    {
        $vissionmissiontarget = VissionMissionTarget::get();
        return view('admin.vissionmissiontarget', compact('vissionmissiontarget'));
    }

    public function vissionmissiontarget_edit($id)
    {
        $vissionmissiontarget = VissionMissionTarget::find($id);
        return view('admin.vissionmissiontarget_edit', compact('vissionmissiontarget'));
    }

    public function vissionmissiontarget_update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required', 
            'deskripsi' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->withInput();
        }

        $vissionmissiontarget = VissionMissionTarget::find($id);
        if(!$vissionmissiontarget) {
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        $vissionmissiontarget->judul = $request->judul;
        $vissionmissiontarget->deskripsi = $request->deskripsi;

        if($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $nama_icon = time() . '_' . $icon->getClientOriginalName();
            $path = $icon->move(public_path('uploads/vissionmissiontarget'), $nama_icon);

            $vissionmissiontarget->icon = 'uploads/vissionmissiontarget/' . $nama_icon;
        }

        $vissionmissiontarget->save();
        return redirect()->route('admin.vissionmissiontarget');
    }
}
