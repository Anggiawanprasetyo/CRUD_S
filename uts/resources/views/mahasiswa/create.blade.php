@extends('template')

@section('main')
    <div id="mahasiswa">
    <h2>Tambah Data Mahasiswa</h2>

    <form action="{{ url('mahasiswa') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="nim" class="control-label">NIM</label>
    <input name="nim" id="nim" type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="nama_mhs" class="control-label">Nama</label>
    <input name="nama_mhs" id="nama_mhs" type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="alamat" class="control-label">Alamat</label>
    <input name="alamat" id="alamat" type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
    <div class="radio">
    <label><input name="jenis_kelamin" type="radio"
        value="L" id="jenis_kelamin">Laki-laki</label>
        </div>
        <div class="radio">
    <label><input name="jenis_kelamin" type="radio"
        value="P" id="jenis_kelamin">Perempuan</label>
        </div>
    <div class="form-group">
    <label for="prodi" class="control-label">Prodi</label>
    <input name="prodi" id="prodi" type="text" class="form-control">
    </div>
    <div class="form-group">
    <label for="kelas" class="control-label">Kelas</label>
    <input name="kelas" id="kelas" type="text" class="form-control">
    </div>      
    <div class="form-group">
    <label for="angkatan" class="control-label">Angkatan</label>
    <input name="angkatan" id="angkatan" type="text" class="form-control">
    </div>  
    </div>

    <div class="form-group">
    <input class="btn btn-primary form-control" type="submit" value="simpan">
    </div>
    </form>
    </div>
    @stop
  
    @section('footer')
      @include('footer')
        @stop
