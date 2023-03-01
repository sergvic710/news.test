<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreRequest;
use App\Http\Requests\News\UpdateRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 *
 */
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        //
        $news = News::all();
        return view('manager.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create()
    {
        $categories = Category::all();
        return view('manager.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreRequest $request)
    {
        //
        $data = $request->validated();
        $item = News::firstOrCreate([
            'title'=> $data['title']
        ], $data);
        return redirect()->route('manager.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return View
     */
    public function show(News $news) : View
    {
        return view('manager.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $post
     * @return View
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('manager.news.edit', compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $post
     *
     */
    public function update(UpdateRequest $request, News $news)
    {
        //
        $data = $request->validated();
        $news->update($data);
        return redirect()->route('manager.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $post)
    {
        //
    }
}
