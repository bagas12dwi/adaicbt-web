<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Psikoedukasi as ModelsPsikoedukasi;
use Illuminate\Http\Request;

class Psikoedukasi extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'catatan1' => 'required',
            'catatan2' => 'required',
            'catatan3' => 'required',
            'catatan4' => 'required',
            'catatan5' => 'required',
            'pertanyaan' => 'required'
        ]);

        $data = ModelsPsikoedukasi::create($validatedData);

        if ($data) {
            return ApiFormatter::createApi('200', 'success', $data);
        } else {
            return ApiFormatter::createApi('400', 'failed', $data);
        }
    }
}
