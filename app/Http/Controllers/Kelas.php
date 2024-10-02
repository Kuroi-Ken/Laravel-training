<?php

namespace App\Http\Controllers;

use App\Models\kelasmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Kelas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKelas = kelasmodel::all();
        // dd ($dataKelas);
        $this->data['kelas'] = $dataKelas;
        return view("kelas.index", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'kode_kelas' => 'required|unique:kelas,kode_kelas',
          'nama_kelas' => 'required|string'  
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        kelasmodel::create([
            'kode_kelas'=> $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = kelasmodel::where("id", $id)->first();
        // dd ($data);
        $this->data["kelas"] = $data;
        
        return view("kelas.show", $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->data['kelas'] = kelasmodel::where('id', $id)->first();
        return view('kelas.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_kelas' => 'required|unique:kelas,kode_kelas,'.$id,
            'nama_kelas' => 'required|string'
        ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        kelasmodel::where('id',$id)->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelas = kelasmodel::where('id', $id)->first();
        $kelas->delete();

        return redirect()->route('kelas.index');
    }
}