<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="contaier">
    <div class="row">
        <div class="col">
            <h1>Daftar Kosan</h1>
            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama kos</th>
                        <th scope="col">Alamat kos</th>
                        <th scope="col">Harga kos</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kosan as $kos) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="img/kos1.jpg" alt="" class="foto"> </br> <?= $kos['nama_kosan']; ?></td>
                            <td><?= $kos['alamat']; ?></td>
                            <td><?= $kos['harga']; ?></td>
                            <td>
                                <a href="" class="btn btn-primary">Sewa</a>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>