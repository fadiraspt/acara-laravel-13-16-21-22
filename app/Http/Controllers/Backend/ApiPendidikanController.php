<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return response()->json($pendidikan);
    }

    public function getPen($id)
    {
        $pendidikan = Pendidikan::find($id);
        return response()->json($pendidikan);
    }

    public function createPen(Request $request)
    {
        Pendidikan::create($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }

    public function updatePen(Request $request, $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil diperbarui!'
        ]);
    }

    public function deletePen($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();
        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil dihapus!'
        ]);
    }
}