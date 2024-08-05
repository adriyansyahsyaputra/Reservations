<div class="container mt-5">
    <h1>Paket Wisata</h1>
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