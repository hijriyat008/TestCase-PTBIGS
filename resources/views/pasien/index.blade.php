@extends('dashboard.index')
@section('container')
    <h1>Data Pasien</h1>
    @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Failed..Something is wrong with this field!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @include('pasien.edit')
    @include('pasien.add')
    <button type="button" class="btn btn-outline-primary mb-2" onclick="add()" href="javascript:void(0)"><img
            src="/icons/add.png" width="35px" alt="">
    </button>
    <div class="container">
        <table id="pasien" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    @include('pasien.script')
@endpush
