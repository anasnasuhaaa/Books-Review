@extends('admin.layout.master')

@section('title')
    Halaman List Genre
@endsection

@section('content')
    <a href="/genre/create" class="btn btn-primary btn-sm">Tambah</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key=>$value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>

                        <form action="/genre/{{ $value->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/genre/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="/genre/{{ $value->id }}/edit" class="btn btn-info btn-sm">Ubah Data</a>
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
