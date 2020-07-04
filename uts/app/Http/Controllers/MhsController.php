<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MhsController extends Controller
{
    public function index(){
    $mahasiswa = Mahasiswa::orderBy('nama_mhs', 'asc')->simplePaginate(5);
    $jumlah_mhs = Mahasiswa::count();
    return view('mahasiswa.index', compact('mahasiswa', 'jumlah_mhs'));
    }

    public function create(){
        $halaman = new Mahasiswa;
        return view('mahasiswa.create');
    }

    public function show($id){
        $halaman = 'index';
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function store(Request $request){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim            = $request->nim;
        $mahasiswa->nama_mhs       = $request->nama_mhs;
        $mahasiswa->alamat   = $request->alamat;
        $mahasiswa->jenis_kelamin   = $request->jenis_kelamin;
        $mahasiswa->prodi   = $request->prodi;
        $mahasiswa->kelas   = $request->kelas;
        $mahasiswa->angkatan   = $request->angkatan;
        $mahasiswa->save();
        return redirect('index');

        // Mahasiswa::create($request->all());
        // return redirect('index');
    }

    public function edit($id){
        $halaman = 'index';
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa){
        Mahasiswa::where('id', $mahasiswa->id)
            ->update([
                'nim' => $request->nim,
                'nama_mhs' => $request->nama_mhs,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'prodi' => $request->prodi,
                'kelas' => $request->kelas,
                'angkatan'  => $request->angkatan
            ]);
            return redirect('index');
    }
    public function destroy($id){
        Mahasiswa::destroy($id);
        return redirect('index');
    }
}
