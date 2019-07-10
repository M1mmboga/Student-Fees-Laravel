<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

use App\Fees;
class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fees = Fees::all()->toArray();
        $total_fees = Fees::sum('amount');
        return view('MiriamMmboga.getfees', compact('fees', 'total_fees'));
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $fees = DB::table('fees')->where('student_id','like','%'.$search.'%')->paginate(8);
        return view('MiriamMmboga.viewfees',compact('fees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'student_id' => 'required|exists:students,id',
            'amount' => 'required',
            'DOP' => 'required',
        ]);

        $fee = new Fees();
        $fee->student_id = $request->input('student_id');
        $fee->amount = $request->input('amount');
        $fee->DOP = $request->input('DOP');
        $fee->save();

        return Redirect::back()->with('message','Fees records updated successfully');
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
        // $fees = Fees::find($id);
        // return view('MiriamMmboga.viewfees/{id}')->with('fees',$fees);

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
