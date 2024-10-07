<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\OurSkill;
use File;

class OurSkillController extends Controller
{
    public function ourskill()
    {
        $ourskill = OurSkill::get();
        return view('admin.ourskill', compact('ourskill'));
    }
    
    public function ourskill_edit($id)
    {
        $ourskill = OurSkill::find($id);
        return view('admin.ourskill_edit', compact('ourskill'));
    }

    public function ourskill_update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'skill' => 'nullable',
            'persentase' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $ourskill = OurSkill::find($id);
        if(!$ourskill) {
            return redirect()->back()->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        $ourskill->skill = $request->skill;
        $ourskill->persentase = $request->persentase;
        $ourskill->save();
        return redirect()->route('admin.ourskill');
    }
}
