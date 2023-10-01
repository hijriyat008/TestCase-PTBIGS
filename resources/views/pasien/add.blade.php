<div class="modal fade" id="add_datapasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">From Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/datapasienstore" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="nama_pasien mb-2">
                                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                                    <input type="text"
                                        class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien"
                                        name="nama_pasien" required autofocus value="{{ old('nama_pasien') }}">
                                    @error('nama_pasien')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="nik_pasien mb-2">
                                    <label for="nik_pasien" class="form-label">NIK Pasien</label>
                                    <input type="text" class="form-control @error('nik_pasien') is-invalid @enderror"
                                        id="nik_pasien" name="nik_pasien" onkeypress="return wajibAngka(event)" required
                                        value="{{ old('nik_pasien') }}">
                                    @error('nik_pasien')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="tgllahir mb-2">
                                    <label for="tanggal_lahir" class="form-label">Tanggal
                                        lahir</label>
                                    <input type="date"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                        id="tanggal_lahir" name="tanggal_lahir" required
                                        value="{{ old('tanggal_lahir') }}">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="jk my-3 ">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <div class="jk d-flex">
                                        <div class="form-check">
                                            @if (old('jk') == 'L')
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="L" checked required>
                                                <label class="form-check-label" for="jk">
                                                    Laki-laki
                                                </label>
                                            @else
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="L" required>
                                                <label class="form-check-label" for="jk">
                                                    Laki-laki
                                                </label>
                                            @endif
                                        </div>
                                        <div class="form-check mx-4">
                                            @if (old('jk') == 'P')
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="P" checked required>
                                                <label class="form-check-label" for="jk">
                                                    Perempuan
                                                </label>
                                            @else
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="P" required>
                                                <label class="form-check-label" for="jk">
                                                    Perempuan
                                                </label>
                                            @endif
                                        </div>
                                        @error('jk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="alamat mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" required value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="nohp mb-2">
                                    <label for="no_hp" class="form-label">No HP</label>
                                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" required value="{{ old('no_hp') }}"
                                        onkeypress="return wajibAngka(event)">
                                    @error('no_hp')
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
