<?php

namespace App\Http\Controllers;

use App\DataTables\RestrukturisasisDataTable;
use App\Models\Restrukturisasi;
use App\Http\Requests\StoreRestrukturisasiRequest;
use App\Http\Requests\UpdateRestrukturisasiRequest;
use App\Models\Privilege;
use Illuminate\Http\Request;

class RestrukturisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RestrukturisasisDataTable $dataTable)
    {
        return $dataTable->render('pages.restrukturisasi.index', [
            'title' => 'Restrukturisasi Kognitif',
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
    public function store(StoreRestrukturisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Restrukturisasi $restrukturisasi)
    {
        return view('pages.restrukturisasi.detail', [
            'title' => 'Restrukturisasi Kognitif',
            'restrukturisasi' => $restrukturisasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restrukturisasi $restrukturisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restrukturisasi $restrukturisasi)
    {
        $status = $request->status;

        Restrukturisasi::where('id', $restrukturisasi->id)->update(['status' => $status]);

        if ($status == 1) {
            Privilege::where('user_id', $restrukturisasi->user_id)->update([
                'terapi' => true
            ]);
        }

        return redirect()->intended('restrukturisasi')->with('success', 'Data Berhasil Diupdate ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restrukturisasi $restrukturisasi)
    {
        //
    }
}
