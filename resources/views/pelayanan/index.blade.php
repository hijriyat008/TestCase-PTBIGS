@extends('dashboard.index')
@section('container')
    <h1>Data Pelayanan</h1>
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
    @include('pelayanan.edit')
    @include('pelayanan.add')
    <button type="button" class="btn btn-outline-primary mb-2" onclick="add()" href="javascript:void(0)"><img
            src="/icons/add.png" width="35px" alt="">
    </button>
    <div class="container">
        <table id="pelayanan" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    @include('pelayanan.script')
@endpush
