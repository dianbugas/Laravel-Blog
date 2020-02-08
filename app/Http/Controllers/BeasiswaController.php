<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;
use App\Http\Requests\BeasiswaRequest;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('beasiswa.index')->withBeasiswas(Beasiswa::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beasiswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeasiswaRequest $request)
    {
        Beasiswa::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan

        ]);
        session()->flash('sukses', 'Data Berhasil Di Tambahkan');
        return redirect(route('beasiswa.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beasiswa $beasiswa)
    {
        return view('beasiswa.form')->withBeasiswa($beasiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeasiswaRequest $request, Beasiswa $beasiswa)
    {
        $beasiswa->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan
        ]);

        session()->flash('sukses', 'beasiswa berhasil di ubah');
        return redirect(route('beasiswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();
        session()->flash('sukses', 'beasiswa berhasil di hapus');
        return redirect(route('beasiswa.index'));
    }
}
