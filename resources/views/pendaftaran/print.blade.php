<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Waktu Registrasi</th>
                <th scope="col">No Registrasi</th>
                <th scope="col">No Rekam Medis</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Registrasi</th>
                <th scope="col">Layanan</th>
                <th scope="col">Jenis Pembayaran</th>
                <th scope="col">Status Registrasi</th>
                <th scope="col">Waktu Mulai </th>
                <th scope="col">Waktu Selesai </th>
                <th scope="col">Petugas Pendaftaran </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftaran as $pendaftaran)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $pendaftaran->waktu_registrasi }}</td>
                    <td>{{ $pendaftaran->no_registrasi }}</td>
                    <td>{{ $pendaftaran->no_rekam_medis }}</td>
                    <td>{{ $pendaftaran->pasien->nama_pasien }}</td>
                    @if ($pendaftaran->pasien->jk === 'L')
                        <td>Laki-laki</td>
                    @else
                        <td>Perempuan</td>
                    @endif
                    <td>{{ $pendaftaran->pasien->tanggal_lahir }}</td>
                    <td>{{ $pendaftaran->jenis_registrasi }}</td>
                    <td>{{ $pendaftaran->pelayanan->nama_pelayanan }}</td>
                    <td>{{ $pendaftaran->jenis_pembayaran }}</td>
                    <td>{{ $pendaftaran->status_registrasi }}</td>
                    <td>{{ $pendaftaran->waktu_mulai }}</td>
                    <td>{{ $pendaftaran->waktu_selesai }}</td>
                    <td>{{ $pendaftaran->nama_petugas }}</td>
                </tr>
            @endforeach
            <!-- Tambahkan baris lainnya di sini -->
        </tbody>
    </table>
</body>

</html>
