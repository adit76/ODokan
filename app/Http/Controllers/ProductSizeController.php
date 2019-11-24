<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProductSize;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sizes'] = ProductSize::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.size.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = false;

        return view('admin.size.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $size = new ProductSize;
            $size->size = $request->size;
            $size->save();
            return redirect()->back()->with('msg','ProductSize has been successfully added');

        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to add size.');


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['size'] = ProductSize::findOrFail($id);
        return view('admin.size.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        try {
            $size = ProductSize::findOrFail($id);
            $size->size = $request->size;
            $size->save();
            return redirect()->back()->with('msg','ProductSize has been successfully updated');

        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to update');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $size = ProductSize::findOrFail($id);

            $size->delete();
            return redirect()->back()->with('msg','ProductSize has been successfully deleted');


        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to delete');

        }

    }
}
