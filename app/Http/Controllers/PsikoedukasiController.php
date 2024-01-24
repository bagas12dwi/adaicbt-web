<?php

namespace App\Http\Controllers;

use App\DataTables\PsikoedukasisDataTable;
use App\Models\Psikoedukasi;
use App\Http\Requests\StorePsikoedukasiRequest;
use App\Http\Requests\UpdatePsikoedukasiRequest;
use App\Models\Privilege;
use Illuminate\Http\Request;

class PsikoedukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PsikoedukasisDataTable $dataTable)
    {
        return $dataTable->render('pages.psikoedukasi.index', [
            'title' => 'Psikoedukasi',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePsikoedukasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Psikoedukasi $psikoedukasi)
    {
        return view('pages.psikoedukasi.detail', [
            'title' => 'Psikoedukasi',
            'psikoedukasi' => $psikoedukasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Psikoedukasi $psikoedukasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Psikoedukasi $psikoedukasi)
    {
        $status = $request->status;

        Psikoedukasi::where('id', $psikoedukasi->id)->update(['status' => $status]);

        if ($status == 1) {
            Privilege::where('user_id', $psikoedukasi->user_id)->update([
                'relaksasi' => true
            ]);
        }

        return redirect()->intended('psikoedukasi')->with('success', 'Data Berhasil Diupdate ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Psikoedukasi $psikoedukasi)
    {
        //
    }
}
