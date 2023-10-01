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

    $('#pendaftaran').DataTable({
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
                data: 'no_registrasi',
                name: 'no_registrasi'
            },
            {
                data: 'waktu_registrasi',
                name: 'waktu_registrasi'
            },
            {
                data: 'no_rekam_medis',
                name: 'no_rekam_medis'
            },
            {
                data: 'jenis_registrasi',
                name: 'jenis_registrasi'
            },
            {
                data: 'pelayanan.nama_pelayanan',
                name: 'pelayanan.nama_pelayanan'
            },
            {
                data: 'jenis_pembayaran',
                name: 'jenis_pembayaran'
            },
            {
                data: 'status_registrasi',
                name: 'status_registrasi'
            },
            {
                data: 'waktu_mulai',
                name: 'waktu_mulai'
            },
            {
                data: 'waktu_selesai',
                name: 'waktu_selesai'
            },
            {
                data: 'action',
                name: 'action'
            },
        ]
    });

    function add() {
        $('#add_pendaftaran').modal('show');
        $('#id').val('');
    }

    function detail_pasien(id) {
        $.ajax({
            method: 'post',
            url: "{{ url('datapasienedit') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#detail_pasien').modal('show');
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
                url: "{{ url('pendaftarandelete') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#pendaftaran').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }
</script>
