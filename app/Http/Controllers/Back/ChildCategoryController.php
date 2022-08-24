<?php

namespace App\Http\Controllers\Back;

use App\{
    Models\Category,
    Repositories\Back\ChildCategoryRepository,
    Http\Requests\ChildcategoryRequest,
    Http\Controllers\Controller
};
use App\Models\ChildCategory;
use App\Models\Subcategory;


class ChildCategoryController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     * @param  \App\Repositories\Back\ChildCategoryRepository $repository
     *
     */
    public function __construct(ChildCategoryRepository $repository)
    {
        $this->middleware('auth:admin');

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.childcategory.index',[
            'datas' => ChildCategory::with('category')->orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.childcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildcategoryRequest $request)
    {
        $this->repository->store($request);
        return redirect()->route('back.childcategory.index')->withSuccess(__('New Childcategory Added Successfully.'));
    }

    /**
     * Change the status for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $status
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        ChildCategory::find($id)->update(['status' => $status]);
        return redirect()->route('back.childcategory.index')->withSuccess(__('Status Updated Successfully.'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildCategory $childcategory)
    {
        
        return view('back.childcategory.edit',compact('childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChildCategoryRequest $request, ChildCategory $childcategory)
    {
        $this->repository->update($childcategory, $request);
        return redirect()->route('back.childcategory.index')->withSuccess(__('Childcategory Updated Successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildCategory $childcategory)
    {
        $this->repository->delete($childcategory);
        return redirect()->route('back.childcategory.index')->withSuccess(__('Childcategory Deleted Successfully.'));
    }
}
