<div class="container-fluid">
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputBarang"><i class="fas fa-sm fa-plus"></i>Tambah Barang</button>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th colspan="3" style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th colspan="3" style="text-align: center;">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $brg) : ?>
                            <tr>
                                <td> <?= $i++ ?> </td>
                                <td> <?= $brg->nama_brg ?> </td>
                                <td> <?= $brg->stok ?> </td>
                                <td>Rp.<?= $brg->harga ?> </td>
                                <td class="text-center">
                                    <button class="btn btn-success"><i class="fas fa-sm fa-info-circle"></i></button>
                                    <?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<button class="btn btn-secondary"><i class="fas fa-sm fa-edit"></i></button>') ?>
                                    <?= anchor('admin/data_barang/hapus/' . $brg->id_brg, '<button class="btn btn-danger"><i class="fas fa-sm fa-trash"></i></button>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="inputBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>admin/data_barang/tambah_barang" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" name="nama_brg">
                    </div>
                    <!-- <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori">
                    </div> -->
                    <select class="custom-select" name="kategori">
                        <option selected>Kategori Barang</option>
                        <option value="Buku">Buku</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Komputer">Komputer & Laptop</option>
                        <option value="Fashion">Fashion</option>
                    </select>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control" name="stok">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
