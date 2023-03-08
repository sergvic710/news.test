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
        $news = News::orderBy('updated_at', 'desc')->paginate(1);
        return view('site.index', compact('news'));
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function category(Category $category)
    {
        return view('site.category', [
                'news' => $category->news()->paginate(5)
            ]
        );
    }

    public function show(News $news)
    {
        return view('site.news', compact('news'));
    }
}
