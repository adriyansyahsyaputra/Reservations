<!-- Tabel Data Wisata -->
<div class="container mt-5">
    <h1>Paket Wisata</h1>

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
                            <button class="btn btn-danger">Delete</button>
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
                <?php foreach ($data['images'] as $image) : ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><?= $image['nama'] ?></td>
                        <td><?= $image['youtube'] ?></td>
                        <td><img src="<?= BASEURL ?>/img/<?= $image['gambar'] ?>" width="100" height="100"></td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Wisata</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL ?>/dashboard/tambah-wisata" method="post">

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