<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hire;
use App\Department;
use App\Manager;

class HiresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Hire::all();
        $depto = Department::lists('name','id')->prepend('');
        return View('hires.index',['data'=>$data,'departments'=>$depto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Department::lists('name','id')->prepend('');
        return View('hires.create',['departments'=>$data]);
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
        $hire = new Hire;
        $hire->firstname = $request->input('firstname');
        $hire->lastname = $request->input('lastname');
        $hire->department_id = $request->input('department');
        $hire->emp_no = $request->input('emp_no');
        $hire->position = $request->input('position');
        $hire->startdate = $request->input('startdate');
        $hire->email = $request->input('email');
        $hire->location = $request->input('location');
        $hire->status = 1;
        $hire->save();

        return redirect('hires');
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
        $hire = Hire::findOrFail($id);
        return View('hires.details',['hire'=>$hire]);
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
