<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Permohonan Informasi</title>
    <style>
        @page {
            size: landscape;
        }

        thead {
            display: table-header-group;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            color: black;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th rowspan="3">No</th>
                <th rowspan="3">Nama</th>
                <th rowspan="3">Alamat</th>
                <th rowspan="3">Pekerjaan</th>
                <th rowspan="3">No HP</th>
                <th rowspan="3">Informasi Yang Diminta</th>
                <th colspan="2">Jenis Permohonan</th>
                <th colspan="3">Status Informasi</th>
                <th colspan="3">Bentuk Informasi</th>
                <th rowspan="3">Kep PPID</th>
                <th rowspan="3">Alasan Penolakan</th>
                <th colspan="2">Hari / Tanggal</th>
                <th rowspan="3">Biaya</th>
                <th rowspan="3">Tanda Bukti</th>
            </tr>
            <tr>
                <th rowspan="2">Biasa</th>
                <th rowspan="2">Khusus</th>
                <th colspan="3">Dibawah Penguasaan</th>
                <th rowspan="2">PBT Tertulis</th>
                <th rowspan="2">Informasi</th>
                <th rowspan="2">Belum Doc</th>
                <th rowspan="2">Hardcopy</th>
                <th rowspan="2">Softcopy</th>
            </tr>
            <tr>
                <th>Ya</th>
                <th>Tidak</th>
                <th>Instansi</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($info as $hasil) :
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $hasil['nama_pihak']; ?></td>
                    <td><?= $hasil['alamat_pihak']; ?></td>
                    <td><?= $hasil['pekerjaan']; ?></td>
                    <td><?= $hasil['no_telpon']; ?></td>
                    <td><?= $hasil['rincian_info']; ?></td>
                    <td>
                        <?php if ($hasil['jenis_permohonan'] == 'Biasa') : ?>
                            <?php echo $hasil['jenis_permohonan'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['jenis_permohonan'] == 'Khusus') : ?>
                            <?php echo $hasil['jenis_permohonan'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['status_informasi'] == 'Ya') : ?>
                            <?php echo $hasil['status_informasi'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['status_informasi'] == 'Tidak') : ?>
                            <?php echo $hasil['status_informasi'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['status_informasi'] == 'Instansi') : ?>
                            <?php echo $hasil['status_informasi'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['cara_memperoleh'] == 'Mendapatkan Salinan Informasi') : ?>
                            <?php echo $hasil['cara_memperoleh'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['cara_memperoleh'] == 'Mendapatkan Salinan Informasi') : ?>
                            -
                        <?php else : ?>
                            <?php echo $hasil['cara_memperoleh'] ?>
                        <?php endif ?>
                    </td>
                    <td>-</td>
                    <td><?= $hasil['keputusan_ppid']; ?></td>
                    <td><?= $hasil['alasan_penolakan']; ?></td>
                    <td>
                        <?php if ($hasil['cara_mendapatkan'] == 'Mengambil Langsung') : ?>
                            <?php echo $hasil['cara_mendapatkan'] ?>
                        <?php else : ?>
                            -
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($hasil['cara_mendapatkan'] == 'Mengambil Langsung') : ?>
                            -
                        <?php else : ?>
                            <?php echo $hasil['cara_mendapatkan'] ?>
                        <?php endif ?>
                    </td>
                    <td><?= $hasil['biaya']; ?></td>
                    <td><?= $hasil['nomor_pendaftaran']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>