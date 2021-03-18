<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorsOfficer;

class VendorsOfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(VendorsOfficer::all());

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
    public function get_store(Request $request)
    {
            $new_officer = VendorsOfficer::create([

            'name' => 'officer name',
            'designation' => 'officer designation',
            'address' => 'officer contactno',


                ]);

        return response()->json($new_officer);
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

    public function get_update(Request $request, $id)
    {
        $update_officer = VendorsOfficer::find($id);
        $update_officer->update([
            'name' => 'officer name updated',
            'designation' => 'officer designation updated',
            'address' => 'officer contactno updated',
            ]);
        return response()->json($update_officer);
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
    public function get_destroy(Request $request, $id)
    {
        $deleteThisOfficer = VendorsOfficer::find($id);
        $deleteThisOfficer->delete();
        return response()->json(['msg' => 'Deleted successfully']);
    }
}
