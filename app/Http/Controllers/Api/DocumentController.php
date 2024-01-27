<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function getAllDocument(Request $request)
    {
        $user = User::with('document')->where('id', $request->id)->first();
        $data = $user->document;
        if ($data) {
            return ApiFormatter::createApi('200', 'success', $data);
        } else {
            return ApiFormatter::createApi('400', 'failed', $data);
        }
    }
}
