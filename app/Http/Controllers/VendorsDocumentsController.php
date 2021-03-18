<?php

namespace App\Http\Controllers;

use App\Models\VendorsDocument;
use Illuminate\Http\Request;

class VendorsDocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors_documents = VendorsDocument::all();
        $this->params['vendors_documents'] = $vendors_documents;
        $this->params['vendors_documents_count'] = $vendors_documents->count();

        return view('index', $this->params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploads');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        VendorsDocument::create($request->all());


        return redirect()->route('documents.index');
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
    public function edit(Request $request, VendorsDocument $document)
    {
        // dd($document);
        $this->params['document'] = $document;
        return view('update', $this->params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VendorsDocument $document)
    {
        $document->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($document)
    {

        $deleteThisDocument = VendorsDocument::find($document);
        $deleteThisDocument->delete();
        return response()->json(['msg' => 'Deleted successfully']);
    }
}
