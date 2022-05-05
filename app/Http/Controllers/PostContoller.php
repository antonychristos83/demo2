<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'name'=>$request->name,
            'course'=>$request->course,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        return back()->with('post_add','Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $posts=DB::table('posts')->get();
       return view('list_post',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $posts=DB::table('posts')->where('id',$id)->first();
       return view('edit-post',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'name'=>$request->name,
            'course'=>$request->course,
            'age'=>$request->age,
            'city'=>$request->city
        ]);
        return back()->with('post_update','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_delete','Deleted Successfully');
    }
}
