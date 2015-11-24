<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = Application::get();
        return view('apps', ['addnew'=>'App', 'title'=>'Applications', 'table'=>'apps', 'apps'=>$apps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record/application', ['table'=>'apps', 'title'=>'Applications', 'subtitle'=>'Create App']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
	        'a_name' => 'required|max:255',
	    ]);
	    $app = new Application();
        $app->name = $request->a_name;
        $app->save();
        return redirect('/apps/'.$app->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $app = Application::findOrFail($id);
	    return view('record/application', ['table'=>'apps','application'=>$app, 'title'=>'Applications', 'subtitle'=>'Edit '.$app->name]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	    $this->validate($request, [
	        'a_name' => 'required|max:55',
	    ]);
        $app = Application::findOrFail($id);
        $app->name = $request->a_name;
        $saved = $app->save();
        return redirect('/apps/'.$id.'?saved='.$saved);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Application::findOrFail($id)->delete();
        return redirect('/apps');
    }
}
