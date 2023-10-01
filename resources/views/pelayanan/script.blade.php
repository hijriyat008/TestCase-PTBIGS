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

    $('#pelayanan').DataTable({
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
                data: 'nama_pelayanan',
                name: 'nama_pelayanan'
            },
            {
                data: 'harga',
                name: 'harga'
            },
            {
                data: 'action',
                name: 'action'
            },
        ]
    });

    function add() {
        $('#add_datapelayanan').modal('show');
        $('#id').val('');
    }

    function editFunc(id) {
        $.ajax({
            method: 'post',
            url: "{{ url('datapelayananedit') }}",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#edit_datapelayanan').modal('show');
                $('#id').val(response.id);
                $('#harga').val(response.harga);
                $('#nama_pelayanan').val(response.nama_pelayanan);
            }
        });
    }

    function deleteFunc(id) {
        if (confirm("Delete Record?") == true) {
            var id = id;
            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('datapelayanandelete') }}",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    var oTable = $('#pelayanan').dataTable();
                    oTable.fnDraw(false);
                }
            });
        }
    }
</script>
