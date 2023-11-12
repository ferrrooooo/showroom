@extends('layout.app')
@section('content')
    <div class="container d-flex w-100">
        <form class="w-100" method="POST" action="{{ route('createMobilPost') }}">
            @csrf
            <select class="form-select mb-3" name="tipe" aria-label="Default select example">
                <option selected>Tipe Kendaraan</option>
                @foreach ($data as $datas)
                    <option value="{{ $datas->id }}">{{ $datas->tipe_kendaraan }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" name="model" class="form-control" id="model">
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="text" name="tahun" class="form-control" id="tahun">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@endsection
