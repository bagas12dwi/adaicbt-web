<?php

namespace App\Http\Controllers;

use App\DataTables\RelaksasisDataTable;
use App\Models\Relaksasi;
use App\Http\Requests\StoreRelaksasiRequest;
use App\Http\Requests\UpdateRelaksasiRequest;
use App\Models\Privilege;
use Illuminate\Http\Request;

class RelaksasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RelaksasisDataTable $dataTable)
    {
        return $dataTable->render('pages.relaksasi.index', [
            'title' => 'Latihan Relaksasi',
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
    public function store(StoreRelaksasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Relaksasi $relaksasi)
    {
        return view('pages.relaksasi.detail', [
            'title' => 'Latihan Relaksasi',
            'relaksasi' => $relaksasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Relaksasi $relaksasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Relaksasi $relaksasi)
    {
        $status = $request->status;

        Relaksasi::where('id', $relaksasi->id)->update(['status' => $status]);

        if ($status == 1) {
            Privilege::where('user_id', $relaksasi->user_id)->update([
                'restrukturisasi' => true
            ]);
        }

        return redirect()->intended('relaksasi')->with('success', 'Data Berhasil Diupdate ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Relaksasi $relaksasi)
    {
        //
    }
}
