@extends('dashboard.index')
@section('container')
    <h1>Menu Pendaftaran</h1>
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
    @include('pendaftaran.add')
    @include('pendaftaran.pasien')
    <button type="button" class="btn btn-outline-primary mb-2" onclick="add()" href="javascript:void(0)"><img
            src="/icons/add.png" width="35px" alt="">
    </button>
    <div class="container">
        <table id="pendaftaran" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Registrasi</th>
                    <th scope="col">Waktu Registrasi</th>
                    <th scope="col">No Rekam Medis</th>
                    <th scope="col">Jenis Registrasi</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Jenis Pembayaran</th>
                    <th scope="col">Status Registrasi</th>
                    <th scope="col">Waktu Mulai </th>
                    <th scope="col">Waktu Selesai </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="btn-print">
        <a href="/printdata" class="item-menu}" target="_blank">
            <img src="/icons/print.png" width="35px" alt="">
        </a>
    </div>
@endsection
@push('scripts')
    @include('pendaftaran.script')
@endpush
