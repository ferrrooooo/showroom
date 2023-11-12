@extends('layout.app')
@section('content')
    <div class="container w-100 d-flex flex-wrap justify-content-center">
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('createCustomer') }}" class="btn btn-primary">Add Customers</a>
        </div>
        <div class="table-responsive w-100">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Id Card</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $datas)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $datas->nama }}</td>
                            <td>{{ $datas->alamat }}</td>
                            <td>{{ $datas->no_telp }}</td>
                            <td>{{ $datas->id_pengenal }}</td>
                            <td class="d-flex flex-wrap col-2">
                                <a href="{{ route('updateCustomer', ['id' => $datas->id]) }}"
                                    class="btn btn-primary m-2">Edit</a>
                                <a href="{{ route('deleteCustomer', ['id' => $datas->id]) }}"
                                    class="btn btn-danger m-2">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
