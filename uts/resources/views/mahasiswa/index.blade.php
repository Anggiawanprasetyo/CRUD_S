@extends('template')
      @section('main')
      <div id="mahasiswa">
      <h2>Mahasiswa</h2>

      @if(!empty($mahasiswa))
        <table class="table">
        <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Prodi</th>
          <th>Kelas</th>
          <th>Angkatan</th>
          <th>Detail</th>
          <th>Edit</th>
          <th>Hapus Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswa as $Mahasiswa)
        <tr>
        <td>{{ $Mahasiswa->nim }}</td>
        <td>{{ $Mahasiswa->nama_mhs }}</td>
        <td>{{ $Mahasiswa->alamat }}</td>
        <td>{{ $Mahasiswa->jenis_kelamin }}</td>
        <td>{{ $Mahasiswa->prodi }}</td>
        <td>{{ $Mahasiswa->kelas }}</td>
        <td>{{ $Mahasiswa->angkatan }}</td>
        <td><a href=" {{ url('mahasiswa/'. $Mahasiswa->id) }}" class="btn btn-success btn-sm">Detail</a></td>
        <td><a href="/mahasiswa/{{$Mahasiswa->id}}/edit" class="btn btn-success btn-sm">Edit</a></td>
        <td><form action="/mahasiswa/{{$Mahasiswa->id}}" method="POST" class="d-inline-block">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger mx-2">Hapus</button>
          </form>
          </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        @else
        <p>Tidak Ada Data Mahasiswa</p>
        @endif

        <div class="table-nav">
        <div class="jumlah-data">
        <strong> Jumlah Mahasiswa : {{ $jumlah_mhs}} </strong>
        </div>
        <div class="paging">
            {{ $mahasiswa->links() }}
        </div>
        </div>

        <div class="bottom-nav">
        <div>
        <a href="mahasiswa/create" class="btn btn-primary">
        Tambah Data Mahasiswa</a>
        </div>
        </div>
        </div>
        @stop

      @section('footer')
      @include('footer')
        @stop