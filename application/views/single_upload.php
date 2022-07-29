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
    <div class="container">
        <div class="mt-3">
            <div class="col-sm 12">
                <h4 class="text-danger"><?= $this->session->flashdata('status'); ?></h4>
                <div class="card">
                    <div class="card-header">
                        Upload Image
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart('upload/file'); ?>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="imagepabjn">
                                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm 12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Hasil Upload
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($images as $img) : ?>
                                <div class="col-sm-4">
                                    <img src="<?= base_url('./uploads/') . $img['image']; ?>" alt="<?= $img['title']; ?>" class="img-thumbnail">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(filename);
        });
    </script>
</body>

</html>