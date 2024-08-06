<!-- Tabel Data Wisata -->
<div class="container mt-5">
    <h1>Paket Wisata</h1>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="text-end mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Wisata
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($data['products'] as $product) : ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><?= $product['nama'] ?></td>
                        <td><?= $product['deskripsi'] ?></td>
                        <td><img src="<?= BASEURL ?>/img/<?= $product['gambar'] ?>" width="100" height="100"></td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <a href="<?= BASEURL ?>/dashboard/hapus/<?= $product['id'] ?>" class="btn btn-danger" onclick="confirm('Apakah yakin?')">Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Tabel Galery -->
<div class="container mt-5">
    <h1>Data Galery</h1>

    <div class="text-end mb-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModalGalery">
            Tambah Data Galery
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Youtube</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($data['galery'] as $gal) : ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><?= $gal['nama'] ?></td>
                        <td><?= $gal['youtube'] ?></td>
                        <td><img src="<?= BASEURL ?>/img/<?= $gal['gambar'] ?>" width="100" height="100"></td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <a href="<?= BASEURL ?>/dashboard/hapusGalery/<?= $gal['id'] ?>" class="btn btn-danger" onclick="confirm('Apakah yakin?')">Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
 <!-- Form untuk menambahkan data wisata -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Wisata</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL ?>/dashboard/tambahWisata" method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control" type="text" id="gambar" name="gambar">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>

                </form>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
 <!-- Form untuk menambahkan data galery -->
 <div class="modal fade" id="formModalGalery" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Wisata</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL ?>/dashboard/tambahGalery" method="post">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input  type="text" class="form-control" id="youtube" name="youtube">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control" type="text" id="gambar" name="gambar">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>

                </form>

            </div>
        </div>
    </div>
</div>