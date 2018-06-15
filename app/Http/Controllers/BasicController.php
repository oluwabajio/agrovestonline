<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basic;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //fetch all data in Basic Model in an array
        //return Basic::all();
          
        //fetch array data and pass into array into view
        $basic = Basic::all();
        //load view
        return view('dashboard.basic.index')->with('basic', $basic);
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
    public function show($id)
    {
        //return all data in json
       // return Basic::find($id);

       $basic = Basic::find($id);
       return view('dashboard.basic.show')->with('basic', $basic);
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
        return view('dashboard.basic.edit')->with('basic', $basic);
    
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'category' => 'required'
        ]);
        //Update post
        $basic = Basic::find($id);
        $basic->name = $request->input('name');
        $basic->email = $request->input('email');
        $basic->phone = $request->input('phone');
        $basic->age = $request->input('age');
        $basic->category = $request->input('category');
        $basic->question1 = $request->input('question1', false);
        $basic->answer1 = $request->input('answer1', false);
        $basic->question2 = $request->input('question2', false);
        $basic->answer2 = $request->input('answer2', false);
        $basic->save();

        return redirect('dashboard/basic/'.$id)->with('success', 'Post Updated');
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
        $basic = Basic::find($id);
        $basic->delete();
        return redirect('dashboard/basic')->with('success', 'Post Deleted');
    
    }
    
}
