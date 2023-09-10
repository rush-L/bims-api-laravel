<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use thiagoalessio\TesseractOCR\TesseractOCR;

class OcrController extends Controller
{

    public function index(Request $request): JsonResponse
    {
        $file = ($request->image);
        $stored = public_path('storage/' . $file->store('images', 'public'));
        // dd($stored);
        $ocr = (new TesseractOCR($stored));
        $data = $ocr->run();
        return response()->json($data);
    }
}
