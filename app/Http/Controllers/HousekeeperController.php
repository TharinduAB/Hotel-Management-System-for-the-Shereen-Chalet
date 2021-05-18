<?php

namespace App\Http\Controllers;

use App\Models\Housekeeper;
use Illuminate\Http\Request;
use PDF;

class HousekeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $housekeepers = Housekeeper::latest()->paginate(8);
        return view('housekeepers.index', compact('housekeepers'))->with(request()->input('page'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('housekeepers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'first_Name'=>'required',
            'last_Name'=>'required',
            'nic_Number'=>'required|unique:housekeepers',
            'house_Number'=>'required',
            'street'=>'required',
            'city'=>'required',
            'hired_Agency_Name'=>'required',
            'gender'=>'required',
            'contact_Number'=>'required|digits:10'
        ]);

        //create a new housekeeper
        Housekeeper::create($request->all());

        //redirect the user and send succesfull message
        return redirect()->route('housekeepers.index')->with('success','A new housekeeper details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function show(Housekeeper $housekeeper)
    {
        return view('housekeepers.taskcreate', compact('housekeeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function edit(Housekeeper $housekeeper)
    {
        return view('housekeepers.edit', compact('housekeeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Housekeeper $housekeeper)
    {
        //validate the input
        $request->validate([
            'first_Name'=>'required',
            'last_Name'=>'required',
            'nic_Number'=>'required',
            'house_Number'=>'required',
            'street'=>'required',
            'city'=>'required',
            'hired_Agency_Name'=>'required',
            'gender'=>'required',
            'contact_Number'=>'required|digits:10'
        ]);

        //create a new housekeeper
        $housekeeper->update($request->all());

        //redirect the user and send succesfull message
        return redirect()->route('housekeepers.index')->with('success','A housekeeper details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housekeeper $housekeeper)
    {
        //delete the housekeeper
        $housekeeper->delete();
       
        //redirect user and display success message
        return redirect()->route('housekeepers.index')->with('success','A housekeeper details deleted successfully');

    }

    public function exportHKDetailsPDF(){
        // retreive all records from db
        $housekeepers = Housekeeper::all();
  
        // share data to view
        $pdf = PDF::loadView('housekeepers.report', compact('housekeepers'));
  
        //download PDF file with download method
        return $pdf->download('Housekeeper_Details.pdf');
    }
}
