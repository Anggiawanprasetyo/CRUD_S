@extends('template')

@section('main')
    <h1 class="my-2">Edit Data Mahasiswa</h1>
       <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST" class="my-4">
        @method('patch')
        @csrf
        <div class="form-group row">
        <label for="nama_mhs" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
        <input type="text"
            class="form-control @error('nama_mhs') is-invalid @enderror"
            id="nama_mhs"
            name="nama_mhs"
            autofocus
            value="{{$mahasiswa->nama_mhs}}"
            >
            @error('nama_mhs')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>

        <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">Nomor Induk Mahasiswa</label>
        <div class=col-sm-4>
        <input type="number"
            class="form-control @error('nim') is-invalid @enderror"
            id="nim"
            name="nim"
            autofocus
            value="{{$mahasiswa->nim}}"
            >
            @error('nim')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="form-group row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class=col-sm-4>
        <input type="text"
            class="form-control @error('alamat') is-invalid @enderror"
            id="alamat"
            name="alamat"
            autofocus
            value="{{$mahasiswa->alamat}}"
            >
            @error('alamat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>

        <fieldset class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-4">
            <div class="form-check">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                name="jenis_kelamin" id="L" value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'checked' : ''}}>
            <label class="form-check-label" for="L">
            Laki-laki
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio"
                name="jenis_kelamin" id="P" value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'checked' : ''}}>
            <label class="form-check-label" for="P">
            Perempuan
            </label>
            </div>
            @error('jenis_kelamin')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>
            </fieldset>

            <div class="form-group row">
        <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
        <div class="col-sm-4">
        <input type="text"
            class="form-control @error('prodi') is-invalid @enderror"
            id="prodi"
            name="prodi"
            autofocus
            value="{{$mahasiswa->prodi}}"
            >
            @error('prodi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="form-group row">
        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-4">
        <input type="text"
            class="form-control @error('kelas') is-invalid @enderror"
            id="kelas"
            name="kelas"
            autofocus
            value="{{$mahasiswa->kelas}}"
            >
            @error('kelas')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>

            <div class="form-group row">
        <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
        <div class="col-sm-4">
        <input type="text"
            class="form-control @error('angkatan') is-invalid @enderror"
            id="angkatan"
            name="angkatan"
            autofocus
            value="{{$mahasiswa->angkatan}}"
            >
            @error('angkatan')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
            </div>
            </div>
            
        
        <div class="form-group">
        <button type="submit" class="btn btn-primary mt-2 mr-2">Submit</button>
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary mt-2">Kembali</a>
        </div>
        </form>
        
        @endsection

    


