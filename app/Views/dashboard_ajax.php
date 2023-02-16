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
    <div class="container-fluid bg-dark min-vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <h1 class="card-header text-center p-4 fw-bold" style="color:maroon;">Data Mahasiswa
                        </h1>
                        <div class="card-body">
                            <button type="button" class="btn btn-primary mb-4 mt-2" data-bs-toggle="modal"
                                data-bs-target="#formTambahdata">+ Tambah Data</button>
                            <!-- Modal -->
                            <div class="modal fade" id="formTambahdata" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-success success" role="alert" id="success"
                                                style="display: none;">
                                            </div>
                                            <div class="alert alert-danger error" role="alert" id="error"
                                                style="display: none;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nim" class="form-label">NIM</label>
                                                <input type="text" class="form-control" name="nim" id="nim">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama">
                                            </div>
                                            <div class=" mb-3">
                                                <label for="jurusan" class="form-label">Jurusan</label>
                                                <input type="text" class="form-control" name="jurusan" id="jurusan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                id="btnTutup">Tutup</button>
                                            <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-success table-hover">
                                    <thead class="table-dark">
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
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="TambahData.js"></script>
</body>

</html>