<?php

namespace App\Http\Controllers;

use App\DataTables\DocumentsDataTable;
use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DocumentsDataTable $dataTable)
    {
        return $dataTable->render('pages.dokumen.index', [
            'title' => 'Dokumen',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dokumen.add', [
            'title' => 'Dokumen',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'document_link' => 'required'
        ]);

        Document::create($validatedData);

        return redirect()->intended('/dokumen')->with('success', 'Data Berhasil Ditambahkan ! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $dokuman)
    {
        return view('pages.dokumen.edit', [
            'title' => 'Dokumen',
            'document' => $dokuman
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $dokuman)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'document_link' => 'required'
        ]);

        Document::where('id', $dokuman->id)->update($validatedData);
        return redirect()->intended('/dokumen')->with('success', 'Data Berhasil Diubah ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $dokuman)
    {
        Document::destroy($dokuman->id);
        return redirect()->intended('/dokumen')->with('success', 'Data Berhasil Dihapus ! ');
    }
}
