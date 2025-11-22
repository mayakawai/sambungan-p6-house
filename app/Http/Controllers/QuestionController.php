
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nama'       => 'required|min:3|max:50',
        'email'      => 'required|email',
        'pertanyaan' => 'required|min:10|max:300',
    ], [
        'nama.required'       => "Nama tidak boleh kosong",
        'email.required'      => "Email tidak boleh kosong",
        'pertanyaan.required' => "Pertanyaan tidak boleh kosong",
    ]);

    $nama       = $request->input('nama');
    $email      = $request->input('email');
    $pertanyaan = $request->input('pertanyaan');

    // Buat pesan seperti contoh
    $info = "
        Terimakasih <strong>{$nama}</strong>! Pertanyaan ini: 
        <strong>{$pertanyaan}</strong> akan segera direspon melalui email 
        <a href='mailto:{$email}'>{$email}</a>
    ";

    // Redirect ke halaman home dengan pesan flash
    return redirect()->back()->with('info', $info);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
