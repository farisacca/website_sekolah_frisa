@extends('index')

@section('title', $title)
@section('content')

<h3>Halaman siswa</h3>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Siswa</h4>
                        <h6 class="card-subtitle">Daftar siswa SMA Negeri 24 Bandung</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-info text-white">
                                            <tr>
                                                <th>#</th>
                                                <th>NISN</th>
                                                <th>Nama Siswa</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tahun Masuk</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($siswa as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->nisn }}</td>
                                                    <td>{{ $item->nama_siswa }}</td>
                                                    <td>{{ $item->jenis_kelamin }}</td>
                                                    <td>{{ $item->tahun_masuk }}</td>
                                                </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    Belum ada data siswa.
                                                </td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection



