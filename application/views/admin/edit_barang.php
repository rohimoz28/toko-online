<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Barang</h3>

    <div class="col-md-6">
        <?php foreach ($barang as $brg) : ?>
            <form method="POST" action="<?= base_url('admin/data_barang/update') ?>">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="hidden" class="form-control" name="id_brg" value="<?= $brg->id_brg ?>">
                    <input type="text" class="form-control" name="nama_brg" value="<?= $brg->nama_brg ?>">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="<?= $brg->keterangan ?>">
                </div>
                <div class=" form-group">
                    <label>Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="<?= $brg->kategori ?>">
                </div>
                <div class=" form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $brg->harga ?>">
                </div>
                <div class=" form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="stok" value="<?= $brg->stok ?>">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button class="btn btn-danger">Batal</button>

            </form>
        <?php endforeach; ?>
    </div>

</div>