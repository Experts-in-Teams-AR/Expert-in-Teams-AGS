<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CategorizedValue;

class ResultController extends Controller
{
    public function index()
    {
        $sessions = CategorizedValue::query()
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('result', compact('sessions'));
    }

    public function save(Request $request)
    {
        $data = $request->json()->all();

        CategorizedValue::create([
            'user_id'    => Auth::id(),
            'meanF0'     => $data['meanF0'] ?? null,
            'F0std'      => $data['F0std'] ?? null,
            'meanF1'     => $data['meanF1'] ?? null,
            'H1minusA3'  => $data['H1minusA3'] ?? null,
            'pauseCount' => $data['pauseCount'] ?? null,
        ]);

        return response()->json([
            'status' => 'ok',
        ]);
    }

    public function show($id)
    {
        $session = CategorizedValue::findOrFail($id);

        if ($session->user_id !== Auth::id()) {
            abort(403);
        }

        return view('chart', compact('session'));
    }
}
