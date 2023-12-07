@extends('mahasiswas.layouts.master')
@section('title', 'Data Mahasiswa')
@section('content')
    <div class="mb-3">
        <a class="btn btn-success px-5" href="{{route('mahasiswas.create')}}" role="button">Tambah Data Mahasiswa +</a>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Tingkat</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $mahasiswas as $mahasiswa )
                <tr>
                    <th scope="row">{{$mahasiswa->id}}</th>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->npm}}</td>
                    <td>{{$mahasiswa->tingkat}}</td>
                    <td>{{$mahasiswa->kelas}}</td>
                    <td>{{$mahasiswa->jurusan}}</td>
                    <td>
                        <form action="/mahasiswas/{{$mahasiswa->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary btn-sm btn-icon" href="{{route('mahasiswas.edit', $mahasiswa->id)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button class="btn btn-danger btn-sm btn-icon confirm-delete"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection