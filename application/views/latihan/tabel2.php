<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <table class="table table-bordered table-sm">
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
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>