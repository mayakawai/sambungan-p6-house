<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan form untuk membuat matakuliah baru";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menyimpan data matakuliah baru yang dikirimkan melalui form";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id=null)
    {
        if($id){
            return "Anda mengakses matakuliah ST445";
        }else{
            return "Masukkan kode matakulliahnya yaa ^^";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Menampilkan form untuk mengedit data matakuliah yang sudah ada";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Memperbarui data matakuliah yang ada di database";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus matakuliah berdasarkan ID yang diberikan";
    }
}