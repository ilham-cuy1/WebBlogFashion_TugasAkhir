<?php

namespace App\Http\Controllers;

use App\Models\Style;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditorStyleController extends Controller
{
    /**
     * index
     * 
     * @return view
     */
    public function index(Request $request) {
        $keyword_admin = $request->keyword_admin;

        $styles = Style::where('title', 'LIKE', '%'.$keyword_admin.'%')
                    ->orWhere('content', 'LIKE', '%'.$keyword_admin.'%')->paginate(5);

        return view('admin.editor.style', compact('styles'));
    }

    public function style(): View {
        $styles = Style::all();

        return view('style', compact('styles'));
    }

    public function create(): View
    {
        return view('admin.editor.create_style');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Style::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);

        //redirect to index
        return redirect()->route('style.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $styles = Style::findOrFail($id);
        return view('admin.editor.edit_style', compact('styles'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        //get post by ID
        $styles = Style::findOrFail($id);
        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            //delete old image
            Storage::delete('public/posts/' . $styles->image);
            //update post with new image
            $styles->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        } else {
            //update post without image
            $styles->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }
        //redirect to index
        return redirect()->route('style.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $styles = Style::findOrFail($id);

        //render view with post
        return view('admin.editor.show_style', compact('styles'));
    }
    
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $styles = Style::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $styles->image);

        //delete post
        $styles->delete();

        //redirect to index
        return redirect()->route('style.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function styles($id){
        $styles = Style::find($id);
        return view('detail_fashion_style', compact('styles'));
    }
}
