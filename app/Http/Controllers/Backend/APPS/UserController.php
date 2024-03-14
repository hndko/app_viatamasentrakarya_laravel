<?php

namespace App\Http\Controllers\Backend\APPS;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Data Akun',
            'result' => User::all(),
        ];

        return view('backend.apps.data_akun.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Data Akun',
        ];

        return view('backend.apps.data_akun.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim oleh form
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|string',
            'password' => 'required',
            'role' => 'required|string',
        ]);

        // Create a new entry in the database
        User::create([
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'role' => $validatedData['role'],
        ]);

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.data_akun')->with('success', 'Data Akun berhasil disimpan.');
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
        $data = [
            'title' => 'Application | PT Viatama Sentrakarya',
            'master' => null,
            'pages' => 'Data Akun',
            'data_akun' => User::findOrFail($id),
        ];

        return view('backend.apps.data_akun.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|string',
            'role' => 'required|string',
        ]);

        $data_akun = User::findOrFail($id);

        // Perbarui kolom-kolom berdasarkan input dari form
        $data_akun->nama_lengkap = $request->nama_lengkap;
        $data_akun->email = $request->email;
        $data_akun->role = $request->role;

        // Periksa apakah password baru dikirimkan
        if ($request->filled('password')) {
            $data_akun->password = $request->password;
        }

        // Update data data_akun
        $data_akun->save();

        // Redirect atau lakukan tindakan lainnya sesuai kebutuhan
        return redirect()->route('apps.data_akun')->with('success', 'Data Akun berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_akun = User::findOrFail($id);
        $data_akun->delete();

        return redirect()->route('apps.data_akun')->with('success', 'Data Akun berhasil dihapus.');
    }
}
