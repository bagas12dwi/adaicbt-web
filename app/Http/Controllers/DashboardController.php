<?php

namespace App\Http\Controllers;

use App\Models\Psikoedukasi;
use App\Models\Relaksasi;
use App\Models\Restrukturisasi;
use App\Models\Terapi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = count(User::all());
        $psikoedukasi = count(Psikoedukasi::where('status', 3)->get());
        $relaksasi = count(Relaksasi::where('status', 3)->get());
        $restrukturisasi = count(Restrukturisasi::where('status', 3)->get());
        $terapi = count(Terapi::where('status', 3)->get());
        return view('pages.dashboard', [
            'title' => 'Dashboard',
            'user' => $user,
            'psikoedukasi' => $psikoedukasi,
            'relaksasi' => $relaksasi,
            'restrukturisasi' => $restrukturisasi,
            'terapi' => $terapi,
        ]);
    }
}
