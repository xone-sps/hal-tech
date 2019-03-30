<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use GuzzleHttp\Middleware;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('admin.common.index');
    }
    public function addblog()
    {
        return view('admin.common.addblog');
    }
    public function postblog(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'category' => 'required',
            'body' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = md5(date('Y-m-d h:m:s') . microtime()) . time() . '_attach_.' . $file->getClientOriginalExtension();
            $location = public_path('images/blog');
            $file->move($location, $image);

            $upload = new Blog;
            $upload->image = $image;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->category = $request->category;
            $upload->body = $request->body;

            $upload->save();

            return redirect()->route('allblog');
        }
    }

    public function allblog()
    {
        $retrieve = Blog::all();
        return view('admin.common.allblog')->with('retrieve', $retrieve);
    }

    public function getUpdate($id)
    {
        $getBlog = Blog::find($id);
        return view('admin.common.update')->with('getBlog', $getBlog);
    }

    public function storeUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'body' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = md5(date('Y-m-d h:m:s') . microtime()) . time() . '_attach_.' . $file->getClientOriginalExtension();
            $location = public_path('images/blog');
            $file->move($location, $image);

            $upload = Blog::find($id);
            $upload->image = $image;
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->category = $request->category;
            $upload->body = $request->body;

            $upload->save();

            return redirect()->route('allblog');
        } else {
            $upload = Blog::find($id);
            $upload->title = $request->title;
            $upload->description = $request->description;
            $upload->category = $request->category;
            $upload->body = $request->body;

            $upload->save();

            return redirect()->route('allblog');
        }
    }

    public function postDelete($id)
    {
        $delete = Blog::find($id);
        $delete->delete();
        return back();
    }
}
