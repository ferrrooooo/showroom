@extends('layout.app')
@section('content')
    <div class="container d-flex w-100">
        <form class="w-100" method="POST" action="{{ route('updateCustomerPost', ['id' => $id]) }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $customer['nama'] }}" id="name">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $customer['alamat'] }}" id="alamat">
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Nomor Telepon</label>
                <input type="text" name="notelp" class="form-control" value="{{ $customer['no_telp'] }}" id="notelp">
            </div>
            <div class="mb-3">
                <label for="idcard" class="form-label">Id Card</label>
                <input type="text" name="idcard" class="form-control" value="{{ $customer['id_pengenal'] }}"
                    id="idcard">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@endsection
