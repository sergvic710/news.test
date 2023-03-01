<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('manager.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        //
        return view('manager.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);

        return redirect()->route('manager.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return View
     */
    public function show(Category $category)
    {
        //
        return view('manager.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return View
     */
    public function edit(Category $category)
    {
        //
        return view('manager.category.edit', compact('category'));
    }

    /**
     * @param UpdateRequest $request
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(UpdateRequest $request, Category $category)
    {
        //
        $data = $request->validated();
        dd($data);
        $category->update($data);

        return view('manager.category.show', compact('category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route('manager.category.index');
    }
}
