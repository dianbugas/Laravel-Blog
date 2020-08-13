<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;
use App\Http\Requests\ProdiRequest;


class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prodi.index')->withProdis(Prodi::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdiRequest $request)
    {
        Prodi::create([
            'nama' => $request->nama,
        ]);

        session()->flash('sukses', 'Data Berhasil Di Tambahkan');
        return redirect(route('prodi.index'));
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
    public function edit(Prodi $prodi)
    {
        return view('prodi.form')->withProdi($prodi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdiRequest $request, Prodi $prodi)
    {
        $prodi->update([
            'nama' => $request->nama
        ]);

        session()->flash('sukses', 'Prodi berhasil di ubah');
        return redirect(route('prodi.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        session()->flash('sukses', 'kategori berhasil di hapus');
        return redirect(route('prodi.index'));
    }
}
