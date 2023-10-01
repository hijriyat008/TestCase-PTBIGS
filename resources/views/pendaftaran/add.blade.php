<div class="modal fade" id="add_pendaftaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">From Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/pendaftaranstore" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="select-searching mt-4">
                                    <label for="pasien_id" class="form-label">Nama Pasien</label>
                                    <select id="pasien_id" name="pasien_id" data-width="350px"
                                        class="select-searching @error('pasien_id') is-invalid @enderror"
                                        data-live-search="true" aria-label="Default select example"
                                        style="margin-bottom:10px;" required>
                                        <option></option>
                                        @foreach ($pasien as $pasien)
                                            @if (old('pasien_id') == $pasien->id)
                                                <option value={{ $pasien->id }} selected>
                                                    {{ $pasien->nik_pasien }}</option>
                                            @else
                                                <option value={{ $pasien->id }}>{{ $pasien->nik_pasien }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <p style="color: red">*Jika Data Pasien Tidak Ditemukan, Maka Input Data Pasien</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="select-searching mt-4">
                                    <label for="jenis_registrasi" class="form-label">Jenis Registrasi</label>
                                    <select id="jenis_registrasi" name="jenis_registrasi" data-width="350px"
                                        class="select-searching @error('jenis_registrasi') is-invalid @enderror"
                                        data-live-search="true" aria-label="Default select example"
                                        style="margin-bottom:10px;" required>
                                        <option>Selected</option selected>
                                        <option value="Rawat Jalan">
                                            Rawat Jalan</option>
                                        <option value="Rawat Inap">
                                            Rawat Inap</option>
                                        <option value="UGD">
                                            UGD</option>
                                    </select>
                                </div>
                                <div class="select-searching mt-4">
                                    <label for="pelayanan_id" class="form-label">Layanan</label>
                                    <select id="pelayanan_id" name="pelayanan_id" data-width="350px"
                                        class="select-searching @error('pelayanan_id') is-invalid @enderror"
                                        data-live-search="true" aria-label="Default select example"
                                        style="margin-bottom:10px;" required>
                                        <option></option>
                                        @foreach ($pelayanan as $pelayanan)
                                            @if (old('pelayanan_id') == $pelayanan->id)
                                                <option value={{ $pelayanan->id }} selected>
                                                    {{ $pelayanan->nama_pelayanan }}</option>
                                            @else
                                                <option value={{ $pelayanan->id }}>{{ $pelayanan->nama_pelayanan }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select-searching mt-4">
                                    <label for="jenis_pembayaran" class="form-label">Jenis Registrasi</label>
                                    <select id="jenis_pembayaran" name="jenis_pembayaran" data-width="350px"
                                        class="select-searching @error('jenis_pembayaran') is-invalid @enderror"
                                        data-live-search="true" aria-label="Default select example"
                                        style="margin-bottom:10px;" required>
                                        <option>Selected</option selected>
                                        <option value="Umum">
                                            Umum</option>
                                        <option value="BPJS Kesehatan">
                                            BPJS Kesehatan</option>
                                        <option value="BNI Life">
                                            BNI Life</option>
                                    </select>
                                </div>
                                <div class="nama_petugas mt-4">
                                    <label for="nama_petugas" class="form-label">Petugas Pendaftaran</label>
                                    <input type="text"
                                        class="form-control @error('nama_petugas') is-invalid @enderror"
                                        id="nama_petugas" name="nama_petugas" required autofocus
                                        value="{{ old('nama_petugas') }}">
                                    @error('nama_petugas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 my-3 ">
                                <button type="submit" id="btn-save" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
