<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-3">
                <form>
                    <div class="form-group">
                        <label for="karyawan">Example select</label>
                        <select class="form-control" id="select_karyawan" name="selectKaryawan" onchange="fnKaryawan(this.value)">
                            <option value="0" selected>--Tampilkan Semua --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="1998">Kosong</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Filter Data CI JS BS</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-striped" id="myTabel">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                    <td>No HP</td>
                                </tr>
                            </thead>
                            <tbody id="show_data">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        window.onload = fnKaryawan(0);

        function fnKaryawan(x) {
            console.log(x);

            $.ajax({
                type: "GET",
                url: "<?= base_url('welcome/load_karyawan'); ?>",
                async: true,
                data: {
                    karyawan: x
                },
                dataType: "JSON",
                success: function(data) {
                    var html = '';
                    var i;
                    var stringKosong = 'Tidak Ada Data';

                    if (data.length === 0) {
                        html += '<tr>' +
                            '<td colspan="4" class="text-center">' + stringKosong + '</td>' +
                            '</tr>';
                    } else {
                        for (i = 0; i < data.length; i++) {

                            html += '<tr>' +
                                '<td>' + data[i].nama_depan + '</td>' +
                                '<td>' + data[i].nama_belakang + '</td>' +
                                '<td>' + data[i].alamat + '</td>' +
                                '<td>' + data[i].no_hp + '</td>' +
                                '</tr>';
                        }
                    }
                    console.log(data.length);
                    $('#show_data').html(html);
                }
            });
        }
    </script>

</body>

</html>