<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic;

class UserBasicQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        //fetch array data and pass into array into view
        $basic = Basic::all();
        //load view
        return view('users.bquestion.index')->with('basic', $basic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.bquestion.create');
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
        
        $basic = new Basic;
        $basic->name = $request->input('name');
        $basic->email = $request->input('email');
        $basic->phone = $request->input('phone');
        $basic->age = $request->input('age');
        $basic->category = $request->input('category');
        $basic->question1 = $request->input('question1', false);
        $basic->answer1 = $request->input('answer1', false);
        $basic->question2 = $request->input('question2', false);
        $basic->answer2 = $request->input('answer2', false);
        //get user id from database
        $basic->user_id = auth()->user()->id;
        $basic->save();

        return redirect('/user')->with('success', 'Post Created');
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
        //
        $basic = Basic::find($id);
        return view('users.bquestion.edit')->with('basic', $basic);
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
        //
     //Update post
     $basic = Basic::find($id);
     $basic->name = $request->input('name');
     $basic->category = $request->input('category');
     $basic->question1 = $request->input('question1', false);
     $basic->answer1 = $request->input('answer1', false);
     $basic->question2 = $request->input('question2', false);
     $basic->answer2 = $request->input('answer2', false);
     $basic->save();

     return redirect('/user')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
