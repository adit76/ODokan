<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Admin;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ContributorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contributors'] = Admin::orderBy('created_at', 'desc')->where('super_admin',0)->paginate(10);
        return view('admin.contributor.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = false;

        return view('admin.contributor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|min:3|max:255|unique:admins',
            ]
        );

        try {
            $contributor = new Admin;
            $contributor->name = $request->name;
            $contributor->email = $request->email;
            $contributor->type = $request->type;
            $contributor->password = bcrypt($request->password);
            $contributor->save();
            return redirect()->back()->with('msg','Contributor has been successfully added');

        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to add contributor.');


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
        $data['contributor'] = Admin::findOrFail($id);
        return view('admin.contributor.edit', $data);
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
        $this->validate(
            $request,
            [
                'email' => 'required|min:3|max:255|unique:admins,email,' . $id,
            ]
        );

        try {
            $contributor = Admin::findOrFail($id);
            $contributor->name = $request->name;
            $contributor->email = $request->email;
            $contributor->type = $request->type;
            // $contributor->password = bcrypt($request->password);

            $contributor->save();
            return redirect()->back()->with('msg','Contributor has been successfully updated');

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
            $contributor = Admin::findOrFail($id);

            $contributor->delete();
            return redirect()->back()->with('msg','Contributor has been successfully deleted');


        } catch (QueryException $e) {
            return redirect()->back()->with('msg','Failed to delete');

        }

    }
}
