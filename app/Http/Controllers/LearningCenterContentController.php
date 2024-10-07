<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearningCenterContent;
use Illuminate\Support\Facades\Validator;
use File;

class LearningCenterContentController extends Controller
{
    public function learningcentercontent()
    {
        $learningcentercontent = LearningCenterContent::get();
        return view('admin.learningcentercontent', compact('learningcentercontent'));
    }

    public function learningcentercontent_create()
    {
        return view('admin.learningcentercontent_create');
    }

    public function learningcentercontent_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'namafile' => 'required',
            'file' => 'required|mimes:doc,docx,pdf,png,jpg,jpeg|max:102400',
            'remarks' => 'nullable'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),    
            ], 422);
        }

        $learningcentercontent = new LearningCenterContent();
        $learningcentercontent->namafile = $request->namafile;
        if($request->hasFile('file')){
            $file = $request->file('file');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('uploads/learningcentercontent'), $nama_file);
            $learningcentercontent->file = 'uploads/learningcentercontent/' . $nama_file;
        }
        $learningcentercontent->remarks = $request->remarks;
        $learningcentercontent->save();

        return redirect()->route('admin.learningcentercontent');
    }
    
    public function learningcentercontent_edit($id)
    {
        $learningcentercontent = LearningCenterContent::find($id);
        return view('admin.learningcentercontent_edit', compact('learningcentercontent'));
    }

    public function learningcentercontent_update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'namafile' => 'required',
            'file' => 'nullable|mimes:doc,docx,pdf,png,jpg,jpeg|max:102400',
            'remarks' => 'nullable'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),    
            ], 422);
        }

        $learningcentercontent = LearningCenterContent::find($id);
        if(!$learningcentercontent){
            return response()->json([
                'status' => false,
                'message' => 'data not found',
            ], 404);
        }

        $learningcentercontent->namafile = $request->namafile;
        if($request->hasfile('file')){
            if($learningcentercontent->file){
                $oldImagePath = public_path(). '/uploads/learningcentercontent/' . $learningcentercontent->file;
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }
            $file = $request->file('file');
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $path = $file->move(public_path('uploads/learningcentercontent'), $nama_file);
            $learningcentercontent->file = 'uploads/learningcentercontent/' . $nama_file;
        }
        $learningcentercontent->remarks = $request->remarks;
        $learningcentercontent->save();

        return redirect()->route('admin.learningcentercontent');
    }

    public function learningcentercontent_delete(Request $request, $id)
    {
        $learningcentercontent = LearningCenterContent::find($id);
        if($learningcentercontent){
            $learningcentercontent->delete();
        }
        return redirect()->route('admin.learningcentercontent');
    }
}
