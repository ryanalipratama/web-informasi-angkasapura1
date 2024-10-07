<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use File;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = Blog::get();
        return view('admin.blog', compact('blog'));
    }

    public function blog_create()
    {
        return view('admin.blog_create');
    }

    public function blog_store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 422);
        }

        $blog = new Blog();
        $blog->judul = $request->judul;
        $blog->deskripsi = $request->deskripsi;
        $blog->tanggal = $request->tanggal;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/blog'), $nama_gambar);
            $blog->gambar = 'uploads/blog/' . $nama_gambar;
        }
        $blog->save();

        return redirect()->route('admin.blog');
    }

    public function blog_edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog_edit', compact('blog'));
    }

    public function blog_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'error' => $validator->errors(),
            ], 404);
        }

        $blog = Blog::find($id);
        if(!$blog){
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.',
            ], 404);
        }

        $blog ->judul = $request->judul;
        $blog ->deskripsi = $request->deskripsi;
        $blog ->tanggal = $request->tanggal;

        if($request->hasFile('gambar')){
            if($blog->gambar){
                $oldImagePath = public_path(). '/uploads/blog/' . $blog->gambar;
                if(File::exists($oldImagePath)){
                    File::delete($oldImagePath);
                }
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $path = $gambar->move(public_path('uploads/blog'), $nama_gambar);
            $blog->gambar = 'uploads/blog/' . $nama_gambar;
            $blog->save();
        }
        $blog->save();
        return redirect()->route('admin.blog');
    }

    public function blog_delete($id)
    {
        $blog = Blog::find($id);
        if($blog){
            $blog->delete();
        }
        return redirect()->route('admin.blog');
    }
}
