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
        return view('index')->with(['sampahs' => $sampah['data']]);
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
            'tanggal' => $request->tanggal,
        ];
        $payload['kriteria'] = "standar";
        if($request->total_karung_sampah > 3) {
            $payload['kriteria'] = "collapse";
        }
        $baseApi = new BaseApi;
        $response = $baseApi->create('/api/sampah/store', $payload);
        if ($response->failed()) {
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' =>$errors]);
        }

        return redirect('/sampah')->with('success', 'Success add new Sampah to API');

    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $sampah = $data->json();
        return view('show')->with(['sampah' => $sampah['data']]);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/sampah', $id);
        $sampah = $data->json();
      return view("update")->with(['sampah' => $sampah['data']]);
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'tanggal' => $request->tanggal,
        ];
        $payload['kriteria'] = "standar";
        if($request->total_karung_sampah > 3) {
            $payload['kriteria'] = "collapse";
        }
        $baseApi = new BaseApi;
        $response = $baseApi->update('/api/sampah/update', $id, $payload);
        if ($response->failed()) {
            $errors = $response->json('data');
            return redirect()->back()->with(['errors' =>$errors]);
        }

        return redirect('/sampah')->with('success', 'Success add new Sampah to API');

    }

    public function destroy($id) 
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/sampah/delete', $id);
        return redirect()->back();
    }

    public function trash() 
    {
        $data = (new BaseApi)->index('/api/sampah/show/trash');
        $sampah = $data->json();
        return view('trash')->with(['sampahs' => $sampah['data']]);
    }

    public function restore($id)
    {
        (new BaseApi)->restore('/api/sampah/trash/restore', $id);
        return redirect()->back();
    }

    public function permanenDelete($id)
    {
        (new BaseApi)->permanenDelete('/api/sampah/trash/delete/permanent', $id);
        return redirect()->back();
    }
}