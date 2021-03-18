<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorsOfficialRepresentative;

class VendorsOfficialRepresentativesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(VendorsOfficialRepresentative::all());


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
            $new_vendorsofficialrepresentative = VendorsOfficialRepresentative::create([

            'name' => 'representative name',
            'designation' => 'representative designation',
            'contactno' => 'representative contactno',
            'faxno' => 'representative fax no',
            'email' => 'representative email',

                ]);

        return response()->json($new_vendorsofficialrepresentative);
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
        $update_vendor = VendorsOfficialRepresentative::find($id);
        $update_vendor->update([
            'name' => 'representative name updated',
            'designation' => 'representative designation updated',
            'contactno' => 'representative contactno updated',
            'faxno' => 'representative fax no updated',
            'email' => 'representative email updated',


            ]);
        return response()->json($update_vendor);
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
        $deleteThisRepresentative = VendorsOfficialRepresentative::find($id);
        $deleteThisRepresentative->delete();
        return response()->json(['msg' => 'Deleted successfully']);
    }
}
