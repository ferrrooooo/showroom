@extends('layout.app')
@section('content')
    <div class="container w-100 d-flex flex-wrap justify-content-center">
        <div class="d-flex justify-content-end w-100">
            <a href="{{ route('createOrder') }}" class="btn btn-primary">Add Order</a>
        </div>
        <div class="table-responsive w-100">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Model Kendaraan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $datas->user->name }}</td>
                            <td>{{ $datas->spec->model }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
