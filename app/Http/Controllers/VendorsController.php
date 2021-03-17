<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return response()->json(Vendor::all());

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
            $new_vendor = Vendor::create([
            'vendorcode' => 'vendor code data',
            'vendorname' => 'vendor name data',
            'address' => 'vendor addressdata',
            'tin' => 'tin data',
            'taxability' => 'taxability data',
            'yearsinbusiness' => 'years in business data',
            'country' => 'country data',
            'contact' => 'contract data',
            'number' => 'number data',
            'faxnumber' => 'fax number data',
            'owner' => 'owner data',
            'email address' => 'email data',
            'formsofbusiness' => 'forms of business data',
            'natureofbusiness' => 'nature of business data'
                                                ]);
        return response()->json($new_vendor);
    }


    
    /**s
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
        $new_vendor = Vendor::find($id);
        $new_vendor->update([
            'vendorcode' => 'vendor code data updated',
            'vendorname' => 'vendor name data updated',
            'address' => 'vendor addressdata updated',
            'tin' => 'tin data updated',
            'taxability' => 'taxability data updated',
            'yearsinbusiness' => 'years in business data updated',
            'country' => 'country data updated',
            'contact' => 'contract data updated',
            'number' => 'number data updated',
            'faxnumber' => 'fax number data updated',
            'owner' => 'owner data updated',
            'email address' => 'email data updated',
            'formsofbusiness' => 'forms of business data updated',
            'natureofbusiness' => 'nature of business data updated'
            
            ]);
        return response()->json($new_vendor);
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
        $deleteThisVendor = Vendor::find($id);
        $deleteThisVendor->delete();
        return response()->json(['msg' => 'Deleted successfully']);
    }
}
