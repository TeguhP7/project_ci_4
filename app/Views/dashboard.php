<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="<?= base_url('form_tambah_data') ?>" class="btn btn-primary mb-3">+ Tambah Data</a>
                <table class="table table-success table-striped">
                    <thead class="thead-dark">
                        <tr align="center">
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key => $value): ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value['nim']; ?>
                            </td>
                            <td>
                                <?= $value['nama']; ?>
                            </td>
                            <td>
                                <?= $value['jurusan']; ?>
                            </td>
                            <td>
                                <?= $value['alamat']; ?>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('form_edit_data/' . $value['id']) ?>"
                                    class="btn btn-sm btn-success">EDIT</a>
                                <a href="<?= base_url('delete/' . $value['id']) ?>"
                                    class="btn btn-sm btn-danger">HAPUS</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>