<div class="d-grid gap-2 d-md-block">
    <div class="btn-action d-flex">
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
