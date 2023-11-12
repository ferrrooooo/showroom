@extends('layout.app')
@section('content')
    <div class="container d-flex w-100">
        <form class="w-100" method="POST" action="{{ route('createOrderPost') }}">
            <select class="form-select mb-3" aria-label="Pelanggan" name="pelanggan">
                <option selected>Pilih</option>
                @foreach ($pelanggan as $users)
                    <option value="{{ $users->id }}">{{ $users->nama }}</option>
                @endforeach
            </select>
            <select class="form-select mb-3" aria-label="Kendaraan" name="kendaraan">
                <option selected>Pilih</option>
                @foreach ($model as $models)
                    <option value="{{ $models->id }}">{{ $models->model }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@endsection
