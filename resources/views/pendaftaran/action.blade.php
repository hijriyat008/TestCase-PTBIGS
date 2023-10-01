<div class="d-grid gap-2 d-md-block">
    <div class="btn-action d-flex">
        <div class="btn-add">
            <button class="btn btn-icon btn-outline-primary" href="javascript:void(0);"
                onClick="detail_pasien({{ $pasien_id }})" data-toggle="tooltip">
                <img src="/icons/resume.png" width="25px" alt="">
            </button>
        </div>
        <form action="/selesai/{{ $id }}" method="post">
            @csrf
            <div class="btn-update">
                <button type="submit" class="btn btn-warning"
                    onclick="return confirm('Apakah Pelayanan Sudah Selesai?')">
                    <img src="/icons/verified.png" width="25px" alt="">
                </button>
            </div>
        </form>
        <div class="btn-edit">
            <button class="btn btn-icon btn-outline-success" href="javascript:void(0)" data-toggle="tooltip"
                onClick="editFunc({{ $id }})" data-original-title="Edit">
                <img src="/icons/edit.png" width="25px" alt="">
            </button>
        </div>
        <div class="btn-delete">
            <button class="btn btn-icon btn-outline-danger" href="javascript:void(0);"
                onClick="deleteFunc({{ $id }})" data-toggle="tooltip">
                <img src="/icons/trash-bin.png" width="25px" alt="">
            </button>
        </div>
    </div>
</div>
