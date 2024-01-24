<?php

namespace App\Http\Controllers;

use App\DataTables\TerapisDataTable;
use App\Models\Terapi;
use App\Http\Requests\StoreTerapiRequest;
use App\Http\Requests\UpdateTerapiRequest;
use Illuminate\Http\Request;

class TerapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TerapisDataTable $dataTable)
    {
        return $dataTable->render('pages.terapi.index', [
            'title' => 'Terapi Perilaku',
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
    public function store(StoreTerapiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Terapi $terapi)
    {
        return view('pages.terapi.detail', [
            'title' => 'Terapi Perilaku',
            'terapi' => $terapi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Terapi $terapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Terapi $terapi)
    {
        $status = $request->status;

        Terapi::where('id', $terapi->id)->update(['status' => $status]);

        // if ($status == 1) {
        //     Privilege::where('user_id', $terapi->user_id)->update([
        //         'terapi' => true
        //     ]);
        // }

        return redirect()->intended('terapi')->with('success', 'Data Berhasil Diupdate ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Terapi $terapi)
    {
        //
    }
}
