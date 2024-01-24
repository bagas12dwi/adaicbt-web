<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Privilege;
use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    public function cekPrivilege(Request $request)
    {
        $data = Privilege::where('user_id', $request->id)->first();

        return ApiFormatter::createApi(200, 'success', $data);
        if ($data) {
            return ApiFormatter::createApi(200, 'success', $data);
        } else {
            return ApiFormatter::createApi(400, 'failed', $data);
        }
    }
}
