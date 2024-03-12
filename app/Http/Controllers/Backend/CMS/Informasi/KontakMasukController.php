<?php

namespace App\Http\Controllers\Backend\CMS\Informasi;

use App\Http\Controllers\Controller;
use App\Models\ContactUsModel;
use Illuminate\Http\Request;

class KontakMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Content Management System | PT Viatama Sentrakarya',
            'master' => 'Informasi',
            'pages' => 'Kontak Masuk',
            'result' => ContactUsModel::latest()->get()
        ];

        return view('backend.cms.informasi.kontak_masuk.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUsModel $contactUsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUsModel $contactUsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUsModel $contactUsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = ContactUsModel::findOrFail($id);

        // Hapus data contact dari database
        $contact->delete();

        return redirect()->route('cms.kontak-masuk')->with('success', 'Data kontak masuk berhasil dihapus.');
    }
}
