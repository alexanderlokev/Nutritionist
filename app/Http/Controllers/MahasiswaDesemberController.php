<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_desembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class MahasiswaDesemberController extends Controller
{
    
    public function formPendaftaran($locale)
    {
        // $locale =session('locale', config('app.locale'));

        // Validate the locale
        if (!in_array($locale, ['en', 'id'])) {
            abort(404);
        }
        app()->setLocale($locale);
        return view('form-pendaftaran_desember');
    }

    public function create()
    {
        return view('form-pendaftaran_desember');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|min:3|max:50',
            'email'=>'required|email',
            'password' => 'required|string|min:8',
            'jenis_kelamin' => 'required|in:P,L',
        ]);

        $mahasiswa = new Mahasiswa_desembers();
        $mahasiswa->nama=$validateData['nama'];
        $mahasiswa->email=$validateData['email'];
        $mahasiswa->password= Hash::make($validateData['password']);
        $mahasiswa->jenis_kelamin=$validateData['jenis_kelamin'];
        $mahasiswa->save();

        session()->flash('success', 'Data berhasil diinput ke Database');

        // Redirect the user to the home page
        return redirect()->route('home', ['locale' => app()->getLocale()]);
    }
}

