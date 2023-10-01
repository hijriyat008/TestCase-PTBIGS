<div class="modal fade" id="add_datapelayanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">From Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/datapelayananstore" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="nama_pelayanan mb-2">
                                    <label for="nama_pelayanan" class="form-label">Layanan</label>
                                    <input type="text"
                                        class="form-control @error('nama_pelayanan') is-invalid @enderror"
                                        id="nama_pelayanan" name="nama_pelayanan" required autofocus
                                        value="{{ old('nama_pelayanan') }}">
                                    @error('nama_pelayanan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="harga mb-2">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                        id="harga" name="harga" onkeypress="return wajibAngka(event)" required
                                        value="{{ old('harga') }}">
                                    @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
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
