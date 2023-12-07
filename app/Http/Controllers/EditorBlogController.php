<?php
namespace App\Http\Controllers;
//import Model "Post"
use App\Models\Posts;
//return type View
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class EditorBlogController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(Request $request): View
    {
        $keyword_admin = $request->keyword_admin;
        //get posts
        $posts = Posts::where('title', 'LIKE', '%'.$keyword_admin.'%')
                    ->orWhere('content', 'LIKE', '%'.$keyword_admin.'%')->paginate(5);

        //render view with posts
        return view('admin.editor.index', compact('posts'));
    }

    public function user(Request $request){
        $keyword = $request->keyword;

        $posts = Posts::where('title', 'LIKE', '%'.$keyword.'%')->paginate();

        return view('user', compact('posts'));
    }

    public function dashboard(): View{

        return view('admin.editor.dashboard');
    }

    public function tampil($id){
        $fashion = Posts::find($id);
        return view('detail_fashion_home', compact('fashion'));
    }

    public function create(): View
    {
        return view('admin.editor.create');
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
        Posts::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function edit(string $id): View
    {
        //get post by ID
        $posts = Posts::findOrFail($id);
        return view('admin.editor.edit', compact('posts'));
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
        $posts = Posts::findOrFail($id);
        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            //delete old image
            Storage::delete('public/posts/' . $posts->image);
            //update post with new image
            $posts->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content
            ]);
        } else {
            //update post without image
            $posts->update([
                'title' => $request->title,
                'content' => $request->content
            ]);
        }
        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $posts = Posts::findOrFail($id);

        //render view with post
        return view('admin.editor.show', compact('posts'));
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $posts = Posts::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $posts->image);

        //delete post
        $posts->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // public function destroy(posts $post)
    // {
    //     $old_image = $post->image;
    //     $post->delete();
    //     if (!empty($old_image) && (Storage::disk('public'))->exists($old_image)) {
    //         Storage::disk('public')->delete($old_image);
    //     }
    //     return to_route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    // }
}
