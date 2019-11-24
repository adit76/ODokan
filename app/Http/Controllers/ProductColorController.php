<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ProductColor;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductColorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['colors'] = ProductColor::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.color.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = false;

        return view('admin.color.create', $data);
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
            $color = new ProductColor;
            $color->name = $request->name;
            $color->code = $request->code;
            $color->save();
            return redirect()->back()->with('msg','ProductColor has been successfully added');

        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to add color.');


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
        $data['color'] = ProductColor::findOrFail($id);
        return view('admin.color.edit', $data);
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
            $color = ProductColor::findOrFail($id);
            $color->name = $request->name;
            $color->code = $request->code;
            $color->save();
            return redirect()->back()->with('msg','ProductColor has been successfully updated');

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
            $color = ProductColor::findOrFail($id);

            $color->delete();
            return redirect()->back()->with('msg','ProductColor has been successfully deleted');


        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to delete');

        }

    }
}
