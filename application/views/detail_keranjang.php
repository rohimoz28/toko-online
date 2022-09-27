<div class="container-fluid">

    <h3>Detail Keranjang Belanja</h3>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td>No</td>
            <td>Nama Produk</td>
            <td>Jumlah</td>
            <td>Harga</td>
            <td>Subtotal</td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td> <?= $no++; ?> </td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td>Rp <?= number_format($items['price'], 0, ',', '.'); ?></td>
                <td>Rp <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" class="text-center">Total yang harus di bayar </td>
            <td>Rp <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>
    </table>

    <div class="text-right">
        <a href="<?= base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Proses Pembayaran</div>
        </a>
        <a href="<?= base_url('welcome') ?>">
            <div class="btn btn-sm btn-secondary">Lanjutkan Belanja</div>
        </a>
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
    </div>

</div>
