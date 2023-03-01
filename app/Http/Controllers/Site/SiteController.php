<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class SiteController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
        $news = News::orderBy('updated_at','desc')->get();
        return view('site.index', compact('news'));

    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function category(Category $category)
    {
        //
//        dd($category);
        $news = News::where('category_id', $category->id)->get();
        return view('site.category', compact('news'));

    }
    public function show(News $news)
    {
        return view('site.news', compact('news'));

    }
}
