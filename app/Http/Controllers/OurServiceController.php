<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;
use Illuminate\Support\Facades\Validator;
use File;


class OurServiceController extends Controller
{
    public function ourservice()
    {
        $ourservice = OurService::get();
        return view('admin.ourservice', compact('ourservice'));
    }

    public function ourservice_edit(string $id)
    {
        $ourservice = ourservice::find($id);
        return view('admin.ourservice_edit', compact('ourservice'));
    }

    public function ourservice_update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'paragraf' => 'nullable',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator)->withInput();
        }

        $ourservice = OurService::find($id);
        if (!$ourservice) {
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan!']);
        }

        $ourservice->paragraf = $request->paragraf;
        $ourservice->save();
        return redirect()->route('admin.ourservice');
    }
        
}
