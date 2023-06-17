<?php

namespace App\Http\Controllers;

use App\Http\Libraries\BaseApi;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/sampah');
        $sampah = $data->json();
        return view('index')->with(['sampah' => $sampah['data']]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $request->kriteria,
            'tanggal' => $request->tanggal,
        ];

        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/sampah/create', $payload);
        if ($response->failed()) {
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' =>$errors]);
        }

        return redirect('/')->with('success', 'Success add new Sampah to API');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      //
    }
}