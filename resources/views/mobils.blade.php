@extends('layout.app')

@section('content')
    <div class="container w-100 d-flex flex-wrap justify-content-center">
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('createMobil') }}" class="btn btn-primary">Add Mobil</a>
        </div>
        <div class="table-responsive w-100">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Model</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                             <th scope="row">{{ $no++ }}</th>
                            <td>{{ $datas->model }}</td>
                            <td>{{ $datas->tahun }}</td>
                            <td>{{ $datas->harga }}</td>
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
