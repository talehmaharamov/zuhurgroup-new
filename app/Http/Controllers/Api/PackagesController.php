<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Packages;

class PackagesController extends Controller
{
    public function index()
    {
        if (Packages::where('status', 1)->exists()) {
            return response()->json(['packages' => Packages::where('status', 1)->with('photos')->get()], 200);
        } else {
            return response()->json(['packages' => 'Packages-is-empty'], 404);
        }
    }

    public function show($id)
    {
        if (Packages::where('status', 1)->where('id', $id)->exists()) {
            return response()->json(['packages' => Packages::where('status', 1)->where('id', $id)->with('photos')->first()], 200);
        } else {
            return response()->json(['packages' => 'packages-is-not-founded'], 404);
        }
    }
}
