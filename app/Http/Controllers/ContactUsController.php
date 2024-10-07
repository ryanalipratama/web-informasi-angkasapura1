<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use File;

class ContactUsController extends Controller
{
    public function contactus()
    {
        $contactus = ContactUs::all();
        return view('admin.contactus', compact('contactus'));
    }

    public function contactus_delete($id)
    {
        $contactus = ContactUs::find($id);
        if ($contactus) {
            $contactus->delete();
        }
        return redirect()->route('admin.contactus');
    }
    public function contactus_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'judul' => 'required',
            'deskripsi  ' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }
         $contactus = new ContactUs();

         $contactus->nama = $request->nama;
         $contactus->email = $request->email;
         $contactus->telepon = $request->telepon;
         $contactus->judul = $request->judul;
         $contactus->deskripsi = $request->deskripsi;
         $contactus->save();
         return redirect()->route('contactus')->with('success', 'Pesan berhasil dikirim!');
    }
}
