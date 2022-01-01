<?php

namespace App\Http\Controllers;

use App\Models\VCorRegComment;
use Illuminate\Http\Request;

class VCorRegCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vcorregcomment = VCorRegComment::all();

        return view('home',compact('vcorregcomment'));
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
        vcorregcomment::create($request->all());
        return back()->with('success','New Process added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VCorRegComment  $vCorRegComment
     * @return \Illuminate\Http\Response
     */
    public function show(VCorRegComment $vCorRegComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VCorRegComment  $vCorRegComment
     * @return \Illuminate\Http\Response
     */
    public function edit(VCorRegComment $vCorRegComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VCorRegComment  $vCorRegComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VCorRegComment $vCorRegComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VCorRegComment  $vCorRegComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(VCorRegComment $vCorRegComment)
    {
        //
    }
}
