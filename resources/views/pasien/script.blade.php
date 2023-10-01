<script>
    function wajibAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
    }
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $('#pasien').DataTable({
        processing: true,
        info: true,
        serverSide: true,
        ajax: '',
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'nik_pasien',
                name: 'nik_pasien'
            },
            {
                data: 'nama_pasien',
                name: 'nama_pasien'
            },
            {
                data: 'tanggal_lahir',
                name: 'tanggal_lahir'
            },
            {
                data: 'jk',
                name: 'jk'
            },
            {
                data: 'alamat',
                name: 'alamat'
            },
            {
                data: 'no_hp',
                name: 'no_hp'
            },
            {
                data: 'action',
                name: 'action'
            },
        ]
    });

    function add() {
        $('#add_datapasien').modal('show');
        $('#id').val('');
    }

    function editFunc(id) {
        $.ajax({
            method: 'post',
            url: "{{ url('datapasienedit') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#edit_datapasien').modal('show');
                $('#id').val(response.id);
                $('#nik_pasien').val(response.nik_pasien);
                $('#nama_pasien').val(response.nama_pasien);
                $('#tanggal_lahir').val(response.tanggal_lahir);
                $('#jk').val(response.jk);
                $('#alamat').val(response.alamat);
                $('#no_hp').val(response.no_hp);
            }
        });
    }

    function deleteFunc(id) {
        if (confirm("Delete Record?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('datapasiendelete') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#pasien').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }
</script>
