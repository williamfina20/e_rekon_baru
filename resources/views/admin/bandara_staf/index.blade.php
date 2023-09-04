@extends('admin.layouts.app')
@section('content')
    <div class="mx-4">
        <h1 class="mb-0 fw-bold">Data Staf @if ($bandara->user)
                {{ $bandara->user->name }}
            @endif
        </h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body table-responsive">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.bandara_staf.create', $bandara->id) }}"
                                class="btn btn-primary btn-sm mb-2">Tambah</a>
                            <a href="{{ route('admin.databandara') }}" class="btn btn-secondary btn-sm mb-2">kembali</a>
                        </div>
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Username</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bandara_staf as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->user)
                                                {{ $item->user->name }}
                                            @endif
                                        </td>
                                        <td>{{ $item->jabatan_staf }}</td>
                                        <td>
                                            @if ($item->user)
                                                {{ $item->user->email }}
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.bandara_staf.destroy', $item->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('admin.bandara_staf.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                                    class="btn btn-danger text-white btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
@endsection
