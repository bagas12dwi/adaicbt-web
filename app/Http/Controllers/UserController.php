<?php

namespace App\Http\Controllers;

use App\DataTables\UsersDataTable;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('pages.pengguna.index', [
            'title' => 'Pengguna',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'document_link' => 'required'
        ]);

        $dokumen = Document::create($validatedData);
        User::where('id', $request->user_id)->update([
            'document_id' => $dokumen->id
        ]);

        return redirect()->intended('/user')->with('success', 'Data Berhasil Ditambahkan ! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.dokumen.add', [
            'title' => 'Tambah Dokumen',
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.dokumen.edit', [
            'title' => 'Dokumen',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'document_link' => 'required'
        ]);

        Document::where('id', $user->document_id)->update($validatedData);
        return redirect()->intended('/user')->with('success', 'Data Berhasil Diubah ! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->intended('/user')->with('success', 'Data Berhasil Dihapus ! ');
    }
}
