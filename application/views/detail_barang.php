<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4"><img src="<?= base_url('/uploads/' . $brg->gambar) ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <th>Nama Produk</th>
                                <td><?= $brg->nama_brg ?></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><?= $brg->keterangan ?></td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td><?= $brg->kategori ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td><?= $brg->stok ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>
                                    <div class="btn btn-success">Rp. <?= $brg->harga ?></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
    </div>
    <div class="row mt-3 mb-5">
        <?= anchor('dashboard/index/' . $brg->id_brg, '<div class="mr-2"><button class="btn btn-primary">Kembali</button></div>') ?>
        <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div><button class="btn btn-success"><i class="fas fa-plus"></i> Keranjang</button></div>') ?>
    </div>
</div>
