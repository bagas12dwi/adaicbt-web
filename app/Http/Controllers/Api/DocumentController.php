<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function getAllDocument()
    {
        $data = Document::all();

        if ($data) {
            return ApiFormatter::createApi('200', 'success', $data);
        } else {
            return ApiFormatter::createApi('400', 'failed', $data);
        }
    }
}
