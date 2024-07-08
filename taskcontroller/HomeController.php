<?php

namespace App\Http\Controllers\taskcontroller;

use App\Http\Controllers\Controller;
use App\Http\Controllers\taskcontroller\HomeController;
use App\Models\taskmodel\UserNewAddModel;

use App\Http\Controllers\taskcontroller\UserNewAddController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task.content');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=UserNewAddModel::all();
        return view('task.content',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editcategory= UserNewAddModel::where('id',$id)->first();
        return view('task.edituser',['editcategory'=>$editcategory]);
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
        $data=array(
            'name'=>$request->name,
            'email'=>$request->email
        );

        UserNewAddModel::where('id',$id)->update($data);
      return redirect('/task/edit-category/')->with('upd','Your data successfully updated');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserNewAddModel::where('id',$id)->delete();
        return redirect('/task')->with('del','Data successfully deleted');
 
    }
}
