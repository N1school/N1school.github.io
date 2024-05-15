<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return response()->json($news);
    }
//    public function index_view()
//    {
//        return view('news.index');
//
//    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'required|string',
            'created_at' => 'nullable|date',
        ]);

        $news = News::create($validatedData);

        return redirect()->route('admin.news.index')->with('success', 'News added successfully!');
    }
}
