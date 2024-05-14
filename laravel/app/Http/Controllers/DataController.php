<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DataController extends Controller
{
    public function loadData(Request $request)
    {
        $filePath = public_path('data/data.json');

        if (File::exists($filePath)) {
            $jsonData = File::get($filePath);
            return response()->json($jsonData);
        } else {
            return response()->json(['error' => 'JSON file not found'], 404);
        }
    }
}
